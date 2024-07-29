# DocStudio\Client\UserControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptInvite()**](UserControllerApi.md#acceptInvite) | **POST** /api/v1/user/invite/accept/{inviteCode} | Accept invite |
| [**changePassword()**](UserControllerApi.md#changePassword) | **PUT** /api/v1/user/password | Update user&#39;s password |
| [**changeSignature()**](UserControllerApi.md#changeSignature) | **PUT** /api/v1/user/signature | Update user&#39;s eink signature in base64 format |
| [**createInvitation()**](UserControllerApi.md#createInvitation) | **POST** /api/v1/user/invite | Create invitation to join account or mailbox with defined permissions. |
| [**declineInvite()**](UserControllerApi.md#declineInvite) | **DELETE** /api/v1/user/invite/decline/{inviteCode} | Decline invite |
| [**deleteUser()**](UserControllerApi.md#deleteUser) | **DELETE** /api/v1/user | Delete user himself |
| [**findUser()**](UserControllerApi.md#findUser) | **GET** /api/v1/user/search | Find user |
| [**getAvatar()**](UserControllerApi.md#getAvatar) | **GET** /api/v1/user/avatar/{userUuid} | Retrieve user avatar |
| [**getInvites()**](UserControllerApi.md#getInvites) | **GET** /api/v1/user/invites | Get paged invites list |
| [**getMailboxesInfo()**](UserControllerApi.md#getMailboxesInfo) | **POST** /api/v1/user/info | Retrieve users info |
| [**getProfile()**](UserControllerApi.md#getProfile) | **GET** /api/v1/user/profile | Retrieve user profile |
| [**updateInvitation()**](UserControllerApi.md#updateInvitation) | **PUT** /api/v1/user/invite/{uuid} | Update invitation by userUuid. |
| [**updateProfile()**](UserControllerApi.md#updateProfile) | **PUT** /api/v1/user/profile | Update user&#39;s profile |


## `acceptInvite()`

```php
acceptInvite($invite_code)
```

Accept invite

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
$invite_code = 'invite_code_example'; // string | Invite code

try {
    $apiInstance->acceptInvite($invite_code);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->acceptInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_code** | **string**| Invite code | |

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

## `createInvitation()`

```php
createInvitation($invitation_post_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Create invitation to join account or mailbox with defined permissions.

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
$invitation_post_dto = new \DocStudio\Client\Model\InvitationPostDTO(); // \DocStudio\Client\Model\InvitationPostDTO

try {
    $result = $apiInstance->createInvitation($invitation_post_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->createInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invitation_post_dto** | [**\DocStudio\Client\Model\InvitationPostDTO**](../Model/InvitationPostDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `declineInvite()`

```php
declineInvite($invite_code)
```

Decline invite

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
$invite_code = 'invite_code_example'; // string | Invite code

try {
    $apiInstance->declineInvite($invite_code);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->declineInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_code** | **string**| Invite code | |

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
getAvatar($user_uuid, $initials): \SplFileObject
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
$user_uuid = 'user_uuid_example'; // string
$initials = True; // bool | Get default avatar

try {
    $result = $apiInstance->getAvatar($user_uuid, $initials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getAvatar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**|  | |
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

## `getInvites()`

```php
getInvites($offset, $limit): \DocStudio\Client\Model\PageDTOUserInvitationDTO
```

Get paged invites list

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
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->getInvites($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->getInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOUserInvitationDTO**](../Model/PageDTOUserInvitationDTO.md)

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

Retrieve user profile

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

## `updateInvitation()`

```php
updateInvitation($uuid, $invitation_put_dto)
```

Update invitation by userUuid.

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
$invitation_put_dto = new \DocStudio\Client\Model\InvitationPutDTO(); // \DocStudio\Client\Model\InvitationPutDTO

try {
    $apiInstance->updateInvitation($uuid, $invitation_put_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserControllerApi->updateInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **invitation_put_dto** | [**\DocStudio\Client\Model\InvitationPutDTO**](../Model/InvitationPutDTO.md)|  | |

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

## `updateProfile()`

```php
updateProfile($update_profile_dto): \DocStudio\Client\Model\ProfileDTO
```

Update user's profile

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
