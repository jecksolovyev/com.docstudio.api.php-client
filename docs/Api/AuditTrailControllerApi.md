# Swagger\Client\AuditTrailControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateAuditTrailPdf**](AuditTrailControllerApi.md#generateaudittrailpdf) | **GET** /api/v1/audittrail/pdf/{uuid} | Download audit trail pdf for envelope
[**getAuditTrailByEnvelope**](AuditTrailControllerApi.md#getaudittrailbyenvelope) | **GET** /api/v1/audittrail/envelope/{uuid} | 

# **generateAuditTrailPdf**
> string generateAuditTrailPdf($uuid, $mailbox)

Download audit trail pdf for envelope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AuditTrailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->generateAuditTrailPdf($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailControllerApi->generateAuditTrailPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| Envelope UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuditTrailByEnvelope**
> \Swagger\Client\Model\AuditTrailDTO[] getAuditTrailByEnvelope($uuid, $mailbox)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AuditTrailControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getAuditTrailByEnvelope($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailControllerApi->getAuditTrailByEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| Envelope UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\AuditTrailDTO[]**](../Model/AuditTrailDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

