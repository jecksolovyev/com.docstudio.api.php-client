# DocStudio\Client\AiAssistantControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**envelopeAssistConversationGet()**](AiAssistantControllerApi.md#envelopeAssistConversationGet) | **GET** /api/v1/ai-assistant/envelope/{id}/history | Retrieve existing chat with AI assistant for envelope |
| [**envelopeAssistRequest()**](AiAssistantControllerApi.md#envelopeAssistRequest) | **GET** /api/v1/ai-assistant/envelope/{id} | Chat with AI assistant |
| [**startTemplateSession()**](AiAssistantControllerApi.md#startTemplateSession) | **POST** /api/v1/ai-assistant/template | Start template session with AI assistant |
| [**templateAssistRequest()**](AiAssistantControllerApi.md#templateAssistRequest) | **GET** /api/v1/ai-assistant/template-session/{id} | Chat with AI assistant |


## `envelopeAssistConversationGet()`

```php
envelopeAssistConversationGet($id, $mailbox): \DocStudio\Client\Model\AiAssistantConversation
```

Retrieve existing chat with AI assistant for envelope

Empty conversation will be returned if no conversation exists

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AiAssistantControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of Envelope
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->envelopeAssistConversationGet($id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AiAssistantControllerApi->envelopeAssistConversationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of Envelope | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\AiAssistantConversation**](../Model/AiAssistantConversation.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `envelopeAssistRequest()`

```php
envelopeAssistRequest($id, $mailbox, $message): string
```

Chat with AI assistant

Ask question or request summary about the envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AiAssistantControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of Envelope
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$message = 'message_example'; // string | User message

try {
    $result = $apiInstance->envelopeAssistRequest($id, $mailbox, $message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AiAssistantControllerApi->envelopeAssistRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of Envelope | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **message** | **string**| User message | [optional] |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startTemplateSession()`

```php
startTemplateSession($mailbox, $template_session_request, $id): \DocStudio\Client\Model\IdResult
```

Start template session with AI assistant

Send template context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AiAssistantControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_session_request = new \DocStudio\Client\Model\TemplateSessionRequest(); // \DocStudio\Client\Model\TemplateSessionRequest
$id = 'id_example'; // string | Template ID

try {
    $result = $apiInstance->startTemplateSession($mailbox, $template_session_request, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AiAssistantControllerApi->startTemplateSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **template_session_request** | [**\DocStudio\Client\Model\TemplateSessionRequest**](../Model/TemplateSessionRequest.md)|  | |
| **id** | **string**| Template ID | [optional] |

### Return type

[**\DocStudio\Client\Model\IdResult**](../Model/IdResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `templateAssistRequest()`

```php
templateAssistRequest($id, $message, $mailbox): string
```

Chat with AI assistant

Ask question within the template context

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AiAssistantControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Session ID
$message = 'message_example'; // string | User message
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->templateAssistRequest($id, $message, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AiAssistantControllerApi->templateAssistRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Session ID | |
| **message** | **string**| User message | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/event-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
