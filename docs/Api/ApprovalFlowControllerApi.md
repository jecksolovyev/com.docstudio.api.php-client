# DocStudio\Client\ApprovalFlowControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createApprovalFlow()**](ApprovalFlowControllerApi.md#createApprovalFlow) | **POST** /api/v1/approvalFlow | Create approval flow |
| [**deleteApprovalFlow()**](ApprovalFlowControllerApi.md#deleteApprovalFlow) | **DELETE** /api/v1/approvalFlow | Delete approval flows |
| [**retrieve()**](ApprovalFlowControllerApi.md#retrieve) | **GET** /api/v1/approvalFlow/{flowUuid} | Retrieve approval flow |
| [**search()**](ApprovalFlowControllerApi.md#search) | **GET** /api/v1/approvalFlow | Retrieve approval flows |
| [**updateApprovalFlow()**](ApprovalFlowControllerApi.md#updateApprovalFlow) | **PUT** /api/v1/approvalFlow/{flowUuid} | Update approval flow |


## `createApprovalFlow()`

```php
createApprovalFlow($mailbox, $mailbox_approval_flow_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Create approval flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ApprovalFlowControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$mailbox_approval_flow_dto = new \DocStudio\Client\Model\MailboxApprovalFlowDTO(); // \DocStudio\Client\Model\MailboxApprovalFlowDTO

try {
    $result = $apiInstance->createApprovalFlow($mailbox, $mailbox_approval_flow_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalFlowControllerApi->createApprovalFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **mailbox_approval_flow_dto** | [**\DocStudio\Client\Model\MailboxApprovalFlowDTO**](../Model/MailboxApprovalFlowDTO.md)|  | |

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

## `deleteApprovalFlow()`

```php
deleteApprovalFlow($mailbox, $request_body)
```

Delete approval flows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ApprovalFlowControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->deleteApprovalFlow($mailbox, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalFlowControllerApi->deleteApprovalFlow: ', $e->getMessage(), PHP_EOL;
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

## `retrieve()`

```php
retrieve($flow_uuid, $mailbox): \DocStudio\Client\Model\MailboxApprovalFlowGetDTO
```

Retrieve approval flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ApprovalFlowControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flow_uuid = 'flow_uuid_example'; // string | UUID of the approval flow
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->retrieve($flow_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalFlowControllerApi->retrieve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_uuid** | **string**| UUID of the approval flow | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\MailboxApprovalFlowGetDTO**](../Model/MailboxApprovalFlowGetDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `search()`

```php
search($mailbox, $keyword, $offset, $limit): \DocStudio\Client\Model\PageDTOMailboxApprovalFlowGetDTO
```

Retrieve approval flows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ApprovalFlowControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$keyword = 'keyword_example'; // string | Keyword to search approval flow by name
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->search($mailbox, $keyword, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalFlowControllerApi->search: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **keyword** | **string**| Keyword to search approval flow by name | [optional] |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOMailboxApprovalFlowGetDTO**](../Model/PageDTOMailboxApprovalFlowGetDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApprovalFlow()`

```php
updateApprovalFlow($flow_uuid, $mailbox, $mailbox_approval_flow_dto)
```

Update approval flow

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ApprovalFlowControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$flow_uuid = 'flow_uuid_example'; // string | UUID of the approval flow
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$mailbox_approval_flow_dto = new \DocStudio\Client\Model\MailboxApprovalFlowDTO(); // \DocStudio\Client\Model\MailboxApprovalFlowDTO

try {
    $apiInstance->updateApprovalFlow($flow_uuid, $mailbox, $mailbox_approval_flow_dto);
} catch (Exception $e) {
    echo 'Exception when calling ApprovalFlowControllerApi->updateApprovalFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flow_uuid** | **string**| UUID of the approval flow | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **mailbox_approval_flow_dto** | [**\DocStudio\Client\Model\MailboxApprovalFlowDTO**](../Model/MailboxApprovalFlowDTO.md)|  | |

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
