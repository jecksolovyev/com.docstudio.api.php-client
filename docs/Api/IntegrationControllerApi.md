# Swagger\Client\IntegrationControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**convertBinaryToXML**](IntegrationControllerApi.md#convertbinarytoxml) | **POST** /api/v1/integration/convert-binary | Convert incoming file to XML view
[**createMailboxIntegrationRule**](IntegrationControllerApi.md#createmailboxintegrationrule) | **POST** /api/v1/integration/rule/{mailboxUuid} | Create Mailbox integration rule
[**deleteMailboxIntegrationRule**](IntegrationControllerApi.md#deletemailboxintegrationrule) | **DELETE** /api/v1/integration/rule/{integrationRuleUuid} | Delete Mailbox integration rule
[**execute**](IntegrationControllerApi.md#execute) | **POST** /api/v1/integration/rule/execute | Execute conversion map and generate file name (if pattern rule defined)
[**generate**](IntegrationControllerApi.md#generate) | **GET** /api/v1/integration/source/{templateUuid}/{mailboxUuid} | Generate envelope XML by template
[**getMailboxIntegration**](IntegrationControllerApi.md#getmailboxintegration) | **GET** /api/v1/integration/{mailboxUuid} | Get Mailbox integration
[**getMailboxIntegrationRule**](IntegrationControllerApi.md#getmailboxintegrationrule) | **GET** /api/v1/integration/rule/{integrationRuleUuid} | Get Mailbox integration rule
[**getMailboxIntegrationRules**](IntegrationControllerApi.md#getmailboxintegrationrules) | **GET** /api/v1/integration/rules/{mailboxUuid} | Get Mailbox integration rules
[**newPassword**](IntegrationControllerApi.md#newpassword) | **POST** /api/v1/integration/new-password/{mailboxUuid} | Generate and save new password
[**saveMailboxIntegration**](IntegrationControllerApi.md#savemailboxintegration) | **POST** /api/v1/integration/{mailboxUuid} | Create/update Mailbox integration
[**updateMailboxIntegrationRule**](IntegrationControllerApi.md#updatemailboxintegrationrule) | **PUT** /api/v1/integration/rule/{integrationRuleUuid} | Update Mailbox integration rule

# **convertBinaryToXML**
> string convertBinaryToXML($filename, $mailbox_uuid, $body)

Convert incoming file to XML view

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filename = "filename_example"; // string | filename, for type detection
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$body = new \Swagger\Client\Model\IntegrationConvertbinaryBody(); // \Swagger\Client\Model\IntegrationConvertbinaryBody | 

try {
    $result = $apiInstance->convertBinaryToXML($filename, $mailbox_uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->convertBinaryToXML: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filename** | **string**| filename, for type detection |
 **mailbox_uuid** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **body** | [**\Swagger\Client\Model\IntegrationConvertbinaryBody**](../Model/IntegrationConvertbinaryBody.md)|  | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMailboxIntegrationRule**
> \Swagger\Client\Model\IntegrationRuleDTO createMailboxIntegrationRule($body, $mailbox_uuid)

Create Mailbox integration rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IntegrationRuleDTO(); // \Swagger\Client\Model\IntegrationRuleDTO | 
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createMailboxIntegrationRule($body, $mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->createMailboxIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)|  |
 **mailbox_uuid** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMailboxIntegrationRule**
> deleteMailboxIntegrationRule($integration_rule_uuid)

Delete Mailbox integration rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_rule_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of integration rule

try {
    $apiInstance->deleteMailboxIntegrationRule($integration_rule_uuid);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->deleteMailboxIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_rule_uuid** | [**string**](../Model/.md)| UUID of integration rule |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **execute**
> \Swagger\Client\Model\IntegrationRuleResponseDTO execute($body)

Execute conversion map and generate file name (if pattern rule defined)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IntegrationRuleRequestDTO(); // \Swagger\Client\Model\IntegrationRuleRequestDTO | 

try {
    $result = $apiInstance->execute($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->execute: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IntegrationRuleRequestDTO**](../Model/IntegrationRuleRequestDTO.md)|  |

### Return type

[**\Swagger\Client\Model\IntegrationRuleResponseDTO**](../Model/IntegrationRuleResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generate**
> \Swagger\Client\Model\DataMap generate($template_uuid, $mailbox_uuid, $version_uuid)

Generate envelope XML by template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Template UUID
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$version_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Template version UUID

try {
    $result = $apiInstance->generate($template_uuid, $mailbox_uuid, $version_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->generate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template_uuid** | [**string**](../Model/.md)| Template UUID |
 **mailbox_uuid** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **version_uuid** | [**string**](../Model/.md)| Template version UUID | [optional]

### Return type

[**\Swagger\Client\Model\DataMap**](../Model/DataMap.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailboxIntegration**
> \Swagger\Client\Model\IntegrationDTO getMailboxIntegration($mailbox_uuid)

Get Mailbox integration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getMailboxIntegration($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->getMailboxIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox_uuid** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\IntegrationDTO**](../Model/IntegrationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailboxIntegrationRule**
> \Swagger\Client\Model\IntegrationRuleDTO getMailboxIntegrationRule($integration_rule_uuid)

Get Mailbox integration rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_rule_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of integration rule

try {
    $result = $apiInstance->getMailboxIntegrationRule($integration_rule_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->getMailboxIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **integration_rule_uuid** | [**string**](../Model/.md)| UUID of integration rule |

### Return type

[**\Swagger\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailboxIntegrationRules**
> \Swagger\Client\Model\IntegrationRuleDTO[] getMailboxIntegrationRules($mailbox_uuid)

Get Mailbox integration rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getMailboxIntegrationRules($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->getMailboxIntegrationRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox_uuid** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\IntegrationRuleDTO[]**](../Model/IntegrationRuleDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newPassword**
> object newPassword($mailbox_uuid)

Generate and save new password

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->newPassword($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->newPassword: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox_uuid** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

**object**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveMailboxIntegration**
> saveMailboxIntegration($body, $mailbox_uuid)

Create/update Mailbox integration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IntegrationDTO(); // \Swagger\Client\Model\IntegrationDTO | 
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->saveMailboxIntegration($body, $mailbox_uuid);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->saveMailboxIntegration: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IntegrationDTO**](../Model/IntegrationDTO.md)|  |
 **mailbox_uuid** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailboxIntegrationRule**
> \Swagger\Client\Model\IntegrationRuleDTO updateMailboxIntegrationRule($body, $integration_rule_uuid)

Update Mailbox integration rule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\IntegrationRuleDTO(); // \Swagger\Client\Model\IntegrationRuleDTO | 
$integration_rule_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of integration rule

try {
    $result = $apiInstance->updateMailboxIntegrationRule($body, $integration_rule_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->updateMailboxIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)|  |
 **integration_rule_uuid** | [**string**](../Model/.md)| UUID of integration rule |

### Return type

[**\Swagger\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

