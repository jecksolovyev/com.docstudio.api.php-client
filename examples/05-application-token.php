<?php

// 05 - mint a long-lived application token, then revoke it.
//
// This is the credential a server-to-server integration should hold: log in with a
// password once, mint a token, and never send the password again. Set the result as
// DOCSTUDIO_TOKEN and the other examples use it.
//
// A tenant may have this feature switched off, in which case every call here answers
// 405 "Method disabled by configuration".

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use DocStudio\Client\Api\ApplicationTokenControllerApi;
use DocStudio\Client\Model\CreateAppTokenDTO;

run(function (): void {
    $tokens = new ApplicationTokenControllerApi(null, authenticated());

    $existing = $tokens->getUserTokens();
    printf("%d existing token(s)\n", count($existing));
    foreach ($existing as $token) {
        printf("  %s  %s  expires %s  last used %s\n",
            $token->getId(), $token->getName(),
            $token->getExpireAt() ? $token->getExpireAt()->format('c') : '-',
            $token->getLastUsedAt() ? $token->getLastUsedAt()->format('c') : 'never');
    }

    $request = (new CreateAppTokenDTO())
        ->setName('api-client-example ' . date('c'))
        ->setExpireAt(new DateTime('+30 days'));

    try {
        $created = $tokens->createToken($request);
    } catch (Throwable $error) {
        printf("\ncould not create a token: %s\n", describe($error));
        return;
    }

    // The token value is returned once, at creation, and never again.
    printf("\ncreated %s (%s)\n", $created->getId(), $created->getName());
    printf("token    %s... (%d chars)\n",
        substr((string) $created->getToken(), 0, 8), strlen((string) $created->getToken()));

    $tokens->revokeToken($created->getId());
    printf("revoked  %s\n", $created->getId());
});
