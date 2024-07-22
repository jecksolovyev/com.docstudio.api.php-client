# DocStudio\Client\MiscControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appSettings()**](MiscControllerApi.md#appSettings) | **GET** /api/v1/settings |  |
| [**auditLog()**](MiscControllerApi.md#auditLog) | **POST** /api/v1/audit | Audit log |
| [**calculateFormula()**](MiscControllerApi.md#calculateFormula) | **POST** /api/v1/formula | Calculate excel formulas for documents |
| [**createAuditReport()**](MiscControllerApi.md#createAuditReport) | **POST** /api/v1/audit/report | Request audit report |
| [**detectCountry()**](MiscControllerApi.md#detectCountry) | **GET** /api/v1/detect-country |  |
| [**getBarcode()**](MiscControllerApi.md#getBarcode) | **GET** /api/v1/barcode |  |
| [**recalculateMailboxStat()**](MiscControllerApi.md#recalculateMailboxStat) | **GET** /api/v1/recalculate-mailbox-stat | Recalculate all mailbox counters |
| [**returnNoFavicon()**](MiscControllerApi.md#returnNoFavicon) | **GET** /favicon.ico |  |


## `appSettings()`

```php
appSettings(): \DocStudio\Client\Model\SettingsDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->appSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->appSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocStudio\Client\Model\SettingsDTO**](../Model/SettingsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `auditLog()`

```php
auditLog($search_activity_log_dto, $offset, $limit): \DocStudio\Client\Model\PageDTOActivityLogRecordDTO
```

Audit log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_activity_log_dto = new \DocStudio\Client\Model\SearchActivityLogDTO(); // \DocStudio\Client\Model\SearchActivityLogDTO
$offset = 0; // int | Offset, how many records to skip
$limit = 25; // int | Limit, how many records to retrieve

try {
    $result = $apiInstance->auditLog($search_activity_log_dto, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->auditLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_activity_log_dto** | [**\DocStudio\Client\Model\SearchActivityLogDTO**](../Model/SearchActivityLogDTO.md)|  | |
| **offset** | **int**| Offset, how many records to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how many records to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOActivityLogRecordDTO**](../Model/PageDTOActivityLogRecordDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `calculateFormula()`

```php
calculateFormula($doc_formula_request_dto): array<string,array<string,object>>
```

Calculate excel formulas for documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$doc_formula_request_dto = array(new \DocStudio\Client\Model\DocFormulaRequestDTO()); // \DocStudio\Client\Model\DocFormulaRequestDTO[]

try {
    $result = $apiInstance->calculateFormula($doc_formula_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->calculateFormula: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **doc_formula_request_dto** | [**\DocStudio\Client\Model\DocFormulaRequestDTO[]**](../Model/DocFormulaRequestDTO.md)|  | |

### Return type

**array<string,array<string,object>>**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAuditReport()`

```php
createAuditReport($search_activity_log_dto)
```

Request audit report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$search_activity_log_dto = new \DocStudio\Client\Model\SearchActivityLogDTO(); // \DocStudio\Client\Model\SearchActivityLogDTO

try {
    $apiInstance->createAuditReport($search_activity_log_dto);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->createAuditReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_activity_log_dto** | [**\DocStudio\Client\Model\SearchActivityLogDTO**](../Model/SearchActivityLogDTO.md)|  | |

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

## `detectCountry()`

```php
detectCountry(): \DocStudio\Client\Model\DetectedCountryDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->detectCountry();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->detectCountry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocStudio\Client\Model\DetectedCountryDTO**](../Model/DetectedCountryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBarcode()`

```php
getBarcode($type, $value): string
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Barcode type
$value = 'value_example'; // string | Barcode value

try {
    $result = $apiInstance->getBarcode($type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->getBarcode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Barcode type | |
| **value** | **string**| Barcode value | |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/svg+xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recalculateMailboxStat()`

```php
recalculateMailboxStat($mailbox): \DocStudio\Client\Model\StatDTO
```

Recalculate all mailbox counters

development use only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->recalculateMailboxStat($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->recalculateMailboxStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\StatDTO**](../Model/StatDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnNoFavicon()`

```php
returnNoFavicon()
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->returnNoFavicon();
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->returnNoFavicon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
