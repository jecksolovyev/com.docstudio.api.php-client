# DocStudio\Client\AuthenticationControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**login()**](AuthenticationControllerApi.md#login) | **POST** /api/login | Login with email/password |
| [**loginByCode()**](AuthenticationControllerApi.md#loginByCode) | **POST** /api/login/by-code | Login with the code from email (for non-existing user) |
| [**logout()**](AuthenticationControllerApi.md#logout) | **POST** /api/logout | Logout |
| [**userExistsByCode()**](AuthenticationControllerApi.md#userExistsByCode) | **GET** /api/login/check-by-code/{code} | Check login ability with the code from email (for non-existing user) |


## `login()`

```php
login($login_dto): \DocStudio\Client\Model\LoginResponseDTO
```

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
$login_dto = new \DocStudio\Client\Model\LoginDTO(); // \DocStudio\Client\Model\LoginDTO

try {
    $result = $apiInstance->login($login_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationControllerApi->login: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **login_dto** | [**\DocStudio\Client\Model\LoginDTO**](../Model/LoginDTO.md)|  | |

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

## `loginByCode()`

```php
loginByCode($user_create_by_code_dto): \DocStudio\Client\Model\LoginEnvelopeResponseDTO
```

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
$user_create_by_code_dto = new \DocStudio\Client\Model\UserCreateByCodeDTO(); // \DocStudio\Client\Model\UserCreateByCodeDTO

try {
    $result = $apiInstance->loginByCode($user_create_by_code_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationControllerApi->loginByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_create_by_code_dto** | [**\DocStudio\Client\Model\UserCreateByCodeDTO**](../Model/UserCreateByCodeDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\LoginEnvelopeResponseDTO**](../Model/LoginEnvelopeResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logout()`

```php
logout()
```

Logout

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->logout();
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationControllerApi->logout: ', $e->getMessage(), PHP_EOL;
}
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

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userExistsByCode()`

```php
userExistsByCode(): \DocStudio\Client\Model\LoginCheckResponseDTO
```

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

try {
    $result = $apiInstance->userExistsByCode();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationControllerApi->userExistsByCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocStudio\Client\Model\LoginCheckResponseDTO**](../Model/LoginCheckResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
