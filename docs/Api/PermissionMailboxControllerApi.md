# DocStudio\Client\PermissionMailboxControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAllPermissions()**](PermissionMailboxControllerApi.md#deleteAllPermissions) | **DELETE** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid} | Delete all permissions and roles for selected user-to-mailbox relation |
| [**deletePermission()**](PermissionMailboxControllerApi.md#deletePermission) | **DELETE** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid}/{permissionId} | Delete permission for specific user-to-mailbox relation |
| [**deleteRoleFromMailbox()**](PermissionMailboxControllerApi.md#deleteRoleFromMailbox) | **DELETE** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid}/role/{roleUuid} | Delete role |
| [**patchMbPermissions()**](PermissionMailboxControllerApi.md#patchMbPermissions) | **PATCH** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid} | Add exact permissions/roles leaving existing as is. Ignore if already present. |
| [**replaceAllPermissions()**](PermissionMailboxControllerApi.md#replaceAllPermissions) | **PUT** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid} | Replace all permissions for selected user-to-mailbox relation |


## `deleteAllPermissions()`

```php
deleteAllPermissions($user_uuid, $mailbox_uuid)
```

Delete all permissions and roles for selected user-to-mailbox relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$mailbox_uuid = 'mailbox_uuid_example'; // string | UUID of mailbox

try {
    $apiInstance->deleteAllPermissions($user_uuid, $mailbox_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->deleteAllPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **mailbox_uuid** | **string**| UUID of mailbox | |

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

## `deletePermission()`

```php
deletePermission($user_uuid, $mailbox_uuid, $permission_id)
```

Delete permission for specific user-to-mailbox relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$mailbox_uuid = 'mailbox_uuid_example'; // string | UUID of mailbox
$permission_id = 56; // int | Permission Id

try {
    $apiInstance->deletePermission($user_uuid, $mailbox_uuid, $permission_id);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->deletePermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **mailbox_uuid** | **string**| UUID of mailbox | |
| **permission_id** | **int**| Permission Id | |

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

## `deleteRoleFromMailbox()`

```php
deleteRoleFromMailbox($user_uuid, $mailbox_uuid, $role_uuid)
```

Delete role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$mailbox_uuid = 'mailbox_uuid_example'; // string | UUID of mailbox
$role_uuid = 'role_uuid_example'; // string | UUID of role

try {
    $apiInstance->deleteRoleFromMailbox($user_uuid, $mailbox_uuid, $role_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->deleteRoleFromMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **mailbox_uuid** | **string**| UUID of mailbox | |
| **role_uuid** | **string**| UUID of role | |

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

## `patchMbPermissions()`

```php
patchMbPermissions($user_uuid, $mailbox_uuid, $permissions_dto)
```

Add exact permissions/roles leaving existing as is. Ignore if already present.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$mailbox_uuid = 'mailbox_uuid_example'; // string | UUID of mailbox
$permissions_dto = new \DocStudio\Client\Model\PermissionsDTO(); // \DocStudio\Client\Model\PermissionsDTO

try {
    $apiInstance->patchMbPermissions($user_uuid, $mailbox_uuid, $permissions_dto);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->patchMbPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **mailbox_uuid** | **string**| UUID of mailbox | |
| **permissions_dto** | [**\DocStudio\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  | |

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

## `replaceAllPermissions()`

```php
replaceAllPermissions($user_uuid, $mailbox_uuid, $permissions_dto)
```

Replace all permissions for selected user-to-mailbox relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$mailbox_uuid = 'mailbox_uuid_example'; // string | UUID of mailbox
$permissions_dto = new \DocStudio\Client\Model\PermissionsDTO(); // \DocStudio\Client\Model\PermissionsDTO

try {
    $apiInstance->replaceAllPermissions($user_uuid, $mailbox_uuid, $permissions_dto);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->replaceAllPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **mailbox_uuid** | **string**| UUID of mailbox | |
| **permissions_dto** | [**\DocStudio\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  | |

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
