# DocStudio\Client\EnvelopeSearchControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNewColumn()**](EnvelopeSearchControllerApi.md#addNewColumn) | **POST** /api/v1/envelope/column | Add a new column to display |
| [**createReport()**](EnvelopeSearchControllerApi.md#createReport) | **POST** /api/v1/envelope/report | Request envelopes report |
| [**deleteColumn()**](EnvelopeSearchControllerApi.md#deleteColumn) | **DELETE** /api/v1/envelope/column | Delete columns from displaying |
| [**getMailboxFolders()**](EnvelopeSearchControllerApi.md#getMailboxFolders) | **POST** /api/v1/envelope/mailbox-folders | Retrieve all available folders for mailbox |
| [**getSearchFields()**](EnvelopeSearchControllerApi.md#getSearchFields) | **POST** /api/v1/envelope/fields | Get search fields |
| [**getTemplateRoles()**](EnvelopeSearchControllerApi.md#getTemplateRoles) | **POST** /api/v1/envelope/search/roles | Retrieve all template roles |
| [**searchEnvelopes()**](EnvelopeSearchControllerApi.md#searchEnvelopes) | **POST** /api/v1/envelope/search | Search envelopes |
| [**searchEnvelopesForApproval()**](EnvelopeSearchControllerApi.md#searchEnvelopesForApproval) | **POST** /api/v1/envelope/search-approvals | Search envelopes for approval |
| [**updateColumn()**](EnvelopeSearchControllerApi.md#updateColumn) | **PUT** /api/v1/envelope/column/{uuid} | Update column to display |


## `addNewColumn()`

```php
addNewColumn($mailbox, $new_env_column_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Add a new column to display

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$new_env_column_dto = new \DocStudio\Client\Model\NewEnvColumnDTO(); // \DocStudio\Client\Model\NewEnvColumnDTO

try {
    $result = $apiInstance->addNewColumn($mailbox, $new_env_column_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->addNewColumn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **new_env_column_dto** | [**\DocStudio\Client\Model\NewEnvColumnDTO**](../Model/NewEnvColumnDTO.md)|  | |

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

## `createReport()`

```php
createReport($mailbox, $report_envelope_request_dto)
```

Request envelopes report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$report_envelope_request_dto = new \DocStudio\Client\Model\ReportEnvelopeRequestDTO(); // \DocStudio\Client\Model\ReportEnvelopeRequestDTO

try {
    $apiInstance->createReport($mailbox, $report_envelope_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->createReport: ', $e->getMessage(), PHP_EOL;
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

## `deleteColumn()`

```php
deleteColumn($mailbox, $delete_env_column_dto)
```

Delete columns from displaying

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$delete_env_column_dto = new \DocStudio\Client\Model\DeleteEnvColumnDTO(); // \DocStudio\Client\Model\DeleteEnvColumnDTO

try {
    $apiInstance->deleteColumn($mailbox, $delete_env_column_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->deleteColumn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **delete_env_column_dto** | [**\DocStudio\Client\Model\DeleteEnvColumnDTO**](../Model/DeleteEnvColumnDTO.md)|  | |

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

## `getMailboxFolders()`

```php
getMailboxFolders($mailbox, $request_body): string[]
```

Retrieve all available folders for mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->getMailboxFolders($mailbox, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->getMailboxFolders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSearchFields()`

```php
getSearchFields($name, $mailbox, $search_envelopes_dto): \DocStudio\Client\Model\EnvelopeSearchField[]
```

Get search fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Field name term
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$search_envelopes_dto = new \DocStudio\Client\Model\SearchEnvelopesDTO(); // \DocStudio\Client\Model\SearchEnvelopesDTO

try {
    $result = $apiInstance->getSearchFields($name, $mailbox, $search_envelopes_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->getSearchFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Field name term | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **search_envelopes_dto** | [**\DocStudio\Client\Model\SearchEnvelopesDTO**](../Model/SearchEnvelopesDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\EnvelopeSearchField[]**](../Model/EnvelopeSearchField.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateRoles()`

```php
getTemplateRoles($mailbox, $request_body): \DocStudio\Client\Model\TemplateRolesDTO
```

Retrieve all template roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->getTemplateRoles($mailbox, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->getTemplateRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\DocStudio\Client\Model\TemplateRolesDTO**](../Model/TemplateRolesDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchEnvelopes()`

```php
searchEnvelopes($mailbox, $search_envelopes_dto, $offset, $limit, $uuid_only): \DocStudio\Client\Model\EnvelopePageDTO
```

Search envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$search_envelopes_dto = new \DocStudio\Client\Model\SearchEnvelopesDTO(); // \DocStudio\Client\Model\SearchEnvelopesDTO
$offset = 0; // int | Offset, how many envelopes to skip
$limit = 25; // int | Limit, how many envelopes to retrieve
$uuid_only = True; // bool | Retrieve only UUID of envelope

try {
    $result = $apiInstance->searchEnvelopes($mailbox, $search_envelopes_dto, $offset, $limit, $uuid_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->searchEnvelopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **search_envelopes_dto** | [**\DocStudio\Client\Model\SearchEnvelopesDTO**](../Model/SearchEnvelopesDTO.md)|  | |
| **offset** | **int**| Offset, how many envelopes to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how many envelopes to retrieve | [optional] [default to 25] |
| **uuid_only** | **bool**| Retrieve only UUID of envelope | [optional] |

### Return type

[**\DocStudio\Client\Model\EnvelopePageDTO**](../Model/EnvelopePageDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchEnvelopesForApproval()`

```php
searchEnvelopesForApproval($mailbox, $search_approvals_dto, $offset, $limit): \DocStudio\Client\Model\EnvelopeApprovalPageDTO
```

Search envelopes for approval

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$search_approvals_dto = new \DocStudio\Client\Model\SearchApprovalsDTO(); // \DocStudio\Client\Model\SearchApprovalsDTO
$offset = 0; // int | Offset, how many envelopes to skip
$limit = 25; // int | Limit, how many envelopes to retrieve

try {
    $result = $apiInstance->searchEnvelopesForApproval($mailbox, $search_approvals_dto, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->searchEnvelopesForApproval: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **search_approvals_dto** | [**\DocStudio\Client\Model\SearchApprovalsDTO**](../Model/SearchApprovalsDTO.md)|  | |
| **offset** | **int**| Offset, how many envelopes to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how many envelopes to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\EnvelopeApprovalPageDTO**](../Model/EnvelopeApprovalPageDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateColumn()`

```php
updateColumn($uuid, $mailbox, $update_env_column_dto)
```

Update column to display

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$update_env_column_dto = new \DocStudio\Client\Model\UpdateEnvColumnDTO(); // \DocStudio\Client\Model\UpdateEnvColumnDTO

try {
    $apiInstance->updateColumn($uuid, $mailbox, $update_env_column_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->updateColumn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **update_env_column_dto** | [**\DocStudio\Client\Model\UpdateEnvColumnDTO**](../Model/UpdateEnvColumnDTO.md)|  | |

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
