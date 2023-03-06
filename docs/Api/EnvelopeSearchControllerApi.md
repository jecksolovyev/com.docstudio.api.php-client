# Swagger\Client\EnvelopeSearchControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNewColumn**](EnvelopeSearchControllerApi.md#addnewcolumn) | **POST** /api/v1/envelope/column | Add a new column to display
[**createReport**](EnvelopeSearchControllerApi.md#createreport) | **POST** /api/v1/envelope/report | Request envelopes report
[**deleteColumn**](EnvelopeSearchControllerApi.md#deletecolumn) | **DELETE** /api/v1/envelope/column | Delete columns from displaying
[**getSearchFields**](EnvelopeSearchControllerApi.md#getsearchfields) | **POST** /api/v1/envelope/fields | Get search fields
[**getTemplateRoles**](EnvelopeSearchControllerApi.md#gettemplateroles) | **POST** /api/v1/envelope/search/roles | Retrieve all template roles
[**searchEnvelopes**](EnvelopeSearchControllerApi.md#searchenvelopes) | **POST** /api/v1/envelope/search | Search envelopes
[**searchEnvelopesForApproval**](EnvelopeSearchControllerApi.md#searchenvelopesforapproval) | **POST** /api/v1/envelope/search-approvals | Search envelopes for approval
[**updateColumn**](EnvelopeSearchControllerApi.md#updatecolumn) | **PUT** /api/v1/envelope/column/{uuid} | Update column to display

# **addNewColumn**
> \Swagger\Client\Model\SingleUuidDTO addNewColumn($body, $mailbox)

Add a new column to display

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\NewEnvColumnDTO(); // \Swagger\Client\Model\NewEnvColumnDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->addNewColumn($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->addNewColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\NewEnvColumnDTO**](../Model/NewEnvColumnDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReport**
> createReport($body, $mailbox)

Request envelopes report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReportEnvelopeRequestDTO(); // \Swagger\Client\Model\ReportEnvelopeRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->createReport($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->createReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReportEnvelopeRequestDTO**](../Model/ReportEnvelopeRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteColumn**
> deleteColumn($body, $mailbox)

Delete columns from displaying

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DeleteEnvColumnDTO(); // \Swagger\Client\Model\DeleteEnvColumnDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteColumn($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->deleteColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DeleteEnvColumnDTO**](../Model/DeleteEnvColumnDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSearchFields**
> \Swagger\Client\Model\EnvelopeSearchField[] getSearchFields($body, $mailbox, $name)

Get search fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SearchEnvelopesDTO(); // \Swagger\Client\Model\SearchEnvelopesDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$name = "name_example"; // string | Field name term

try {
    $result = $apiInstance->getSearchFields($body, $mailbox, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->getSearchFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SearchEnvelopesDTO**](../Model/SearchEnvelopesDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **name** | **string**| Field name term |

### Return type

[**\Swagger\Client\Model\EnvelopeSearchField[]**](../Model/EnvelopeSearchField.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateRoles**
> \Swagger\Client\Model\TemplateRolesDTO getTemplateRoles($body, $mailbox)

Retrieve all template roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getTemplateRoles($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->getTemplateRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\TemplateRolesDTO**](../Model/TemplateRolesDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchEnvelopes**
> \Swagger\Client\Model\EnvelopePageDTO searchEnvelopes($body, $mailbox, $offset, $limit, $uuid_only)

Search envelopes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SearchEnvelopesDTO(); // \Swagger\Client\Model\SearchEnvelopesDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$offset = 0; // int | Offset, how many envelopes to skip
$limit = 25; // int | Limit, how many envelopes to retrieve
$uuid_only = true; // bool | Retrieve only UUID of envelope

try {
    $result = $apiInstance->searchEnvelopes($body, $mailbox, $offset, $limit, $uuid_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->searchEnvelopes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SearchEnvelopesDTO**](../Model/SearchEnvelopesDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **offset** | **int**| Offset, how many envelopes to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how many envelopes to retrieve | [optional] [default to 25]
 **uuid_only** | **bool**| Retrieve only UUID of envelope | [optional]

### Return type

[**\Swagger\Client\Model\EnvelopePageDTO**](../Model/EnvelopePageDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchEnvelopesForApproval**
> \Swagger\Client\Model\EnvelopeApprovalPageDTO searchEnvelopesForApproval($body, $mailbox, $offset, $limit)

Search envelopes for approval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\SearchApprovalsDTO(); // \Swagger\Client\Model\SearchApprovalsDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$offset = 0; // int | Offset, how many envelopes to skip
$limit = 25; // int | Limit, how many envelopes to retrieve

try {
    $result = $apiInstance->searchEnvelopesForApproval($body, $mailbox, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->searchEnvelopesForApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SearchApprovalsDTO**](../Model/SearchApprovalsDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **offset** | **int**| Offset, how many envelopes to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how many envelopes to retrieve | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\EnvelopeApprovalPageDTO**](../Model/EnvelopeApprovalPageDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateColumn**
> updateColumn($body, $mailbox, $uuid)

Update column to display

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeSearchControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UpdateEnvColumnDTO(); // \Swagger\Client\Model\UpdateEnvColumnDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->updateColumn($body, $mailbox, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeSearchControllerApi->updateColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UpdateEnvColumnDTO**](../Model/UpdateEnvColumnDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **uuid** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

