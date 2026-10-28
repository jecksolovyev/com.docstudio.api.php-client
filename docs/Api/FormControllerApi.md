# DocStudio\Client\FormControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveFormEnvelope()**](FormControllerApi.md#approveFormEnvelope) | **POST** /api/v1/form/envelope/approve | Approve form envelope |
| [**createNewForm()**](FormControllerApi.md#createNewForm) | **POST** /api/v1/form | Create new form |
| [**deleteForm()**](FormControllerApi.md#deleteForm) | **DELETE** /api/v1/form/{id} | Delete form |
| [**fillFormEnvelope()**](FormControllerApi.md#fillFormEnvelope) | **POST** /api/v1/form/envelope/fill | Fill form envelope |
| [**forSignFile()**](FormControllerApi.md#forSignFile) | **GET** /api/v1/form/for-sign-file | Get BINARY or XML for signing |
| [**getForm()**](FormControllerApi.md#getForm) | **GET** /api/v1/form/{id} | Get form |
| [**getFormDocumentPrintVersion()**](FormControllerApi.md#getFormDocumentPrintVersion) | **GET** /api/v1/form/envelope/for-print | Get document PDF for printing |
| [**getFormDocumentsForSign()**](FormControllerApi.md#getFormDocumentsForSign) | **POST** /api/v1/form/for-sign | BINARYs and XMLs for signing |
| [**getFormView()**](FormControllerApi.md#getFormView) | **GET** /api/v1/form/view | Get form view |
| [**rejectFormEnvelope()**](FormControllerApi.md#rejectFormEnvelope) | **DELETE** /api/v1/form/envelope | Reject form envelope |
| [**sendFormEnvelope()**](FormControllerApi.md#sendFormEnvelope) | **POST** /api/v1/form/envelope/send | Create form envelope / form fill first step |
| [**signFormEnvelope()**](FormControllerApi.md#signFormEnvelope) | **PUT** /api/v1/form/envelope/sign | Sign form envelope documents |
| [**updateForm()**](FormControllerApi.md#updateForm) | **PUT** /api/v1/form/{id} | Update form |


## `approveFormEnvelope()`

```php
approveFormEnvelope($envelope_id): \DocStudio\Client\Model\FormSend
```

Approve form envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_id = 'envelope_id_example'; // string | Envelope to approve

try {
    $result = $apiInstance->approveFormEnvelope($envelope_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->approveFormEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_id** | **string**| Envelope to approve | [optional] |

### Return type

[**\DocStudio\Client\Model\FormSend**](../Model/FormSend.md)

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewForm()`

```php
createNewForm($mailbox, $form_create): \DocStudio\Client\Model\FormGet
```

Create new form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$form_create = new \DocStudio\Client\Model\FormCreate(); // \DocStudio\Client\Model\FormCreate

try {
    $result = $apiInstance->createNewForm($mailbox, $form_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->createNewForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **form_create** | [**\DocStudio\Client\Model\FormCreate**](../Model/FormCreate.md)|  | |

### Return type

[**\DocStudio\Client\Model\FormGet**](../Model/FormGet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteForm()`

```php
deleteForm($id, $mailbox)
```

Delete form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Form UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteForm($id, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->deleteForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Form UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fillFormEnvelope()`

```php
fillFormEnvelope($send_envelope): \DocStudio\Client\Model\FormSend
```

Fill form envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_envelope = new \DocStudio\Client\Model\SendEnvelope(); // \DocStudio\Client\Model\SendEnvelope

try {
    $result = $apiInstance->fillFormEnvelope($send_envelope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->fillFormEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_envelope** | [**\DocStudio\Client\Model\SendEnvelope**](../Model/SendEnvelope.md)|  | |

### Return type

[**\DocStudio\Client\Model\FormSend**](../Model/FormSend.md)

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `forSignFile()`

```php
forSignFile($document_id, $envelope_id, $xml): \SplFileObject
```

Get BINARY or XML for signing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document_id = 'document_id_example'; // string | Document ID
$envelope_id = 'envelope_id_example'; // string | Envelope to sign
$xml = True; // bool | Is XML?

try {
    $result = $apiInstance->forSignFile($document_id, $envelope_id, $xml);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->forSignFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document_id** | **string**| Document ID | |
| **envelope_id** | **string**| Envelope to sign | [optional] |
| **xml** | **bool**| Is XML? | [optional] |

### Return type

**\SplFileObject**

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getForm()`

```php
getForm($id, $mailbox): \DocStudio\Client\Model\FormGet
```

Get form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Form UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getForm($id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->getForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Form UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\FormGet**](../Model/FormGet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormDocumentPrintVersion()`

```php
getFormDocumentPrintVersion($envelope_id, $document_id, $attachment_id, $wait): \SplFileObject
```

Get document PDF for printing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_id = 'envelope_id_example'; // string | Envelope UUID
$document_id = 'document_id_example'; // string | Document id
$attachment_id = 'attachment_id_example'; // string | Document id
$wait = True; // bool | Wait for a file instead of 425 error

try {
    $result = $apiInstance->getFormDocumentPrintVersion($envelope_id, $document_id, $attachment_id, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->getFormDocumentPrintVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_id** | **string**| Envelope UUID | [optional] |
| **document_id** | **string**| Document id | [optional] |
| **attachment_id** | **string**| Document id | [optional] |
| **wait** | **bool**| Wait for a file instead of 425 error | [optional] |

### Return type

**\SplFileObject**

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormDocumentsForSign()`

```php
getFormDocumentsForSign($documents_for_sign_request_dto, $envelope_id, $force_gost): \DocStudio\Client\Model\FormDocumentsForSign
```

BINARYs and XMLs for signing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documents_for_sign_request_dto = new \DocStudio\Client\Model\DocumentsForSignRequestDTO(); // \DocStudio\Client\Model\DocumentsForSignRequestDTO
$envelope_id = 'envelope_id_example'; // string | Envelope to sign
$force_gost = True; // bool

try {
    $result = $apiInstance->getFormDocumentsForSign($documents_for_sign_request_dto, $envelope_id, $force_gost);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->getFormDocumentsForSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documents_for_sign_request_dto** | [**\DocStudio\Client\Model\DocumentsForSignRequestDTO**](../Model/DocumentsForSignRequestDTO.md)|  | |
| **envelope_id** | **string**| Envelope to sign | [optional] |
| **force_gost** | **bool**|  | [optional] |

### Return type

[**\DocStudio\Client\Model\FormDocumentsForSign**](../Model/FormDocumentsForSign.md)

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormView()`

```php
getFormView(): \DocStudio\Client\Model\FormView
```

Get form view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getFormView();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->getFormView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocStudio\Client\Model\FormView**](../Model/FormView.md)

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rejectFormEnvelope()`

```php
rejectFormEnvelope($form_envelope_reject): \DocStudio\Client\Model\FormSend
```

Reject form envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form_envelope_reject = new \DocStudio\Client\Model\FormEnvelopeReject(); // \DocStudio\Client\Model\FormEnvelopeReject

try {
    $result = $apiInstance->rejectFormEnvelope($form_envelope_reject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->rejectFormEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form_envelope_reject** | [**\DocStudio\Client\Model\FormEnvelopeReject**](../Model/FormEnvelopeReject.md)|  | |

### Return type

[**\DocStudio\Client\Model\FormSend**](../Model/FormSend.md)

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendFormEnvelope()`

```php
sendFormEnvelope($send_envelope): \DocStudio\Client\Model\FormSend
```

Create form envelope / form fill first step

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$send_envelope = new \DocStudio\Client\Model\SendEnvelope(); // \DocStudio\Client\Model\SendEnvelope

try {
    $result = $apiInstance->sendFormEnvelope($send_envelope);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->sendFormEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **send_envelope** | [**\DocStudio\Client\Model\SendEnvelope**](../Model/SendEnvelope.md)|  | |

### Return type

[**\DocStudio\Client\Model\FormSend**](../Model/FormSend.md)

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `signFormEnvelope()`

```php
signFormEnvelope($envelope_id, $envelope_document_signatures_dto): \DocStudio\Client\Model\FormSend
```

Sign form envelope documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: formAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = DocStudio\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_id = 'envelope_id_example'; // string | Envelope to sign
$envelope_document_signatures_dto = array(new \DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO()); // \DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO[]

try {
    $result = $apiInstance->signFormEnvelope($envelope_id, $envelope_document_signatures_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->signFormEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_id** | **string**| Envelope to sign | |
| **envelope_document_signatures_dto** | [**\DocStudio\Client\Model\EnvelopeDocumentSignaturesDTO[]**](../Model/EnvelopeDocumentSignaturesDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\FormSend**](../Model/FormSend.md)

### Authorization

[formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateForm()`

```php
updateForm($id, $mailbox, $form_update): \DocStudio\Client\Model\FormGet
```

Update form

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\FormControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Form UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$form_update = new \DocStudio\Client\Model\FormUpdate(); // \DocStudio\Client\Model\FormUpdate

try {
    $result = $apiInstance->updateForm($id, $mailbox, $form_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormControllerApi->updateForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Form UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **form_update** | [**\DocStudio\Client\Model\FormUpdate**](../Model/FormUpdate.md)|  | |

### Return type

[**\DocStudio\Client\Model\FormGet**](../Model/FormGet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
