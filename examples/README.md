# Examples

Runnable examples for the DocStudio PHP client. This directory is its own Composer
project and depends on the published package, so it exercises exactly what you would
install.

```shell
cd examples
composer install
```

PHP 8.0 or later, with the `curl`, `json` and `mbstring` extensions the client requires.

## Credentials

The examples read their configuration from the environment:

| variable | |
|---|---|
| `DOCSTUDIO_BASE_URL` | defaults to `https://api.docstudio.com` |
| `DOCSTUDIO_TOKEN` | application token, used as the bearer credential |
| `DOCSTUDIO_EMAIL`, `DOCSTUDIO_PASSWORD` | used instead if no token is set |
| `DOCSTUDIO_MAILBOX` | optional; defaults to your first mailbox |
| `DOCSTUDIO_SIGNER_EMAIL` | required by example 04 |

Example 05 mints a token you can put in `DOCSTUDIO_TOKEN`. Keep credentials out of the
repository — a `.env` file here is gitignored.

```shell
export DOCSTUDIO_TOKEN=...
php 01-authenticate.php
```

## The examples

| | | |
|---|---|---|
| 01 | `01-authenticate.php` | authenticate, then read your own profile |
| 02 | `02-mailboxes.php` | list mailboxes and pick the UUID the rest need |
| 03 | `03-browse.php` | templates, labels and envelopes in one mailbox |
| 04 | `04-send-for-signature.php` | send a PDF for signature, follow it, download, clean up |
| 05 | `05-application-token.php` | mint and revoke a long-lived token |
| 06 | `06-form-auth.php` | the form credential (wiring only, see below) |

Run them in order; each assumes the previous one worked.

**Example 04 sends real email** to `DOCSTUDIO_SIGNER_EMAIL` and creates a real envelope. It
cancels the envelope and moves it to the recycle bin when it finishes, including after a
failure. Set `DOCSTUDIO_KEEP_ENVELOPE=1` to keep it instead.

It stops short of `COMPLETED`: the signature is the recipient's to make, in their browser
or with their key, and no operation mints one. The final PDF is assembled on completion, so
an envelope still at `SENT` has none and asking for it answers `403 Wrong envelope status`.
The example reports that and cleans up.

**Example 06 does not call the API.** No endpoint issues a form token; one arrives inside
the link `createNewForm` returns. The file shows how the credential is configured.

## Server and client behaviour these examples had to account for

Verified against a live backend; each one is commented where it bites.

**`getMailboxesForUserView` returns an empty list unless you pass `mailboxesForAccount`.** It is
`GET /api/v1/mailbox/user-view`, which builds the sidebar view rather than listing
everything, so the obvious no-argument call looks like an account with no mailboxes at
all. Use `getAllForUserWithPagination` (`GET /api/v1/mailbox`) to enumerate, as the
helper in `bootstrap.php` does. Example 02 shows both side by side.

**A sender cannot get a `documentId` from a typed call.** Every authenticated download
needs one. `getDocumentsForSign` is the only operation that returns one and it is the
signer's call — it answers the sender `403 No active role for mailbox`. `getEnvelopeZip`
would need neither, but it carries no security requirement in the OpenAPI document, so
the client sends it unauthenticated and the server rejects it; it belongs to the public
access-code flow. The ids a sender can use are in `envelope.data`, typed as a plain
string but holding the envelope XML. Example 04 reads them from there, the one place in
these examples that parses an undescribed format.

**Which signature you may ask for belongs to the deployment, not the account.**
`api.docstudio.com` runs the AMERICA region, where `crypto.signatureProviders` is empty: a
quick-send recipient marked `signer` is refused with `422 No signature provider for digital
signing`. What a signer there draws is an eInk signature, `eInkSignature`. Example 04 reads
`appSettings()` and picks the role the region supports.

**Date-times must carry milliseconds.** The API parses them with
`yyyy-MM-dd'T'HH:mm:ss.SSSXXX`, so a timestamp without a fractional part is answered
`400 ... not a valid representation`. The client serializes a `DateTime` as
`DateTime::ATOM`, which has no milliseconds, so every request body carrying one was
rejected until `bootstrap.php` set the format once with
`ObjectSerializer::setDateTimeFormat('Y-m-d\\TH:i:s.vP')`. From the release after
168.21 the generated client carries that default itself and this line becomes redundant.

**`quickSendExternalDocuments` needs its arguments pre-serialized.** The server binds two
multipart parts named exactly `data` and `files`. Handing the generated method a
`QuickSendDTO` and an array of files makes its form handling emit `data[subject]`,
`data[recipients][0][recipient]` and `files[0]` instead, and the server answers
`400 Required part 'files' is not present`. Example 04 passes a JSON string and a single
`SplFileObject`, which produces the two parts the server actually binds. That also means
168.21 cannot attach more than one file to a quick-send. The release after it names the
parts correctly, and then the typed call — the model and an array of files — works.

**An empty 200 body raises `ApiException` with the HTTP status as its code.** Any
operation that declares a JSON body and returns none fails decoding after the call has
already succeeded. `cancelEnvelopes` did exactly that for a single envelope until R168.21
gave it a body, so example 04 no longer guards it — but 126 of the published operations
declare no body at all, and that is the shape to expect from them.
