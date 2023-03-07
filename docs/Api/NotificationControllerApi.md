# Docstudio\Client\NotificationControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAccountPreferences**](NotificationControllerApi.md#getaccountpreferences) | **GET** /api/v1/notification/account-preferences | Get account related notification preferences
[**getMailboxPreferences**](NotificationControllerApi.md#getmailboxpreferences) | **GET** /api/v1/notification/mailbox-preferences | Get mailbox related notification preferences
[**getUnreadNotifications**](NotificationControllerApi.md#getunreadnotifications) | **GET** /api/v1/notification | Get unread notifications
[**markAllNotificationRead**](NotificationControllerApi.md#markallnotificationread) | **POST** /api/v1/notification/read-all | Mark notifications as read
[**markNotificationRead**](NotificationControllerApi.md#marknotificationread) | **POST** /api/v1/notification/read | Mark notifications as read
[**saveAccountPreferences**](NotificationControllerApi.md#saveaccountpreferences) | **POST** /api/v1/notification/account-preferences | Save account related notification preferences
[**saveMailboxPreferences**](NotificationControllerApi.md#savemailboxpreferences) | **POST** /api/v1/notification/mailbox-preferences | Save mailbox related notification preferences

# **getAccountPreferences**
> map[string,int[]] getAccountPreferences()

Get account related notification preferences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountPreferences();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->getAccountPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**map[string,int[]]**](../Model/array.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailboxPreferences**
> map[string,int[]] getMailboxPreferences($mailbox)

Get mailbox related notification preferences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getMailboxPreferences($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->getMailboxPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)|  | [optional]

### Return type

[**map[string,int[]]**](../Model/array.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnreadNotifications**
> \Docstudio\ClientModel\PageDTOUserNotificationResponseDTO getUnreadNotifications($offset, $limit)

Get unread notifications

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->getUnreadNotifications($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->getUnreadNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]

### Return type

[**\Docstudio\ClientModel\PageDTOUserNotificationResponseDTO**](../Model/PageDTOUserNotificationResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markAllNotificationRead**
> markAllNotificationRead()

Mark notifications as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->markAllNotificationRead();
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->markAllNotificationRead: ', $e->getMessage(), PHP_EOL;
}
?>
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

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markNotificationRead**
> markNotificationRead($body)

Mark notifications as read

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Docstudio\ClientModel\SingleUuidDTO()); // \Docstudio\ClientModel\SingleUuidDTO[] | 

try {
    $apiInstance->markNotificationRead($body);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->markNotificationRead: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveAccountPreferences**
> saveAccountPreferences($body)

Save account related notification preferences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\map(); // map[string,int[]] | 

try {
    $apiInstance->saveAccountPreferences($body);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->saveAccountPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**map[string,int[]]**](../Model/map.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveMailboxPreferences**
> saveMailboxPreferences($body, $mailbox)

Save mailbox related notification preferences

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\map(); // map[string,int[]] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->saveMailboxPreferences($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->saveMailboxPreferences: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**map[string,int[]]**](../Model/map.md)|  |
 **mailbox** | [**string**](../Model/.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

