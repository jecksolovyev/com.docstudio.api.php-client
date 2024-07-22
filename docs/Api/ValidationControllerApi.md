# DocStudio\Client\ValidationControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEnvelopeInvite()**](ValidationControllerApi.md#getEnvelopeInvite) | **GET** /api/v1/validation/envelope-authorized-invite | Get invitation info by already registered user |
| [**getEnvelopeInviteNotRegistered()**](ValidationControllerApi.md#getEnvelopeInviteNotRegistered) | **GET** /api/v1/validation/envelope-invite | Get invitation info by not authenticated user |


## `getEnvelopeInvite()`

```php
getEnvelopeInvite($code): \DocStudio\Client\Model\GetEnvelopeInviteInfoDTO
```

Get invitation info by already registered user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ValidationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->getEnvelopeInvite($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationControllerApi->getEnvelopeInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\GetEnvelopeInviteInfoDTO**](../Model/GetEnvelopeInviteInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeInviteNotRegistered()`

```php
getEnvelopeInviteNotRegistered($code): \DocStudio\Client\Model\GetEnvelopeInviteInfoDTO
```

Get invitation info by not authenticated user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ValidationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string

try {
    $result = $apiInstance->getEnvelopeInviteNotRegistered($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationControllerApi->getEnvelopeInviteNotRegistered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\GetEnvelopeInviteInfoDTO**](../Model/GetEnvelopeInviteInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
