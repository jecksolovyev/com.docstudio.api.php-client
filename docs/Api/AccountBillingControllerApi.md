# Swagger\Client\AccountBillingControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkEventAbility**](AccountBillingControllerApi.md#checkeventability) | **GET** /api/v1/account/{accountUuid}/check/{type}/{action} | 
[**downloadInvoice**](AccountBillingControllerApi.md#downloadinvoice) | **GET** /api/v1/account/{accountUuid}/invoice/{invoiceId}/pdf | 
[**getAccount**](AccountBillingControllerApi.md#getaccount) | **GET** /api/v1/account/{accountUuid}/billing | 
[**getInvoiceStatus**](AccountBillingControllerApi.md#getinvoicestatus) | **GET** /api/v1/account/{accountUuid}/invoice-status/{invoiceId} | 
[**getInvoices**](AccountBillingControllerApi.md#getinvoices) | **GET** /api/v1/account/{accountUuid}/invoice | 
[**getTariffs**](AccountBillingControllerApi.md#gettariffs) | **GET** /api/v1/account/{accountUuid}/tariff | 
[**makeInvoicePayment**](AccountBillingControllerApi.md#makeinvoicepayment) | **POST** /api/v1/account/{accountUuid}/billing-payment | 
[**replaceAccountTariff**](AccountBillingControllerApi.md#replaceaccounttariff) | **POST** /api/v1/account/{accountUuid}/tariff | 

# **checkEventAbility**
> checkEventAbility($account_uuid, $type, $action)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$type = new \Swagger\Client\Model\BillingEventType(); // \Swagger\Client\Model\BillingEventType | 
$action = "action_example"; // string | 

try {
    $apiInstance->checkEventAbility($account_uuid, $type, $action);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->checkEventAbility: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)|  |
 **type** | [**\Swagger\Client\Model\BillingEventType**](../Model/.md)|  |
 **action** | **string**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadInvoice**
> string downloadInvoice($account_uuid, $invoice_id, $details)



Download invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account uuid
$invoice_id = "invoice_id_example"; // string | Invoice id
$details = "details_example"; // string | Include details

try {
    $result = $apiInstance->downloadInvoice($account_uuid, $invoice_id, $details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account uuid |
 **invoice_id** | **string**| Invoice id |
 **details** | **string**| Include details | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccount**
> \Swagger\Client\Model\AccountBillingInfoDTO getAccount($account_uuid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getAccount($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AccountBillingInfoDTO**](../Model/AccountBillingInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceStatus**
> \Swagger\Client\Model\BillingInvoiceStatusDTO getInvoiceStatus($account_uuid, $invoice_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$invoice_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getInvoiceStatus($account_uuid, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->getInvoiceStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)|  |
 **invoice_id** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\BillingInvoiceStatusDTO**](../Model/BillingInvoiceStatusDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \Swagger\Client\Model\PageDTOObject getInvoices($account_uuid, $offset, $limit)



Get invoice list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account uuid
$offset = 0; // int | Offset, how many records to skip
$limit = 25; // int | Limit, how many records to retrieve

try {
    $result = $apiInstance->getInvoices($account_uuid, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account uuid |
 **offset** | **int**| Offset, how many records to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how many records to retrieve | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\PageDTOObject**](../Model/PageDTOObject.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTariffs**
> \Swagger\Client\Model\DetailedTariffInfoDTO[] getTariffs($account_uuid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getTariffs($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->getTariffs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\DetailedTariffInfoDTO[]**](../Model/DetailedTariffInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **makeInvoicePayment**
> \Swagger\Client\Model\BillingRedirectDTO makeInvoicePayment($body, $account_uuid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BillingPaymentDTO(); // \Swagger\Client\Model\BillingPaymentDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->makeInvoicePayment($body, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->makeInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BillingPaymentDTO**](../Model/BillingPaymentDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\BillingRedirectDTO**](../Model/BillingRedirectDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **replaceAccountTariff**
> replaceAccountTariff($body, $account_uuid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReplaceAccountTariffDTO(); // \Swagger\Client\Model\ReplaceAccountTariffDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->replaceAccountTariff($body, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->replaceAccountTariff: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReplaceAccountTariffDTO**](../Model/ReplaceAccountTariffDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

