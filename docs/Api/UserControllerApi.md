# DocStudio\Client\UserControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeInitials()**](UserControllerApi.md#changeInitials) | **PUT** /api/v1/user/initials | Update user&#39;s initials in base64 format |
| [**changePassword()**](UserControllerApi.md#changePassword) | **PUT** /api/v1/user/password | Update user&#39;s password |
| [**changeSignature()**](UserControllerApi.md#changeSignature) | **PUT** /api/v1/user/signature | Update user&#39;s eink signature in base64 format |
| [**confirmOauthEmailAndGetToken()**](UserControllerApi.md#confirmOauthEmailAndGetToken) | **GET** /api/v1/user/confirm-oauth-email-get-token | Confirm email from OAuth2 Identity Provider |
| [**deleteUser()**](UserControllerApi.md#deleteUser) | **DELETE** /api/v1/user | Delete user himself |
| [**findUser()**](UserControllerApi.md#findUser) | **GET** /api/v1/user/search | Find user |
| [**getAvatar()**](UserControllerApi.md#getAvatar) | **GET** /api/v1/user/avatar/{uuid} | Retrieve user avatar |
| [**getCorporateUserProfile()**](UserControllerApi.md#getCorporateUserProfile) | **GET** /api/v1/user/profile/{uuid}/account/{accountUuid} | Retrieve corporate user profile |
| [**getMailboxesInfo()**](UserControllerApi.md#getMailboxesInfo) | **POST** /api/v1/user/info | Retrieve users info |
| [**getProfile()**](UserControllerApi.md#getProfile) | **GET** /api/v1/user/profile | Retrieve self profile |
| [**updateCorporateUserProfile()**](UserControllerApi.md#updateCorporateUserProfile) | **PUT** /api/v1/user/profile/{uuid}/account/{accountUuid} | Update corporate user&#39;s profile |
| [**updateProfile()**](UserControllerApi.md#updateProfile) | **PUT** /api/v1/user/profile | Update self profile |


## `changeInitials()`

```php
changeInitials($body)
```

Update user's initials in base64 format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->changeInitials($body);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->changeInitials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**|  | [optional] |

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

## `changePassword()`

```php
changePassword($update_password_dto)
```

Update user's password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_password_dto = new \DocStudio\Client\Model\UpdatePasswordDTO(); // \DocStudio\Client\Model\UpdatePasswordDTO

try {
    $apiInstance->changePassword($update_password_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->changePassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_password_dto** | [**\DocStudio\Client\Model\UpdatePasswordDTO**](../Model/UpdatePasswordDTO.md)|  | |

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

## `changeSignature()`

```php
changeSignature($body)
```

Update user's eink signature in base64 format

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->changeSignature($body);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->changeSignature: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **string**|  | [optional] |

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

## `confirmOauthEmailAndGetToken()`

```php
confirmOauthEmailAndGetToken($code, $email_to_match): \DocStudio\Client\Model\LoginResponseDTO
```

Confirm email from OAuth2 Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Verification code
$email_to_match = 'email_to_match_example'; // string | Check email matches

try {
    $result = $apiInstance->confirmOauthEmailAndGetToken($code, $email_to_match);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->confirmOauthEmailAndGetToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Verification code | |
| **email_to_match** | **string**| Check email matches | [optional] |

### Return type

[**\DocStudio\Client\Model\LoginResponseDTO**](../Model/LoginResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUser()`

```php
deleteUser($check_message, $leave_existing)
```

Delete user himself

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_message = 'check_message_example'; // string | Proof message
$leave_existing = True; // bool | Leave existing account and mailbox. In this case mailbox and account should have other owners, otherwise error will be returned.

try {
    $apiInstance->deleteUser($check_message, $leave_existing);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->deleteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_message** | **string**| Proof message | |
| **leave_existing** | **bool**| Leave existing account and mailbox. In this case mailbox and account should have other owners, otherwise error will be returned. | |

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

## `findUser()`

```php
findUser($keyword, $exclude): \DocStudio\Client\Model\UserDTO[]
```

Find user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keyword = 'keyword_example'; // string
$exclude = 'exclude_example'; // string

try {
    $result = $apiInstance->findUser($keyword, $exclude);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->findUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **keyword** | **string**|  | |
| **exclude** | **string**|  | [optional] |

### Return type

[**\DocStudio\Client\Model\UserDTO[]**](../Model/UserDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvatar()`

```php
getAvatar($uuid, $initials): \SplFileObject
```

Retrieve user avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$initials = True; // bool | Get default avatar

try {
    $result = $apiInstance->getAvatar($uuid, $initials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **initials** | **bool**| Get default avatar | [optional] |

### Return type

**\SplFileObject**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporateUserProfile()`

```php
getCorporateUserProfile($uuid, $account_uuid): \DocStudio\Client\Model\CorporateProfileDTO
```

Retrieve corporate user profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$account_uuid = 'account_uuid_example'; // string

try {
    $result = $apiInstance->getCorporateUserProfile($uuid, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getCorporateUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **account_uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\CorporateProfileDTO**](../Model/CorporateProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxesInfo()`

```php
getMailboxesInfo($request_body): array<string,\DocStudio\Client\Model\UserInfoDTO>
```

Retrieve users info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->getMailboxesInfo($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getMailboxesInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**array<string,\DocStudio\Client\Model\UserInfoDTO>**](../Model/UserInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProfile()`

```php
getProfile(): \DocStudio\Client\Model\ProfileDTO
```

Retrieve self profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getProfile();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocStudio\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCorporateUserProfile()`

```php
updateCorporateUserProfile($uuid, $account_uuid, $update_profile_dto): \DocStudio\Client\Model\CorporateProfileDTO
```

Update corporate user's profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$account_uuid = 'account_uuid_example'; // string
$update_profile_dto = new \DocStudio\Client\Model\UpdateProfileDTO(); // \DocStudio\Client\Model\UpdateProfileDTO

try {
    $result = $apiInstance->updateCorporateUserProfile($uuid, $account_uuid, $update_profile_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->updateCorporateUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **account_uuid** | **string**|  | |
| **update_profile_dto** | [**\DocStudio\Client\Model\UpdateProfileDTO**](../Model/UpdateProfileDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CorporateProfileDTO**](../Model/CorporateProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateProfile()`

```php
updateProfile($update_profile_dto): \DocStudio\Client\Model\ProfileDTO
```

Update self profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_profile_dto = new \DocStudio\Client\Model\UpdateProfileDTO(); // \DocStudio\Client\Model\UpdateProfileDTO

try {
    $result = $apiInstance->updateProfile($update_profile_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->updateProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_profile_dto** | [**\DocStudio\Client\Model\UpdateProfileDTO**](../Model/UpdateProfileDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
