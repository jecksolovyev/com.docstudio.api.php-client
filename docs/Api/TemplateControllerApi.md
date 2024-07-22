# DocStudio\Client\TemplateControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addZipStructure()**](TemplateControllerApi.md#addZipStructure) | **PUT** /api/v1/template/{uuid}/zip-structure | Add new files structure for zip archive |
| [**archiveTemplate()**](TemplateControllerApi.md#archiveTemplate) | **PATCH** /api/v1/template/{uuid}/archive | Make template archived |
| [**callClone()**](TemplateControllerApi.md#callClone) | **POST** /api/v1/template/{uuid}/clone | Clone template |
| [**checkTemplateExistsByUuid()**](TemplateControllerApi.md#checkTemplateExistsByUuid) | **HEAD** /api/v1/template/{uuid} | Check template exists by UUID |
| [**create()**](TemplateControllerApi.md#create) | **POST** /api/v1/template | Create new template |
| [**deleteShareCode()**](TemplateControllerApi.md#deleteShareCode) | **DELETE** /api/v1/template/{uuid}/share-code | Delete share code for template |
| [**deleteZipStructure()**](TemplateControllerApi.md#deleteZipStructure) | **DELETE** /api/v1/template/{uuid}/zip-structure/{title} | Delete structure for zip archive |
| [**downloadTemplateImage()**](TemplateControllerApi.md#downloadTemplateImage) | **GET** /api/v1/template/{uuid}/image | Download template image |
| [**downloadTemplatePdf()**](TemplateControllerApi.md#downloadTemplatePdf) | **GET** /api/v1/template/{uuid}/pdf | Download template PDF |
| [**getPdfPageSizes()**](TemplateControllerApi.md#getPdfPageSizes) | **GET** /api/v1/template/{uuid}/pdf-page-sizes | Get PDF page sizes |
| [**getRecentlyUsedTemplates()**](TemplateControllerApi.md#getRecentlyUsedTemplates) | **GET** /api/v1/template/recently-used | Get up to 10 recently used templates |
| [**getRecommendedTemplates()**](TemplateControllerApi.md#getRecommendedTemplates) | **GET** /api/v1/template/recommended | Get up to 4 recommended templates |
| [**getSavedZipStructureNames()**](TemplateControllerApi.md#getSavedZipStructureNames) | **GET** /api/v1/template/{uuid}/zip-structure-titles | Get saved structure titles for zip archive |
| [**getShareCode()**](TemplateControllerApi.md#getShareCode) | **GET** /api/v1/template/{uuid}/share-code | Retrieve share code for template |
| [**getTemplateByShareCode()**](TemplateControllerApi.md#getTemplateByShareCode) | **GET** /api/v1/template/by-share-code/{code} | Retrieve template by share code |
| [**getTemplateByUuid()**](TemplateControllerApi.md#getTemplateByUuid) | **GET** /api/v1/template/{uuid} | Retrieve template by UUID |
| [**getTemplateVersionsByUuid()**](TemplateControllerApi.md#getTemplateVersionsByUuid) | **GET** /api/v1/template/{uuid}/versions | Retrieve template versions by UUID |
| [**getZipStructure()**](TemplateControllerApi.md#getZipStructure) | **GET** /api/v1/template/{uuid}/zip-structure | Get structure with all files for zip archive |
| [**searchTemplates()**](TemplateControllerApi.md#searchTemplates) | **GET** /api/v1/template | Get paged templates list |
| [**update()**](TemplateControllerApi.md#update) | **PUT** /api/v1/template/{uuid} | Update template in DB. Category in template could be null. |
| [**updateCategories()**](TemplateControllerApi.md#updateCategories) | **PATCH** /api/v1/template/{uuid}/categories | Update categories in template. |
| [**updateName()**](TemplateControllerApi.md#updateName) | **PATCH** /api/v1/template/{uuid}/name | Update name in template. |
| [**uploadImage()**](TemplateControllerApi.md#uploadImage) | **POST** /api/v1/template/image | Upload new image |
| [**uploadPdf()**](TemplateControllerApi.md#uploadPdf) | **POST** /api/v1/template/pdf | Upload new PDF |
| [**validateTemplate()**](TemplateControllerApi.md#validateTemplate) | **GET** /api/v1/template/validate | Validate template by UUID or version |


## `addZipStructure()`

```php
addZipStructure($uuid, $mailbox, $new_template_zip_structure_dto, $template_version)
```

Add new files structure for zip archive

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$new_template_zip_structure_dto = new \DocStudio\Client\Model\NewTemplateZipStructureDTO(); // \DocStudio\Client\Model\NewTemplateZipStructureDTO
$template_version = 'template_version_example'; // string | UUID of version

try {
    $apiInstance->addZipStructure($uuid, $mailbox, $new_template_zip_structure_dto, $template_version);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->addZipStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **new_template_zip_structure_dto** | [**\DocStudio\Client\Model\NewTemplateZipStructureDTO**](../Model/NewTemplateZipStructureDTO.md)|  | |
| **template_version** | **string**| UUID of version | [optional] |

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

## `archiveTemplate()`

```php
archiveTemplate($uuid, $mailbox)
```

Make template archived

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Template UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->archiveTemplate($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->archiveTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Template UUID | |
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

## `callClone()`

```php
callClone($uuid, $mailbox): \DocStudio\Client\Model\FullTemplateResponseDTO
```

Clone template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Template UUID to clone
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->callClone($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->callClone: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Template UUID to clone | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkTemplateExistsByUuid()`

```php
checkTemplateExistsByUuid($uuid, $mailbox)
```

Check template exists by UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template to retrieve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->checkTemplateExistsByUuid($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->checkTemplateExistsByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template to retrieve | |
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

## `create()`

```php
create($mailbox, $template_create_dto): \DocStudio\Client\Model\FullTemplateResponseDTO
```

Create new template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_create_dto = new \DocStudio\Client\Model\TemplateCreateDTO(); // \DocStudio\Client\Model\TemplateCreateDTO

try {
    $result = $apiInstance->create($mailbox, $template_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **template_create_dto** | [**\DocStudio\Client\Model\TemplateCreateDTO**](../Model/TemplateCreateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteShareCode()`

```php
deleteShareCode($uuid, $mailbox)
```

Delete share code for template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteShareCode($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->deleteShareCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template | |
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

## `deleteZipStructure()`

```php
deleteZipStructure($uuid, $title, $mailbox, $template_version)
```

Delete structure for zip archive

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template
$title = 'title_example'; // string | Title of zip structure
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_version = 'template_version_example'; // string | UUID of version

try {
    $apiInstance->deleteZipStructure($uuid, $title, $mailbox, $template_version);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->deleteZipStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template | |
| **title** | **string**| Title of zip structure | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **template_version** | **string**| UUID of version | [optional] |

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

## `downloadTemplateImage()`

```php
downloadTemplateImage($uuid, $image_uuid, $envelope_uuid, $mailbox): string[]
```

Download template image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Template UUID
$image_uuid = 'image_uuid_example'; // string | Image UUID
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->downloadTemplateImage($uuid, $image_uuid, $envelope_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->downloadTemplateImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Template UUID | |
| **image_uuid** | **string**| Image UUID | |
| **envelope_uuid** | **string**| Envelope UUID | [optional] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadTemplatePdf()`

```php
downloadTemplatePdf($uuid, $pdf_uuid, $envelope_uuid, $clear_fields, $mailbox): string[]
```

Download template PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Template UUID
$pdf_uuid = 'pdf_uuid_example'; // string | Pdf UUID
$envelope_uuid = 'envelope_uuid_example'; // string | Envelope UUID
$clear_fields = True; // bool | Clear non-readonly fields
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->downloadTemplatePdf($uuid, $pdf_uuid, $envelope_uuid, $clear_fields, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->downloadTemplatePdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Template UUID | |
| **pdf_uuid** | **string**| Pdf UUID | |
| **envelope_uuid** | **string**| Envelope UUID | [optional] |
| **clear_fields** | **bool**| Clear non-readonly fields | [optional] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPdfPageSizes()`

```php
getPdfPageSizes($uuid, $pdf_uuid): \DocStudio\Client\Model\PdfPageSizes
```

Get PDF page sizes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Template UUID
$pdf_uuid = 'pdf_uuid_example'; // string | Pdf UUID

try {
    $result = $apiInstance->getPdfPageSizes($uuid, $pdf_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getPdfPageSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Template UUID | |
| **pdf_uuid** | **string**| Pdf UUID | |

### Return type

[**\DocStudio\Client\Model\PdfPageSizes**](../Model/PdfPageSizes.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecentlyUsedTemplates()`

```php
getRecentlyUsedTemplates($mailbox): \DocStudio\Client\Model\RecentlyUsedTemplateResponseDTO[]
```

Get up to 10 recently used templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getRecentlyUsedTemplates($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getRecentlyUsedTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\RecentlyUsedTemplateResponseDTO[]**](../Model/RecentlyUsedTemplateResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecommendedTemplates()`

```php
getRecommendedTemplates($mailbox): \DocStudio\Client\Model\RecommendedTemplateResponseDTO[]
```

Get up to 4 recommended templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getRecommendedTemplates($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getRecommendedTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\RecommendedTemplateResponseDTO[]**](../Model/RecommendedTemplateResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSavedZipStructureNames()`

```php
getSavedZipStructureNames($uuid, $mailbox, $template_version): \DocStudio\Client\Model\TemplateZipStructureTitlesDTO
```

Get saved structure titles for zip archive

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_version = 'template_version_example'; // string | UUID of version

try {
    $result = $apiInstance->getSavedZipStructureNames($uuid, $mailbox, $template_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getSavedZipStructureNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **template_version** | **string**| UUID of version | [optional] |

### Return type

[**\DocStudio\Client\Model\TemplateZipStructureTitlesDTO**](../Model/TemplateZipStructureTitlesDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShareCode()`

```php
getShareCode($uuid, $mailbox, $generate): \DocStudio\Client\Model\SharedCodeDTO
```

Retrieve share code for template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$generate = True; // bool | Code has to be re-generated if exists

try {
    $result = $apiInstance->getShareCode($uuid, $mailbox, $generate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getShareCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **generate** | **bool**| Code has to be re-generated if exists | [optional] |

### Return type

[**\DocStudio\Client\Model\SharedCodeDTO**](../Model/SharedCodeDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateByShareCode()`

```php
getTemplateByShareCode($code): \DocStudio\Client\Model\FullTemplateResponseDTO
```

Retrieve template by share code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Share code of template

try {
    $result = $apiInstance->getTemplateByShareCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getTemplateByShareCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Share code of template | |

### Return type

[**\DocStudio\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateByUuid()`

```php
getTemplateByUuid($uuid, $mailbox, $template_version): \DocStudio\Client\Model\FullTemplateResponseDTO
```

Retrieve template by UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template to retrieve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_version = 'template_version_example'; // string | UUID of version

try {
    $result = $apiInstance->getTemplateByUuid($uuid, $mailbox, $template_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getTemplateByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template to retrieve | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **template_version** | **string**| UUID of version | [optional] |

### Return type

[**\DocStudio\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTemplateVersionsByUuid()`

```php
getTemplateVersionsByUuid($uuid, $mailbox, $offset, $limit, $version_uuid): \DocStudio\Client\Model\PageDTODataMap
```

Retrieve template versions by UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000
$version_uuid = 'version_uuid_example'; // string | UUID of version, only this one will be returned

try {
    $result = $apiInstance->getTemplateVersionsByUuid($uuid, $mailbox, $offset, $limit, $version_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getTemplateVersionsByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |
| **version_uuid** | **string**| UUID of version, only this one will be returned | [optional] |

### Return type

[**\DocStudio\Client\Model\PageDTODataMap**](../Model/PageDTODataMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getZipStructure()`

```php
getZipStructure($uuid, $mailbox, $template_version, $title): \DocStudio\Client\Model\TemplateZipStructureDTO
```

Get structure with all files for zip archive

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of template
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_version = 'template_version_example'; // string | UUID of version
$title = 'title_example'; // string | Title of zip structure (to mark files as selected)

try {
    $result = $apiInstance->getZipStructure($uuid, $mailbox, $template_version, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getZipStructure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of template | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **template_version** | **string**| UUID of version | [optional] |
| **title** | **string**| Title of zip structure (to mark files as selected) | [optional] |

### Return type

[**\DocStudio\Client\Model\TemplateZipStructureDTO**](../Model/TemplateZipStructureDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchTemplates()`

```php
searchTemplates($mailbox, $level, $keyword, $category, $extended, $offset, $limit): \DocStudio\Client\Model\PageDTOSearchTemplateDTO
```

Get paged templates list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$level = 'pub'; // string | Template access level, 'pub' by default.
$keyword = 'keyword_example'; // string | Keyword to search template by or template UUID
$category = 'category_example'; // string | Category id to search template in
$extended = false; // bool | Add extended info to each template (access, account, categories)
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->searchTemplates($mailbox, $level, $keyword, $category, $extended, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->searchTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **level** | **string**| Template access level, &#39;pub&#39; by default. | [optional] [default to &#39;pub&#39;] |
| **keyword** | **string**| Keyword to search template by or template UUID | [optional] |
| **category** | **string**| Category id to search template in | [optional] |
| **extended** | **bool**| Add extended info to each template (access, account, categories) | [optional] [default to false] |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOSearchTemplateDTO**](../Model/PageDTOSearchTemplateDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `update()`

```php
update($uuid, $mailbox, $template_create_dto): \DocStudio\Client\Model\FullTemplateResponseDTO
```

Update template in DB. Category in template could be null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Template uuid
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_create_dto = new \DocStudio\Client\Model\TemplateCreateDTO(); // \DocStudio\Client\Model\TemplateCreateDTO

try {
    $result = $apiInstance->update($uuid, $mailbox, $template_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Template uuid | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **template_create_dto** | [**\DocStudio\Client\Model\TemplateCreateDTO**](../Model/TemplateCreateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategories()`

```php
updateCategories($uuid, $mailbox, $request_body)
```

Update categories in template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Template UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->updateCategories($uuid, $mailbox, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->updateCategories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Template UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

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

## `updateName()`

```php
updateName($uuid, $mailbox, $body)
```

Update name in template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Template UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$body = 'body_example'; // string

try {
    $apiInstance->updateName($uuid, $mailbox, $body);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->updateName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Template UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **body** | **string**|  | |

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

## `uploadImage()`

```php
uploadImage($mailbox, $file): \DocStudio\Client\Model\UploadedImageDTO
```

Upload new image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->uploadImage($mailbox, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->uploadImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\DocStudio\Client\Model\UploadedImageDTO**](../Model/UploadedImageDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadPdf()`

```php
uploadPdf($mailbox, $file, $action, $clear_fields): \DocStudio\Client\Model\UploadedPdfDTO
```

Upload new PDF

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$file = "/path/to/file.txt"; // \SplFileObject
$action = 'action_example'; // string | Action for fields inside the PDF file
$clear_fields = True; // bool | Clear non-readonly fields in response PDF (only for PARSE action)

try {
    $result = $apiInstance->uploadPdf($mailbox, $file, $action, $clear_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->uploadPdf: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **file** | **\SplFileObject****\SplFileObject**|  | |
| **action** | **string**| Action for fields inside the PDF file | [optional] |
| **clear_fields** | **bool**| Clear non-readonly fields in response PDF (only for PARSE action) | [optional] |

### Return type

[**\DocStudio\Client\Model\UploadedPdfDTO**](../Model/UploadedPdfDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateTemplate()`

```php
validateTemplate($mailbox, $template_uuid, $version_uuid): \DocStudio\Client\Model\TemplateValidateResponseDTO
```

Validate template by UUID or version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_uuid = 'template_uuid_example'; // string | UUID of template
$version_uuid = 'version_uuid_example'; // string | Version of template

try {
    $result = $apiInstance->validateTemplate($mailbox, $template_uuid, $version_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->validateTemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **template_uuid** | **string**| UUID of template | [optional] |
| **version_uuid** | **string**| Version of template | [optional] |

### Return type

[**\DocStudio\Client\Model\TemplateValidateResponseDTO**](../Model/TemplateValidateResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
