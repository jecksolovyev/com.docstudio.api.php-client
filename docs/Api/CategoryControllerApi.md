# DocStudio\Client\CategoryControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCategory()**](CategoryControllerApi.md#createCategory) | **POST** /api/v1/category | Save a category |
| [**deleteCategory()**](CategoryControllerApi.md#deleteCategory) | **DELETE** /api/v1/category/{id} | Delete category by Id |
| [**getAllByAccessAndType()**](CategoryControllerApi.md#getAllByAccessAndType) | **GET** /api/v1/category/{type}/{access} | Retrieve all categories by id of specified &#39;access&#39; type |
| [**updateCategory()**](CategoryControllerApi.md#updateCategory) | **PUT** /api/v1/category/{id} | Update the category |


## `createCategory()`

```php
createCategory($mailbox, $category_update_request): \DocStudio\Client\Model\CategoryDTO
```

Save a category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\CategoryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$category_update_request = new \DocStudio\Client\Model\CategoryUpdateRequest(); // \DocStudio\Client\Model\CategoryUpdateRequest

try {
    $result = $apiInstance->createCategory($mailbox, $category_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryControllerApi->createCategory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **category_update_request** | [**\DocStudio\Client\Model\CategoryUpdateRequest**](../Model/CategoryUpdateRequest.md)|  | |

### Return type

[**\DocStudio\Client\Model\CategoryDTO**](../Model/CategoryDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllByAccessAndType()`

```php
getAllByAccessAndType($type, $access, $mailbox): \DocStudio\Client\Model\CategoryDTO[]
```

Retrieve all categories by id of specified 'access' type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\CategoryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Type of categories
$access = 'access_example'; // string | Access level to retrieve categories by
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getAllByAccessAndType($type, $access, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoryControllerApi->getAllByAccessAndType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of categories | |
| **access** | **string**| Access level to retrieve categories by | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\CategoryDTO[]**](../Model/CategoryDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCategory()`

```php
updateCategory($id, $mailbox, $category_update_request): \DocStudio\Client\Model\CategoryDTO
```

Update the category

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\CategoryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Category Id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$category_update_request = new \DocStudio\Client\Model\CategoryUpdateRequest(); // \DocStudio\Client\Model\CategoryUpdateRequest

try {
    $result = $apiInstance->updateCategory($id, $mailbox, $category_update_request);
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
| **category_update_request** | [**\DocStudio\Client\Model\CategoryUpdateRequest**](../Model/CategoryUpdateRequest.md)|  | |

### Return type

[**\DocStudio\Client\Model\CategoryDTO**](../Model/CategoryDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
