<?php

// 01 - authenticate and read your own profile.
//
// getProfile takes no parameters and no mailbox, so it is the shortest proof a token works.

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use DocStudio\Client\Api\UserControllerApi;

run(function (): void {
    printf("base path: %s\n", base_path());

    $profile = (new UserControllerApi(null, authenticated()))->getProfile();

    printf("signed in as %s %s <%s>\n",
        $profile->getFirstName(), $profile->getLastName(), $profile->getEmail());
    printf("uuid        %s\n", $profile->getUuid());
    printf("locale      %s, timezone %s\n", $profile->getLocale(), $profile->getTimezone());
    printf("accounts    %d\n", count($profile->getAccounts() ?? []));
});
