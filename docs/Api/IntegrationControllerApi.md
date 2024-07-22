# DocStudio\Client\IntegrationControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**convertBinaryToXML()**](IntegrationControllerApi.md#convertBinaryToXML) | **POST** /api/v1/integration/convert-binary | Convert incoming file to XML view |
| [**createIntegrationRule()**](IntegrationControllerApi.md#createIntegrationRule) | **POST** /api/v1/integration/rule | Create integration rule |
| [**deleteIntegrationRule()**](IntegrationControllerApi.md#deleteIntegrationRule) | **DELETE** /api/v1/integration/rule/{integrationRuleUuid} | Delete integration rule |
| [**execute()**](IntegrationControllerApi.md#execute) | **POST** /api/v1/integration/rule/execute | Execute conversion map and generate file name (if pattern rule defined) |
| [**generate()**](IntegrationControllerApi.md#generate) | **GET** /api/v1/integration/source/{templateUuid}/{mailboxUuid} | Generate envelope XML by template |
| [**getExchangeCertificate()**](IntegrationControllerApi.md#getExchangeCertificate) | **GET** /api/v1/integration/exchange-certificate | Get public exchange certificate |
| [**getIntegrationRule()**](IntegrationControllerApi.md#getIntegrationRule) | **GET** /api/v1/integration/rule/{integrationRuleUuid} | Get integration rule |
| [**getIntegrationRules()**](IntegrationControllerApi.md#getIntegrationRules) | **GET** /api/v1/integration/rules/{accountUuid} | Get account integration rules |
| [**getMailboxIntegration()**](IntegrationControllerApi.md#getMailboxIntegration) | **GET** /api/v1/integration/{mailboxUuid} | Get Mailbox integration |
| [**newPassword()**](IntegrationControllerApi.md#newPassword) | **POST** /api/v1/integration/new-password/{mailboxUuid} | Generate and save new password |
| [**saveMailboxIntegration()**](IntegrationControllerApi.md#saveMailboxIntegration) | **POST** /api/v1/integration/{mailboxUuid} | Create/update Mailbox integration |
| [**updateIntegrationRule()**](IntegrationControllerApi.md#updateIntegrationRule) | **PUT** /api/v1/integration/rule/{integrationRuleUuid} | Update integration rule |


## `convertBinaryToXML()`

```php
convertBinaryToXML($filename, $mailbox_uuid, $request_body): string
```

Convert incoming file to XML view

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filename = 'filename_example'; // string | filename, for type detection
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->convertBinaryToXML($filename, $mailbox_uuid, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->convertBinaryToXML: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **filename** | **string**| filename, for type detection | |
| **mailbox_uuid** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createIntegrationRule()`

```php
createIntegrationRule($integration_rule_dto): \DocStudio\Client\Model\IntegrationRuleDTO
```

Create integration rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_rule_dto = new \DocStudio\Client\Model\IntegrationRuleDTO(); // \DocStudio\Client\Model\IntegrationRuleDTO

try {
    $result = $apiInstance->createIntegrationRule($integration_rule_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->createIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule_dto** | [**\DocStudio\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)

### Authorization

No authorization required

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



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

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



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generate()`

```php
generate($template_uuid, $mailbox_uuid, $version_uuid): \DocStudio\Client\Model\DataMap
```

Generate envelope XML by template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$template_uuid = 'template_uuid_example'; // string | Template UUID
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$version_uuid = 'version_uuid_example'; // string | Template version UUID

try {
    $result = $apiInstance->generate($template_uuid, $mailbox_uuid, $version_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->generate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_uuid** | **string**| Template UUID | |
| **mailbox_uuid** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **version_uuid** | **string**| Template version UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\DataMap**](../Model/DataMap.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getExchangeCertificate()`

```php
getExchangeCertificate(): string[]
```

Get public exchange certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getExchangeCertificate();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->getExchangeCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationRule()`

```php
getIntegrationRule($integration_rule_uuid): \DocStudio\Client\Model\IntegrationRuleDTO
```

Get integration rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_rule_uuid = 'integration_rule_uuid_example'; // string | UUID of integration rule

try {
    $result = $apiInstance->getIntegrationRule($integration_rule_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->getIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule_uuid** | **string**| UUID of integration rule | |

### Return type

[**\DocStudio\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getIntegrationRules()`

```php
getIntegrationRules($account_uuid, $mailbox_uuid): \DocStudio\Client\Model\IntegrationRuleDTO[]
```

Get account integration rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string
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
| **account_uuid** | **string**|  | |
| **mailbox_uuid** | **string**| Mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\IntegrationRuleDTO[]**](../Model/IntegrationRuleDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxIntegration()`

```php
getMailboxIntegration($mailbox_uuid): \DocStudio\Client\Model\IntegrationDTO
```

Get Mailbox integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

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
| **mailbox_uuid** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\IntegrationDTO**](../Model/IntegrationDTO.md)

### Authorization

No authorization required

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



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

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
| **mailbox_uuid** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `saveMailboxIntegration()`

```php
saveMailboxIntegration($mailbox_uuid, $integration_dto): \DocStudio\Client\Model\IntegrationDTO
```

Create/update Mailbox integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$integration_dto = new \DocStudio\Client\Model\IntegrationDTO(); // \DocStudio\Client\Model\IntegrationDTO

try {
    $result = $apiInstance->saveMailboxIntegration($mailbox_uuid, $integration_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->saveMailboxIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **integration_dto** | [**\DocStudio\Client\Model\IntegrationDTO**](../Model/IntegrationDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\IntegrationDTO**](../Model/IntegrationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateIntegrationRule()`

```php
updateIntegrationRule($integration_rule_uuid, $integration_rule_dto): \DocStudio\Client\Model\IntegrationRuleDTO
```

Update integration rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\IntegrationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$integration_rule_uuid = 'integration_rule_uuid_example'; // string | UUID of integration rule
$integration_rule_dto = new \DocStudio\Client\Model\IntegrationRuleDTO(); // \DocStudio\Client\Model\IntegrationRuleDTO

try {
    $result = $apiInstance->updateIntegrationRule($integration_rule_uuid, $integration_rule_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IntegrationControllerApi->updateIntegrationRule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **integration_rule_uuid** | **string**| UUID of integration rule | |
| **integration_rule_dto** | [**\DocStudio\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\IntegrationRuleDTO**](../Model/IntegrationRuleDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
