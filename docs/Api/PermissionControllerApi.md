# Swagger\Client\PermissionControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**resendInvitation**](PermissionControllerApi.md#resendinvitation) | **POST** /api/v1/permission/invite/{accountUuid}/{userUuid}/resend | Resend invitation for user to account
[**revokeInvitation**](PermissionControllerApi.md#revokeinvitation) | **DELETE** /api/v1/permission/invite/{accountUuid}/{userUuid} | Revoke invitation for user to account

# **resendInvitation**
> resendInvitation($account_uuid, $user_uuid)

Resend invitation for user to account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PermissionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | User UUID

try {
    $apiInstance->resendInvitation($account_uuid, $user_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionControllerApi->resendInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **user_uuid** | [**string**](../Model/.md)| User UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeInvitation**
> revokeInvitation($account_uuid, $user_uuid)

Revoke invitation for user to account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PermissionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | User UUID

try {
    $apiInstance->revokeInvitation($account_uuid, $user_uuid);
} catch (Exception $e) {
    echo 'Exception when calling PermissionControllerApi->revokeInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **user_uuid** | [**string**](../Model/.md)| User UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

