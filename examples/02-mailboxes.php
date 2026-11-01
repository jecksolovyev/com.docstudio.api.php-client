<?php

// 02 - list the mailboxes this user can act in.
//
// Every mailbox-scoped endpoint needs one of these UUIDs, so this is the call that
// follows authentication in any real integration.

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use DocStudio\Client\Api\MailboxControllerApi;

run(function (): void {
    $mailboxes = new MailboxControllerApi(null, authenticated());

    // GET /api/v1/mailbox. Paging is offset/limit and the response carries no "next"
    // flag - compare what you have against totalElements.
    $page = $mailboxes->getAllForUserWithPagination(null, null, null, null, 0, 25);
    printf("%d of %d mailbox(es)\n", $page->getNumberOfElements(), $page->getTotalElements());
    foreach ($page->getData() ?? [] as $mailbox) {
        $flags = array_filter([
            $mailbox->getPinned() ? 'pinned' : null,
            $mailbox->getInvited() ? 'invited' : null,
        ]);
        printf("  %s  %s  [%s]%s\n",
            $mailbox->getMailboxUuid(), $mailbox->getName(), $mailbox->getAccountName(),
            $flags ? ' (' . implode(', ', $flags) . ')' : '');
    }

    // getMailboxesForUserView is GET /api/v1/mailbox/user-view, which builds the sidebar view
    // rather than listing everything. It answers [] unless mailboxesForAccount says how
    // many to show per account (1-5), so calling it bare looks like an empty account.
    $sidebar = $mailboxes->getMailboxesForUserView(null, 5);
    $bare = $mailboxes->getMailboxesForUserView();
    printf("\nuser-view, mailboxesForAccount=5: %d\n", count($sidebar));
    printf("user-view, no arguments:          %d\n", count($bare));
});
