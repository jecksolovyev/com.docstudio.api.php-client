# Swagger\Client\ExternalLinkControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createExternalLink**](ExternalLinkControllerApi.md#createexternallink) | **POST** /api/v1/account/{accountUuid}/external-link | Create external link
[**deleteExternalLink**](ExternalLinkControllerApi.md#deleteexternallink) | **DELETE** /api/v1/account/{accountUuid}/external-link/{linkUuid} | Delete external link
[**getAccountExternalLinks**](ExternalLinkControllerApi.md#getaccountexternallinks) | **GET** /api/v1/account/{accountUuid}/external-link | Get account external links
[**getMailboxList**](ExternalLinkControllerApi.md#getmailboxlist) | **GET** /api/v1/external-link | Get mailbox visible link list
[**updateExternalLink**](ExternalLinkControllerApi.md#updateexternallink) | **PUT** /api/v1/account/{accountUuid}/external-link/{linkUuid} | Update external link

# **createExternalLink**
> \Swagger\Client\Model\ExternalLinkResponseDTO createExternalLink($body, $account_uuid)

Create external link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExternalLinkRequestDTO(); // \Swagger\Client\Model\ExternalLinkRequestDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->createExternalLink($body, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->createExternalLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalLinkRequestDTO**](../Model/ExternalLinkRequestDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\Swagger\Client\Model\ExternalLinkResponseDTO**](../Model/ExternalLinkResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteExternalLink**
> deleteExternalLink($account_uuid, $link_uuid)

Delete external link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$link_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Link UUID

try {
    $apiInstance->deleteExternalLink($account_uuid, $link_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->deleteExternalLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **link_uuid** | [**string**](../Model/.md)| Link UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountExternalLinks**
> \Swagger\Client\Model\ExternalLinkResponseDTO[] getAccountExternalLinks($account_uuid)

Get account external links

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->getAccountExternalLinks($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->getAccountExternalLinks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\Swagger\Client\Model\ExternalLinkResponseDTO[]**](../Model/ExternalLinkResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailboxList**
> \Swagger\Client\Model\ExternalLinkShortResponseDTO[] getMailboxList($mailbox)

Get mailbox visible link list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getMailboxList($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->getMailboxList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\ExternalLinkShortResponseDTO[]**](../Model/ExternalLinkShortResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateExternalLink**
> \Swagger\Client\Model\ExternalLinkResponseDTO updateExternalLink($body, $account_uuid, $link_uuid)

Update external link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ExternalLinkControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ExternalLinkRequestDTO(); // \Swagger\Client\Model\ExternalLinkRequestDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$link_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Link UUID

try {
    $result = $apiInstance->updateExternalLink($body, $account_uuid, $link_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalLinkControllerApi->updateExternalLink: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ExternalLinkRequestDTO**](../Model/ExternalLinkRequestDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **link_uuid** | [**string**](../Model/.md)| Link UUID |

### Return type

[**\Swagger\Client\Model\ExternalLinkResponseDTO**](../Model/ExternalLinkResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

