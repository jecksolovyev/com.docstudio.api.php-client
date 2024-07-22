# DocStudio\Client\EnvelopeControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptUserPendingInvitations()**](EnvelopeControllerApi.md#acceptUserPendingInvitations) | **POST** /api/v1/envelope/invitations | Accept user&#39;s pending invitations |
| [**addEnvelopesIntoChain()**](EnvelopeControllerApi.md#addEnvelopesIntoChain) | **PUT** /api/v1/envelope/chain/{chainUuid} | Add envelopes into chain |
| [**archive()**](EnvelopeControllerApi.md#archive) | **PATCH** /api/v1/envelope/archive/{flag} | Archive envelopes |
| [**cancelApprovalFlow()**](EnvelopeControllerApi.md#cancelApprovalFlow) | **DELETE** /api/v1/envelope/{envelopeUuid}/approval/{flowUuid} | Cancel envelope approval |
| [**cancelEnvelopeDelegation()**](EnvelopeControllerApi.md#cancelEnvelopeDelegation) | **DELETE** /api/v1/envelope/delegate | Cancel envelope delegation |
| [**cancelEnvelopes()**](EnvelopeControllerApi.md#cancelEnvelopes) | **DELETE** /api/v1/envelope/cancel | Cancel envelopes |
| [**check()**](EnvelopeControllerApi.md#check) | **POST** /api/v1/envelope/check | Check an envelope |
| [**checkEnvelopeHasActiveRole()**](EnvelopeControllerApi.md#checkEnvelopeHasActiveRole) | **HEAD** /api/v1/envelope/{envelopeUuid}/has-active-role | Check envelope has active role |
| [**checkUserHasInvitations()**](EnvelopeControllerApi.md#checkUserHasInvitations) | **HEAD** /api/v1/envelope/invitations | Check user has pending invitations |
| [**cloneAttachment()**](EnvelopeControllerApi.md#cloneAttachment) | **POST** /api/v1/envelope/clone-attachment | Clone an existing attachment |
| [**confirmInvite()**](EnvelopeControllerApi.md#confirmInvite) | **POST** /api/v1/envelope/confirm-invite | Accept/confirm invitations |
| [**continueScenarioStep()**](EnvelopeControllerApi.md#continueScenarioStep) | **POST** /api/v1/envelope/{envelopeUuid}/scenario/{stepId} | Continue scenario flow with step |
| [**createAttachment()**](EnvelopeControllerApi.md#createAttachment) | **POST** /api/v1/envelope/attachment | Create/upload new attachment |
| [**createEnvelope()**](EnvelopeControllerApi.md#createEnvelope) | **POST** /api/v1/envelope | Create draft envelope |
| [**createEnvelopeComment()**](EnvelopeControllerApi.md#createEnvelopeComment) | **POST** /api/v1/envelope/{envelopeUuid}/comment | Create envelope comment thread |
| [**createPdfAttachment()**](EnvelopeControllerApi.md#createPdfAttachment) | **POST** /api/v1/envelope/pdf-attachment | Create/upload new PDF attachment |
| [**delegateEnvelopes()**](EnvelopeControllerApi.md#delegateEnvelopes) | **POST** /api/v1/envelope/delegate | Delegate envelopes |
| [**deleteDrafts()**](EnvelopeControllerApi.md#deleteDrafts) | **DELETE** /api/v1/envelope | Delete draft envelopes |
| [**deleteEnvelopeComment()**](EnvelopeControllerApi.md#deleteEnvelopeComment) | **DELETE** /api/v1/envelope/{envelopeUuid}/comment | Delete envelope comment in thread or the whole thread |
| [**downloadEnvelopeAttachment()**](EnvelopeControllerApi.md#downloadEnvelopeAttachment) | **GET** /api/v1/envelope/attachment | Download attachment with specific type or raw |
| [**downloadFinalPdf()**](EnvelopeControllerApi.md#downloadFinalPdf) | **GET** /api/v1/envelope/{envelopeUuid}/download-final-pdf | Download final PDF |
| [**envelopeApproval()**](EnvelopeControllerApi.md#envelopeApproval) | **PUT** /api/v1/envelope/{envelopeUuid}/approval/{flowUuid} | Approve or Reject envelope |
| [**envelopeApprovalHistory()**](EnvelopeControllerApi.md#envelopeApprovalHistory) | **GET** /api/v1/envelope/{envelopeUuid}/approval-history | Get approval history |
| [**fill()**](EnvelopeControllerApi.md#fill) | **PUT** /api/v1/envelope/fill | Fill envelope |
| [**generateStamp()**](EnvelopeControllerApi.md#generateStamp) | **POST** /api/v1/envelope/generate-stamp | Generate stamp by certificate |
| [**getActiveRoles()**](EnvelopeControllerApi.md#getActiveRoles) | **GET** /api/v1/envelope/{uuid}/activeRoles | Get active roles by Envelope UUID |
| [**getApprovalFlow()**](EnvelopeControllerApi.md#getApprovalFlow) | **GET** /api/v1/envelope/{envelopeUuid}/approval/{flowUuid} | Get envelope approval |
| [**getAttachmentPageSizes()**](EnvelopeControllerApi.md#getAttachmentPageSizes) | **GET** /api/v1/envelope/attachment/page-sizes | Get attachment page sizes |
| [**getChainEnvelopes()**](EnvelopeControllerApi.md#getChainEnvelopes) | **GET** /api/v1/envelope/chain/{chainUuid} | Get chain envelopes list |
| [**getDocumentFileForSign()**](EnvelopeControllerApi.md#getDocumentFileForSign) | **POST** /api/v1/envelope/{envelopeUuid}/for-sign-file | Get BINARY or XML for signing |
| [**getDocumentForSign()**](EnvelopeControllerApi.md#getDocumentForSign) | **POST** /api/v1/envelope/{envelopeUuid}/for-single-sign | BINARY and XML for signing |
| [**getDocumentPrintVersion()**](EnvelopeControllerApi.md#getDocumentPrintVersion) | **GET** /api/v1/envelope/{envelopeUuid}/for-print | Get document PDF for printing |
| [**getDocumentsForSign()**](EnvelopeControllerApi.md#getDocumentsForSign) | **POST** /api/v1/envelope/{envelopeUuid}/for-sign | BINARYs and XMLs for signing |
| [**getEnvelopeByUuid()**](EnvelopeControllerApi.md#getEnvelopeByUuid) | **GET** /api/v1/envelope/{envelopeUuid} | Retrieve envelope by UUID |
| [**getEnvelopeComments()**](EnvelopeControllerApi.md#getEnvelopeComments) | **GET** /api/v1/envelope/{envelopeUuid}/comment | Get envelope comments for each document |
| [**getEnvelopeInviteAuthorized()**](EnvelopeControllerApi.md#getEnvelopeInviteAuthorized) | **GET** /api/v1/envelope/invite-authorized-info | Get information about envelope by the invitation code (by already registered user) |
| [**getEnvelopeInviteUnauthorized()**](EnvelopeControllerApi.md#getEnvelopeInviteUnauthorized) | **GET** /api/v1/envelope/invite-info | Get information about envelope by the invitation code (by unauthenticated user) |
| [**getEnvelopeSharedZip()**](EnvelopeControllerApi.md#getEnvelopeSharedZip) | **GET** /api/v1/envelope/download-shared | Get shared zip archive |
| [**getEnvelopeZip()**](EnvelopeControllerApi.md#getEnvelopeZip) | **GET** /api/v1/envelope/{envelopeUuid}/zip | Get envelope or document zip archive |
| [**getUserPendingInvitations()**](EnvelopeControllerApi.md#getUserPendingInvitations) | **GET** /api/v1/envelope/invitations | Get user&#39;s pending invitations |
| [**mergeEnvelopesIntoChain()**](EnvelopeControllerApi.md#mergeEnvelopesIntoChain) | **POST** /api/v1/envelope/chain | Merge envelopes into chain |
| [**oneTimeSend()**](EnvelopeControllerApi.md#oneTimeSend) | **POST** /api/v1/envelope/one-time-send | The envelope will be sent just once (template will be marked as deleted) |
| [**quickSendExternalDocuments()**](EnvelopeControllerApi.md#quickSendExternalDocuments) | **POST** /api/v1/envelope/quick-send | Quick send envelope with external documents only |
| [**recycleBin()**](EnvelopeControllerApi.md#recycleBin) | **PATCH** /api/v1/envelope/recycle-bin/{flag} | Archive envelopes |
| [**removeEnvelopeFromChain()**](EnvelopeControllerApi.md#removeEnvelopeFromChain) | **DELETE** /api/v1/envelope/{envelopeUuid}/chain | Remove envelope from chain |
| [**resendNotifications()**](EnvelopeControllerApi.md#resendNotifications) | **POST** /api/v1/envelope/notify | Resend notifications for active roles |
| [**resolvedEnvelopeComment()**](EnvelopeControllerApi.md#resolvedEnvelopeComment) | **POST** /api/v1/envelope/{envelopeUuid}/resolve-comment | Set Resolved Flag for comment thread |
| [**revokeEnvelopeSharing()**](EnvelopeControllerApi.md#revokeEnvelopeSharing) | **DELETE** /api/v1/envelope/share-copy | Revoke sharing an envelope copy |
| [**send()**](EnvelopeControllerApi.md#send) | **POST** /api/v1/envelope/send | Send envelope |
| [**sendByTemplateCode()**](EnvelopeControllerApi.md#sendByTemplateCode) | **POST** /api/v1/envelope/send-by-share-code | Send envelope by template code |
| [**sendForApproval()**](EnvelopeControllerApi.md#sendForApproval) | **PUT** /api/v1/envelope/send-for-approval | Send envelope for approval |
| [**shareEnvelopesByEmail()**](EnvelopeControllerApi.md#shareEnvelopesByEmail) | **POST** /api/v1/envelope/share-archive | Share envelopes by email |
| [**shareEnvelopesCopy()**](EnvelopeControllerApi.md#shareEnvelopesCopy) | **POST** /api/v1/envelope/share-copy | Share envelopes copies |
| [**sign()**](EnvelopeControllerApi.md#sign) | **PUT** /api/v1/envelope/{envelopeUuid}/sign | Sign envelope documents |
| [**signSES()**](EnvelopeControllerApi.md#signSES) | **POST** /api/v1/envelope/{envelopeUuid}/sign-ses | Sign envelope with SES |
| [**updateEnvelope()**](EnvelopeControllerApi.md#updateEnvelope) | **PUT** /api/v1/envelope | Update draft envelope |
| [**updateEnvelopeComment()**](EnvelopeControllerApi.md#updateEnvelopeComment) | **PUT** /api/v1/envelope/{envelopeUuid}/comment | Add/Update envelope comment in thread |
| [**updateEnvelopeCommentAccess()**](EnvelopeControllerApi.md#updateEnvelopeCommentAccess) | **PUT** /api/v1/envelope/{envelopeUuid}/comment-access | Update envelope comment thread access level |


## `acceptUserPendingInvitations()`

```php
acceptUserPendingInvitations($mailbox, $request_body)
```

Accept user's pending invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->acceptUserPendingInvitations($mailbox, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->acceptUserPendingInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addEnvelopesIntoChain()`

```php
addEnvelopesIntoChain($chain_uuid, $mailbox, $request_body)
```

Add envelopes into chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_uuid = 'chain_uuid_example'; // string | Chain UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->addEnvelopesIntoChain($chain_uuid, $mailbox, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->addEnvelopesIntoChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_uuid** | **string**| Chain UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `archive()`

```php
archive($flag, $mailbox, $bulk_envelope_action_dto)
```

Archive envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag = True; // bool
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$bulk_envelope_action_dto = new \DocStudio\Client\Model\BulkEnvelopeActionDTO(); // \DocStudio\Client\Model\BulkEnvelopeActionDTO

try {
    $apiInstance->archive($flag, $mailbox, $bulk_envelope_action_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->archive: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag** | **bool**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **bulk_envelope_action_dto** | [**\DocStudio\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelApprovalFlow()`

```php
cancelApprovalFlow($envelope_uuid, $flow_uuid, $mailbox)
```

Cancel envelope approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope to approve
$flow_uuid = 'flow_uuid_example'; // string | Flow to approve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->cancelApprovalFlow($envelope_uuid, $flow_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cancelApprovalFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope to approve | |
| **flow_uuid** | **string**| Flow to approve | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelEnvelopeDelegation()`

```php
cancelEnvelopeDelegation($mailbox, $env_cancel_delegation_dto)
```

Cancel envelope delegation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_cancel_delegation_dto = new \DocStudio\Client\Model\EnvCancelDelegationDTO(); // \DocStudio\Client\Model\EnvCancelDelegationDTO

try {
    $apiInstance->cancelEnvelopeDelegation($mailbox, $env_cancel_delegation_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cancelEnvelopeDelegation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_cancel_delegation_dto** | [**\DocStudio\Client\Model\EnvCancelDelegationDTO**](../Model/EnvCancelDelegationDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelEnvelopes()`

```php
cancelEnvelopes($mailbox, $env_cancellation_request_dto)
```

Cancel envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_cancellation_request_dto = new \DocStudio\Client\Model\EnvCancellationRequestDTO(); // \DocStudio\Client\Model\EnvCancellationRequestDTO

try {
    $apiInstance->cancelEnvelopes($mailbox, $env_cancellation_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cancelEnvelopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_cancellation_request_dto** | [**\DocStudio\Client\Model\EnvCancellationRequestDTO**](../Model/EnvCancellationRequestDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `check()`

```php
check($mailbox, $env_dto): \DocStudio\Client\Model\ValidationResponseDTO
```

Check an envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_dto = new \DocStudio\Client\Model\EnvDTO(); // \DocStudio\Client\Model\EnvDTO

try {
    $result = $apiInstance->check($mailbox, $env_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->check: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_dto** | [**\DocStudio\Client\Model\EnvDTO**](../Model/EnvDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ValidationResponseDTO**](../Model/ValidationResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkEnvelopeHasActiveRole()`

```php
checkEnvelopeHasActiveRole($envelope_uuid, $mailbox)
```

Check envelope has active role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | UUID of envelope
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->checkEnvelopeHasActiveRole($envelope_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->checkEnvelopeHasActiveRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| UUID of envelope | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkUserHasInvitations()`

```php
checkUserHasInvitations()
```

Check user has pending invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->checkUserHasInvitations();
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->checkUserHasInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneAttachment()`

```php
cloneAttachment($attachment_uuid, $mailbox): \DocStudio\Client\Model\UploadedAttachmentDTO
```

Clone an existing attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_uuid = 'attachment_uuid_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->cloneAttachment($attachment_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cloneAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_uuid** | **string**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\UploadedAttachmentDTO**](../Model/UploadedAttachmentDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `confirmInvite()`

```php
confirmInvite($envelope_confirm_invite_dto)
```

Accept/confirm invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_confirm_invite_dto = new \DocStudio\Client\Model\EnvelopeConfirmInviteDTO(); // \DocStudio\Client\Model\EnvelopeConfirmInviteDTO

try {
    $apiInstance->confirmInvite($envelope_confirm_invite_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->confirmInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_confirm_invite_dto** | [**\DocStudio\Client\Model\EnvelopeConfirmInviteDTO**](../Model/EnvelopeConfirmInviteDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `continueScenarioStep()`

```php
continueScenarioStep($envelope_uuid, $step_id, $mailbox): \DocStudio\Client\Model\SingleUuidDTO[]
```

Continue scenario flow with step

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$step_id = 'step_id_example'; // string | Step id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->continueScenarioStep($envelope_uuid, $step_id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->continueScenarioStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **step_id** | **string**| Step id | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAttachment()`

```php
createAttachment($file, $type, $mailbox): \DocStudio\Client\Model\UploadedAttachmentDTO
```

Create/upload new attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject
$type = 'type_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createAttachment($file, $type, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->createAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **type** | **string**|  | [optional] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\UploadedAttachmentDTO**](../Model/UploadedAttachmentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEnvelope()`

```php
createEnvelope($mailbox, $env_post_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Create draft envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_post_dto = new \DocStudio\Client\Model\EnvPostDTO(); // \DocStudio\Client\Model\EnvPostDTO

try {
    $result = $apiInstance->createEnvelope($mailbox, $env_post_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->createEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_post_dto** | [**\DocStudio\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEnvelopeComment()`

```php
createEnvelopeComment($envelope_uuid, $mailbox, $comment_post_dto): \DocStudio\Client\Model\CommentThreadDTO
```

Create envelope comment thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$comment_post_dto = new \DocStudio\Client\Model\CommentPostDTO(); // \DocStudio\Client\Model\CommentPostDTO

try {
    $result = $apiInstance->createEnvelopeComment($envelope_uuid, $mailbox, $comment_post_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->createEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **comment_post_dto** | [**\DocStudio\Client\Model\CommentPostDTO**](../Model/CommentPostDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPdfAttachment()`

```php
createPdfAttachment($file, $action, $mailbox): \DocStudio\Client\Model\UploadedAttachmentDTO
```

Create/upload new PDF attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject
$action = 'action_example'; // string | Action for fields inside the PDF file
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createPdfAttachment($file, $action, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->createPdfAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **action** | **string**| Action for fields inside the PDF file | [optional] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\UploadedAttachmentDTO**](../Model/UploadedAttachmentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delegateEnvelopes()`

```php
delegateEnvelopes($mailbox, $env_delegation_dto)
```

Delegate envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_delegation_dto = new \DocStudio\Client\Model\EnvDelegationDTO(); // \DocStudio\Client\Model\EnvDelegationDTO

try {
    $apiInstance->delegateEnvelopes($mailbox, $env_delegation_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->delegateEnvelopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_delegation_dto** | [**\DocStudio\Client\Model\EnvDelegationDTO**](../Model/EnvDelegationDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDrafts()`

```php
deleteDrafts($mailbox, $bulk_envelope_action_dto)
```

Delete draft envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$bulk_envelope_action_dto = new \DocStudio\Client\Model\BulkEnvelopeActionDTO(); // \DocStudio\Client\Model\BulkEnvelopeActionDTO

try {
    $apiInstance->deleteDrafts($mailbox, $bulk_envelope_action_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->deleteDrafts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **bulk_envelope_action_dto** | [**\DocStudio\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvelopeComment()`

```php
deleteEnvelopeComment($envelope_uuid, $thread_uuid, $mailbox, $message_id): \DocStudio\Client\Model\CommentThreadDTO
```

Delete envelope comment in thread or the whole thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$thread_uuid = 'thread_uuid_example'; // string | Thread UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$message_id = 56; // int | Message ID (optional)

try {
    $result = $apiInstance->deleteEnvelopeComment($envelope_uuid, $thread_uuid, $mailbox, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->deleteEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **thread_uuid** | **string**| Thread UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **message_id** | **int**| Message ID (optional) | [optional] |

### Return type

[**\DocStudio\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadEnvelopeAttachment()`

```php
downloadEnvelopeAttachment($accept, $attachment_uuid, $mailbox, $envelope_uuid): \SplFileObject
```

Download attachment with specific type or raw

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$accept = 'accept_example'; // string
$attachment_uuid = 'attachment_uuid_example'; // string | Attachment UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID

try {
    $result = $apiInstance->downloadEnvelopeAttachment($accept, $attachment_uuid, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->downloadEnvelopeAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | |
| **attachment_uuid** | **string**| Attachment UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_uuid** | **string**| Envelope UUID | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadFinalPdf()`

```php
downloadFinalPdf($envelope_uuid, $document_id, $mailbox): \SplFileObject
```

Download final PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$document_id = 'document_id_example'; // string | Document id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->downloadFinalPdf($envelope_uuid, $document_id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->downloadFinalPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **document_id** | **string**| Document id | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `envelopeApproval()`

```php
envelopeApproval($envelope_uuid, $flow_uuid, $mailbox, $approval_status_dto)
```

Approve or Reject envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope to approve
$flow_uuid = 'flow_uuid_example'; // string | Flow to approve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$approval_status_dto = new \DocStudio\Client\Model\ApprovalStatusDTO(); // \DocStudio\Client\Model\ApprovalStatusDTO

try {
    $apiInstance->envelopeApproval($envelope_uuid, $flow_uuid, $mailbox, $approval_status_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->envelopeApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope to approve | |
| **flow_uuid** | **string**| Flow to approve | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **approval_status_dto** | [**\DocStudio\Client\Model\ApprovalStatusDTO**](../Model/ApprovalStatusDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `envelopeApprovalHistory()`

```php
envelopeApprovalHistory($envelope_uuid, $mailbox): \DocStudio\Client\Model\EnvelopeApprovalHistoryDTO[]
```

Get approval history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->envelopeApprovalHistory($envelope_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->envelopeApprovalHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeApprovalHistoryDTO[]**](../Model/EnvelopeApprovalHistoryDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fill()`

```php
fill($mailbox, $env_post_dto)
```

Fill envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_post_dto = new \DocStudio\Client\Model\EnvPostDTO(); // \DocStudio\Client\Model\EnvPostDTO

try {
    $apiInstance->fill($mailbox, $env_post_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->fill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_post_dto** | [**\DocStudio\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateStamp()`

```php
generateStamp($mailbox, $stamp_request_dto): \SplFileObject
```

Generate stamp by certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$stamp_request_dto = new \DocStudio\Client\Model\StampRequestDTO(); // \DocStudio\Client\Model\StampRequestDTO

try {
    $result = $apiInstance->generateStamp($mailbox, $stamp_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->generateStamp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **stamp_request_dto** | [**\DocStudio\Client\Model\StampRequestDTO**](../Model/StampRequestDTO.md)|  | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActiveRoles()`

```php
getActiveRoles($uuid, $mailbox): \DocStudio\Client\Model\SingleUuidDTO[]
```

Get active roles by Envelope UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of envelope to get active roles from
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getActiveRoles($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getActiveRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of envelope to get active roles from | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalFlow()`

```php
getApprovalFlow($envelope_uuid, $flow_uuid, $mailbox): \DocStudio\Client\Model\EnvelopeApprovalHistoryDTO
```

Get envelope approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope to approve
$flow_uuid = 'flow_uuid_example'; // string | Flow to approve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getApprovalFlow($envelope_uuid, $flow_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getApprovalFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope to approve | |
| **flow_uuid** | **string**| Flow to approve | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeApprovalHistoryDTO**](../Model/EnvelopeApprovalHistoryDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentPageSizes()`

```php
getAttachmentPageSizes($attachment_uuid, $mailbox, $envelope_uuid): \DocStudio\Client\Model\PdfPageSizes
```

Get attachment page sizes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$attachment_uuid = 'attachment_uuid_example'; // string | Attachment UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID

try {
    $result = $apiInstance->getAttachmentPageSizes($attachment_uuid, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getAttachmentPageSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_uuid** | **string**| Attachment UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_uuid** | **string**| Envelope UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\PdfPageSizes**](../Model/PdfPageSizes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChainEnvelopes()`

```php
getChainEnvelopes($chain_uuid, $mailbox): \DocStudio\Client\Model\ChainEnvelopeDTO[]
```

Get chain envelopes list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$chain_uuid = 'chain_uuid_example'; // string | Chain UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getChainEnvelopes($chain_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getChainEnvelopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_uuid** | **string**| Chain UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\ChainEnvelopeDTO[]**](../Model/ChainEnvelopeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentFileForSign()`

```php
getDocumentFileForSign($envelope_uuid, $mailbox, $document_file_for_sign_request_dto): \SplFileObject
```

Get BINARY or XML for signing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$document_file_for_sign_request_dto = new \DocStudio\Client\Model\DocumentFileForSignRequestDTO(); // \DocStudio\Client\Model\DocumentFileForSignRequestDTO

try {
    $result = $apiInstance->getDocumentFileForSign($envelope_uuid, $mailbox, $document_file_for_sign_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getDocumentFileForSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **document_file_for_sign_request_dto** | [**\DocStudio\Client\Model\DocumentFileForSignRequestDTO**](../Model/DocumentFileForSignRequestDTO.md)|  | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentForSign()`

```php
getDocumentForSign($envelope_uuid, $mailbox, $single_doc_for_sign_request_dto): \DocStudio\Client\Model\DocumentForSigningDTO
```

BINARY and XML for signing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$single_doc_for_sign_request_dto = new \DocStudio\Client\Model\SingleDocForSignRequestDTO(); // \DocStudio\Client\Model\SingleDocForSignRequestDTO

try {
    $result = $apiInstance->getDocumentForSign($envelope_uuid, $mailbox, $single_doc_for_sign_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getDocumentForSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **single_doc_for_sign_request_dto** | [**\DocStudio\Client\Model\SingleDocForSignRequestDTO**](../Model/SingleDocForSignRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\DocumentForSigningDTO**](../Model/DocumentForSigningDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentPrintVersion()`

```php
getDocumentPrintVersion($envelope_uuid, $document_id, $mailbox): \SplFileObject
```

Get document PDF for printing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$document_id = 'document_id_example'; // string | Document id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getDocumentPrintVersion($envelope_uuid, $document_id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getDocumentPrintVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **document_id** | **string**| Document id | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentsForSign()`

```php
getDocumentsForSign($envelope_uuid, $mailbox, $documents_for_sign_request_dto): \DocStudio\Client\Model\DocumentForSigningDTO[]
```

BINARYs and XMLs for signing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$documents_for_sign_request_dto = new \DocStudio\Client\Model\DocumentsForSignRequestDTO(); // \DocStudio\Client\Model\DocumentsForSignRequestDTO

try {
    $result = $apiInstance->getDocumentsForSign($envelope_uuid, $mailbox, $documents_for_sign_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getDocumentsForSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **documents_for_sign_request_dto** | [**\DocStudio\Client\Model\DocumentsForSignRequestDTO**](../Model/DocumentsForSignRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\DocumentForSigningDTO[]**](../Model/DocumentForSigningDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeByUuid()`

```php
getEnvelopeByUuid($envelope_uuid, $mailbox): \DocStudio\Client\Model\EnvelopeWithTemplateDTO
```

Retrieve envelope by UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | UUID of envelope to retrieve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getEnvelopeByUuid($envelope_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| UUID of envelope to retrieve | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeWithTemplateDTO**](../Model/EnvelopeWithTemplateDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeComments()`

```php
getEnvelopeComments($envelope_uuid, $mailbox): \DocStudio\Client\Model\DocumentCommentsDTO[]
```

Get envelope comments for each document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getEnvelopeComments($envelope_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\DocumentCommentsDTO[]**](../Model/DocumentCommentsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeInviteAuthorized()`

```php
getEnvelopeInviteAuthorized($code): \DocStudio\Client\Model\InvitedEnvelopeInfoDTO
```

Get information about envelope by the invitation code (by already registered user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Invitation code from email

try {
    $result = $apiInstance->getEnvelopeInviteAuthorized($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeInviteAuthorized: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Invitation code from email | |

### Return type

[**\DocStudio\Client\Model\InvitedEnvelopeInfoDTO**](../Model/InvitedEnvelopeInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeInviteUnauthorized()`

```php
getEnvelopeInviteUnauthorized($code): \DocStudio\Client\Model\InvitedEnvelopeInfoDTO
```

Get information about envelope by the invitation code (by unauthenticated user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Invitation code from email

try {
    $result = $apiInstance->getEnvelopeInviteUnauthorized($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeInviteUnauthorized: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Invitation code from email | |

### Return type

[**\DocStudio\Client\Model\InvitedEnvelopeInfoDTO**](../Model/InvitedEnvelopeInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeSharedZip()`

```php
getEnvelopeSharedZip($code): \SplFileObject
```

Get shared zip archive

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Code for downloading

try {
    $result = $apiInstance->getEnvelopeSharedZip($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeSharedZip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code for downloading | |

### Return type

**\SplFileObject**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeZip()`

```php
getEnvelopeZip($envelope_uuid, $mailbox, $document_id, $exclude_files, $zip_structure_name): \SplFileObject
```

Get envelope or document zip archive

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$document_id = 'document_id_example'; // string | Document id
$exclude_files = 'exclude_files_example'; // string | Mask to exclude some files. c - for signature/processing Certificate, p - for Printable version, a - for Audit trail
$zip_structure_name = 'zip_structure_name_example'; // string | The name of pre-saved zip structure in the template

try {
    $result = $apiInstance->getEnvelopeZip($envelope_uuid, $mailbox, $document_id, $exclude_files, $zip_structure_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeZip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **document_id** | **string**| Document id | [optional] |
| **exclude_files** | **string**| Mask to exclude some files. c - for signature/processing Certificate, p - for Printable version, a - for Audit trail | [optional] |
| **zip_structure_name** | **string**| The name of pre-saved zip structure in the template | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPendingInvitations()`

```php
getUserPendingInvitations($offset, $limit): \DocStudio\Client\Model\PageDTOEnvelopeToMailboxDTO
```

Get user's pending invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 0; // int | Offset, how much envelopes to skip
$limit = 25; // int | Limit, how much envelopes to retrieve

try {
    $result = $apiInstance->getUserPendingInvitations($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getUserPendingInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset, how much envelopes to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how much envelopes to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOEnvelopeToMailboxDTO**](../Model/PageDTOEnvelopeToMailboxDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeEnvelopesIntoChain()`

```php
mergeEnvelopesIntoChain($mailbox, $request_body): \DocStudio\Client\Model\SingleUuidDTO
```

Merge envelopes into chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->mergeEnvelopesIntoChain($mailbox, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->mergeEnvelopesIntoChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oneTimeSend()`

```php
oneTimeSend($mailbox, $one_time_send_dto): \DocStudio\Client\Model\SingleUuidDTO
```

The envelope will be sent just once (template will be marked as deleted)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$one_time_send_dto = new \DocStudio\Client\Model\OneTimeSendDTO(); // \DocStudio\Client\Model\OneTimeSendDTO

try {
    $result = $apiInstance->oneTimeSend($mailbox, $one_time_send_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->oneTimeSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **one_time_send_dto** | [**\DocStudio\Client\Model\OneTimeSendDTO**](../Model/OneTimeSendDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quickSendExternalDocuments()`

```php
quickSendExternalDocuments($mailbox, $files, $data): \DocStudio\Client\Model\SingleUuidDTO
```

Quick send envelope with external documents only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$files = array("/path/to/file.txt"); // \SplFileObject[] | Files for external documents
$data = new \DocStudio\Client\Model\QuickSendDTO(); // \DocStudio\Client\Model\QuickSendDTO

try {
    $result = $apiInstance->quickSendExternalDocuments($mailbox, $files, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->quickSendExternalDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **files** | **\SplFileObject[]**| Files for external documents | |
| **data** | [**\DocStudio\Client\Model\QuickSendDTO**](../Model/QuickSendDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recycleBin()`

```php
recycleBin($flag, $mailbox, $bulk_envelope_action_dto)
```

Archive envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flag = True; // bool
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$bulk_envelope_action_dto = new \DocStudio\Client\Model\BulkEnvelopeActionDTO(); // \DocStudio\Client\Model\BulkEnvelopeActionDTO

try {
    $apiInstance->recycleBin($flag, $mailbox, $bulk_envelope_action_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->recycleBin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag** | **bool**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **bulk_envelope_action_dto** | [**\DocStudio\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeEnvelopeFromChain()`

```php
removeEnvelopeFromChain($envelope_uuid, $mailbox)
```

Remove envelope from chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->removeEnvelopeFromChain($envelope_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->removeEnvelopeFromChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resendNotifications()`

```php
resendNotifications($mailbox, $report_envelope_request_dto)
```

Resend notifications for active roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$report_envelope_request_dto = new \DocStudio\Client\Model\ReportEnvelopeRequestDTO(); // \DocStudio\Client\Model\ReportEnvelopeRequestDTO

try {
    $apiInstance->resendNotifications($mailbox, $report_envelope_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->resendNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **report_envelope_request_dto** | [**\DocStudio\Client\Model\ReportEnvelopeRequestDTO**](../Model/ReportEnvelopeRequestDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resolvedEnvelopeComment()`

```php
resolvedEnvelopeComment($envelope_uuid, $mailbox, $resolve_comment_thread_dto)
```

Set Resolved Flag for comment thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$resolve_comment_thread_dto = new \DocStudio\Client\Model\ResolveCommentThreadDTO(); // \DocStudio\Client\Model\ResolveCommentThreadDTO

try {
    $apiInstance->resolvedEnvelopeComment($envelope_uuid, $mailbox, $resolve_comment_thread_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->resolvedEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **resolve_comment_thread_dto** | [**\DocStudio\Client\Model\ResolveCommentThreadDTO**](../Model/ResolveCommentThreadDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeEnvelopeSharing()`

```php
revokeEnvelopeSharing($mailbox, $envelope_shared_copy_request_dto)
```

Revoke sharing an envelope copy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_shared_copy_request_dto = new \DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO(); // \DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO

try {
    $apiInstance->revokeEnvelopeSharing($mailbox, $envelope_shared_copy_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->revokeEnvelopeSharing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_shared_copy_request_dto** | [**\DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO**](../Model/EnvelopeSharedCopyRequestDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `send()`

```php
send($mailbox, $env_post_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Send envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_post_dto = new \DocStudio\Client\Model\EnvPostDTO(); // \DocStudio\Client\Model\EnvPostDTO

try {
    $result = $apiInstance->send($mailbox, $env_post_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_post_dto** | [**\DocStudio\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendByTemplateCode()`

```php
sendByTemplateCode($send_env_by_code_dto): \DocStudio\Client\Model\LoginEnvelopeResponseDTO
```

Send envelope by template code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$send_env_by_code_dto = new \DocStudio\Client\Model\SendEnvByCodeDTO(); // \DocStudio\Client\Model\SendEnvByCodeDTO

try {
    $result = $apiInstance->sendByTemplateCode($send_env_by_code_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->sendByTemplateCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_env_by_code_dto** | [**\DocStudio\Client\Model\SendEnvByCodeDTO**](../Model/SendEnvByCodeDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\LoginEnvelopeResponseDTO**](../Model/LoginEnvelopeResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendForApproval()`

```php
sendForApproval($mailbox, $envelope_approval_request_dto)
```

Send envelope for approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_approval_request_dto = new \DocStudio\Client\Model\EnvelopeApprovalRequestDTO(); // \DocStudio\Client\Model\EnvelopeApprovalRequestDTO

try {
    $apiInstance->sendForApproval($mailbox, $envelope_approval_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->sendForApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_approval_request_dto** | [**\DocStudio\Client\Model\EnvelopeApprovalRequestDTO**](../Model/EnvelopeApprovalRequestDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shareEnvelopesByEmail()`

```php
shareEnvelopesByEmail($mailbox, $envelope_shared_archive_request_dto)
```

Share envelopes by email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_shared_archive_request_dto = new \DocStudio\Client\Model\EnvelopeSharedArchiveRequestDTO(); // \DocStudio\Client\Model\EnvelopeSharedArchiveRequestDTO

try {
    $apiInstance->shareEnvelopesByEmail($mailbox, $envelope_shared_archive_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->shareEnvelopesByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_shared_archive_request_dto** | [**\DocStudio\Client\Model\EnvelopeSharedArchiveRequestDTO**](../Model/EnvelopeSharedArchiveRequestDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shareEnvelopesCopy()`

```php
shareEnvelopesCopy($mailbox, $envelope_shared_copy_request_dto)
```

Share envelopes copies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_shared_copy_request_dto = new \DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO(); // \DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO

try {
    $apiInstance->shareEnvelopesCopy($mailbox, $envelope_shared_copy_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->shareEnvelopesCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_shared_copy_request_dto** | [**\DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO**](../Model/EnvelopeSharedCopyRequestDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sign()`

```php
sign($envelope_uuid, $mailbox, $envelope_document_signatures_dto)
```

Sign envelope documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope to update
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_document_signatures_dto = array(new \DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO()); // \DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO[]

try {
    $apiInstance->sign($envelope_uuid, $mailbox, $envelope_document_signatures_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->sign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope to update | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_document_signatures_dto** | [**\DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO[]**](../Model/EnvelopeDocumentSignaturesDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signSES()`

```php
signSES($envelope_uuid, $mailbox, $body)
```

Sign envelope with SES

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope to fill
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$body = 'body_example'; // string

try {
    $apiInstance->signSES($envelope_uuid, $mailbox, $body);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->signSES: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope to fill | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **body** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvelope()`

```php
updateEnvelope($mailbox, $env_post_dto)
```

Update draft envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_post_dto = new \DocStudio\Client\Model\EnvPostDTO(); // \DocStudio\Client\Model\EnvPostDTO

try {
    $apiInstance->updateEnvelope($mailbox, $env_post_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_post_dto** | [**\DocStudio\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvelopeComment()`

```php
updateEnvelopeComment($envelope_uuid, $mailbox, $comment_put_dto): \DocStudio\Client\Model\CommentThreadDTO
```

Add/Update envelope comment in thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$comment_put_dto = new \DocStudio\Client\Model\CommentPutDTO(); // \DocStudio\Client\Model\CommentPutDTO

try {
    $result = $apiInstance->updateEnvelopeComment($envelope_uuid, $mailbox, $comment_put_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **comment_put_dto** | [**\DocStudio\Client\Model\CommentPutDTO**](../Model/CommentPutDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvelopeCommentAccess()`

```php
updateEnvelopeCommentAccess($envelope_uuid, $mailbox, $comment_access_dto): \DocStudio\Client\Model\CommentThreadDTO
```

Update envelope comment thread access level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$comment_access_dto = new \DocStudio\Client\Model\CommentAccessDTO(); // \DocStudio\Client\Model\CommentAccessDTO

try {
    $result = $apiInstance->updateEnvelopeCommentAccess($envelope_uuid, $mailbox, $comment_access_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateEnvelopeCommentAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **comment_access_dto** | [**\DocStudio\Client\Model\CommentAccessDTO**](../Model/CommentAccessDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
