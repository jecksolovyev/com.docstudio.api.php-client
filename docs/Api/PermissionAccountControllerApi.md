# DocStudio\Client\PermissionAccountControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAccAllPermissions**](PermissionAccountControllerApi.md#deleteaccallpermissions) | **DELETE** /api/v1/permission/{userUuid}/account/{accountUuid} | Delete user from account totally
[**deleteAccPermission**](PermissionAccountControllerApi.md#deleteaccpermission) | **DELETE** /api/v1/permission/{userUuid}/account/{accountUuid}/{permissionId} | Delete permission for specific &#x27;user-to-account&#x27; relation
[**deleteAccRole**](PermissionAccountControllerApi.md#deleteaccrole) | **DELETE** /api/v1/permission/{userUuid}/account/{accountUuid}/role/{roleUuid} | Delete role
[**getUserAccountPermissions**](PermissionAccountControllerApi.md#getuseraccountpermissions) | **GET** /api/v1/permission/{userUuid}/account/{accountUuid} | Read all user permissions
[**patchMbPermissionsPermissionAccount**](PermissionAccountControllerApi.md#patchmbpermissionspermissionaccount) | **PATCH** /api/v1/permission/{userUuid}/account/{accountUuid} | Add exact permission for selected user-to-account relation. Add if absent or ignore if already present.
[**replaceAllPermissionsPermissionAccount**](PermissionAccountControllerApi.md#replaceallpermissionspermissionaccount) | **PUT** /api/v1/permission/{userUuid}/account/{accountUuid} | Replace all permissions for selected user-to-account relation
[**setUserAccountPermissions**](PermissionAccountControllerApi.md#setuseraccountpermissions) | **POST** /api/v1/permission/{userUuid}/account/{accountUuid} | Write user permissions

# **deleteAccAllPermissions**
> deleteAccAllPermissions($user_uuid, $account_uuid)

Delete user from account totally

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account

try {
    $apiInstance->deleteAccAllPermissions($user_uuid, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->deleteAccAllPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **account_uuid** | [**string**](../Model/.md)| UUID of account |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccPermission**
> deleteAccPermission($user_uuid, $account_uuid, $permission_id)

Delete permission for specific 'user-to-account' relation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account
$permission_id = 56; // int | Permission Id

try {
    $apiInstance->deleteAccPermission($user_uuid, $account_uuid, $permission_id);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->deleteAccPermission: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **account_uuid** | [**string**](../Model/.md)| UUID of account |
 **permission_id** | **int**| Permission Id |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccRole**
> deleteAccRole($user_uuid, $account_uuid, $role_uuid)

Delete role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account
$role_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of role

try {
    $apiInstance->deleteAccRole($user_uuid, $account_uuid, $role_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->deleteAccRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **account_uuid** | [**string**](../Model/.md)| UUID of account |
 **role_uuid** | [**string**](../Model/.md)| UUID of role |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserAccountPermissions**
> \DocStudio\Client\Model\AccountPermissionsDTO getUserAccountPermissions($user_uuid, $account_uuid)

Read all user permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account

try {
    $result = $apiInstance->getUserAccountPermissions($user_uuid, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->getUserAccountPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **account_uuid** | [**string**](../Model/.md)| UUID of account |

### Return type

[**\DocStudio\Client\Model\AccountPermissionsDTO**](../Model/AccountPermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchMbPermissionsPermissionAccount**
> patchMbPermissionsPermissionAccount($body, $user_uuid, $account_uuid)

Add exact permission for selected user-to-account relation. Add if absent or ignore if already present.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\PermissionsDTO(); // \DocStudio\Client\Model\PermissionsDTO | 
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account

try {
    $apiInstance->patchMbPermissionsPermissionAccount($body, $user_uuid, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->patchMbPermissionsPermissionAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  |
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **account_uuid** | [**string**](../Model/.md)| UUID of account |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAllPermissionsPermissionAccount**
> replaceAllPermissionsPermissionAccount($body, $user_uuid, $account_uuid)

Replace all permissions for selected user-to-account relation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\PermissionsDTO(); // \DocStudio\Client\Model\PermissionsDTO | 
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account

try {
    $apiInstance->replaceAllPermissionsPermissionAccount($body, $user_uuid, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->replaceAllPermissionsPermissionAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\PermissionsDTO**](../Model/PermissionsDTO.md)|  |
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **account_uuid** | [**string**](../Model/.md)| UUID of account |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setUserAccountPermissions**
> setUserAccountPermissions($body, $user_uuid, $account_uuid)

Write user permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionAccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\BasePermissionsDTO(); // \DocStudio\Client\Model\BasePermissionsDTO | 
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of User
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account

try {
    $apiInstance->setUserAccountPermissions($body, $user_uuid, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionAccountControllerApi->setUserAccountPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\BasePermissionsDTO**](../Model/BasePermissionsDTO.md)|  |
 **user_uuid** | [**string**](../Model/.md)| UUID of User |
 **account_uuid** | [**string**](../Model/.md)| UUID of account |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

