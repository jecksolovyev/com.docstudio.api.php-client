# DocStudio\Client\PermissionAccountControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAccAllPermissions()**](PermissionAccountControllerApi.md#deleteAccAllPermissions) | **DELETE** /api/v1/permission/{userUuid}/account/{accountUuid} | Delete user from account totally |
| [**deleteAccPermission()**](PermissionAccountControllerApi.md#deleteAccPermission) | **DELETE** /api/v1/permission/{userUuid}/account/{accountUuid}/{permissionId} | Delete permission for specific &#39;user-to-account&#39; relation |
| [**deleteAccRole()**](PermissionAccountControllerApi.md#deleteAccRole) | **DELETE** /api/v1/permission/{userUuid}/account/{accountUuid}/role/{roleUuid} | Delete role |
| [**getUserAccountPermissions()**](PermissionAccountControllerApi.md#getUserAccountPermissions) | **GET** /api/v1/permission/{userUuid}/account/{accountUuid} | Read all user permissions |
| [**patchMbPermissionsPermissionAccount()**](PermissionAccountControllerApi.md#patchMbPermissionsPermissionAccount) | **PATCH** /api/v1/permission/{userUuid}/account/{accountUuid} | Add exact permission for selected user-to-account relation. Add if absent or ignore if already present. |
| [**replaceAllPermissionsPermissionAccount()**](PermissionAccountControllerApi.md#replaceAllPermissionsPermissionAccount) | **PUT** /api/v1/permission/{userUuid}/account/{accountUuid} | Replace all permissions for selected user-to-account relation |
| [**setUserAccountPermissions()**](PermissionAccountControllerApi.md#setUserAccountPermissions) | **POST** /api/v1/permission/{userUuid}/account/{accountUuid} | Write user permissions |


## `deleteAccAllPermissions()`

```php
deleteAccAllPermissions($user_uuid, $account_uuid)
```

Delete user from account totally

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$account_uuid = 'account_uuid_example'; // string | UUID of account

try {
    $apiInstance->deleteAccAllPermissions($user_uuid, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->deleteAccAllPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **account_uuid** | **string**| UUID of account | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccPermission()`

```php
deleteAccPermission($user_uuid, $account_uuid, $permission_id)
```

Delete permission for specific 'user-to-account' relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$account_uuid = 'account_uuid_example'; // string | UUID of account
$permission_id = 56; // int | Permission Id

try {
    $apiInstance->deleteAccPermission($user_uuid, $account_uuid, $permission_id);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->deleteAccPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **account_uuid** | **string**| UUID of account | |
| **permission_id** | **int**| Permission Id | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccRole()`

```php
deleteAccRole($user_uuid, $account_uuid, $role_uuid)
```

Delete role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$account_uuid = 'account_uuid_example'; // string | UUID of account
$role_uuid = 'role_uuid_example'; // string | UUID of role

try {
    $apiInstance->deleteAccRole($user_uuid, $account_uuid, $role_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->deleteAccRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **account_uuid** | **string**| UUID of account | |
| **role_uuid** | **string**| UUID of role | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserAccountPermissions()`

```php
getUserAccountPermissions($user_uuid, $account_uuid): \DocStudio\Client\Model\AccountPermissionsDTO
```

Read all user permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$account_uuid = 'account_uuid_example'; // string | UUID of account

try {
    $result = $apiInstance->getUserAccountPermissions($user_uuid, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->getUserAccountPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **account_uuid** | **string**| UUID of account | |

### Return type

[**\DocStudio\Client\Model\AccountPermissionsDTO**](../Model/AccountPermissionsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchMbPermissionsPermissionAccount()`

```php
patchMbPermissionsPermissionAccount($user_uuid, $account_uuid, $permissions_dto)
```

Add exact permission for selected user-to-account relation. Add if absent or ignore if already present.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$account_uuid = 'account_uuid_example'; // string | UUID of account
$permissions_dto = new \DocStudio\Client\Model\PermissionsDTO(); // \DocStudio\Client\Model\PermissionsDTO

try {
    $apiInstance->patchMbPermissionsPermissionAccount($user_uuid, $account_uuid, $permissions_dto);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->patchMbPermissionsPermissionAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **account_uuid** | **string**| UUID of account | |
| **permissions_dto** | [**\DocStudio\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  | |

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

## `replaceAllPermissionsPermissionAccount()`

```php
replaceAllPermissionsPermissionAccount($user_uuid, $account_uuid, $permissions_dto)
```

Replace all permissions for selected user-to-account relation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$account_uuid = 'account_uuid_example'; // string | UUID of account
$permissions_dto = new \DocStudio\Client\Model\PermissionsDTO(); // \DocStudio\Client\Model\PermissionsDTO

try {
    $apiInstance->replaceAllPermissionsPermissionAccount($user_uuid, $account_uuid, $permissions_dto);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->replaceAllPermissionsPermissionAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **account_uuid** | **string**| UUID of account | |
| **permissions_dto** | [**\DocStudio\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  | |

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

## `setUserAccountPermissions()`

```php
setUserAccountPermissions($user_uuid, $account_uuid, $base_permissions_dto)
```

Write user permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$user_uuid = 'user_uuid_example'; // string | UUID of User
$account_uuid = 'account_uuid_example'; // string | UUID of account
$base_permissions_dto = new \DocStudio\Client\Model\BasePermissionsDTO(); // \DocStudio\Client\Model\BasePermissionsDTO

try {
    $apiInstance->setUserAccountPermissions($user_uuid, $account_uuid, $base_permissions_dto);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->setUserAccountPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_uuid** | **string**| UUID of User | |
| **account_uuid** | **string**| UUID of account | |
| **base_permissions_dto** | [**\DocStudio\Client\Model\BasePermissionsDTO**](../Model/BasePermissionsDTO.md)|  | |

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
