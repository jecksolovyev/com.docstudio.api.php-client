# DocStudio\Client\EnvelopeSendControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oneTimeSend()**](EnvelopeSendControllerApi.md#oneTimeSend) | **POST** /api/v1/envelope/one-time-send | The envelope will be sent just once (template will be marked as deleted) |
| [**publicQuickSendWithOneExternalDocument()**](EnvelopeSendControllerApi.md#publicQuickSendWithOneExternalDocument) | **POST** /api/v1/envelope/public-quick-send | Public quick send envelope with one external document |
| [**quickSendExternalDocuments()**](EnvelopeSendControllerApi.md#quickSendExternalDocuments) | **POST** /api/v1/envelope/quick-send | Quick send envelope with external documents only |
| [**send()**](EnvelopeSendControllerApi.md#send) | **POST** /api/v1/envelope/send | Send envelope |
| [**sendByTemplateCode()**](EnvelopeSendControllerApi.md#sendByTemplateCode) | **POST** /api/v1/envelope/send-by-share-code | Send envelope by template code |


## `oneTimeSend()`

```php
oneTimeSend($mailbox, $one_time_send_dto): \DocStudio\Client\Model\SingleUuidDTO
```

The envelope will be sent just once (template will be marked as deleted)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeSendControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$one_time_send_dto = new \DocStudio\Client\Model\OneTimeSendDTO(); // \DocStudio\Client\Model\OneTimeSendDTO

try {
    $result = $apiInstance->oneTimeSend($mailbox, $one_time_send_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSendControllerApi->oneTimeSend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **one_time_send_dto** | [**\DocStudio\Client\Model\OneTimeSendDTO**](../Model/OneTimeSendDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `publicQuickSendWithOneExternalDocument()`

```php
publicQuickSendWithOneExternalDocument($data, $file): \DocStudio\Client\Model\IdResult
```

Public quick send envelope with one external document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeSendControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$data = new \DocStudio\Client\Model\PublicQuickSend(); // \DocStudio\Client\Model\PublicQuickSend
$file = '/path/to/file.txt'; // \SplFileObject | File for external document

try {
    $result = $apiInstance->publicQuickSendWithOneExternalDocument($data, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSendControllerApi->publicQuickSendWithOneExternalDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **data** | [**\DocStudio\Client\Model\PublicQuickSend**](../Model/PublicQuickSend.md)|  | |
| **file** | **\SplFileObject****\SplFileObject**| File for external document | |

### Return type

[**\DocStudio\Client\Model\IdResult**](../Model/IdResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `quickSendExternalDocuments()`

```php
quickSendExternalDocuments($mailbox, $data, $files): \DocStudio\Client\Model\SingleUuidDTO
```

Quick send envelope with external documents only

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeSendControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$data = new \DocStudio\Client\Model\QuickSendDTO(); // \DocStudio\Client\Model\QuickSendDTO
$files = array('/path/to/file.txt'); // \SplFileObject[] | Files for external documents

try {
    $result = $apiInstance->quickSendExternalDocuments($mailbox, $data, $files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSendControllerApi->quickSendExternalDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **data** | [**\DocStudio\Client\Model\QuickSendDTO**](../Model/QuickSendDTO.md)|  | |
| **files** | **\SplFileObject[]**| Files for external documents | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `send()`

```php
send($mailbox, $env_post_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Send envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeSendControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_post_dto = new \DocStudio\Client\Model\EnvPostDTO(); // \DocStudio\Client\Model\EnvPostDTO

try {
    $result = $apiInstance->send($mailbox, $env_post_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSendControllerApi->send: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_post_dto** | [**\DocStudio\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendByTemplateCode()`

```php
sendByTemplateCode($send_env_by_code_dto): \DocStudio\Client\Model\LoginEnvelopeResponseDTO
```

Send envelope by template code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeSendControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_env_by_code_dto = new \DocStudio\Client\Model\SendEnvByCodeDTO(); // \DocStudio\Client\Model\SendEnvByCodeDTO

try {
    $result = $apiInstance->sendByTemplateCode($send_env_by_code_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSendControllerApi->sendByTemplateCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_env_by_code_dto** | [**\DocStudio\Client\Model\SendEnvByCodeDTO**](../Model/SendEnvByCodeDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\LoginEnvelopeResponseDTO**](../Model/LoginEnvelopeResponseDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
