# DocStudio\Client\AccountBillingControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkEventAbility()**](AccountBillingControllerApi.md#checkEventAbility) | **GET** /api/v1/account/{accountUuid}/check/{type}/{action} |  |
| [**downloadInvoice()**](AccountBillingControllerApi.md#downloadInvoice) | **GET** /api/v1/account/{accountUuid}/invoice/{invoiceId}/pdf |  |
| [**getAccount()**](AccountBillingControllerApi.md#getAccount) | **GET** /api/v1/account/{accountUuid}/billing |  |
| [**getInvoiceStatus()**](AccountBillingControllerApi.md#getInvoiceStatus) | **GET** /api/v1/account/{accountUuid}/invoice-status/{invoiceId} |  |
| [**getInvoices()**](AccountBillingControllerApi.md#getInvoices) | **GET** /api/v1/account/{accountUuid}/invoice |  |
| [**getTariffs()**](AccountBillingControllerApi.md#getTariffs) | **GET** /api/v1/account/{accountUuid}/tariff |  |
| [**makeInvoicePayment()**](AccountBillingControllerApi.md#makeInvoicePayment) | **POST** /api/v1/account/{accountUuid}/billing-payment |  |
| [**replaceAccountTariff()**](AccountBillingControllerApi.md#replaceAccountTariff) | **POST** /api/v1/account/{accountUuid}/tariff |  |


## `checkEventAbility()`

```php
checkEventAbility($account_uuid, $type, $action)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string
$type = new \DocStudio\Client\Model\BillingEventType(); // BillingEventType
$action = 'action_example'; // string

try {
    $apiInstance->checkEventAbility($account_uuid, $type, $action);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->checkEventAbility: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **type** | [**BillingEventType**](../Model/.md)|  | |
| **action** | **string**|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadInvoice()`

```php
downloadInvoice($account_uuid, $invoice_id, $details): \SplFileObject
```



Download invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account uuid
$invoice_id = 'invoice_id_example'; // string | Invoice id
$details = 'details_example'; // string | Include details

try {
    $result = $apiInstance->downloadInvoice($account_uuid, $invoice_id, $details);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account uuid | |
| **invoice_id** | **string**| Invoice id | |
| **details** | **string**| Include details | [optional] |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccount()`

```php
getAccount($account_uuid): \DocStudio\Client\Model\AccountBillingInfoDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string

try {
    $result = $apiInstance->getAccount($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\AccountBillingInfoDTO**](../Model/AccountBillingInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoiceStatus()`

```php
getInvoiceStatus($account_uuid, $invoice_id): \DocStudio\Client\Model\BillingInvoiceStatusDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string
$invoice_id = 'invoice_id_example'; // string

try {
    $result = $apiInstance->getInvoiceStatus($account_uuid, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->getInvoiceStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **invoice_id** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\BillingInvoiceStatusDTO**](../Model/BillingInvoiceStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvoices()`

```php
getInvoices($account_uuid, $offset, $limit): \DocStudio\Client\Model\PageDTOObject
```



Get invoice list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account uuid
$offset = 0; // int | Offset, how many records to skip
$limit = 25; // int | Limit, how many records to retrieve

try {
    $result = $apiInstance->getInvoices($account_uuid, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account uuid | |
| **offset** | **int**| Offset, how many records to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how many records to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOObject**](../Model/PageDTOObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTariffs()`

```php
getTariffs($account_uuid): \DocStudio\Client\Model\DetailedTariffInfoDTO[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string

try {
    $result = $apiInstance->getTariffs($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->getTariffs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\DetailedTariffInfoDTO[]**](../Model/DetailedTariffInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `makeInvoicePayment()`

```php
makeInvoicePayment($account_uuid, $billing_payment_dto): \DocStudio\Client\Model\BillingRedirectDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string
$billing_payment_dto = new \DocStudio\Client\Model\BillingPaymentDTO(); // \DocStudio\Client\Model\BillingPaymentDTO

try {
    $result = $apiInstance->makeInvoicePayment($account_uuid, $billing_payment_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->makeInvoicePayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **billing_payment_dto** | [**\DocStudio\Client\Model\BillingPaymentDTO**](../Model/BillingPaymentDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\BillingRedirectDTO**](../Model/BillingRedirectDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `replaceAccountTariff()`

```php
replaceAccountTariff($account_uuid, $replace_account_tariff_dto)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountBillingControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string
$replace_account_tariff_dto = new \DocStudio\Client\Model\ReplaceAccountTariffDTO(); // \DocStudio\Client\Model\ReplaceAccountTariffDTO

try {
    $apiInstance->replaceAccountTariff($account_uuid, $replace_account_tariff_dto);
} catch (Exception $e) {
    echo 'Exception when calling AccountBillingControllerApi->replaceAccountTariff: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **replace_account_tariff_dto** | [**\DocStudio\Client\Model\ReplaceAccountTariffDTO**](../Model/ReplaceAccountTariffDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
