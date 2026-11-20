# DocStudio\Client\EnvelopeRoleActionControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approve()**](EnvelopeRoleActionControllerApi.md#approve) | **POST** /api/v1/envelope/approve | Approve envelope |
| [**fill()**](EnvelopeRoleActionControllerApi.md#fill) | **PUT** /api/v1/envelope/fill | Fill envelope |
| [**generateStamp()**](EnvelopeRoleActionControllerApi.md#generateStamp) | **POST** /api/v1/envelope/generate-stamp | Generate stamp by certificate |
| [**getDocumentFileForSign()**](EnvelopeRoleActionControllerApi.md#getDocumentFileForSign) | **GET** /api/v1/envelope/{id}/for-sign-file | Get BINARY or XML for signing |
| [**getDocumentsForSign()**](EnvelopeRoleActionControllerApi.md#getDocumentsForSign) | **POST** /api/v1/envelope/{id}/for-sign | BINARYs and XMLs for signing |
| [**getMassSigningReport()**](EnvelopeRoleActionControllerApi.md#getMassSigningReport) | **GET** /api/v1/envelope/signing-report/{sessionId} | Get mass signing report |
| [**signEnvelope()**](EnvelopeRoleActionControllerApi.md#signEnvelope) | **PUT** /api/v1/envelope/{id}/sign | Sign envelope documents |
| [**signSES()**](EnvelopeRoleActionControllerApi.md#signSES) | **POST** /api/v1/envelope/{id}/sign-ses | Sign envelope with SES |


## `approve()`

```php
approve($mailbox, $bulk_envelope_action_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Approve envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeRoleActionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$bulk_envelope_action_dto = new \DocStudio\Client\Model\BulkEnvelopeActionDTO(); // \DocStudio\Client\Model\BulkEnvelopeActionDTO

try {
    $result = $apiInstance->approve($mailbox, $bulk_envelope_action_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeRoleActionControllerApi->approve: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **bulk_envelope_action_dto** | [**\DocStudio\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  | |

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

## `fill()`

```php
fill($mailbox, $env_dto)
```

Fill envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeRoleActionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_dto = new \DocStudio\Client\Model\EnvDTO(); // \DocStudio\Client\Model\EnvDTO

try {
    $apiInstance->fill($mailbox, $env_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeRoleActionControllerApi->fill: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_dto** | [**\DocStudio\Client\Model\EnvDTO**](../Model/EnvDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateStamp()`

```php
generateStamp($mailbox, $stamp_request_dto): \SplFileObject
```

Generate stamp by certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\EnvelopeRoleActionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$stamp_request_dto = new \DocStudio\Client\Model\StampRequestDTO(); // \DocStudio\Client\Model\StampRequestDTO

try {
    $result = $apiInstance->generateStamp($mailbox, $stamp_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeRoleActionControllerApi->generateStamp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **stamp_request_dto** | [**\DocStudio\Client\Model\StampRequestDTO**](../Model/StampRequestDTO.md)|  | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth), [formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `image/png`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentFileForSign()`

```php
getDocumentFileForSign($id, $document_id, $mailbox, $xml): \SplFileObject
```

Get BINARY or XML for signing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\EnvelopeRoleActionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$document_id = 'document_id_example'; // string | Document ID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$xml = True; // bool | Is XML?

try {
    $result = $apiInstance->getDocumentFileForSign($id, $document_id, $mailbox, $xml);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeRoleActionControllerApi->getDocumentFileForSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **document_id** | **string**| Document ID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **xml** | **bool**| Is XML? | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth), [formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentsForSign()`

```php
getDocumentsForSign($id, $mailbox, $documents_for_sign_request_dto, $session_id, $wait, $force_gost): \DocStudio\Client\Model\DocumentForSigningDTO[]
```

BINARYs and XMLs for signing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\EnvelopeRoleActionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$documents_for_sign_request_dto = new \DocStudio\Client\Model\DocumentsForSignRequestDTO(); // \DocStudio\Client\Model\DocumentsForSignRequestDTO
$session_id = 'session_id_example'; // string | Mass signing session UUID
$wait = True; // bool | Wait for a file instead of 425 error
$force_gost = True; // bool

try {
    $result = $apiInstance->getDocumentsForSign($id, $mailbox, $documents_for_sign_request_dto, $session_id, $wait, $force_gost);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeRoleActionControllerApi->getDocumentsForSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **documents_for_sign_request_dto** | [**\DocStudio\Client\Model\DocumentsForSignRequestDTO**](../Model/DocumentsForSignRequestDTO.md)|  | |
| **session_id** | **string**| Mass signing session UUID | [optional] |
| **wait** | **bool**| Wait for a file instead of 425 error | [optional] |
| **force_gost** | **bool**|  | [optional] |

### Return type

[**\DocStudio\Client\Model\DocumentForSigningDTO[]**](../Model/DocumentForSigningDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMassSigningReport()`

```php
getMassSigningReport($session_id, $mailbox): \SplFileObject
```

Get mass signing report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeRoleActionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$session_id = 'session_id_example'; // string | Mass signing session UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getMassSigningReport($session_id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeRoleActionControllerApi->getMassSigningReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **session_id** | **string**| Mass signing session UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signEnvelope()`

```php
signEnvelope($id, $mailbox, $envelope_document_signatures_dto, $session_id)
```

Sign envelope documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\EnvelopeRoleActionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope to update
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_document_signatures_dto = array(new \DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO()); // \DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO[]
$session_id = 'session_id_example'; // string | Mass signing session UUID

try {
    $apiInstance->signEnvelope($id, $mailbox, $envelope_document_signatures_dto, $session_id);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeRoleActionControllerApi->signEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope to update | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_document_signatures_dto** | [**\DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO[]**](../Model/EnvelopeDocumentSignaturesDTO.md)|  | |
| **session_id** | **string**| Mass signing session UUID | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signSES()`

```php
signSES($id, $mailbox, $body, $session_id)
```

Sign envelope with SES

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeRoleActionControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope to fill
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$body = 'body_example'; // string
$session_id = 'session_id_example'; // string | Mass signing session UUID

try {
    $apiInstance->signSES($id, $mailbox, $body, $session_id);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeRoleActionControllerApi->signSES: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope to fill | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **body** | **string**|  | |
| **session_id** | **string**| Mass signing session UUID | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
