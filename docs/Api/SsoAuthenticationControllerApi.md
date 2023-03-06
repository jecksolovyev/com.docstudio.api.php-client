# Swagger\Client\SsoAuthenticationControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**idpByDomain**](SsoAuthenticationControllerApi.md#idpbydomain) | **GET** /saml/findIdp | Returns EntityID by domain
[**loginGetSso**](SsoAuthenticationControllerApi.md#logingetsso) | **GET** /saml/login | Login with SSO, redirect to UI after login
[**loginPostSso**](SsoAuthenticationControllerApi.md#loginpostsso) | **POST** /saml/login | Login with SSO, token is in response
[**logout**](SsoAuthenticationControllerApi.md#logout) | **POST** /saml/logout | Logout

# **idpByDomain**
> \Swagger\Client\Model\SsoEntityDTO idpByDomain($domain)

Returns EntityID by domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SsoAuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = "domain_example"; // string | 

try {
    $result = $apiInstance->idpByDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->idpByDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**|  |

### Return type

[**\Swagger\Client\Model\SsoEntityDTO**](../Model/SsoEntityDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginGetSso**
> loginGetSso($idp)

Login with SSO, redirect to UI after login

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SsoAuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$idp = "idp_example"; // string | 

try {
    $apiInstance->loginGetSso($idp);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->loginGetSso: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idp** | **string**|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginPostSso**
> \Swagger\Client\Model\LoginResponseDTO loginPostSso()

Login with SSO, token is in response

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SsoAuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->loginPostSso();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->loginPostSso: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\LoginResponseDTO**](../Model/LoginResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logout**
> logout()

Logout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SsoAuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->logout();
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->logout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

