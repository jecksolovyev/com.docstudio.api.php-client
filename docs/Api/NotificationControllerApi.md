# DocStudio\Client\NotificationControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAccountPreferences()**](NotificationControllerApi.md#getAccountPreferences) | **GET** /api/v1/notification/account-preferences | Get account related notification preferences |
| [**getMailboxPreferences()**](NotificationControllerApi.md#getMailboxPreferences) | **GET** /api/v1/notification/mailbox-preferences | Get mailbox related notification preferences |
| [**getUnreadNotifications()**](NotificationControllerApi.md#getUnreadNotifications) | **GET** /api/v1/notification | Get unread notifications |
| [**markAllNotificationRead()**](NotificationControllerApi.md#markAllNotificationRead) | **POST** /api/v1/notification/read-all | Mark notifications as read |
| [**markNotificationRead()**](NotificationControllerApi.md#markNotificationRead) | **POST** /api/v1/notification/read | Mark notifications as read |
| [**saveAccountPreferences()**](NotificationControllerApi.md#saveAccountPreferences) | **POST** /api/v1/notification/account-preferences | Save account related notification preferences |
| [**saveMailboxPreferences()**](NotificationControllerApi.md#saveMailboxPreferences) | **POST** /api/v1/notification/mailbox-preferences | Save mailbox related notification preferences |


## `getAccountPreferences()`

```php
getAccountPreferences(): array<string,int[]>
```

Get account related notification preferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAccountPreferences();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->getAccountPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**array<string,int[]>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxPreferences()`

```php
getMailboxPreferences($mailbox): array<string,int[]>
```

Get mailbox related notification preferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string

try {
    $result = $apiInstance->getMailboxPreferences($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->getMailboxPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**|  | [optional] |

### Return type

**array<string,int[]>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUnreadNotifications()`

```php
getUnreadNotifications($offset, $limit): \DocStudio\Client\Model\PageDTOUserNotificationResponseDTO
```

Get unread notifications

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->getUnreadNotifications($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->getUnreadNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOUserNotificationResponseDTO**](../Model/PageDTOUserNotificationResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markAllNotificationRead()`

```php
markAllNotificationRead()
```

Mark notifications as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->markAllNotificationRead();
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->markAllNotificationRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `markNotificationRead()`

```php
markNotificationRead($single_uuid_dto)
```

Mark notifications as read

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$single_uuid_dto = array(new \DocStudio\Client\Model\SingleUuidDTO()); // \DocStudio\Client\Model\SingleUuidDTO[]

try {
    $apiInstance->markNotificationRead($single_uuid_dto);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->markNotificationRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **single_uuid_dto** | [**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)|  | |

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

## `saveAccountPreferences()`

```php
saveAccountPreferences($request_body)
```

Save account related notification preferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,int[]>

try {
    $apiInstance->saveAccountPreferences($request_body);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->saveAccountPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,int[]>**](../Model/array.md)|  | |

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

## `saveMailboxPreferences()`

```php
saveMailboxPreferences($request_body, $mailbox)
```

Save mailbox related notification preferences

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\NotificationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = NULL; // array<string,int[]>
$mailbox = 'mailbox_example'; // string

try {
    $apiInstance->saveMailboxPreferences($request_body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling NotificationControllerApi->saveMailboxPreferences: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**array<string,int[]>**](../Model/array.md)|  | |
| **mailbox** | **string**|  | [optional] |

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
