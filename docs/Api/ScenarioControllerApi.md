# DocStudio\Client\ScenarioControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloneScenario()**](ScenarioControllerApi.md#cloneScenario) | **PUT** /api/v1/scenario/{scenarioUuid}/clone | Clone scenario |
| [**createNewScenario()**](ScenarioControllerApi.md#createNewScenario) | **POST** /api/v1/scenario | Create new scenario |
| [**deleteScenario()**](ScenarioControllerApi.md#deleteScenario) | **DELETE** /api/v1/scenario/{scenarioUuid} | Delete scenario |
| [**getScenario()**](ScenarioControllerApi.md#getScenario) | **GET** /api/v1/scenario/{scenarioUuid} | Get scenario |
| [**runScenario()**](ScenarioControllerApi.md#runScenario) | **POST** /api/v1/scenario/{scenarioUuid} | Run scenario |
| [**searchScenarios()**](ScenarioControllerApi.md#searchScenarios) | **GET** /api/v1/scenario | Get paged scenario list |
| [**updateScenario()**](ScenarioControllerApi.md#updateScenario) | **PUT** /api/v1/scenario/{scenarioUuid} | Update scenario |


## `cloneScenario()`

```php
cloneScenario($scenario_uuid, $mailbox): \DocStudio\Client\Model\ScenarioDTO
```

Clone scenario

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = 'scenario_uuid_example'; // string | Scenario uuid
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->cloneScenario($scenario_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->cloneScenario: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scenario_uuid** | **string**| Scenario uuid | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNewScenario()`

```php
createNewScenario($mailbox, $scenario_dto): \DocStudio\Client\Model\ScenarioDTO
```

Create new scenario

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$scenario_dto = new \DocStudio\Client\Model\ScenarioDTO(); // \DocStudio\Client\Model\ScenarioDTO

try {
    $result = $apiInstance->createNewScenario($mailbox, $scenario_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->createNewScenario: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **scenario_dto** | [**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScenario()`

```php
deleteScenario($scenario_uuid, $mailbox)
```

Delete scenario

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = 'scenario_uuid_example'; // string | Scenario uuid
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteScenario($scenario_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->deleteScenario: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scenario_uuid** | **string**| Scenario uuid | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

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

## `getScenario()`

```php
getScenario($scenario_uuid, $mailbox): \DocStudio\Client\Model\ScenarioDTO
```

Get scenario

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = 'scenario_uuid_example'; // string | Scenario uuid
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getScenario($scenario_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->getScenario: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scenario_uuid** | **string**| Scenario uuid | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runScenario()`

```php
runScenario($scenario_uuid, $mailbox): \DocStudio\Client\Model\SingleUuidDTO
```

Run scenario

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = 'scenario_uuid_example'; // string | Scenario uuid
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->runScenario($scenario_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->runScenario: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scenario_uuid** | **string**| Scenario uuid | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchScenarios()`

```php
searchScenarios($mailbox, $level, $keyword, $offset, $limit): \DocStudio\Client\Model\PageDTOScenarioShortDTO
```

Get paged scenario list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$level = 'pub'; // string | Scenario access level, 'pub' by default.
$keyword = 'keyword_example'; // string | Keyword to search scenario by or scenario UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->searchScenarios($mailbox, $level, $keyword, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->searchScenarios: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **level** | **string**| Scenario access level, &#39;pub&#39; by default. | [optional] [default to &#39;pub&#39;] |
| **keyword** | **string**| Keyword to search scenario by or scenario UUID | [optional] |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOScenarioShortDTO**](../Model/PageDTOScenarioShortDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateScenario()`

```php
updateScenario($scenario_uuid, $mailbox, $scenario_dto): \DocStudio\Client\Model\ScenarioDTO
```

Update scenario

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\ScenarioControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario_uuid = 'scenario_uuid_example'; // string | Scenario uuid
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$scenario_dto = new \DocStudio\Client\Model\ScenarioDTO(); // \DocStudio\Client\Model\ScenarioDTO

try {
    $result = $apiInstance->updateScenario($scenario_uuid, $mailbox, $scenario_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScenarioControllerApi->updateScenario: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scenario_uuid** | **string**| Scenario uuid | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **scenario_dto** | [**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ScenarioDTO**](../Model/ScenarioDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
