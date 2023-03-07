# Docstudio\Client\UploadControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancel**](UploadControllerApi.md#cancel) | **DELETE** /api/v1/upload/{uploadUuid} | Cancel import process
[**confirm**](UploadControllerApi.md#confirm) | **PUT** /api/v1/upload/{uploadUuid}/confirm | Approve import process
[**getImportTask**](UploadControllerApi.md#getimporttask) | **GET** /api/v1/upload/{uploadUuid} | Get import processing task
[**uploadDictionary**](UploadControllerApi.md#uploaddictionary) | **POST** /api/v1/upload/dictionary/{dictionaryUuid} | Upload dictionary file for importing

# **cancel**
> cancel($upload_uuid)

Cancel import process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\UploadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->cancel($upload_uuid);
} catch (Exception $e) {
    echo 'Exception when calling UploadControllerApi->cancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_uuid** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirm**
> confirm($body, $upload_uuid)

Approve import process

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\UploadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\ConfirmUploadDTO(); // \Docstudio\ClientModel\ConfirmUploadDTO | 
$upload_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->confirm($body, $upload_uuid);
} catch (Exception $e) {
    echo 'Exception when calling UploadControllerApi->confirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\ConfirmUploadDTO**](../Model/ConfirmUploadDTO.md)|  |
 **upload_uuid** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportTask**
> \Docstudio\ClientModel\ImportTaskDTO getImportTask($upload_uuid)

Get import processing task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\UploadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$upload_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getImportTask($upload_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadControllerApi->getImportTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upload_uuid** | [**string**](../Model/.md)|  |

### Return type

[**\Docstudio\ClientModel\ImportTaskDTO**](../Model/ImportTaskDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadDictionary**
> \Docstudio\ClientModel\SingleUuidDTO uploadDictionary($mailbox, $dictionary_uuid, $file)

Upload dictionary file for importing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\UploadControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$file = "file_example"; // string | 

try {
    $result = $apiInstance->uploadDictionary($mailbox, $dictionary_uuid, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UploadControllerApi->uploadDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)|  |
 **file** | **string****string**|  | [optional]

### Return type

[**\Docstudio\ClientModel\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

