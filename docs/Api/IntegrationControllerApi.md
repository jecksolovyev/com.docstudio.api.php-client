# DocStudio\Client\IntegrationControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**activateIntegrationRule()**](IntegrationControllerApi.md#activateIntegrationRule) | **POST** /api/v1/integration/rule/{integrationRuleUuid}/activate/{flag} | Activate integration rule |
| [**conversionLog()**](IntegrationControllerApi.md#conversionLog) | **GET** /api/v1/integration/conversion-log | Get conversion log |
| [**convertBinaryToXML()**](IntegrationControllerApi.md#convertBinaryToXML) | **POST** /api/v1/integration/convert-binary | Convert incoming file to XML view |
| [**createIntegrationRule()**](IntegrationControllerApi.md#createIntegrationRule) | **POST** /api/v1/integration/rule | Create integration rule |
| [**deleteIntegrationRule()**](IntegrationControllerApi.md#deleteIntegrationRule) | **DELETE** /api/v1/integration/rule/{integrationRuleUuid} | Delete integration rule |
| [**execute()**](IntegrationControllerApi.md#execute) | **POST** /api/v1/integration/rule/execute | Execute conversion map and generate file name (if pattern rule defined) |
| [**generate()**](IntegrationControllerApi.md#generate) | **GET** /api/v1/integration/source/{templateUuid}/{mailboxUuid} | Generate envelope XML by template |
| [**getIntegrationRule()**](IntegrationControllerApi.md#getIntegrationRule) | **GET** /api/v1/integration/rule/{integrationRuleUuid} | Get integration rule |
| [**getIntegrationRules()**](IntegrationControllerApi.md#getIntegrationRules) | **GET** /api/v1/integration/rules/{accountUuid} | Get account integration rules |
| [**getMailboxIntegration()**](IntegrationControllerApi.md#getMailboxIntegration) | **GET** /api/v1/integration/{mailboxUuid} | Get Mailbox integration |
| [**loadLogFile()**](IntegrationControllerApi.md#loadLogFile) | **GET** /api/v1/integration/conversion-log/{logId}/file | Download input/output conversion file |
| [**newPassword()**](IntegrationControllerApi.md#newPassword) | **POST** /api/v1/integration/new-password/{mailboxUuid} | Generate and save new password |
| [**reprocessLogRecord()**](IntegrationControllerApi.md#reprocessLogRecord) | **POST** /api/v1/integration/conversion-log/reprocess | Reprocess log record |
| [**saveMailboxIntegration()**](IntegrationControllerApi.md#saveMailboxIntegration) | **POST** /api/v1/integration/{mailboxUuid} | Create/update Mailbox integration |
| [**updateIntegrationRule()**](IntegrationControllerApi.md#updateIntegrationRule) | **PUT** /api/v1/integration/rule/{integrationRuleUuid} | Update integration rule |


## `activateIntegrationRule()`

```php
activateIntegrationRule($integration_rule_uuid, $flag)
```

Activate integration rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_rule_uuid = 'integration_rule_uuid_example'; // string | UUID of integration rule
$flag = True; // bool | Active state

try {
    $apiInstance->activateIntegrationRule($integration_rule_uuid, $flag);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->activateIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule_uuid** | **string**| UUID of integration rule | |
| **flag** | **bool**| Active state | |

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

## `conversionLog()`

```php
conversionLog($account_id, $rule_id, $mailbox_id, $status, $keyword, $offset, $limit, $uuid_only, $no_rule): \DocStudio\Client\Model\PageDTOConversionLogRecord
```

Get conversion log

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$rule_id = 'rule_id_example'; // string | UUID of integration rule
$mailbox_id = 'mailbox_id_example'; // string | Mailbox UUID
$status = 'status_example'; // string | Conversion Status
$keyword = 'keyword_example'; // string | Filter by Filename/Envelope subject/Envelope UUID
$offset = 0; // int | Offset, how many records to skip
$limit = 25; // int | Limit, how many records to retrieve
$uuid_only = True; // bool | Retrieve only UUID of record
$no_rule = True; // bool | Retrieve only records with no rule

try {
    $result = $apiInstance->conversionLog($account_id, $rule_id, $mailbox_id, $status, $keyword, $offset, $limit, $uuid_only, $no_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->conversionLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **rule_id** | **string**| UUID of integration rule | [optional] |
| **mailbox_id** | **string**| Mailbox UUID | [optional] |
| **status** | **string**| Conversion Status | [optional] |
| **keyword** | **string**| Filter by Filename/Envelope subject/Envelope UUID | [optional] |
| **offset** | **int**| Offset, how many records to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how many records to retrieve | [optional] [default to 25] |
| **uuid_only** | **bool**| Retrieve only UUID of record | [optional] |
| **no_rule** | **bool**| Retrieve only records with no rule | [optional] |

### Return type

[**\DocStudio\Client\Model\PageDTOConversionLogRecord**](../Model/PageDTOConversionLogRecord.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `convertBinaryToXML()`

```php
convertBinaryToXML($mailbox_uuid, $filename, $body): string
```

Convert incoming file to XML view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox UUID
$filename = 'filename_example'; // string | filename, for type detection
$body = 'body_example'; // string

try {
    $result = $apiInstance->convertBinaryToXML($mailbox_uuid, $filename, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->convertBinaryToXML: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**| Mailbox UUID | |
| **filename** | **string**| filename, for type detection | |
| **body** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIntegrationRule()`

```php
createIntegrationRule($integration_rule): \DocStudio\Client\Model\IntegrationRule
```

Create integration rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_rule = new \DocStudio\Client\Model\IntegrationRule(); // \DocStudio\Client\Model\IntegrationRule

try {
    $result = $apiInstance->createIntegrationRule($integration_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->createIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule** | [**\DocStudio\Client\Model\IntegrationRule**](../Model/IntegrationRule.md)|  | |

### Return type

[**\DocStudio\Client\Model\IntegrationRule**](../Model/IntegrationRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteIntegrationRule()`

```php
deleteIntegrationRule($integration_rule_uuid)
```

Delete integration rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_rule_uuid = 'integration_rule_uuid_example'; // string | UUID of integration rule

try {
    $apiInstance->deleteIntegrationRule($integration_rule_uuid);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->deleteIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule_uuid** | **string**| UUID of integration rule | |

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

## `execute()`

```php
execute($integration_rule_request_dto): \DocStudio\Client\Model\IntegrationRuleResponseDTO
```

Execute conversion map and generate file name (if pattern rule defined)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_rule_request_dto = new \DocStudio\Client\Model\IntegrationRuleRequestDTO(); // \DocStudio\Client\Model\IntegrationRuleRequestDTO

try {
    $result = $apiInstance->execute($integration_rule_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->execute: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule_request_dto** | [**\DocStudio\Client\Model\IntegrationRuleRequestDTO**](../Model/IntegrationRuleRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\IntegrationRuleResponseDTO**](../Model/IntegrationRuleResponseDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generate()`

```php
generate($mailbox_uuid, $template_uuid, $version_uuid, $auto_fields): \DocStudio\Client\Model\GeneratedEnvelope
```

Generate envelope XML by template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox UUID
$template_uuid = 'template_uuid_example'; // string | Template UUID
$version_uuid = 'version_uuid_example'; // string | Template version UUID
$auto_fields = True; // bool | Include auto fields (lookup, formula, duplicate)

try {
    $result = $apiInstance->generate($mailbox_uuid, $template_uuid, $version_uuid, $auto_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->generate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**| Mailbox UUID | |
| **template_uuid** | **string**| Template UUID | |
| **version_uuid** | **string**| Template version UUID | [optional] |
| **auto_fields** | **bool**| Include auto fields (lookup, formula, duplicate) | [optional] |

### Return type

[**\DocStudio\Client\Model\GeneratedEnvelope**](../Model/GeneratedEnvelope.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationRule()`

```php
getIntegrationRule($integration_rule_uuid, $base_fields): \DocStudio\Client\Model\IntegrationRule
```

Get integration rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_rule_uuid = 'integration_rule_uuid_example'; // string | UUID of integration rule
$base_fields = True; // bool | Get only based fields (skip large ones)

try {
    $result = $apiInstance->getIntegrationRule($integration_rule_uuid, $base_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->getIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule_uuid** | **string**| UUID of integration rule | |
| **base_fields** | **bool**| Get only based fields (skip large ones) | [optional] |

### Return type

[**\DocStudio\Client\Model\IntegrationRule**](../Model/IntegrationRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationRules()`

```php
getIntegrationRules($account_uuid, $mailbox_uuid): \DocStudio\Client\Model\IntegrationRuleListItem[]
```

Get account integration rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox UUID

try {
    $result = $apiInstance->getIntegrationRules($account_uuid, $mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->getIntegrationRules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **mailbox_uuid** | **string**| Mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\IntegrationRuleListItem[]**](../Model/IntegrationRuleListItem.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxIntegration()`

```php
getMailboxIntegration($mailbox_uuid): \DocStudio\Client\Model\MailboxIntegration
```

Get Mailbox integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = 'mailbox_uuid_example'; // string

try {
    $result = $apiInstance->getMailboxIntegration($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->getMailboxIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\MailboxIntegration**](../Model/MailboxIntegration.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loadLogFile()`

```php
loadLogFile($log_id): \SplFileObject
```

Download input/output conversion file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$log_id = 'log_id_example'; // string | UUID of conversion log

try {
    $result = $apiInstance->loadLogFile($log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->loadLogFile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **log_id** | **string**| UUID of conversion log | |

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

## `newPassword()`

```php
newPassword($mailbox_uuid): object
```

Generate and save new password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = 'mailbox_uuid_example'; // string

try {
    $result = $apiInstance->newPassword($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->newPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**|  | |

### Return type

**object**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reprocessLogRecord()`

```php
reprocessLogRecord($integration_reprocess_request)
```

Reprocess log record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_reprocess_request = new \DocStudio\Client\Model\IntegrationReprocessRequest(); // \DocStudio\Client\Model\IntegrationReprocessRequest

try {
    $apiInstance->reprocessLogRecord($integration_reprocess_request);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->reprocessLogRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_reprocess_request** | [**\DocStudio\Client\Model\IntegrationReprocessRequest**](../Model/IntegrationReprocessRequest.md)|  | |

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

## `saveMailboxIntegration()`

```php
saveMailboxIntegration($mailbox_uuid, $mailbox_integration): \DocStudio\Client\Model\MailboxIntegration
```

Create/update Mailbox integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = 'mailbox_uuid_example'; // string
$mailbox_integration = new \DocStudio\Client\Model\MailboxIntegration(); // \DocStudio\Client\Model\MailboxIntegration

try {
    $result = $apiInstance->saveMailboxIntegration($mailbox_uuid, $mailbox_integration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->saveMailboxIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**|  | |
| **mailbox_integration** | [**\DocStudio\Client\Model\MailboxIntegration**](../Model/MailboxIntegration.md)|  | |

### Return type

[**\DocStudio\Client\Model\MailboxIntegration**](../Model/MailboxIntegration.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIntegrationRule()`

```php
updateIntegrationRule($integration_rule_uuid, $integration_rule): \DocStudio\Client\Model\IntegrationRule
```

Update integration rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$integration_rule_uuid = 'integration_rule_uuid_example'; // string | UUID of integration rule
$integration_rule = new \DocStudio\Client\Model\IntegrationRule(); // \DocStudio\Client\Model\IntegrationRule

try {
    $result = $apiInstance->updateIntegrationRule($integration_rule_uuid, $integration_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->updateIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule_uuid** | **string**| UUID of integration rule | |
| **integration_rule** | [**\DocStudio\Client\Model\IntegrationRule**](../Model/IntegrationRule.md)|  | |

### Return type

[**\DocStudio\Client\Model\IntegrationRule**](../Model/IntegrationRule.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
