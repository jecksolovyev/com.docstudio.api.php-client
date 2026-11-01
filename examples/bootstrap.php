<?php

// Shared setup, so each numbered example contains only the calls it demonstrates.

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use DocStudio\Client\Api\AuthenticationControllerApi;
use DocStudio\Client\Api\MailboxControllerApi;
use DocStudio\Client\ApiException;
use DocStudio\Client\Configuration;
use DocStudio\Client\Model\LoginDTO;

const DEFAULT_BASE_PATH = 'https://api.docstudio.com';

function base_path(): string
{
    $value = getenv('DOCSTUDIO_BASE_URL');
    return $value ? rtrim($value, '/') : DEFAULT_BASE_PATH;
}

function required_env(string $name, string $hint): string
{
    $value = getenv($name);
    if (!$value) {
        throw new RuntimeException("$name is not set - $hint");
    }
    return $value;
}

// An application token is what a server-to-server integration should hold; email and
// password are the fallback so the examples run before you have minted one.
function access_token(): string
{
    $token = getenv('DOCSTUDIO_TOKEN');
    if ($token) {
        return $token;
    }

    $login = required_env('DOCSTUDIO_EMAIL', 'set it, or set DOCSTUDIO_TOKEN instead');
    $password = required_env('DOCSTUDIO_PASSWORD', 'needed alongside DOCSTUDIO_EMAIL');

    $config = (new Configuration())->setHost(base_path());
    $session = (new AuthenticationControllerApi(null, $config))
        ->login((new LoginDTO())->setLogin($login)->setPassword($password));

    if (!$session->getToken()) {
        throw new RuntimeException('login succeeded but returned no token');
    }
    return $session->getToken();
}

function authenticated(): Configuration
{
    return (new Configuration())
        ->setHost(base_path())
        ->setAccessToken(access_token());
}

// Most endpoints are mailbox-scoped and reject the call without this header.
function mailbox_uuid(Configuration $config): string
{
    $pinned = getenv('DOCSTUDIO_MAILBOX');
    if ($pinned) {
        return $pinned;
    }

    // GET /api/v1/mailbox, not getMailboxesForUserView: the user-view endpoint behind that call
    // answers [] unless it is given mailboxesForAccount, so a bare call to it reads as
    // an account with no mailboxes at all. Example 02 shows both.
    $page = (new MailboxControllerApi(null, $config))
        ->getAllForUserWithPagination(null, null, null, null, 0, 1);
    $mailboxes = $page->getData();
    if (!$mailboxes) {
        throw new RuntimeException('this account has no mailboxes');
    }
    return $mailboxes[0]->getMailboxUuid();
}

// ApiException's message is the status line; the body carries what the server objected to.
function describe(Throwable $error): string
{
    if ($error instanceof ApiException) {
        $body = $error->getResponseBody();
        if (is_object($body) || is_array($body)) {
            $body = json_encode($body);
        }
        return sprintf('HTTP %d - %s', $error->getCode(), (string) $body);
    }
    return $error->getMessage();
}

function run(callable $main): void
{
    try {
        $main();
    } catch (Throwable $error) {
        fwrite(STDERR, describe($error) . PHP_EOL);
        exit(1);
    }
}
