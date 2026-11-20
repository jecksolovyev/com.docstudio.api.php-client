# DocStudio\Client\EnvelopeDocumentControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloneAttachment()**](EnvelopeDocumentControllerApi.md#cloneAttachment) | **POST** /api/v1/envelope/clone-attachment | Clone an existing attachment |
| [**createAttachment()**](EnvelopeDocumentControllerApi.md#createAttachment) | **POST** /api/v1/envelope/attachment | Create/upload new attachment |
| [**createPdfAttachment()**](EnvelopeDocumentControllerApi.md#createPdfAttachment) | **POST** /api/v1/envelope/pdf-attachment | Create/upload new PDF attachment |
| [**downloadEnvelopeAttachment()**](EnvelopeDocumentControllerApi.md#downloadEnvelopeAttachment) | **GET** /api/v1/envelope/attachment | Download attachment with specific type or raw |
| [**downloadFinalPdf()**](EnvelopeDocumentControllerApi.md#downloadFinalPdf) | **GET** /api/v1/envelope/{id}/download-final-pdf | Download final PDF |
| [**downloadSharedAttachment()**](EnvelopeDocumentControllerApi.md#downloadSharedAttachment) | **GET** /api/v1/envelope/shared-attachment | Download shared attachment for specific provider |
| [**getArchiveInfo()**](EnvelopeDocumentControllerApi.md#getArchiveInfo) | **GET** /api/v1/envelope/attachment/archive-info | Get attachment archive info (p7s, asice, pdf) |
| [**getAttachmentPageSizes()**](EnvelopeDocumentControllerApi.md#getAttachmentPageSizes) | **GET** /api/v1/envelope/attachment/page-sizes | Get attachment page sizes |
| [**getDocumentPrintVersion()**](EnvelopeDocumentControllerApi.md#getDocumentPrintVersion) | **GET** /api/v1/envelope/{id}/for-print | Get document PDF for printing |
| [**getEnvelopeSharedZip()**](EnvelopeDocumentControllerApi.md#getEnvelopeSharedZip) | **GET** /api/v1/envelope/download-shared | Get shared zip archive |
| [**getEnvelopeZip()**](EnvelopeDocumentControllerApi.md#getEnvelopeZip) | **GET** /api/v1/envelope/{id}/zip | Get envelope or document zip archive |
| [**shareEnvelopesByEmail()**](EnvelopeDocumentControllerApi.md#shareEnvelopesByEmail) | **POST** /api/v1/envelope/share-archive | Share envelopes by email |


## `cloneAttachment()`

```php
cloneAttachment($attachment_uuid, $mailbox): \DocStudio\Client\Model\UploadedAttachmentDTO
```

Clone an existing attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_uuid = 'attachment_uuid_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->cloneAttachment($attachment_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->cloneAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_uuid** | **string**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\UploadedAttachmentDTO**](../Model/UploadedAttachmentDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAttachment()`

```php
createAttachment($file, $type, $mailbox): \DocStudio\Client\Model\UploadedAttachmentDTO
```

Create/upload new attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject
$type = 'type_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createAttachment($file, $type, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->createAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **type** | **string**|  | [optional] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\UploadedAttachmentDTO**](../Model/UploadedAttachmentDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPdfAttachment()`

```php
createPdfAttachment($file, $action, $mailbox): \DocStudio\Client\Model\UploadedAttachmentDTO
```

Create/upload new PDF attachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject
$action = 'action_example'; // string | Action for fields inside the PDF file
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createPdfAttachment($file, $action, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->createPdfAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **action** | **string**| Action for fields inside the PDF file | [optional] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\UploadedAttachmentDTO**](../Model/UploadedAttachmentDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadEnvelopeAttachment()`

```php
downloadEnvelopeAttachment($accept, $attachment_uuid, $mailbox, $envelope_uuid): \SplFileObject
```

Download attachment with specific type or raw

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


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept = 'accept_example'; // string
$attachment_uuid = 'attachment_uuid_example'; // string | Attachment UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID

try {
    $result = $apiInstance->downloadEnvelopeAttachment($accept, $attachment_uuid, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->downloadEnvelopeAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **accept** | **string**|  | |
| **attachment_uuid** | **string**| Attachment UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_uuid** | **string**| Envelope UUID | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth), [formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadFinalPdf()`

```php
downloadFinalPdf($id, $document_id, $mailbox, $wait): \SplFileObject
```

Download final PDF

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


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$document_id = 'document_id_example'; // string | Document ID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$wait = True; // bool | Wait for a file instead of 425 error

try {
    $result = $apiInstance->downloadFinalPdf($id, $document_id, $mailbox, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->downloadFinalPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **document_id** | **string**| Document ID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **wait** | **bool**| Wait for a file instead of 425 error | [optional] |

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

## `downloadSharedAttachment()`

```php
downloadSharedAttachment($provider, $attachment_uuid): \SplFileObject
```

Download shared attachment for specific provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$provider = 'provider_example'; // string | Sharing provider name
$attachment_uuid = 'attachment_uuid_example'; // string | Attachment UUID

try {
    $result = $apiInstance->downloadSharedAttachment($provider, $attachment_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->downloadSharedAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **provider** | **string**| Sharing provider name | |
| **attachment_uuid** | **string**| Attachment UUID | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArchiveInfo()`

```php
getArchiveInfo($attachment_id, $mailbox, $envelope_id, $convert2_pdf): \DocStudio\Client\Model\ArchiveAttachmentInfo
```

Get attachment archive info (p7s, asice, pdf)

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


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_id = 'attachment_id_example'; // string | Attachment UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_id = 'envelope_id_example'; // string | Envelope UUID
$convert2_pdf = True; // bool | Convert to PDF

try {
    $result = $apiInstance->getArchiveInfo($attachment_id, $mailbox, $envelope_id, $convert2_pdf);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->getArchiveInfo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_id** | **string**| Attachment UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_id** | **string**| Envelope UUID | [optional] |
| **convert2_pdf** | **bool**| Convert to PDF | [optional] |

### Return type

[**\DocStudio\Client\Model\ArchiveAttachmentInfo**](../Model/ArchiveAttachmentInfo.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAttachmentPageSizes()`

```php
getAttachmentPageSizes($attachment_uuid, $mailbox, $envelope_uuid): \DocStudio\Client\Model\PdfPageSizes
```

Get attachment page sizes

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


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_uuid = 'attachment_uuid_example'; // string | Attachment UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID

try {
    $result = $apiInstance->getAttachmentPageSizes($attachment_uuid, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->getAttachmentPageSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **attachment_uuid** | **string**| Attachment UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_uuid** | **string**| Envelope UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\PdfPageSizes**](../Model/PdfPageSizes.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth), [formAuth](../../README.md#formAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDocumentPrintVersion()`

```php
getDocumentPrintVersion($id, $document_id, $mailbox, $wait): \SplFileObject
```

Get document PDF for printing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$document_id = 'document_id_example'; // string | Document id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$wait = True; // bool | Wait for a file instead of 425 error

try {
    $result = $apiInstance->getDocumentPrintVersion($id, $document_id, $mailbox, $wait);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->getDocumentPrintVersion: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **document_id** | **string**| Document id | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **wait** | **bool**| Wait for a file instead of 425 error | [optional] |

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

## `getEnvelopeSharedZip()`

```php
getEnvelopeSharedZip($code): \SplFileObject
```

Get shared zip archive

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = 'code_example'; // string | Code for downloading

try {
    $result = $apiInstance->getEnvelopeSharedZip($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->getEnvelopeSharedZip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code for downloading | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeZip()`

```php
getEnvelopeZip($id, $document_id, $exclude_files, $zip_structure_name, $wait, $access_code, $mailbox): \SplFileObject
```

Get envelope or document zip archive

Anonymous users download it with the access code of a payment link; files visible only to some roles are not included

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$document_id = 'document_id_example'; // string | Document ID
$exclude_files = 'exclude_files_example'; // string | Mask to exclude some files. c - for signature/processing Certificate, p - for Printable version, a - for Audit trail
$zip_structure_name = 'zip_structure_name_example'; // string | The name of pre-saved zip structure in the template
$wait = True; // bool | Wait for a file instead of 425 error
$access_code = 'access_code_example'; // string | Access code of a payment link, for anonymous users
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getEnvelopeZip($id, $document_id, $exclude_files, $zip_structure_name, $wait, $access_code, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->getEnvelopeZip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **document_id** | **string**| Document ID | [optional] |
| **exclude_files** | **string**| Mask to exclude some files. c - for signature/processing Certificate, p - for Printable version, a - for Audit trail | [optional] |
| **zip_structure_name** | **string**| The name of pre-saved zip structure in the template | [optional] |
| **wait** | **bool**| Wait for a file instead of 425 error | [optional] |
| **access_code** | **string**| Access code of a payment link, for anonymous users | [optional] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

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

## `shareEnvelopesByEmail()`

```php
shareEnvelopesByEmail($mailbox, $envelope_shared_archive_request_dto)
```

Share envelopes by email

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeDocumentControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_shared_archive_request_dto = new \DocStudio\Client\Model\EnvelopeSharedArchiveRequestDTO(); // \DocStudio\Client\Model\EnvelopeSharedArchiveRequestDTO

try {
    $apiInstance->shareEnvelopesByEmail($mailbox, $envelope_shared_archive_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeDocumentControllerApi->shareEnvelopesByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_shared_archive_request_dto** | [**\DocStudio\Client\Model\EnvelopeSharedArchiveRequestDTO**](../Model/EnvelopeSharedArchiveRequestDTO.md)|  | |

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
