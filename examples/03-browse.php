<?php

// 03 - read what is in a mailbox: templates, labels, envelopes.
//
// All three take the mailbox UUID as their first argument, which the client sends as the
// Mailbox header. Envelope search is a POST because the filter is a body, but it only reads.

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use DocStudio\Client\Api\EnvelopeSearchControllerApi;
use DocStudio\Client\Api\LabelControllerApi;
use DocStudio\Client\Api\TemplateControllerApi;
use DocStudio\Client\Model\SearchEnvelopesDTO;

run(function (): void {
    $config = authenticated();
    $mailbox = mailbox_uuid($config);
    printf("mailbox %s\n\n", $mailbox);

    $templates = (new TemplateControllerApi(null, $config))
        ->searchTemplates($mailbox, null, null, null, false, null, null, 0, 10);
    printf("templates: %d of %d\n",
        $templates->getNumberOfElements(), $templates->getTotalElements());
    foreach ($templates->getData() ?? [] as $template) {
        printf("  %s  %s\n", $template->getUuid(), $template->getName());
    }

    $labels = (new LabelControllerApi(null, $config))->getAllLabels($mailbox);
    printf("\nlabels: %d\n", count($labels));
    foreach ($labels as $label) {
        printf("  %s  %s\n", $label->getUuid(), $label->getName());
    }

    // An empty filter is valid and means "everything this mailbox can see".
    $envelopes = (new EnvelopeSearchControllerApi(null, $config))
        ->searchEnvelopes($mailbox, new SearchEnvelopesDTO(), 0, 10);
    printf("\nenvelopes: %d of %d\n",
        $envelopes->getNumberOfElements(), $envelopes->getTotalElements());
    foreach ($envelopes->getData() ?? [] as $envelope) {
        printf("  %s  %-11s  %d/%d done\n",
            $envelope->getEnvelopeUuid(), (string) $envelope->getStatus(),
            $envelope->getCompleted() ?? 0, $envelope->getTotal() ?? 0);
    }
});
