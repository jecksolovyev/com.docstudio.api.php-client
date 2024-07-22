# DocStudio\Client\FilterSettingsControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createFilterSettings()**](FilterSettingsControllerApi.md#createFilterSettings) | **POST** /api/v1/filterSettings | Create FilterSettings for mailbox |
| [**deleteFilterSettings()**](FilterSettingsControllerApi.md#deleteFilterSettings) | **DELETE** /api/v1/filterSettings/{uuid} | Delete FilterSettings |
| [**getAllFilterSettings()**](FilterSettingsControllerApi.md#getAllFilterSettings) | **GET** /api/v1/filterSettings | Read all by mailbox |
| [**getByUuid()**](FilterSettingsControllerApi.md#getByUuid) | **GET** /api/v1/filterSettings/{uuid} | Get by UUID |
| [**updateFilterSettings()**](FilterSettingsControllerApi.md#updateFilterSettings) | **PUT** /api/v1/filterSettings/{uuid} | Update FilterSettings for mailbox |


## `createFilterSettings()`

```php
createFilterSettings($mailbox, $filter_settings_create_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Create FilterSettings for mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FilterSettingsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$filter_settings_create_dto = new \DocStudio\Client\Model\FilterSettingsCreateDTO(); // \DocStudio\Client\Model\FilterSettingsCreateDTO

try {
    $result = $apiInstance->createFilterSettings($mailbox, $filter_settings_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterSettingsControllerApi->createFilterSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **filter_settings_create_dto** | [**\DocStudio\Client\Model\FilterSettingsCreateDTO**](../Model/FilterSettingsCreateDTO.md)|  | |

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

## `deleteFilterSettings()`

```php
deleteFilterSettings($uuid, $mailbox)
```

Delete FilterSettings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FilterSettingsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteFilterSettings($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling FilterSettingsControllerApi->deleteFilterSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
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

## `getAllFilterSettings()`

```php
getAllFilterSettings($mailbox): \DocStudio\Client\Model\FilterSettingsDTO[]
```

Read all by mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FilterSettingsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getAllFilterSettings($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterSettingsControllerApi->getAllFilterSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\FilterSettingsDTO[]**](../Model/FilterSettingsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByUuid()`

```php
getByUuid($uuid, $mailbox): \DocStudio\Client\Model\FilterSettingsDTO
```

Get by UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FilterSettingsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getByUuid($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilterSettingsControllerApi->getByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\FilterSettingsDTO**](../Model/FilterSettingsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFilterSettings()`

```php
updateFilterSettings($uuid, $mailbox, $filter_settings_dto)
```

Update FilterSettings for mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FilterSettingsControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$filter_settings_dto = new \DocStudio\Client\Model\FilterSettingsDTO(); // \DocStudio\Client\Model\FilterSettingsDTO

try {
    $apiInstance->updateFilterSettings($uuid, $mailbox, $filter_settings_dto);
} catch (Exception $e) {
    echo 'Exception when calling FilterSettingsControllerApi->updateFilterSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **filter_settings_dto** | [**\DocStudio\Client\Model\FilterSettingsDTO**](../Model/FilterSettingsDTO.md)|  | |

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
