# Docstudio\Client\ContactControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createContact**](ContactControllerApi.md#createcontact) | **POST** /api/v1/contact | Save a contact in DB
[**deleteContact**](ContactControllerApi.md#deletecontact) | **DELETE** /api/v1/contact/{uuid} | Delete contact by Id
[**searchOrList**](ContactControllerApi.md#searchorlist) | **GET** /api/v1/contact/list | Retrieve all contacts by id of specified &#x27;access&#x27; type and name
[**updateContact**](ContactControllerApi.md#updatecontact) | **PUT** /api/v1/contact/{uuid} | Update the contact in DB

# **createContact**
> \Docstudio\ClientModel\ContactResponseDTO createContact($body, $mailbox)

Save a contact in DB

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\ContactControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\ContactDTO(); // \Docstudio\ClientModel\ContactDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createContact($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactControllerApi->createContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\ContactDTO**](../Model/ContactDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Docstudio\ClientModel\ContactResponseDTO**](../Model/ContactResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> deleteContact($uuid, $mailbox)

Delete contact by Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\ContactControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Contact UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteContact($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling ContactControllerApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| Contact UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchOrList**
> \Docstudio\ClientModel\PageDTOContactResponseDTO searchOrList($mailbox, $keyword, $offset, $limit)

Retrieve all contacts by id of specified 'access' type and name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\ContactControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$keyword = "keyword_example"; // string | Request parameter, term to search template by
$offset = 0; // int | Offset, how much TemplateInfo to skip
$limit = 25; // int | Limit, how much TemplateInfo to retrieve

try {
    $result = $apiInstance->searchOrList($mailbox, $keyword, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactControllerApi->searchOrList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **keyword** | **string**| Request parameter, term to search template by | [optional]
 **offset** | **int**| Offset, how much TemplateInfo to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how much TemplateInfo to retrieve | [optional] [default to 25]

### Return type

[**\Docstudio\ClientModel\PageDTOContactResponseDTO**](../Model/PageDTOContactResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContact**
> \Docstudio\ClientModel\ContactResponseDTO updateContact($body, $mailbox, $uuid)

Update the contact in DB

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\ContactControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\ContactDTO(); // \Docstudio\ClientModel\ContactDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Contact UUID

try {
    $result = $apiInstance->updateContact($body, $mailbox, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactControllerApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\ContactDTO**](../Model/ContactDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **uuid** | [**string**](../Model/.md)| Contact UUID |

### Return type

[**\Docstudio\ClientModel\ContactResponseDTO**](../Model/ContactResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

