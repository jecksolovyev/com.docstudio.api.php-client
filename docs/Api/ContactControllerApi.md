# DocStudio\Client\ContactControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createContact()**](ContactControllerApi.md#createContact) | **POST** /api/v1/contact | Save a contact in DB |
| [**deleteContact()**](ContactControllerApi.md#deleteContact) | **DELETE** /api/v1/contact/{uuid} | Delete contact by Id |
| [**searchOrList()**](ContactControllerApi.md#searchOrList) | **GET** /api/v1/contact/list | Retrieve all contacts by id of specified &#39;access&#39; type and name |
| [**updateContact()**](ContactControllerApi.md#updateContact) | **PUT** /api/v1/contact/{uuid} | Update the contact in DB |


## `createContact()`

```php
createContact($mailbox, $contact_dto): \DocStudio\Client\Model\ContactResponseDTO
```

Save a contact in DB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ContactControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$contact_dto = new \DocStudio\Client\Model\ContactDTO(); // \DocStudio\Client\Model\ContactDTO

try {
    $result = $apiInstance->createContact($mailbox, $contact_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactControllerApi->createContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **contact_dto** | [**\DocStudio\Client\Model\ContactDTO**](../Model/ContactDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ContactResponseDTO**](../Model/ContactResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContact()`

```php
deleteContact($uuid, $mailbox)
```

Delete contact by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ContactControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Contact UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteContact($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling ContactControllerApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Contact UUID | |
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

## `searchOrList()`

```php
searchOrList($mailbox, $keyword, $offset, $limit): \DocStudio\Client\Model\PageDTOContactResponseDTO
```

Retrieve all contacts by id of specified 'access' type and name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ContactControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$keyword = 'keyword_example'; // string | Request parameter, term to search template by
$offset = 0; // int | Offset, how much TemplateInfo to skip
$limit = 25; // int | Limit, how much TemplateInfo to retrieve

try {
    $result = $apiInstance->searchOrList($mailbox, $keyword, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactControllerApi->searchOrList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **keyword** | **string**| Request parameter, term to search template by | [optional] |
| **offset** | **int**| Offset, how much TemplateInfo to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how much TemplateInfo to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOContactResponseDTO**](../Model/PageDTOContactResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContact()`

```php
updateContact($uuid, $mailbox, $contact_dto): \DocStudio\Client\Model\ContactResponseDTO
```

Update the contact in DB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\ContactControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Contact UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$contact_dto = new \DocStudio\Client\Model\ContactDTO(); // \DocStudio\Client\Model\ContactDTO

try {
    $result = $apiInstance->updateContact($uuid, $mailbox, $contact_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactControllerApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Contact UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **contact_dto** | [**\DocStudio\Client\Model\ContactDTO**](../Model/ContactDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ContactResponseDTO**](../Model/ContactResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
