# DocStudio\Client\AuthenticationControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**login**](AuthenticationControllerApi.md#login) | **POST** /api/login | Login with email/password
[**loginByCode**](AuthenticationControllerApi.md#loginbycode) | **POST** /api/login/by-code | Login with the code from email (for non-existing user)
[**logoutAuthentication**](AuthenticationControllerApi.md#logoutauthentication) | **POST** /api/logout | Logout
[**userExistsByCode**](AuthenticationControllerApi.md#userexistsbycode) | **GET** /api/login/check-by-code/{code} | Check login ability with the code from email (for non-existing user)

# **login**
> \DocStudio\Client\Model\LoginResponseDTO login($body)

Login with email/password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DocStudio\Client\Api\AuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \DocStudio\Client\Model\LoginDTO(); // \DocStudio\Client\Model\LoginDTO | 

try {
    $result = $apiInstance->login($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationControllerApi->login: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\LoginDTO**](../Model/LoginDTO.md)|  |

### Return type

[**\DocStudio\Client\Model\LoginResponseDTO**](../Model/LoginResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **loginByCode**
> \DocStudio\Client\Model\LoginEnvelopeResponseDTO loginByCode($body)

Login with the code from email (for non-existing user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DocStudio\Client\Api\AuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \DocStudio\Client\Model\UserCreateByCodeDTO(); // \DocStudio\Client\Model\UserCreateByCodeDTO | 

try {
    $result = $apiInstance->loginByCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationControllerApi->loginByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\UserCreateByCodeDTO**](../Model/UserCreateByCodeDTO.md)|  |

### Return type

[**\DocStudio\Client\Model\LoginEnvelopeResponseDTO**](../Model/LoginEnvelopeResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **logoutAuthentication**
> logoutAuthentication()

Logout

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->logoutAuthentication();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationControllerApi->logoutAuthentication: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userExistsByCode**
> \DocStudio\Client\Model\LoginCheckResponseDTO userExistsByCode($the_invitation_code)

Check login ability with the code from email (for non-existing user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new DocStudio\Client\Api\AuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$the_invitation_code = "the_invitation_code_example"; // string | 

try {
    $result = $apiInstance->userExistsByCode($the_invitation_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationControllerApi->userExistsByCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **the_invitation_code** | **string**|  |

### Return type

[**\DocStudio\Client\Model\LoginCheckResponseDTO**](../Model/LoginCheckResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

