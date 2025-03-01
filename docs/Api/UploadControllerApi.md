# DocStudio\Client\UploadControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancel()**](UploadControllerApi.md#cancel) | **DELETE** /api/v1/upload/{uploadUuid} | Cancel import process |
| [**confirm()**](UploadControllerApi.md#confirm) | **PUT** /api/v1/upload/{uploadUuid}/confirm | Approve import process |
| [**getImportTask()**](UploadControllerApi.md#getImportTask) | **GET** /api/v1/upload/{uploadUuid} | Get import processing task |
| [**uploadDictionary()**](UploadControllerApi.md#uploadDictionary) | **POST** /api/v1/upload/dictionary/{dictionaryUuid} | Upload dictionary file for importing |


## `cancel()`

```php
cancel($upload_uuid)
```

Cancel import process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UploadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_uuid = 'upload_uuid_example'; // string

try {
    $apiInstance->cancel($upload_uuid);
} catch (Exception $e) {
    echo 'Exception when calling UploadControllerApi->cancel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_uuid** | **string**|  | |

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

## `confirm()`

```php
confirm($upload_uuid, $confirm_upload_dto)
```

Approve import process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UploadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_uuid = 'upload_uuid_example'; // string
$confirm_upload_dto = new \DocStudio\Client\Model\ConfirmUploadDTO(); // \DocStudio\Client\Model\ConfirmUploadDTO

try {
    $apiInstance->confirm($upload_uuid, $confirm_upload_dto);
} catch (Exception $e) {
    echo 'Exception when calling UploadControllerApi->confirm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_uuid** | **string**|  | |
| **confirm_upload_dto** | [**\DocStudio\Client\Model\ConfirmUploadDTO**](../Model/ConfirmUploadDTO.md)|  | |

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

## `getImportTask()`

```php
getImportTask($upload_uuid): \DocStudio\Client\Model\ImportTaskDTO
```

Get import processing task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UploadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_uuid = 'upload_uuid_example'; // string

try {
    $result = $apiInstance->getImportTask($upload_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadControllerApi->getImportTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **upload_uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\ImportTaskDTO**](../Model/ImportTaskDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadDictionary()`

```php
uploadDictionary($dictionary_uuid, $mailbox, $file): \DocStudio\Client\Model\SingleUuidDTO
```

Upload dictionary file for importing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UploadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = 'dictionary_uuid_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->uploadDictionary($dictionary_uuid, $mailbox, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadControllerApi->uploadDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
