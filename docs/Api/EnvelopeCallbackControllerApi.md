# DocStudio\Client\EnvelopeCallbackControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkCallback()**](EnvelopeCallbackControllerApi.md#checkCallback) | **GET** /api/v1/envelope/callback/{callbackUuid}/check | Check callback with certain envelope |
| [**createCallback()**](EnvelopeCallbackControllerApi.md#createCallback) | **POST** /api/v1/envelope/callback/add | Add new callback |
| [**listCallbacks()**](EnvelopeCallbackControllerApi.md#listCallbacks) | **GET** /api/v1/envelope/callback/list | List callbacks |
| [**removeCallback()**](EnvelopeCallbackControllerApi.md#removeCallback) | **DELETE** /api/v1/envelope/callback/{callbackUuid}/remove | Delete callback |
| [**sendCallback()**](EnvelopeCallbackControllerApi.md#sendCallback) | **GET** /api/v1/envelope/callback/{callbackUuid}/send | Send callback with certain envelope |


## `checkCallback()`

```php
checkCallback($callback_uuid, $envelope_uuid, $mailbox_uuid): \DocStudio\Client\Model\EnvelopeCheckResultDTO
```

Check callback with certain envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeCallbackControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$callback_uuid = 'callback_uuid_example'; // string | Callback id
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->checkCallback($callback_uuid, $envelope_uuid, $mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCallbackControllerApi->checkCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **callback_uuid** | **string**| Callback id | |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox_uuid** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeCheckResultDTO**](../Model/EnvelopeCheckResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCallback()`

```php
createCallback($mailbox, $create_envelope_callback_dto): \DocStudio\Client\Model\EnvelopeCallbackDTO
```

Add new callback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeCallbackControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$create_envelope_callback_dto = new \DocStudio\Client\Model\CreateEnvelopeCallbackDTO(); // \DocStudio\Client\Model\CreateEnvelopeCallbackDTO

try {
    $result = $apiInstance->createCallback($mailbox, $create_envelope_callback_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCallbackControllerApi->createCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **create_envelope_callback_dto** | [**\DocStudio\Client\Model\CreateEnvelopeCallbackDTO**](../Model/CreateEnvelopeCallbackDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\EnvelopeCallbackDTO**](../Model/EnvelopeCallbackDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCallbacks()`

```php
listCallbacks($mailbox): \DocStudio\Client\Model\EnvelopeCallbackDTO[]
```

List callbacks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeCallbackControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->listCallbacks($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCallbackControllerApi->listCallbacks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeCallbackDTO[]**](../Model/EnvelopeCallbackDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeCallback()`

```php
removeCallback($callback_uuid, $mailbox)
```

Delete callback

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeCallbackControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$callback_uuid = 'callback_uuid_example'; // string | Callback id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->removeCallback($callback_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCallbackControllerApi->removeCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **callback_uuid** | **string**| Callback id | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

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

## `sendCallback()`

```php
sendCallback($callback_uuid, $envelope_uuid, $mailbox_uuid): \DocStudio\Client\Model\EnvelopeSendResultDTO
```

Send callback with certain envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeCallbackControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$callback_uuid = 'callback_uuid_example'; // string | Callback id
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->sendCallback($callback_uuid, $envelope_uuid, $mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCallbackControllerApi->sendCallback: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **callback_uuid** | **string**| Callback id | |
| **envelope_uuid** | **string**| Envelope UUID | |
| **mailbox_uuid** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeSendResultDTO**](../Model/EnvelopeSendResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
