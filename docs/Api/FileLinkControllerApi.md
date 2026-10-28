# DocStudio\Client\FileLinkControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadFileLink()**](FileLinkControllerApi.md#downloadFileLink) | **GET** /api/v1/file-link/{token} | Download the file of a one-time link; the link stops working |
| [**info()**](FileLinkControllerApi.md#info) | **GET** /api/v1/file-link/{token}/info | What a one-time file link is for and whether it can still be used |
| [**uploadMultipart()**](FileLinkControllerApi.md#uploadMultipart) | **POST** /api/v1/file-link/{token} | Upload the file of a one-time link as multipart; the link stops working |
| [**uploadRaw()**](FileLinkControllerApi.md#uploadRaw) | **PUT** /api/v1/file-link/{token} | Upload the file of a one-time link as the raw request body; the link stops working |


## `downloadFileLink()`

```php
downloadFileLink($token): \SplFileObject
```

Download the file of a one-time link; the link stops working

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FileLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | Link token

try {
    $result = $apiInstance->downloadFileLink($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileLinkControllerApi->downloadFileLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Link token | |

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

## `info()`

```php
info($token): \DocStudio\Client\Model\FileLinkInfo
```

What a one-time file link is for and whether it can still be used

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FileLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | Link token

try {
    $result = $apiInstance->info($token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileLinkControllerApi->info: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Link token | |

### Return type

[**\DocStudio\Client\Model\FileLinkInfo**](../Model/FileLinkInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadMultipart()`

```php
uploadMultipart($token, $file): \DocStudio\Client\Model\FileUploadStatus
```

Upload the file of a one-time link as multipart; the link stops working

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FileLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | Link token
$file = '/path/to/file.txt'; // \SplFileObject

try {
    $result = $apiInstance->uploadMultipart($token, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileLinkControllerApi->uploadMultipart: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Link token | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\DocStudio\Client\Model\FileUploadStatus**](../Model/FileUploadStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadRaw()`

```php
uploadRaw($token, $filename): \DocStudio\Client\Model\FileUploadStatus
```

Upload the file of a one-time link as the raw request body; the link stops working

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\FileLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = 'token_example'; // string | Link token
$filename = 'filename_example'; // string | File name with its extension, when the link has none or another one is sent

try {
    $result = $apiInstance->uploadRaw($token, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileLinkControllerApi->uploadRaw: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**| Link token | |
| **filename** | **string**| File name with its extension, when the link has none or another one is sent | [optional] |

### Return type

[**\DocStudio\Client\Model\FileUploadStatus**](../Model/FileUploadStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
