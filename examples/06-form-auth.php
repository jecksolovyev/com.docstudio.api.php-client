<?php

// 06 - the form credential, for the signing surface.
//
// Not runnable: the API issues no form token. One reaches a signer inside the link that
// createNewForm returns (FormGet.link), and the signer's browser presents it. This file
// exists to show the wiring, which differs from the bearer credential in two ways.

declare(strict_types=1);

require __DIR__ . '/bootstrap.php';

use DocStudio\Client\Configuration;

$formToken = getenv('DOCSTUDIO_FORM_TOKEN') ?: '<token from the form link>';

// The prefix is set separately here, and the identifier is the header name itself.
$form = (new Configuration())
    ->setHost(base_path())
    ->setApiKey('Authorization', $formToken)
    ->setApiKeyPrefix('Authorization', 'Form');

// Both credentials travel in the same header, so a Configuration carries one or the other.
$bearer = (new Configuration())
    ->setHost(base_path())
    ->setAccessToken('<access token>');

printf("form credential   -> %s\n", $form->getApiKeyWithPrefix('Authorization'));
printf("bearer credential -> Bearer %s\n", $bearer->getAccessToken());
echo <<<TEXT

Nine operations accept only this credential, all of them on FormControllerApi:
getFormView, sendFormEnvelope, fillFormEnvelope, signFormEnvelope, approveFormEnvelope,
rejectFormEnvelope, getFormDocumentPrintVersion, getFormDocumentsForSign, forSignFile.

Eleven more accept either, among them downloadFinalPdf and signEnvelope, so the same code
serves a signed-in user and a form recipient by swapping the Configuration.

TEXT;
