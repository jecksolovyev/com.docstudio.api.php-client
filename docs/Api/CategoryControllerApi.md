# DocStudio\Client\CategoryControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCategory()**](CategoryControllerApi.md#createCategory) | **POST** /api/v1/category | Save a category in DB |
| [**deleteCategory()**](CategoryControllerApi.md#deleteCategory) | **DELETE** /api/v1/category/{id} | Delete category by Id |
| [**getAllByType()**](CategoryControllerApi.md#getAllByType) | **GET** /api/v1/category/{access} | Retrieve all categories by id of specified &#39;access&#39; type |
| [**updateCategory()**](CategoryControllerApi.md#updateCategory) | **PUT** /api/v1/category/{id} | Update the category in DB |


## `createCategory()`

```php
createCategory($mailbox, $category_dto): \DocStudio\Client\Model\CategoryDTO
```

Save a category in DB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\CategoryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$category_dto = new \DocStudio\Client\Model\CategoryDTO(); // \DocStudio\Client\Model\CategoryDTO

try {
    $result = $apiInstance->createCategory($mailbox, $category_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryControllerApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **category_dto** | [**\DocStudio\Client\Model\CategoryDTO**](../Model/CategoryDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CategoryDTO**](../Model/CategoryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCategory()`

```php
deleteCategory($id, $mailbox, $move_to, $keep_children)
```

Delete category by Id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\CategoryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Category Id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$move_to = 'move_to_example'; // string | Optional id of category to move all subordinated (if any)
$keep_children = True; // bool | Optional, if true and moveTo is null all children will become root categories

try {
    $apiInstance->deleteCategory($id, $mailbox, $move_to, $keep_children);
} catch (Exception $e) {
    echo 'Exception when calling CategoryControllerApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Category Id | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **move_to** | **string**| Optional id of category to move all subordinated (if any) | [optional] |
| **keep_children** | **bool**| Optional, if true and moveTo is null all children will become root categories | [optional] |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllByType()`

```php
getAllByType($access, $mailbox): \DocStudio\Client\Model\CategoryDTO[]
```

Retrieve all categories by id of specified 'access' type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\CategoryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$access = 'access_example'; // string | Type of level to retrieve categories by
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getAllByType($access, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryControllerApi->getAllByType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **access** | **string**| Type of level to retrieve categories by | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\CategoryDTO[]**](../Model/CategoryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategory()`

```php
updateCategory($id, $mailbox, $category_dto): \DocStudio\Client\Model\CategoryDTO
```

Update the category in DB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\CategoryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Category Id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$category_dto = new \DocStudio\Client\Model\CategoryDTO(); // \DocStudio\Client\Model\CategoryDTO

try {
    $result = $apiInstance->updateCategory($id, $mailbox, $category_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryControllerApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Category Id | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **category_dto** | [**\DocStudio\Client\Model\CategoryDTO**](../Model/CategoryDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CategoryDTO**](../Model/CategoryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
