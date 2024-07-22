# DocStudio\Client\DictionaryControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveDictionary()**](DictionaryControllerApi.md#archiveDictionary) | **PATCH** /api/v1/dictionary/{dictionaryUuid}/archive | Archive dictionary |
| [**checkColumnValues()**](DictionaryControllerApi.md#checkColumnValues) | **GET** /api/v1/dictionary/{dictionaryUuid}/column/{columnUuid}/check | Check dictionary column. Check access, existence, etc. |
| [**checkDictionary()**](DictionaryControllerApi.md#checkDictionary) | **GET** /api/v1/dictionary/{dictionaryUuid}/check | Check dictionary. Check access, existence, etc. |
| [**createColumn()**](DictionaryControllerApi.md#createColumn) | **POST** /api/v1/dictionary/{dictionaryUuid}/column | Create dictionary column |
| [**createDictionary()**](DictionaryControllerApi.md#createDictionary) | **POST** /api/v1/dictionary | Create empty dictionary |
| [**createRecord()**](DictionaryControllerApi.md#createRecord) | **POST** /api/v1/dictionary/{dictionaryUuid}/record | Create record(s) |
| [**deleteColumnDictionary()**](DictionaryControllerApi.md#deleteColumnDictionary) | **DELETE** /api/v1/dictionary/{dictionaryUuid}/column/{columnUuid} | Delete column. Will return deleted column UUID |
| [**deleteRecords()**](DictionaryControllerApi.md#deleteRecords) | **DELETE** /api/v1/dictionary/{dictionaryUuid}/record | Delete record(s). Will return deleted records UUID(s) |
| [**download()**](DictionaryControllerApi.md#download) | **POST** /api/v1/dictionary/{dictionaryUuid}/download | Download the dictionary |
| [**downloadStatus()**](DictionaryControllerApi.md#downloadStatus) | **GET** /api/v1/dictionary/{dictionaryUuid}/download/status/{taskUuid} | Download the dictionary |
| [**getColumnValue()**](DictionaryControllerApi.md#getColumnValue) | **GET** /api/v1/dictionary/{dictionaryUuid}/record/{recordUuid}/column/{columnUuid} | Retrieve column value for specific record |
| [**getColumnValues()**](DictionaryControllerApi.md#getColumnValues) | **POST** /api/v1/dictionary/{dictionaryUuid}/column/{columnUuid} | Retrieve column values from dictionary |
| [**getDictionaryRecord()**](DictionaryControllerApi.md#getDictionaryRecord) | **GET** /api/v1/dictionary/{dictionaryUuid}/record/{recordUuid} | Retrieve record |
| [**getDictionaryRecordUuids()**](DictionaryControllerApi.md#getDictionaryRecordUuids) | **POST** /api/v1/dictionary/{dictionaryUuid}/record-uuids | Get dictionary record uuids by values |
| [**getDictionaryRecords()**](DictionaryControllerApi.md#getDictionaryRecords) | **POST** /api/v1/dictionary/{dictionaryUuid}/records | Get dictionary records |
| [**patchDictionary()**](DictionaryControllerApi.md#patchDictionary) | **PATCH** /api/v1/dictionary/{dictionaryUuid} | Update dictionary |
| [**patchRecord()**](DictionaryControllerApi.md#patchRecord) | **PATCH** /api/v1/dictionary/{dictionaryUuid}/record/{recordUuid} | Update record column values |
| [**readDictionary()**](DictionaryControllerApi.md#readDictionary) | **GET** /api/v1/dictionary/{dictionaryUuid} | Read/get dictionary |
| [**searchDictionaries()**](DictionaryControllerApi.md#searchDictionaries) | **GET** /api/v1/dictionary | Get paged dictionary list |
| [**updateColumnDictionary()**](DictionaryControllerApi.md#updateColumnDictionary) | **PUT** /api/v1/dictionary/{dictionaryUuid}/column/{columnUuid} | Update dictionary column |


## `archiveDictionary()`

```php
archiveDictionary($dictionary_uuid, $mailbox)
```

Archive dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->archiveDictionary($dictionary_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->archiveDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

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

## `checkColumnValues()`

```php
checkColumnValues($dictionary_uuid, $column_uuid, $mailbox): \DocStudio\Client\Model\DictionaryCheckResponseDTO
```

Check dictionary column. Check access, existence, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$column_uuid = 'column_uuid_example'; // string | Column UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->checkColumnValues($dictionary_uuid, $column_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->checkColumnValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **column_uuid** | **string**| Column UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\DictionaryCheckResponseDTO**](../Model/DictionaryCheckResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkDictionary()`

```php
checkDictionary($dictionary_uuid, $mailbox): \DocStudio\Client\Model\DictionaryCheckResponseDTO
```

Check dictionary. Check access, existence, etc.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | UUID of dictionary
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->checkDictionary($dictionary_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->checkDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| UUID of dictionary | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\DictionaryCheckResponseDTO**](../Model/DictionaryCheckResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createColumn()`

```php
createColumn($dictionary_uuid, $mailbox, $dictionary_column_request_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Create dictionary column

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_column_request_dto = new \DocStudio\Client\Model\DictionaryColumnRequestDTO(); // \DocStudio\Client\Model\DictionaryColumnRequestDTO

try {
    $result = $apiInstance->createColumn($dictionary_uuid, $mailbox, $dictionary_column_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->createColumn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **dictionary_column_request_dto** | [**\DocStudio\Client\Model\DictionaryColumnRequestDTO**](../Model/DictionaryColumnRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createDictionary()`

```php
createDictionary($mailbox): \DocStudio\Client\Model\SingleUuidDTO
```

Create empty dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createDictionary($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->createDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createRecord()`

```php
createRecord($dictionary_uuid, $mailbox, $dictionary_column_value_request_dto): \DocStudio\Client\Model\CreateRecordsResponseDTO
```

Create record(s)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_column_value_request_dto = NULL; // \DocStudio\Client\Model\DictionaryColumnValueRequestDTO[][]

try {
    $result = $apiInstance->createRecord($dictionary_uuid, $mailbox, $dictionary_column_value_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->createRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **dictionary_column_value_request_dto** | [**\DocStudio\Client\Model\DictionaryColumnValueRequestDTO[][]**](../Model/array.md)|  | |

### Return type

[**\DocStudio\Client\Model\CreateRecordsResponseDTO**](../Model/CreateRecordsResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteColumnDictionary()`

```php
deleteColumnDictionary($dictionary_uuid, $column_uuid, $mailbox): \DocStudio\Client\Model\SingleUuidDTO
```

Delete column. Will return deleted column UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$column_uuid = 'column_uuid_example'; // string | Column UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->deleteColumnDictionary($dictionary_uuid, $column_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->deleteColumnDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **column_uuid** | **string**| Column UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRecords()`

```php
deleteRecords($dictionary_uuid, $mailbox, $single_uuid_dto): \DocStudio\Client\Model\SingleUuidDTO[]
```

Delete record(s). Will return deleted records UUID(s)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$single_uuid_dto = array(new \DocStudio\Client\Model\SingleUuidDTO()); // \DocStudio\Client\Model\SingleUuidDTO[]

try {
    $result = $apiInstance->deleteRecords($dictionary_uuid, $mailbox, $single_uuid_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->deleteRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **single_uuid_dto** | [**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `download()`

```php
download($dictionary_uuid, $mailbox, $dictionary_download_params_dto): \DocStudio\Client\Model\ExportTaskStatusDTO
```

Download the dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | UUID of dictionary
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_download_params_dto = new \DocStudio\Client\Model\DictionaryDownloadParamsDTO(); // \DocStudio\Client\Model\DictionaryDownloadParamsDTO

try {
    $result = $apiInstance->download($dictionary_uuid, $mailbox, $dictionary_download_params_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->download: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| UUID of dictionary | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **dictionary_download_params_dto** | [**\DocStudio\Client\Model\DictionaryDownloadParamsDTO**](../Model/DictionaryDownloadParamsDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ExportTaskStatusDTO**](../Model/ExportTaskStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadStatus()`

```php
downloadStatus($dictionary_uuid, $task_uuid, $mailbox): \DocStudio\Client\Model\ExportTaskStatusDTO
```

Download the dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | UUID of dictionary
$task_uuid = 'task_uuid_example'; // string | UUID of task
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->downloadStatus($dictionary_uuid, $task_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->downloadStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| UUID of dictionary | |
| **task_uuid** | **string**| UUID of task | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\ExportTaskStatusDTO**](../Model/ExportTaskStatusDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColumnValue()`

```php
getColumnValue($dictionary_uuid, $record_uuid, $column_uuid, $mailbox): \DocStudio\Client\Model\DictionaryColumnValueResponseDTO
```

Retrieve column value for specific record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$record_uuid = 'record_uuid_example'; // string | Record UUID
$column_uuid = 'column_uuid_example'; // string | Column UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getColumnValue($dictionary_uuid, $record_uuid, $column_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getColumnValue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **record_uuid** | **string**| Record UUID | |
| **column_uuid** | **string**| Column UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\DictionaryColumnValueResponseDTO**](../Model/DictionaryColumnValueResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColumnValues()`

```php
getColumnValues($dictionary_uuid, $column_uuid, $dictionary_column_value_search_dto, $offset, $limit, $mailbox): \DocStudio\Client\Model\PageDTODictionaryColumnValueResponseDTO
```

Retrieve column values from dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$column_uuid = 'column_uuid_example'; // string | Column UUID
$dictionary_column_value_search_dto = new \DocStudio\Client\Model\DictionaryColumnValueSearchDTO(); // \DocStudio\Client\Model\DictionaryColumnValueSearchDTO
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getColumnValues($dictionary_uuid, $column_uuid, $dictionary_column_value_search_dto, $offset, $limit, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getColumnValues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **column_uuid** | **string**| Column UUID | |
| **dictionary_column_value_search_dto** | [**\DocStudio\Client\Model\DictionaryColumnValueSearchDTO**](../Model/DictionaryColumnValueSearchDTO.md)|  | |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\PageDTODictionaryColumnValueResponseDTO**](../Model/PageDTODictionaryColumnValueResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDictionaryRecord()`

```php
getDictionaryRecord($dictionary_uuid, $record_uuid, $mailbox): \DocStudio\Client\Model\DictionaryRecordValuesResponseDTO
```

Retrieve record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$record_uuid = 'record_uuid_example'; // string | Record UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getDictionaryRecord($dictionary_uuid, $record_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getDictionaryRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **record_uuid** | **string**| Record UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\DictionaryRecordValuesResponseDTO**](../Model/DictionaryRecordValuesResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDictionaryRecordUuids()`

```php
getDictionaryRecordUuids($dictionary_uuid, $mailbox, $dictionary_records_request_dto): array<string,string>
```

Get dictionary record uuids by values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | UUID of dictionary
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_records_request_dto = new \DocStudio\Client\Model\DictionaryRecordsRequestDTO(); // \DocStudio\Client\Model\DictionaryRecordsRequestDTO

try {
    $result = $apiInstance->getDictionaryRecordUuids($dictionary_uuid, $mailbox, $dictionary_records_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getDictionaryRecordUuids: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| UUID of dictionary | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **dictionary_records_request_dto** | [**\DocStudio\Client\Model\DictionaryRecordsRequestDTO**](../Model/DictionaryRecordsRequestDTO.md)|  | |

### Return type

**array<string,string>**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDictionaryRecords()`

```php
getDictionaryRecords($dictionary_uuid, $mailbox, $dictionary_filters_request_dto, $offset, $limit): \DocStudio\Client\Model\PageDTODictionaryRecordValuesResponseDTO
```

Get dictionary records

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | UUID of dictionary
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_filters_request_dto = new \DocStudio\Client\Model\DictionaryFiltersRequestDTO(); // \DocStudio\Client\Model\DictionaryFiltersRequestDTO
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->getDictionaryRecords($dictionary_uuid, $mailbox, $dictionary_filters_request_dto, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getDictionaryRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| UUID of dictionary | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **dictionary_filters_request_dto** | [**\DocStudio\Client\Model\DictionaryFiltersRequestDTO**](../Model/DictionaryFiltersRequestDTO.md)|  | |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTODictionaryRecordValuesResponseDTO**](../Model/PageDTODictionaryRecordValuesResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchDictionary()`

```php
patchDictionary($dictionary_uuid, $mailbox, $dictionary_request_dto): \DocStudio\Client\Model\DictionaryResponseDTO
```

Update dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | UUID of dictionary
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_request_dto = new \DocStudio\Client\Model\DictionaryRequestDTO(); // \DocStudio\Client\Model\DictionaryRequestDTO

try {
    $result = $apiInstance->patchDictionary($dictionary_uuid, $mailbox, $dictionary_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->patchDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| UUID of dictionary | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **dictionary_request_dto** | [**\DocStudio\Client\Model\DictionaryRequestDTO**](../Model/DictionaryRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\DictionaryResponseDTO**](../Model/DictionaryResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchRecord()`

```php
patchRecord($dictionary_uuid, $record_uuid, $mailbox, $dictionary_column_value_request_dto)
```

Update record column values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$record_uuid = 'record_uuid_example'; // string | Record UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_column_value_request_dto = array(new \DocStudio\Client\Model\DictionaryColumnValueRequestDTO()); // \DocStudio\Client\Model\DictionaryColumnValueRequestDTO[]

try {
    $apiInstance->patchRecord($dictionary_uuid, $record_uuid, $mailbox, $dictionary_column_value_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->patchRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **record_uuid** | **string**| Record UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **dictionary_column_value_request_dto** | [**\DocStudio\Client\Model\DictionaryColumnValueRequestDTO[]**](../Model/DictionaryColumnValueRequestDTO.md)|  | |

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

## `readDictionary()`

```php
readDictionary($dictionary_uuid, $mailbox, $with_columns, $with_records_count): \DocStudio\Client\Model\DictionaryResponseDTO
```

Read/get dictionary

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | UUID of dictionary
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$with_columns = false; // bool | Add columns description to each dictionary
$with_records_count = false; // bool | Add records count value to each dictionary

try {
    $result = $apiInstance->readDictionary($dictionary_uuid, $mailbox, $with_columns, $with_records_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->readDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| UUID of dictionary | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **with_columns** | **bool**| Add columns description to each dictionary | [optional] [default to false] |
| **with_records_count** | **bool**| Add records count value to each dictionary | [optional] [default to false] |

### Return type

[**\DocStudio\Client\Model\DictionaryResponseDTO**](../Model/DictionaryResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchDictionaries()`

```php
searchDictionaries($mailbox, $level, $keyword, $with_columns, $offset, $limit): \DocStudio\Client\Model\PageDTODictionaryResponseDTO
```

Get paged dictionary list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$level = 'pub'; // string | Dictionary access level, 'pub' by default.
$keyword = 'keyword_example'; // string | Keyword to search dictionary by or dictionary UUID
$with_columns = false; // bool | Add columns description to each dictionary
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->searchDictionaries($mailbox, $level, $keyword, $with_columns, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->searchDictionaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **level** | **string**| Dictionary access level, &#39;pub&#39; by default. | [optional] [default to &#39;pub&#39;] |
| **keyword** | **string**| Keyword to search dictionary by or dictionary UUID | [optional] |
| **with_columns** | **bool**| Add columns description to each dictionary | [optional] [default to false] |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTODictionaryResponseDTO**](../Model/PageDTODictionaryResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateColumnDictionary()`

```php
updateColumnDictionary($dictionary_uuid, $column_uuid, $mailbox, $dictionary_column_request_dto): \DocStudio\Client\Model\DictionaryColumnResponseDTO
```

Update dictionary column

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$dictionary_uuid = 'dictionary_uuid_example'; // string | Dictionary UUID
$column_uuid = 'column_uuid_example'; // string | Column UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_column_request_dto = new \DocStudio\Client\Model\DictionaryColumnRequestDTO(); // \DocStudio\Client\Model\DictionaryColumnRequestDTO

try {
    $result = $apiInstance->updateColumnDictionary($dictionary_uuid, $column_uuid, $mailbox, $dictionary_column_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->updateColumnDictionary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **dictionary_uuid** | **string**| Dictionary UUID | |
| **column_uuid** | **string**| Column UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **dictionary_column_request_dto** | [**\DocStudio\Client\Model\DictionaryColumnRequestDTO**](../Model/DictionaryColumnRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\DictionaryColumnResponseDTO**](../Model/DictionaryColumnResponseDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
