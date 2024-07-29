# DocStudio\Client\ApplicationTokenControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createToken()**](ApplicationTokenControllerApi.md#createToken) | **POST** /api/v1/token | Create application token |
| [**getUserTokens()**](ApplicationTokenControllerApi.md#getUserTokens) | **GET** /api/v1/token | List application tokens |
| [**revokeToken()**](ApplicationTokenControllerApi.md#revokeToken) | **DELETE** /api/v1/token/{id} | Revoke application token |


## `createToken()`

```php
createToken($create_app_token_dto): \DocStudio\Client\Model\AppTokenDTO
```

Create application token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ApplicationTokenControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_app_token_dto = new \DocStudio\Client\Model\CreateAppTokenDTO(); // \DocStudio\Client\Model\CreateAppTokenDTO

try {
    $result = $apiInstance->createToken($create_app_token_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationTokenControllerApi->createToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_app_token_dto** | [**\DocStudio\Client\Model\CreateAppTokenDTO**](../Model/CreateAppTokenDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AppTokenDTO**](../Model/AppTokenDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserTokens()`

```php
getUserTokens(): \DocStudio\Client\Model\AppTokenDTO[]
```

List application tokens

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ApplicationTokenControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationTokenControllerApi->getUserTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocStudio\Client\Model\AppTokenDTO[]**](../Model/AppTokenDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeToken()`

```php
revokeToken($id)
```

Revoke application token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ApplicationTokenControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Token id

try {
    $apiInstance->revokeToken($id);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationTokenControllerApi->revokeToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Token id | |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
