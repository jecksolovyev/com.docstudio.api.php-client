# DocStudio\Client\RegistrationControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserPasswordPolicy()**](RegistrationControllerApi.md#getUserPasswordPolicy) | **GET** /registration/passwordPolicy | Get user password policy |
| [**register()**](RegistrationControllerApi.md#register) | **POST** /registration | Register a user with validation code |
| [**renewPassword()**](RegistrationControllerApi.md#renewPassword) | **POST** /registration/renewPassword | Renew user&#39;s password |
| [**requestResendValidationCode()**](RegistrationControllerApi.md#requestResendValidationCode) | **POST** /registration/sendRegistrationCode | Send email validation code |
| [**requestResetPassword()**](RegistrationControllerApi.md#requestResetPassword) | **POST** /registration/requestPasswordReset | Request password reset |
| [**resetPassword()**](RegistrationControllerApi.md#resetPassword) | **POST** /registration/resetPassword | Reset password |
| [**validation()**](RegistrationControllerApi.md#validation) | **GET** /registration/validate | Validate user code from email |


## `getUserPasswordPolicy()`

```php
getUserPasswordPolicy($email): \DocStudio\Client\Model\PasswordPolicy
```

Get user password policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$email = 'email_example'; // string | Email of user

try {
    $result = $apiInstance->getUserPasswordPolicy($email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->getUserPasswordPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **email** | **string**| Email of user | |

### Return type

[**\DocStudio\Client\Model\PasswordPolicy**](../Model/PasswordPolicy.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `register()`

```php
register($code, $user_create_dto, $code_type): \DocStudio\Client\Model\LoginResponseDTO
```

Register a user with validation code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Validation code
$user_create_dto = new \DocStudio\Client\Model\UserCreateDTO(); // \DocStudio\Client\Model\UserCreateDTO
$code_type = 'code_type_example'; // string | Type of code

try {
    $result = $apiInstance->register($code, $user_create_dto, $code_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->register: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Validation code | |
| **user_create_dto** | [**\DocStudio\Client\Model\UserCreateDTO**](../Model/UserCreateDTO.md)|  | |
| **code_type** | **string**| Type of code | [optional] |

### Return type

[**\DocStudio\Client\Model\LoginResponseDTO**](../Model/LoginResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renewPassword()`

```php
renewPassword($renew_password_dto)
```

Renew user's password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$renew_password_dto = new \DocStudio\Client\Model\RenewPasswordDTO(); // \DocStudio\Client\Model\RenewPasswordDTO

try {
    $apiInstance->renewPassword($renew_password_dto);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->renewPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **renew_password_dto** | [**\DocStudio\Client\Model\RenewPasswordDTO**](../Model/RenewPasswordDTO.md)|  | |

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

## `requestResendValidationCode()`

```php
requestResendValidationCode($request_val_code_dto): object
```

Send email validation code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_val_code_dto = new \DocStudio\Client\Model\RequestValCodeDTO(); // \DocStudio\Client\Model\RequestValCodeDTO

try {
    $result = $apiInstance->requestResendValidationCode($request_val_code_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->requestResendValidationCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_val_code_dto** | [**\DocStudio\Client\Model\RequestValCodeDTO**](../Model/RequestValCodeDTO.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestResetPassword()`

```php
requestResetPassword($request_val_code_dto): object
```

Request password reset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_val_code_dto = new \DocStudio\Client\Model\RequestValCodeDTO(); // \DocStudio\Client\Model\RequestValCodeDTO

try {
    $result = $apiInstance->requestResetPassword($request_val_code_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->requestResetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_val_code_dto** | [**\DocStudio\Client\Model\RequestValCodeDTO**](../Model/RequestValCodeDTO.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `resetPassword()`

```php
resetPassword($reset_password_dto)
```

Reset password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$reset_password_dto = new \DocStudio\Client\Model\ResetPasswordDTO(); // \DocStudio\Client\Model\ResetPasswordDTO

try {
    $apiInstance->resetPassword($reset_password_dto);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->resetPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reset_password_dto** | [**\DocStudio\Client\Model\ResetPasswordDTO**](../Model/ResetPasswordDTO.md)|  | |

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

## `validation()`

```php
validation($code, $type): object
```

Validate user code from email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\RegistrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Validation code from email
$type = 'type_example'; // string | Verification type

try {
    $result = $apiInstance->validation($code, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationControllerApi->validation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Validation code from email | |
| **type** | **string**| Verification type | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
