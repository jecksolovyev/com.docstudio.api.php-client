# DocStudio\Client\UserControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeInitials()**](UserControllerApi.md#changeInitials) | **PUT** /api/v1/user/initials | Update user&#39;s initials in base64 format |
| [**changePassword()**](UserControllerApi.md#changePassword) | **PUT** /api/v1/user/password | Update user&#39;s password |
| [**changeSignature()**](UserControllerApi.md#changeSignature) | **PUT** /api/v1/user/signature | Update user&#39;s eink signature in base64 format |
| [**deleteUser()**](UserControllerApi.md#deleteUser) | **DELETE** /api/v1/user | Delete user himself |
| [**findUser()**](UserControllerApi.md#findUser) | **GET** /api/v1/user/search | Find user |
| [**getAvatar()**](UserControllerApi.md#getAvatar) | **GET** /api/v1/user/avatar/{id} | Retrieve user avatar |
| [**getCorporateUserProfile()**](UserControllerApi.md#getCorporateUserProfile) | **GET** /api/v1/user/profile/{id}/account/{accountUuid} | Retrieve corporate user profile |
| [**getProfile()**](UserControllerApi.md#getProfile) | **GET** /api/v1/user/profile | Retrieve self profile |
| [**getUserMailboxesInfo()**](UserControllerApi.md#getUserMailboxesInfo) | **POST** /api/v1/user/info | Retrieve users info |
| [**patchCorporateUserProfile()**](UserControllerApi.md#patchCorporateUserProfile) | **PATCH** /api/v1/user/profile/{userId}/account/{accountId} | Partial update corporate user&#39;s profile |
| [**patchPreferences()**](UserControllerApi.md#patchPreferences) | **PATCH** /api/v1/user/preferences | Patch user preferences |
| [**patchProfile()**](UserControllerApi.md#patchProfile) | **PATCH** /api/v1/user/profile | Patch user profile |
| [**setPreferences()**](UserControllerApi.md#setPreferences) | **POST** /api/v1/user/preferences | Set user preferences |
| [**updateCorporateUserProfile()**](UserControllerApi.md#updateCorporateUserProfile) | **PUT** /api/v1/user/profile/{id}/account/{accountUuid} | Update corporate user&#39;s profile |
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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvatar()`

```php
getAvatar($id, $initials): \SplFileObject
```

Retrieve user avatar

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$initials = True; // bool | Get default avatar

try {
    $result = $apiInstance->getAvatar($id, $initials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **initials** | **bool**| Get default avatar | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCorporateUserProfile()`

```php
getCorporateUserProfile($id, $account_uuid): \DocStudio\Client\Model\CorporateProfileDTO
```

Retrieve corporate user profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$account_uuid = 'account_uuid_example'; // string

try {
    $result = $apiInstance->getCorporateUserProfile($id, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getCorporateUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **account_uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\CorporateProfileDTO**](../Model/CorporateProfileDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserMailboxesInfo()`

```php
getUserMailboxesInfo($request_body): array<string,\DocStudio\Client\Model\UserInfoDTO>
```

Retrieve users info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->getUserMailboxesInfo($request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getUserMailboxesInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**array<string,\DocStudio\Client\Model\UserInfoDTO>**](../Model/UserInfoDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchCorporateUserProfile()`

```php
patchCorporateUserProfile($user_id, $account_id, $patch_profile): \DocStudio\Client\Model\CorporateProfileDTO
```

Partial update corporate user's profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$account_id = 'account_id_example'; // string
$patch_profile = new \DocStudio\Client\Model\PatchProfile(); // \DocStudio\Client\Model\PatchProfile

try {
    $result = $apiInstance->patchCorporateUserProfile($user_id, $account_id, $patch_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->patchCorporateUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **account_id** | **string**|  | |
| **patch_profile** | [**\DocStudio\Client\Model\PatchProfile**](../Model/PatchProfile.md)|  | |

### Return type

[**\DocStudio\Client\Model\CorporateProfileDTO**](../Model/CorporateProfileDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchPreferences()`

```php
patchPreferences($user_preferences)
```

Patch user preferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_preferences = new \DocStudio\Client\Model\UserPreferences(); // \DocStudio\Client\Model\UserPreferences

try {
    $apiInstance->patchPreferences($user_preferences);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->patchPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_preferences** | [**\DocStudio\Client\Model\UserPreferences**](../Model/UserPreferences.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchProfile()`

```php
patchProfile($patch_profile): \DocStudio\Client\Model\ProfileDTO
```

Patch user profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patch_profile = new \DocStudio\Client\Model\PatchProfile(); // \DocStudio\Client\Model\PatchProfile

try {
    $result = $apiInstance->patchProfile($patch_profile);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->patchProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patch_profile** | [**\DocStudio\Client\Model\PatchProfile**](../Model/PatchProfile.md)|  | |

### Return type

[**\DocStudio\Client\Model\ProfileDTO**](../Model/ProfileDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `setPreferences()`

```php
setPreferences($user_preferences)
```

Set user preferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_preferences = new \DocStudio\Client\Model\UserPreferences(); // \DocStudio\Client\Model\UserPreferences

try {
    $apiInstance->setPreferences($user_preferences);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->setPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_preferences** | [**\DocStudio\Client\Model\UserPreferences**](../Model/UserPreferences.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCorporateUserProfile()`

```php
updateCorporateUserProfile($id, $account_uuid, $update_profile_dto): \DocStudio\Client\Model\CorporateProfileDTO
```

Update corporate user's profile

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$account_uuid = 'account_uuid_example'; // string
$update_profile_dto = new \DocStudio\Client\Model\UpdateProfileDTO(); // \DocStudio\Client\Model\UpdateProfileDTO

try {
    $result = $apiInstance->updateCorporateUserProfile($id, $account_uuid, $update_profile_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->updateCorporateUserProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **account_uuid** | **string**|  | |
| **update_profile_dto** | [**\DocStudio\Client\Model\UpdateProfileDTO**](../Model/UpdateProfileDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CorporateProfileDTO**](../Model/CorporateProfileDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
