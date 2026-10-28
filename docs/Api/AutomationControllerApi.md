# DocStudio\Client\AutomationControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAutomation()**](AutomationControllerApi.md#createAutomation) | **POST** /api/v1/automation/account/{accountId} | Create new automation |
| [**createCredentials()**](AutomationControllerApi.md#createCredentials) | **POST** /api/v1/automation/account/{accountId}/credentials | Create credentials |
| [**deleteAutomation()**](AutomationControllerApi.md#deleteAutomation) | **DELETE** /api/v1/automation/account/{accountId}/{id} | Delete automation |
| [**deleteCredentials()**](AutomationControllerApi.md#deleteCredentials) | **DELETE** /api/v1/automation/account/{accountId}/credentials/{id} | Delete credentials |
| [**getAutomation()**](AutomationControllerApi.md#getAutomation) | **GET** /api/v1/automation/account/{accountId}/{id} | Retrieve automation |
| [**getAutomationExecutionFile()**](AutomationControllerApi.md#getAutomationExecutionFile) | **GET** /api/v1/automation/account/{accountId}/execution/{traceId}/log/{spanId}/file | Get automation execution result file |
| [**getAutomationExecutionLog()**](AutomationControllerApi.md#getAutomationExecutionLog) | **GET** /api/v1/automation/account/{accountId}/execution/{traceId}/log | Get automation execution log |
| [**getAutomationExecutions()**](AutomationControllerApi.md#getAutomationExecutions) | **GET** /api/v1/automation/account/{accountId}/executions | Get automation executions |
| [**getAutomations()**](AutomationControllerApi.md#getAutomations) | **GET** /api/v1/automation/account/{accountId} | Get account automations |
| [**getBrickTypes()**](AutomationControllerApi.md#getBrickTypes) | **GET** /api/v1/automation/account/{accountId}/brick-types |  |
| [**getCredentialTypes()**](AutomationControllerApi.md#getCredentialTypes) | **GET** /api/v1/automation/account/{accountId}/credential-types |  |
| [**getCredentials()**](AutomationControllerApi.md#getCredentials) | **GET** /api/v1/automation/account/{accountId}/credentials | Get account credentials |
| [**reprocessExecution()**](AutomationControllerApi.md#reprocessExecution) | **POST** /api/v1/automation/account/{accountId}/execution/{traceId}/log/{spanId}/reprocess | Reprocess execution starting from the span |
| [**updateAutomation()**](AutomationControllerApi.md#updateAutomation) | **PUT** /api/v1/automation/account/{accountId}/{id} | Update automation |


## `createAutomation()`

```php
createAutomation($account_id, $automation_update): \DocStudio\Client\Model\IdResult
```

Create new automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$automation_update = new \DocStudio\Client\Model\AutomationUpdate(); // \DocStudio\Client\Model\AutomationUpdate

try {
    $result = $apiInstance->createAutomation($account_id, $automation_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->createAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **automation_update** | [**\DocStudio\Client\Model\AutomationUpdate**](../Model/AutomationUpdate.md)|  | |

### Return type

[**\DocStudio\Client\Model\IdResult**](../Model/IdResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCredentials()`

```php
createCredentials($account_id, $credentials_create): \DocStudio\Client\Model\IdResult
```

Create credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$credentials_create = new \DocStudio\Client\Model\CredentialsCreate(); // \DocStudio\Client\Model\CredentialsCreate

try {
    $result = $apiInstance->createCredentials($account_id, $credentials_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->createCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **credentials_create** | [**\DocStudio\Client\Model\CredentialsCreate**](../Model/CredentialsCreate.md)|  | |

### Return type

[**\DocStudio\Client\Model\IdResult**](../Model/IdResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAutomation()`

```php
deleteAutomation($account_id, $id)
```

Delete automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | Automation UUID

try {
    $apiInstance->deleteAutomation($account_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->deleteAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| Automation UUID | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCredentials()`

```php
deleteCredentials($account_id, $id)
```

Delete credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | Credentials UUID

try {
    $apiInstance->deleteCredentials($account_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->deleteCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| Credentials UUID | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomation()`

```php
getAutomation($account_id, $id, $version): \DocStudio\Client\Model\AutomationGet
```

Retrieve automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | Automation UUID
$version = 'version_example'; // string | Version

try {
    $result = $apiInstance->getAutomation($account_id, $id, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->getAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| Automation UUID | |
| **version** | **string**| Version | [optional] |

### Return type

[**\DocStudio\Client\Model\AutomationGet**](../Model/AutomationGet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationExecutionFile()`

```php
getAutomationExecutionFile($account_id, $trace_id, $span_id, $filename): \SplFileObject
```

Get automation execution result file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$trace_id = 'trace_id_example'; // string | Execution Trace ID
$span_id = 'span_id_example'; // string | Execution Span ID
$filename = 'filename_example'; // string | Optional filename

try {
    $result = $apiInstance->getAutomationExecutionFile($account_id, $trace_id, $span_id, $filename);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->getAutomationExecutionFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **trace_id** | **string**| Execution Trace ID | |
| **span_id** | **string**| Execution Span ID | |
| **filename** | **string**| Optional filename | [optional] |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationExecutionLog()`

```php
getAutomationExecutionLog($account_id, $trace_id): \DocStudio\Client\Model\AutomationLog[]
```

Get automation execution log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$trace_id = 'trace_id_example'; // string | Execution Trace ID

try {
    $result = $apiInstance->getAutomationExecutionLog($account_id, $trace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->getAutomationExecutionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **trace_id** | **string**| Execution Trace ID | |

### Return type

[**\DocStudio\Client\Model\AutomationLog[]**](../Model/AutomationLog.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomationExecutions()`

```php
getAutomationExecutions($account_id, $mailbox_id, $envelope_id, $workflow_id, $filename, $from, $to, $state, $version, $offset, $limit): \DocStudio\Client\Model\PageDTOAutomationExecution
```

Get automation executions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$mailbox_id = 'mailbox_id_example'; // string
$envelope_id = 'envelope_id_example'; // string
$workflow_id = 'workflow_id_example'; // string
$filename = 'filename_example'; // string
$from = 56; // int
$to = 56; // int
$state = 'state_example'; // string
$version = 56; // int
$offset = 0; // int
$limit = 25; // int

try {
    $result = $apiInstance->getAutomationExecutions($account_id, $mailbox_id, $envelope_id, $workflow_id, $filename, $from, $to, $state, $version, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->getAutomationExecutions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **mailbox_id** | **string**|  | [optional] |
| **envelope_id** | **string**|  | [optional] |
| **workflow_id** | **string**|  | [optional] |
| **filename** | **string**|  | [optional] |
| **from** | **int**|  | [optional] |
| **to** | **int**|  | [optional] |
| **state** | **string**|  | [optional] |
| **version** | **int**|  | [optional] |
| **offset** | **int**|  | [optional] [default to 0] |
| **limit** | **int**|  | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOAutomationExecution**](../Model/PageDTOAutomationExecution.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutomations()`

```php
getAutomations($account_id, $name, $status, $hidden): \DocStudio\Client\Model\AutomationGetList[]
```

Get account automations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$name = 'name_example'; // string | Filter by name
$status = True; // bool | Filter by active status
$hidden = True; // bool | Filter by hidden status

try {
    $result = $apiInstance->getAutomations($account_id, $name, $status, $hidden);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->getAutomations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **name** | **string**| Filter by name | [optional] |
| **status** | **bool**| Filter by active status | [optional] |
| **hidden** | **bool**| Filter by hidden status | [optional] |

### Return type

[**\DocStudio\Client\Model\AutomationGetList[]**](../Model/AutomationGetList.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBrickTypes()`

```php
getBrickTypes($account_id): \DocStudio\Client\Model\BrickTypeGet[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID

try {
    $result = $apiInstance->getBrickTypes($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->getBrickTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |

### Return type

[**\DocStudio\Client\Model\BrickTypeGet[]**](../Model/BrickTypeGet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredentialTypes()`

```php
getCredentialTypes($account_id): \DocStudio\Client\Model\CredentialTypeGet[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID

try {
    $result = $apiInstance->getCredentialTypes($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->getCredentialTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |

### Return type

[**\DocStudio\Client\Model\CredentialTypeGet[]**](../Model/CredentialTypeGet.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCredentials()`

```php
getCredentials($account_id, $name, $type): \DocStudio\Client\Model\CredentialsGetList[]
```

Get account credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$name = 'name_example'; // string | Filter by name
$type = 'type_example'; // string | Filter by type

try {
    $result = $apiInstance->getCredentials($account_id, $name, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->getCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **name** | **string**| Filter by name | [optional] |
| **type** | **string**| Filter by type | [optional] |

### Return type

[**\DocStudio\Client\Model\CredentialsGetList[]**](../Model/CredentialsGetList.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reprocessExecution()`

```php
reprocessExecution($account_id, $trace_id, $span_id, $version)
```

Reprocess execution starting from the span

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$trace_id = 'trace_id_example'; // string | Execution Trace ID
$span_id = 'span_id_example'; // string | Execution Span ID
$version = 'version_example'; // string | Version

try {
    $apiInstance->reprocessExecution($account_id, $trace_id, $span_id, $version);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->reprocessExecution: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **trace_id** | **string**| Execution Trace ID | |
| **span_id** | **string**| Execution Span ID | |
| **version** | **string**| Version | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutomation()`

```php
updateAutomation($account_id, $id, $automation_update)
```

Update automation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AutomationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | Automation UUID
$automation_update = new \DocStudio\Client\Model\AutomationUpdate(); // \DocStudio\Client\Model\AutomationUpdate

try {
    $apiInstance->updateAutomation($account_id, $id, $automation_update);
} catch (Exception $e) {
    echo 'Exception when calling AutomationControllerApi->updateAutomation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| Automation UUID | |
| **automation_update** | [**\DocStudio\Client\Model\AutomationUpdate**](../Model/AutomationUpdate.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
