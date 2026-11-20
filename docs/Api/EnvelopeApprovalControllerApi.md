# DocStudio\Client\EnvelopeApprovalControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addReviewers()**](EnvelopeApprovalControllerApi.md#addReviewers) | **PUT** /api/v1/envelope/editorial-review/{id}/flow | Add reviewers to a running editorial review |
| [**cancelApprovalFlow()**](EnvelopeApprovalControllerApi.md#cancelApprovalFlow) | **DELETE** /api/v1/envelope/{id}/approval/{flowUuid} | Cancel envelope approval |
| [**envelopeApproval()**](EnvelopeApprovalControllerApi.md#envelopeApproval) | **PUT** /api/v1/envelope/approval | Approve or Reject envelopes |
| [**envelopeApprovalHistory()**](EnvelopeApprovalControllerApi.md#envelopeApprovalHistory) | **GET** /api/v1/envelope/{id}/approval-history | Get approval history |
| [**getApprovalFlow()**](EnvelopeApprovalControllerApi.md#getApprovalFlow) | **GET** /api/v1/envelope/{id}/approval/{flowUuid} | Get envelope approval |
| [**reworkEditorialReview()**](EnvelopeApprovalControllerApi.md#reworkEditorialReview) | **POST** /api/v1/envelope/editorial-review/{id}/rework | Send editorial review back for rework |
| [**sendForApproval()**](EnvelopeApprovalControllerApi.md#sendForApproval) | **PUT** /api/v1/envelope/send-for-approval | Send envelope for approval |
| [**startEditorialReviewForExternalDocuments()**](EnvelopeApprovalControllerApi.md#startEditorialReviewForExternalDocuments) | **POST** /api/v1/envelope/editorial-review | Start editorial review of DOC, DOCX |


## `addReviewers()`

```php
addReviewers($id, $mailbox, $review_flow_update_request)
```

Add reviewers to a running editorial review

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeApprovalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope of the editorial review
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$review_flow_update_request = new \DocStudio\Client\Model\ReviewFlowUpdateRequest(); // \DocStudio\Client\Model\ReviewFlowUpdateRequest

try {
    $apiInstance->addReviewers($id, $mailbox, $review_flow_update_request);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApprovalControllerApi->addReviewers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope of the editorial review | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **review_flow_update_request** | [**\DocStudio\Client\Model\ReviewFlowUpdateRequest**](../Model/ReviewFlowUpdateRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelApprovalFlow()`

```php
cancelApprovalFlow($id, $flow_uuid, $mailbox)
```

Cancel envelope approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeApprovalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope to approve
$flow_uuid = 'flow_uuid_example'; // string | Flow to approve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->cancelApprovalFlow($id, $flow_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApprovalControllerApi->cancelApprovalFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope to approve | |
| **flow_uuid** | **string**| Flow to approve | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `envelopeApproval()`

```php
envelopeApproval($mailbox, $approval_status_dto)
```

Approve or Reject envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeApprovalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$approval_status_dto = new \DocStudio\Client\Model\ApprovalStatusDTO(); // \DocStudio\Client\Model\ApprovalStatusDTO

try {
    $apiInstance->envelopeApproval($mailbox, $approval_status_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApprovalControllerApi->envelopeApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **approval_status_dto** | [**\DocStudio\Client\Model\ApprovalStatusDTO**](../Model/ApprovalStatusDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `envelopeApprovalHistory()`

```php
envelopeApprovalHistory($id, $mailbox): \DocStudio\Client\Model\EnvelopeApprovalHistoryDTO[]
```

Get approval history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeApprovalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->envelopeApprovalHistory($id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApprovalControllerApi->envelopeApprovalHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeApprovalHistoryDTO[]**](../Model/EnvelopeApprovalHistoryDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApprovalFlow()`

```php
getApprovalFlow($id, $flow_uuid, $mailbox): \DocStudio\Client\Model\EnvelopeApprovalHistoryDTO
```

Get envelope approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeApprovalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope to approve
$flow_uuid = 'flow_uuid_example'; // string | Flow to approve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getApprovalFlow($id, $flow_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApprovalControllerApi->getApprovalFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope to approve | |
| **flow_uuid** | **string**| Flow to approve | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeApprovalHistoryDTO**](../Model/EnvelopeApprovalHistoryDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reworkEditorialReview()`

```php
reworkEditorialReview($id, $mailbox, $review_rework_request)
```

Send editorial review back for rework

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeApprovalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Id of envelope
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$review_rework_request = new \DocStudio\Client\Model\ReviewReworkRequest(); // \DocStudio\Client\Model\ReviewReworkRequest

try {
    $apiInstance->reworkEditorialReview($id, $mailbox, $review_rework_request);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApprovalControllerApi->reworkEditorialReview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of envelope | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **review_rework_request** | [**\DocStudio\Client\Model\ReviewReworkRequest**](../Model/ReviewReworkRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendForApproval()`

```php
sendForApproval($mailbox, $envelope_approval_request_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Send envelope for approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeApprovalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_approval_request_dto = new \DocStudio\Client\Model\EnvelopeApprovalRequestDTO(); // \DocStudio\Client\Model\EnvelopeApprovalRequestDTO

try {
    $result = $apiInstance->sendForApproval($mailbox, $envelope_approval_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApprovalControllerApi->sendForApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_approval_request_dto** | [**\DocStudio\Client\Model\EnvelopeApprovalRequestDTO**](../Model/EnvelopeApprovalRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startEditorialReviewForExternalDocuments()`

```php
startEditorialReviewForExternalDocuments($mailbox, $data, $files): \DocStudio\Client\Model\SingleUuidDTO
```

Start editorial review of DOC, DOCX

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeApprovalControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$data = new \DocStudio\Client\Model\EditorialReviewInitRequest(); // \DocStudio\Client\Model\EditorialReviewInitRequest
$files = array('/path/to/file.txt'); // \SplFileObject[] | Files for external documents

try {
    $result = $apiInstance->startEditorialReviewForExternalDocuments($mailbox, $data, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeApprovalControllerApi->startEditorialReviewForExternalDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **data** | [**\DocStudio\Client\Model\EditorialReviewInitRequest**](../Model/EditorialReviewInitRequest.md)|  | |
| **files** | **\SplFileObject[]**| Files for external documents | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
