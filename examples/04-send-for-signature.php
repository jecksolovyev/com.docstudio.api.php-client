<?php

// 04 - the full lifecycle: send a PDF for signature, follow it, fetch the result, clean up.
//
// quick-send is the one route that is fully typed in the OpenAPI document: it uploads the
// file and attaches the recipients in a single call, and creates no template to clean up
// afterwards. The alternative route (upload -> template -> envelope -> send) carries the
// document layout as an XML string the document does not describe.
//
// The envelope cannot reach COMPLETED here: the signature is made by the recipient, in
// their browser or with their key. The example follows it as far as a sender can.
//
// Note where the documentId comes from. Every authenticated download needs one, and the
// only typed source is getDocumentsForSign - the signer's call, which answers the sender
// 403 "No active role for mailbox". getEnvelopeZip carries no security requirement at
// all, so the client sends it unauthenticated and the server rejects it; it belongs to
// the public access-code flow. What a sender has is envelope.data.

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use DocStudio\Client\Api\EnvelopeControllerApi;
use DocStudio\Client\Api\MiscControllerApi;
use DocStudio\Client\Model\BulkEnvelopeActionDTO;
use DocStudio\Client\Model\EnvCancellationRequestDTO;
use DocStudio\Client\Model\QuickSendDTO;
use DocStudio\Client\Model\QuickSendRecipientDTO;
use DocStudio\Client\ObjectSerializer;

const POLL_ATTEMPTS = 5;
const POLL_INTERVAL_SECONDS = 2;

run(function (): void {
    $signer = getenv('DOCSTUDIO_SIGNER_EMAIL');
    if (!$signer) {
        throw new RuntimeException(
            'DOCSTUDIO_SIGNER_EMAIL is not set - this example emails a real address');
    }

    $config = authenticated();
    $mailbox = mailbox_uuid($config);
    $envelopes = new EnvelopeControllerApi(null, $config);

    // Which signature a recipient can be asked for belongs to the deployment, not to the
    // account. api.docstudio.com runs the AMERICA region, which has no cryptographic
    // signature providers at all, so asking for a signer there is answered 422 "No
    // signature provider for digital signing". What a signer draws instead is an eInk
    // signature. A region with providers configured takes the digital route.
    $crypto = (new MiscControllerApi(null, $config))->appSettings()->getCrypto();
    $digital = (bool) $crypto->getSignatureProviders();
    if (!$digital && !$crypto->getEinkSupported()) {
        throw new RuntimeException(sprintf(
            'region %s offers neither a digital nor an eInk signature', $crypto->getRegion()));
    }
    printf("region %s: asking for %s signature\n",
        $crypto->getRegion(), $digital ? 'a digital' : 'an eInk');

    $recipient = (new QuickSendRecipientDTO())->setRecipient($signer);
    // With neither flag the recipient is only copied in. There is no role enum.
    $digital ? $recipient->setSigner(true) : $recipient->setEInkSignature(true);

    $data = (new QuickSendDTO())
        ->setSubject('API client example ' . date('c'))
        ->setMessage('Sent by the DocStudio API client example. No action needed.')
        ->setRecipients([$recipient]);

    // The server wants two multipart parts, named exactly "data" (a JSON blob) and
    // "files". The generated form handling does not produce those names: it flattens a
    // model into data[subject], data[recipients][0][recipient], ... and an array of
    // files into files[0]. Both are rejected with 400 "Required part 'files' is not
    // present". Passing a pre-serialized JSON string and a single SplFileObject makes
    // the generated code emit the two parts the server actually binds. From the release
    // after 168.21 the generated client names the parts correctly and this call can take
    // the QuickSendDTO and an array of files directly.
    $created = $envelopes->quickSendExternalDocuments(
        $mailbox,
        json_encode(ObjectSerializer::sanitizeForSerialization($data)),
        new SplFileObject(__DIR__ . '/example-document.pdf'));

    $envelopeUuid = $created->getUuid();
    printf("sent %s to %s\n", $envelopeUuid, $signer);

    try {
        for ($attempt = 1; $attempt <= POLL_ATTEMPTS; $attempt++) {
            $envelope = $envelopes->getEnvelopeByUuid($envelopeUuid, $mailbox)->getEnvelope();
            $status = (string) $envelope->getStatus();
            printf("  %d/%d  %s  %d/%d participants done\n",
                $attempt, POLL_ATTEMPTS, $status,
                $envelope->getCompleted() ?? 0, $envelope->getTotal() ?? 0);
            if ($status === 'COMPLETED' || $status === 'CANCELLED') {
                break;
            }
            if ($attempt < POLL_ATTEMPTS) {
                sleep(POLL_INTERVAL_SECONDS);
            }
        }

        // envelope.data is typed as a plain string, but it is the envelope XML, and the
        // document ids a sender needs are the only place they appear. The OpenAPI
        // document describes nothing inside it, so this is the one spot in these
        // examples that reads an undescribed format.
        preg_match_all('/<document\s+id="([^"]+)"/', (string) $envelope->getData(), $matches);
        $ids = $matches[1];
        printf("\n%d document(s): %s\n", count($ids), implode(', ', $ids));

        // The final PDF is assembled when the last participant has signed. Asking a SENT
        // envelope for it is answered 403 "Wrong envelope status", so an envelope nobody
        // has signed yet - which is as far as an example can drive one - has none.
        if ($status === 'COMPLETED') {
            // Binary responses arrive as an SplFileObject over a temporary file.
            $pdf = $envelopes->downloadFinalPdf($envelopeUuid, $ids[0], $mailbox, false);
            copy($pdf->getRealPath(), __DIR__ . '/envelope-final.pdf');
            printf("wrote envelope-final.pdf (%d bytes)\n",
                filesize(__DIR__ . '/envelope-final.pdf'));
        } else {
            printf("no final PDF while the envelope is %s: it is built on completion\n", $status);
        }
    } finally {
        if (getenv('DOCSTUDIO_KEEP_ENVELOPE')) {
            printf("\nleaving %s in place (DOCSTUDIO_KEEP_ENVELOPE is set)\n", $envelopeUuid);
        } else {
            // A sent envelope is voided, not deleted, and the comment is mandatory.
            // Cancelling one envelope is synchronous and the uuid returned is its own;
            // a bulk cancel returns the uuid of the background process instead.
            $envelopes->cancelEnvelopes($mailbox, (new EnvCancellationRequestDTO())
                ->setUuids([$envelopeUuid])
                ->setComment('API client example cleanup'));
            $envelopes->recycleBin(true, $mailbox,
                (new BulkEnvelopeActionDTO())->setUuids([$envelopeUuid]));

            $envelope = $envelopes->getEnvelopeByUuid($envelopeUuid, $mailbox)->getEnvelope();
            printf("\ncleaned up: status %s, in recycle bin %s\n",
                (string) $envelope->getStatus(),
                $envelope->getDeleted() ? 'true' : 'false');
        }
    }
});
