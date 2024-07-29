# DocStudio\Client\AuditTrailControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAuditTrailRecord()**](AuditTrailControllerApi.md#addAuditTrailRecord) | **PUT** /api/v1/audittrail/envelope/{uuid} |  |
| [**generateAuditTrailPdf()**](AuditTrailControllerApi.md#generateAuditTrailPdf) | **GET** /api/v1/audittrail/pdf/{uuid} | Download audit trail pdf for envelope |
| [**getAuditTrailByEnvelope()**](AuditTrailControllerApi.md#getAuditTrailByEnvelope) | **GET** /api/v1/audittrail/envelope/{uuid} |  |


## `addAuditTrailRecord()`

```php
addAuditTrailRecord($uuid, $mailbox, $audit_trail_info_record_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AuditTrailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$audit_trail_info_record_dto = new \DocStudio\Client\Model\AuditTrailInfoRecordDTO(); // \DocStudio\Client\Model\AuditTrailInfoRecordDTO

try {
    $apiInstance->addAuditTrailRecord($uuid, $mailbox, $audit_trail_info_record_dto);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailControllerApi->addAuditTrailRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **audit_trail_info_record_dto** | [**\DocStudio\Client\Model\AuditTrailInfoRecordDTO**](../Model/AuditTrailInfoRecordDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateAuditTrailPdf()`

```php
generateAuditTrailPdf($uuid, $mailbox): \SplFileObject
```

Download audit trail pdf for envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AuditTrailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->generateAuditTrailPdf($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailControllerApi->generateAuditTrailPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

**\SplFileObject**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuditTrailByEnvelope()`

```php
getAuditTrailByEnvelope($uuid, $mailbox): \DocStudio\Client\Model\AuditTrailDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AuditTrailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getAuditTrailByEnvelope($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailControllerApi->getAuditTrailByEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\AuditTrailDTO[]**](../Model/AuditTrailDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
