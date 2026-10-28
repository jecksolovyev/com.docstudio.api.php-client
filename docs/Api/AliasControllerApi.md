# DocStudio\Client\AliasControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAlias()**](AliasControllerApi.md#createAlias) | **POST** /api/v1/alias | Save alias to mailbox |
| [**deleteAlias()**](AliasControllerApi.md#deleteAlias) | **DELETE** /api/v1/alias | Delete alias |
| [**getAliasesByMailbox()**](AliasControllerApi.md#getAliasesByMailbox) | **GET** /api/v1/alias/mailbox | Get aliases by mailbox |
| [**getAliasesByQualifiedId()**](AliasControllerApi.md#getAliasesByQualifiedId) | **GET** /api/v1/alias/qualifiedID/{id} | Get mailbox UUID by qualified ID |


## `createAlias()`

```php
createAlias($mailbox, $alias_dto): \DocStudio\Client\Model\AliasDTO
```

Save alias to mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$alias_dto = new \DocStudio\Client\Model\AliasDTO(); // \DocStudio\Client\Model\AliasDTO

try {
    $result = $apiInstance->createAlias($mailbox, $alias_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->createAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **alias_dto** | [**\DocStudio\Client\Model\AliasDTO**](../Model/AliasDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AliasDTO**](../Model/AliasDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAlias()`

```php
deleteAlias($name, $mailbox)
```

Delete alias

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteAlias($name, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->deleteAlias: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
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

## `getAliasesByMailbox()`

```php
getAliasesByMailbox($mailbox, $qualified): \DocStudio\Client\Model\AliasDTO[]
```

Get aliases by mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$qualified = True; // bool

try {
    $result = $apiInstance->getAliasesByMailbox($mailbox, $qualified);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->getAliasesByMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **qualified** | **bool**|  | [optional] |

### Return type

[**\DocStudio\Client\Model\AliasDTO[]**](../Model/AliasDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAliasesByQualifiedId()`

```php
getAliasesByQualifiedId($id): \DocStudio\Client\Model\SingleUuidDTO
```

Get mailbox UUID by qualified ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getAliasesByQualifiedId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->getAliasesByQualifiedId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
