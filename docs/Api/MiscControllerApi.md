# Docstudio\Client\MiscControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appSettings**](MiscControllerApi.md#appsettings) | **GET** /api/v1/settings | 
[**auditLog**](MiscControllerApi.md#auditlog) | **POST** /api/v1/audit | Audit log
[**calculateFormula**](MiscControllerApi.md#calculateformula) | **POST** /api/v1/formula | Calculate excel formulas for documents
[**createAuditReport**](MiscControllerApi.md#createauditreport) | **POST** /api/v1/audit/report | Request audit report
[**detectCountry**](MiscControllerApi.md#detectcountry) | **GET** /api/v1/detect-country | 
[**recalculateMailboxStat**](MiscControllerApi.md#recalculatemailboxstat) | **GET** /api/v1/recalculate-mailbox-stat | Recalculate all mailbox counters

# **appSettings**
> \Docstudio\ClientModel\SettingsDTO appSettings()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->appSettings();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->appSettings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Docstudio\ClientModel\SettingsDTO**](../Model/SettingsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auditLog**
> \Docstudio\ClientModel\PageDTOActivityLogRecordDTO auditLog($body, $offset, $limit)

Audit log

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\SearchActivityLogDTO(); // \Docstudio\ClientModel\SearchActivityLogDTO | 
$offset = 0; // int | Offset, how many records to skip
$limit = 25; // int | Limit, how many records to retrieve

try {
    $result = $apiInstance->auditLog($body, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->auditLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\SearchActivityLogDTO**](../Model/SearchActivityLogDTO.md)|  |
 **offset** | **int**| Offset, how many records to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how many records to retrieve | [optional] [default to 25]

### Return type

[**\Docstudio\ClientModel\PageDTOActivityLogRecordDTO**](../Model/PageDTOActivityLogRecordDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **calculateFormula**
> map[string,map[string,object]] calculateFormula($body)

Calculate excel formulas for documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Docstudio\ClientModel\DocFormulaRequestDTO()); // \Docstudio\ClientModel\DocFormulaRequestDTO[] | 

try {
    $result = $apiInstance->calculateFormula($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->calculateFormula: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\DocFormulaRequestDTO[]**](../Model/DocFormulaRequestDTO.md)|  |

### Return type

[**map[string,map[string,object]]**](../Model/map.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAuditReport**
> createAuditReport($body)

Request audit report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Docstudio\ClientModel\SearchActivityLogDTO(); // \Docstudio\ClientModel\SearchActivityLogDTO | 

try {
    $apiInstance->createAuditReport($body);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->createAuditReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Docstudio\ClientModel\SearchActivityLogDTO**](../Model/SearchActivityLogDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **detectCountry**
> \Docstudio\ClientModel\DetectedCountryDTO detectCountry()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->detectCountry();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->detectCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Docstudio\ClientModel\DetectedCountryDTO**](../Model/DetectedCountryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **recalculateMailboxStat**
> \Docstudio\ClientModel\StatDTO recalculateMailboxStat($mailbox)

Recalculate all mailbox counters

development use only

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Docstudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Docstudio\Client\Api\MiscControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->recalculateMailboxStat($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscControllerApi->recalculateMailboxStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Docstudio\ClientModel\StatDTO**](../Model/StatDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

