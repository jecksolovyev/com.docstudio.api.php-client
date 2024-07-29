# DocStudio\Client\PermissionControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**resendInvitation()**](PermissionControllerApi.md#resendInvitation) | **POST** /api/v1/permission/invite/{accountUuid}/{userUuid}/resend | Resend invitation for user to account |
| [**revokeInvitation()**](PermissionControllerApi.md#revokeInvitation) | **DELETE** /api/v1/permission/invite/{accountUuid}/{userUuid} | Revoke invitation for user to account |


## `resendInvitation()`

```php
resendInvitation($account_uuid, $user_uuid)
```

Resend invitation for user to account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$user_uuid = 'user_uuid_example'; // string | User UUID

try {
    $apiInstance->resendInvitation($account_uuid, $user_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionControllerApi->resendInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **user_uuid** | **string**| User UUID | |

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

## `revokeInvitation()`

```php
revokeInvitation($account_uuid, $user_uuid)
```

Revoke invitation for user to account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\PermissionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$user_uuid = 'user_uuid_example'; // string | User UUID

try {
    $apiInstance->revokeInvitation($account_uuid, $user_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionControllerApi->revokeInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **user_uuid** | **string**| User UUID | |

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
