# DocStudio\Client\ScenarioControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneScenario**](ScenarioControllerApi.md#clonescenario) | **PUT** /api/v1/scenario/{scenarioUuid}/clone | Clone scenario
[**createNewScenario**](ScenarioControllerApi.md#createnewscenario) | **POST** /api/v1/scenario | Create new scenario
[**deleteScenario**](ScenarioControllerApi.md#deletescenario) | **DELETE** /api/v1/scenario/{scenarioUuid} | Delete scenario
[**getScenario**](ScenarioControllerApi.md#getscenario) | **GET** /api/v1/scenario/{scenarioUuid} | Get scenario
[**runScenario**](ScenarioControllerApi.md#runscenario) | **POST** /api/v1/scenario/{scenarioUuid} | Run scenario
[**searchScenarios**](ScenarioControllerApi.md#searchscenarios) | **GET** /api/v1/scenario | Get paged scenario list
[**updateScenario**](ScenarioControllerApi.md#updatescenario) | **PUT** /api/v1/scenario/{scenarioUuid} | Update scenario

# **cloneScenario**
> \DocStudio\Client\Model\ScenarioDTO cloneScenario($scenario_uuid, $mailbox)

Clone scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Scenario uuid
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->cloneScenario($scenario_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->cloneScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_uuid** | [**string**](../Model/.md)| Scenario uuid |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createNewScenario**
> \DocStudio\Client\Model\ScenarioDTO createNewScenario($body, $mailbox)

Create new scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\ScenarioDTO(); // \DocStudio\Client\Model\ScenarioDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createNewScenario($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->createNewScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteScenario**
> deleteScenario($scenario_uuid, $mailbox)

Delete scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Scenario uuid
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteScenario($scenario_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->deleteScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_uuid** | [**string**](../Model/.md)| Scenario uuid |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getScenario**
> \DocStudio\Client\Model\ScenarioDTO getScenario($scenario_uuid, $mailbox)

Get scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Scenario uuid
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getScenario($scenario_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->getScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_uuid** | [**string**](../Model/.md)| Scenario uuid |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runScenario**
> \DocStudio\Client\Model\SingleUuidDTO runScenario($scenario_uuid, $mailbox)

Run scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Scenario uuid
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->runScenario($scenario_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->runScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scenario_uuid** | [**string**](../Model/.md)| Scenario uuid |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchScenarios**
> \DocStudio\Client\Model\PageDTOScenarioShortDTO searchScenarios($mailbox, $level, $keyword, $offset, $limit)

Get paged scenario list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$level = "pub"; // string | Scenario access level, 'pub' by default.
$keyword = "keyword_example"; // string | Keyword to search scenario by or scenario UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->searchScenarios($mailbox, $level, $keyword, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->searchScenarios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **level** | **string**| Scenario access level, &#x27;pub&#x27; by default. | [optional] [default to pub]
 **keyword** | **string**| Keyword to search scenario by or scenario UUID | [optional]
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]

### Return type

[**\DocStudio\Client\Model\PageDTOScenarioShortDTO**](../Model/PageDTOScenarioShortDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateScenario**
> \DocStudio\Client\Model\ScenarioDTO updateScenario($body, $mailbox, $scenario_uuid)

Update scenario

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\ScenarioDTO(); // \DocStudio\Client\Model\ScenarioDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$scenario_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Scenario uuid

try {
    $result = $apiInstance->updateScenario($body, $mailbox, $scenario_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->updateScenario: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **scenario_uuid** | [**string**](../Model/.md)| Scenario uuid |

### Return type

[**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

