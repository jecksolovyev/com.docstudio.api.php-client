# Docstudio\Client\RoleControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createRole**](RoleControllerApi.md#createrole) | **POST** /api/v1/permission/role | Create a role
[**delete**](RoleControllerApi.md#delete) | **DELETE** /api/v1/permission/role/{uuid} | 
[**read**](RoleControllerApi.md#read) | **GET** /api/v1/permission/role/{uuid} | Read role by UUID
[**readAll**](RoleControllerApi.md#readall) | **GET** /api/v1/permission/role | Read all system roles
[**readAllWithAccount**](RoleControllerApi.md#readallwithaccount) | **GET** /api/v1/permission/role/account/{uuid} | Read all roles for account including system predefined
[**updateRole**](RoleControllerApi.md#updaterole) | **PUT** /api/v1/permission/role/{uuid} | Update role, allow to change name and permissions

# **createRole**
> \Docstudio\ClientModel\RoleGetDTO createRole($body)

Create a role

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\RoleCreateDTO(); // \Docstudio\ClientModel\RoleCreateDTO | 

try {
    $result = $apiInstance->createRole($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->createRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\RoleCreateDTO**](../Model/RoleCreateDTO.md)|  |

### Return type

[**\Docstudio\ClientModel\RoleGetDTO**](../Model/RoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delete**
> delete($uuid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->delete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->delete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **read**
> \Docstudio\ClientModel\RoleGetDTO read($uuid)

Read role by UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->read($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->read: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |

### Return type

[**\Docstudio\ClientModel\RoleGetDTO**](../Model/RoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAll**
> \Docstudio\ClientModel\PageDTORoleGetDTO readAll($offset, $limit)

Read all system roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\RoleControllerApi(
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset, how much roles to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how much roles to retrieve | [optional] [default to 25]

### Return type

[**\Docstudio\ClientModel\PageDTORoleGetDTO**](../Model/PageDTORoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readAllWithAccount**
> \Docstudio\ClientModel\PageDTORoleGetDTO readAllWithAccount($uuid, $type, $name, $permissions, $offset, $limit)

Read all roles for account including system predefined

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$type = "type_example"; // string | 
$name = "name_example"; // string | Name to search by
$permissions = array(56); // int[] | Permissions to search by
$offset = 0; // int | Offset, how much roles to skip
$limit = 25; // int | Limit, how much roles to retrieve

try {
    $result = $apiInstance->readAllWithAccount($uuid, $type, $name, $permissions, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->readAllWithAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **type** | **string**|  | [optional]
 **name** | **string**| Name to search by | [optional]
 **permissions** | [**int[]**](../Model/int.md)| Permissions to search by | [optional]
 **offset** | **int**| Offset, how much roles to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how much roles to retrieve | [optional] [default to 25]

### Return type

[**\Docstudio\ClientModel\PageDTORoleGetDTO**](../Model/PageDTORoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateRole**
> \Docstudio\ClientModel\RoleGetDTO updateRole($body, $uuid)

Update role, allow to change name and permissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\RoleControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\RoleCreateDTO(); // \Docstudio\ClientModel\RoleCreateDTO | 
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->updateRole($body, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoleControllerApi->updateRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\RoleCreateDTO**](../Model/RoleCreateDTO.md)|  |
 **uuid** | [**string**](../Model/.md)|  |

### Return type

[**\Docstudio\ClientModel\RoleGetDTO**](../Model/RoleGetDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

