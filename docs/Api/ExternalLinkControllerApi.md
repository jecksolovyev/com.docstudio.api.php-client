# DocStudio\Client\ExternalLinkControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createExternalLink()**](ExternalLinkControllerApi.md#createExternalLink) | **POST** /api/v1/account/{accountUuid}/external-link | Create external link |
| [**deleteExternalLink()**](ExternalLinkControllerApi.md#deleteExternalLink) | **DELETE** /api/v1/account/{accountUuid}/external-link/{linkUuid} | Delete external link |
| [**getAccountExternalLinks()**](ExternalLinkControllerApi.md#getAccountExternalLinks) | **GET** /api/v1/account/{accountUuid}/external-link | Get account external links |
| [**getMailboxList()**](ExternalLinkControllerApi.md#getMailboxList) | **GET** /api/v1/external-link | Get mailbox visible link list |
| [**updateExternalLink()**](ExternalLinkControllerApi.md#updateExternalLink) | **PUT** /api/v1/account/{accountUuid}/external-link/{linkUuid} | Update external link |


## `createExternalLink()`

```php
createExternalLink($account_uuid, $external_link_request_dto): \DocStudio\Client\Model\ExternalLinkResponseDTO
```

Create external link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$external_link_request_dto = new \DocStudio\Client\Model\ExternalLinkRequestDTO(); // \DocStudio\Client\Model\ExternalLinkRequestDTO

try {
    $result = $apiInstance->createExternalLink($account_uuid, $external_link_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->createExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **external_link_request_dto** | [**\DocStudio\Client\Model\ExternalLinkRequestDTO**](../Model/ExternalLinkRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ExternalLinkResponseDTO**](../Model/ExternalLinkResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteExternalLink()`

```php
deleteExternalLink($account_uuid, $link_uuid)
```

Delete external link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$link_uuid = 'link_uuid_example'; // string | Link UUID

try {
    $apiInstance->deleteExternalLink($account_uuid, $link_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->deleteExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **link_uuid** | **string**| Link UUID | |

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

## `getAccountExternalLinks()`

```php
getAccountExternalLinks($account_uuid): \DocStudio\Client\Model\ExternalLinkResponseDTO[]
```

Get account external links

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID

try {
    $result = $apiInstance->getAccountExternalLinks($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->getAccountExternalLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |

### Return type

[**\DocStudio\Client\Model\ExternalLinkResponseDTO[]**](../Model/ExternalLinkResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxList()`

```php
getMailboxList($mailbox): \DocStudio\Client\Model\ExternalLinkShortResponseDTO[]
```

Get mailbox visible link list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getMailboxList($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->getMailboxList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\ExternalLinkShortResponseDTO[]**](../Model/ExternalLinkShortResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateExternalLink()`

```php
updateExternalLink($account_uuid, $link_uuid, $external_link_request_dto): \DocStudio\Client\Model\ExternalLinkResponseDTO
```

Update external link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$link_uuid = 'link_uuid_example'; // string | Link UUID
$external_link_request_dto = new \DocStudio\Client\Model\ExternalLinkRequestDTO(); // \DocStudio\Client\Model\ExternalLinkRequestDTO

try {
    $result = $apiInstance->updateExternalLink($account_uuid, $link_uuid, $external_link_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->updateExternalLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **link_uuid** | **string**| Link UUID | |
| **external_link_request_dto** | [**\DocStudio\Client\Model\ExternalLinkRequestDTO**](../Model/ExternalLinkRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ExternalLinkResponseDTO**](../Model/ExternalLinkResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
