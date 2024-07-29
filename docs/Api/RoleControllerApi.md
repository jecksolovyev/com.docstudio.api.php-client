# DocStudio\Client\RoleControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRole()**](RoleControllerApi.md#createRole) | **POST** /api/v1/permission/role | Create a role |
| [**delete()**](RoleControllerApi.md#delete) | **DELETE** /api/v1/permission/role/{uuid} |  |
| [**read()**](RoleControllerApi.md#read) | **GET** /api/v1/permission/role/{uuid} | Read role by UUID |
| [**readAll()**](RoleControllerApi.md#readAll) | **GET** /api/v1/permission/role | Read all system roles |
| [**readAllWithAccount()**](RoleControllerApi.md#readAllWithAccount) | **GET** /api/v1/permission/role/account/{uuid} | Read all roles for account including system predefined |
| [**updateRole()**](RoleControllerApi.md#updateRole) | **PUT** /api/v1/permission/role/{uuid} | Update role, allow to change name and permissions |


## `createRole()`

```php
createRole($role_create_dto): \DocStudio\Client\Model\RoleGetDTO
```

Create a role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_create_dto = new \DocStudio\Client\Model\RoleCreateDTO(); // \DocStudio\Client\Model\RoleCreateDTO

try {
    $result = $apiInstance->createRole($role_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->createRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_create_dto** | [**\DocStudio\Client\Model\RoleCreateDTO**](../Model/RoleCreateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\RoleGetDTO**](../Model/RoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `delete()`

```php
delete($uuid)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string

try {
    $apiInstance->delete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

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

## `read()`

```php
read($uuid): \DocStudio\Client\Model\RoleGetDTO
```

Read role by UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->read($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->read: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\RoleGetDTO**](../Model/RoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAll()`

```php
readAll($offset, $limit): \DocStudio\Client\Model\PageDTORoleGetDTO
```

Read all system roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Offset, how much roles to skip
$limit = 25; // int | Limit, how much roles to retrieve

try {
    $result = $apiInstance->readAll($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->readAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset, how much roles to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how much roles to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTORoleGetDTO**](../Model/PageDTORoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `readAllWithAccount()`

```php
readAllWithAccount($uuid, $type, $name, $permissions, $offset, $limit): \DocStudio\Client\Model\PageDTORoleGetDTO
```

Read all roles for account including system predefined

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$type = 'type_example'; // string
$name = 'name_example'; // string | Name to search by
$permissions = array(56); // int[] | Permissions to search by
$offset = 0; // int | Offset, how much roles to skip
$limit = 25; // int | Limit, how much roles to retrieve

try {
    $result = $apiInstance->readAllWithAccount($uuid, $type, $name, $permissions, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->readAllWithAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **type** | **string**|  | [optional] |
| **name** | **string**| Name to search by | [optional] |
| **permissions** | [**int[]**](../Model/int.md)| Permissions to search by | [optional] |
| **offset** | **int**| Offset, how much roles to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how much roles to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTORoleGetDTO**](../Model/PageDTORoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRole()`

```php
updateRole($uuid, $role_create_dto): \DocStudio\Client\Model\RoleGetDTO
```

Update role, allow to change name and permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$role_create_dto = new \DocStudio\Client\Model\RoleCreateDTO(); // \DocStudio\Client\Model\RoleCreateDTO

try {
    $result = $apiInstance->updateRole($uuid, $role_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **role_create_dto** | [**\DocStudio\Client\Model\RoleCreateDTO**](../Model/RoleCreateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\RoleGetDTO**](../Model/RoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
