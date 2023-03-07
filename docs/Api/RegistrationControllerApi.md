# Docstudio\Client\RegistrationControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserPasswordPolicy**](RegistrationControllerApi.md#getuserpasswordpolicy) | **GET** /registration/passwordPolicy | Get user password policy
[**register**](RegistrationControllerApi.md#register) | **POST** /registration | Register a user with validation code
[**renewPassword**](RegistrationControllerApi.md#renewpassword) | **POST** /registration/renewPassword | Renew user&#x27;s password
[**requestResendValidationCode**](RegistrationControllerApi.md#requestresendvalidationcode) | **POST** /registration/sendRegistrationCode | Send email validation code
[**requestResetPassword**](RegistrationControllerApi.md#requestresetpassword) | **POST** /registration/requestPasswordReset | Request password reset
[**resetPassword**](RegistrationControllerApi.md#resetpassword) | **POST** /registration/resetPassword | Reset password
[**validation**](RegistrationControllerApi.md#validation) | **GET** /registration/validate | Validate user code from email

# **getUserPasswordPolicy**
> \Docstudio\ClientModel\PasswordPolicy getUserPasswordPolicy($email)

Get user password policy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Docstudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = "email_example"; // string | Email of user

try {
    $result = $apiInstance->getUserPasswordPolicy($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->getUserPasswordPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **email** | **string**| Email of user |

### Return type

[**\Docstudio\ClientModel\PasswordPolicy**](../Model/PasswordPolicy.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **register**
> \Docstudio\ClientModel\LoginResponseDTO register($body, $code, $code_type)

Register a user with validation code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Docstudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Docstudio\ClientModel\UserCreateDTO(); // \Docstudio\ClientModel\UserCreateDTO | 
$code = "code_example"; // string | Validation code
$code_type = "code_type_example"; // string | Type of code

try {
    $result = $apiInstance->register($body, $code, $code_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->register: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\UserCreateDTO**](../Model/UserCreateDTO.md)|  |
 **code** | **string**| Validation code |
 **code_type** | **string**| Type of code | [optional]

### Return type

[**\Docstudio\ClientModel\LoginResponseDTO**](../Model/LoginResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renewPassword**
> renewPassword($body)

Renew user's password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Docstudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Docstudio\ClientModel\RenewPasswordDTO(); // \Docstudio\ClientModel\RenewPasswordDTO | 

try {
    $apiInstance->renewPassword($body);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->renewPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\RenewPasswordDTO**](../Model/RenewPasswordDTO.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestResendValidationCode**
> object requestResendValidationCode($body)

Send email validation code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Docstudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Docstudio\ClientModel\RequestValCodeDTO(); // \Docstudio\ClientModel\RequestValCodeDTO | 

try {
    $result = $apiInstance->requestResendValidationCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->requestResendValidationCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\RequestValCodeDTO**](../Model/RequestValCodeDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **requestResetPassword**
> object requestResetPassword($body)

Request password reset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Docstudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Docstudio\ClientModel\RequestValCodeDTO(); // \Docstudio\ClientModel\RequestValCodeDTO | 

try {
    $result = $apiInstance->requestResetPassword($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->requestResetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\RequestValCodeDTO**](../Model/RequestValCodeDTO.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetPassword**
> resetPassword($body)

Reset password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Docstudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Docstudio\ClientModel\ResetPasswordDTO(); // \Docstudio\ClientModel\ResetPasswordDTO | 

try {
    $apiInstance->resetPassword($body);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\ResetPasswordDTO**](../Model/ResetPasswordDTO.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validation**
> validation($code, $type)

Validate user code from email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Docstudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | Validation code from email
$type = "type_example"; // string | Verification type

try {
    $apiInstance->validation($code, $type);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->validation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Validation code from email |
 **type** | **string**| Verification type |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

