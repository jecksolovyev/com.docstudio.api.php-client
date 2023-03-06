# Swagger\Client\ValidationControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getEnvelopeInvite**](ValidationControllerApi.md#getenvelopeinvite) | **GET** /api/v1/validation/envelope-authorized-invite | Get invitation info by already registered user
[**getEnvelopeInviteNotRegistered**](ValidationControllerApi.md#getenvelopeinvitenotregistered) | **GET** /api/v1/validation/envelope-invite | Get invitation info by not authenticated user

# **getEnvelopeInvite**
> \Swagger\Client\Model\GetEnvelopeInviteInfoDTO getEnvelopeInvite($code)

Get invitation info by already registered user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ValidationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | 

try {
    $result = $apiInstance->getEnvelopeInvite($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationControllerApi->getEnvelopeInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetEnvelopeInviteInfoDTO**](../Model/GetEnvelopeInviteInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvelopeInviteNotRegistered**
> \Swagger\Client\Model\GetEnvelopeInviteInfoDTO getEnvelopeInviteNotRegistered($code)

Get invitation info by not authenticated user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\ValidationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | 

try {
    $result = $apiInstance->getEnvelopeInviteNotRegistered($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ValidationControllerApi->getEnvelopeInviteNotRegistered: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**|  |

### Return type

[**\Swagger\Client\Model\GetEnvelopeInviteInfoDTO**](../Model/GetEnvelopeInviteInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

