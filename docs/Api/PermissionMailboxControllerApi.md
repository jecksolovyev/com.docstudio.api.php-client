# DocStudio\Client\PermissionMailboxControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAllPermissions**](PermissionMailboxControllerApi.md#deleteallpermissions) | **DELETE** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid} | Delete all permissions and roles for selected user-to-mailbox relation
[**deletePermission**](PermissionMailboxControllerApi.md#deletepermission) | **DELETE** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid}/{permissionId} | Delete permission for specific user-to-mailbox relation
[**deleteRoleFromMailbox**](PermissionMailboxControllerApi.md#deleterolefrommailbox) | **DELETE** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid}/role/{roleUuid} | Delete role
[**patchMbPermissions**](PermissionMailboxControllerApi.md#patchmbpermissions) | **PATCH** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid} | Add exact permissions/roles leaving existing as is. Ignore if already present.
[**replaceAllPermissions**](PermissionMailboxControllerApi.md#replaceallpermissions) | **PUT** /api/v1/permission/{userUuid}/mailbox/{mailboxUuid} | Replace all permissions for selected user-to-mailbox relation

# **deleteAllPermissions**
> deleteAllPermissions($user_uuid, $mailbox_uuid)

Delete all permissions and roles for selected user-to-mailbox relation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of mailbox

try {
    $apiInstance->deleteAllPermissions($user_uuid, $mailbox_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->deleteAllPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **mailbox_uuid** | [**string**](../Model/.md)| UUID of mailbox |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePermission**
> deletePermission($user_uuid, $mailbox_uuid, $permission_id)

Delete permission for specific user-to-mailbox relation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of mailbox
$permission_id = 56; // int | Permission Id

try {
    $apiInstance->deletePermission($user_uuid, $mailbox_uuid, $permission_id);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->deletePermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **mailbox_uuid** | [**string**](../Model/.md)| UUID of mailbox |
 **permission_id** | **int**| Permission Id |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRoleFromMailbox**
> deleteRoleFromMailbox($user_uuid, $mailbox_uuid, $role_uuid)

Delete role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of mailbox
$role_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of role

try {
    $apiInstance->deleteRoleFromMailbox($user_uuid, $mailbox_uuid, $role_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->deleteRoleFromMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **mailbox_uuid** | [**string**](../Model/.md)| UUID of mailbox |
 **role_uuid** | [**string**](../Model/.md)| UUID of role |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchMbPermissions**
> patchMbPermissions($body, $user_uuid, $mailbox_uuid)

Add exact permissions/roles leaving existing as is. Ignore if already present.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\PermissionsDTO(); // \DocStudio\Client\Model\PermissionsDTO | 
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of mailbox

try {
    $apiInstance->patchMbPermissions($body, $user_uuid, $mailbox_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->patchMbPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  |
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **mailbox_uuid** | [**string**](../Model/.md)| UUID of mailbox |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllPermissions**
> replaceAllPermissions($body, $user_uuid, $mailbox_uuid)

Replace all permissions for selected user-to-mailbox relation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionMailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\PermissionsDTO(); // \DocStudio\Client\Model\PermissionsDTO | 
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of mailbox

try {
    $apiInstance->replaceAllPermissions($body, $user_uuid, $mailbox_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionMailboxControllerApi->replaceAllPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  |
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **mailbox_uuid** | [**string**](../Model/.md)| UUID of mailbox |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

