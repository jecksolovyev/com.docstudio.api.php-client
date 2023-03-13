# DocStudio\Client\DictionaryControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveDictionary**](DictionaryControllerApi.md#archivedictionary) | **PATCH** /api/v1/dictionary/{dictionaryUuid}/archive | Archive dictionary
[**checkColumnValues**](DictionaryControllerApi.md#checkcolumnvalues) | **GET** /api/v1/dictionary/{dictionaryUuid}/column/{columnUuid}/check | Check dictionary column. Check access, existence, etc.
[**checkDictionary**](DictionaryControllerApi.md#checkdictionary) | **GET** /api/v1/dictionary/{dictionaryUuid}/check | Check dictionary. Check access, existence, etc.
[**createColumn**](DictionaryControllerApi.md#createcolumn) | **POST** /api/v1/dictionary/{dictionaryUuid}/column | Create dictionary column
[**createDictionary**](DictionaryControllerApi.md#createdictionary) | **POST** /api/v1/dictionary | Create empty dictionary
[**createRecord**](DictionaryControllerApi.md#createrecord) | **POST** /api/v1/dictionary/{dictionaryUuid}/record | Create record(s)
[**deleteColumnDictionary**](DictionaryControllerApi.md#deletecolumndictionary) | **DELETE** /api/v1/dictionary/{dictionaryUuid}/column/{columnUuid} | Delete column. Will return deleted column UUID
[**deleteRecords**](DictionaryControllerApi.md#deleterecords) | **DELETE** /api/v1/dictionary/{dictionaryUuid}/record | Delete record(s). Will return deleted records UUID(s)
[**download**](DictionaryControllerApi.md#download) | **POST** /api/v1/dictionary/{dictionaryUuid}/download | Download the dictionary
[**downloadStatus**](DictionaryControllerApi.md#downloadstatus) | **GET** /api/v1/dictionary/{dictionaryUuid}/download/status/{taskUuid} | Download the dictionary
[**getColumnValue**](DictionaryControllerApi.md#getcolumnvalue) | **GET** /api/v1/dictionary/{dictionaryUuid}/record/{recordUuid}/column/{columnUuid} | Retrieve column value for specific record
[**getColumnValues**](DictionaryControllerApi.md#getcolumnvalues) | **GET** /api/v1/dictionary/{dictionaryUuid}/column/{columnUuid} | Retrieve column values from dictionary
[**getDictionaryRecord**](DictionaryControllerApi.md#getdictionaryrecord) | **GET** /api/v1/dictionary/{dictionaryUuid}/record/{recordUuid} | Retrieve record
[**getDictionaryRecords**](DictionaryControllerApi.md#getdictionaryrecords) | **POST** /api/v1/dictionary/{dictionaryUuid}/records | Get dictionary records
[**patchDictionary**](DictionaryControllerApi.md#patchdictionary) | **PATCH** /api/v1/dictionary/{dictionaryUuid} | Update dictionary
[**patchRecord**](DictionaryControllerApi.md#patchrecord) | **PATCH** /api/v1/dictionary/{dictionaryUuid}/record/{recordUuid} | Update record column values
[**readDictionary**](DictionaryControllerApi.md#readdictionary) | **GET** /api/v1/dictionary/{dictionaryUuid} | Read/get dictionary
[**searchDictionaries**](DictionaryControllerApi.md#searchdictionaries) | **GET** /api/v1/dictionary | Get paged dictionary list
[**updateColumnDictionary**](DictionaryControllerApi.md#updatecolumndictionary) | **PUT** /api/v1/dictionary/{dictionaryUuid}/column/{columnUuid} | Update dictionary column

# **archiveDictionary**
> archiveDictionary($dictionary_uuid, $mailbox)

Archive dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->archiveDictionary($dictionary_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->archiveDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkColumnValues**
> \DocStudio\Client\Model\DictionaryCheckResponseDTO checkColumnValues($dictionary_uuid, $column_uuid, $mailbox)

Check dictionary column. Check access, existence, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID
$column_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Column UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->checkColumnValues($dictionary_uuid, $column_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->checkColumnValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |
 **column_uuid** | [**string**](../Model/.md)| Column UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\DictionaryCheckResponseDTO**](../Model/DictionaryCheckResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkDictionary**
> \DocStudio\Client\Model\DictionaryCheckResponseDTO checkDictionary($dictionary_uuid, $mailbox)

Check dictionary. Check access, existence, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of dictionary
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->checkDictionary($dictionary_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->checkDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| UUID of dictionary |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\DictionaryCheckResponseDTO**](../Model/DictionaryCheckResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createColumn**
> \DocStudio\Client\Model\SingleUuidDTO createColumn($body, $mailbox, $dictionary_uuid)

Create dictionary column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\DictionaryColumnRequestDTO(); // \DocStudio\Client\Model\DictionaryColumnRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID

try {
    $result = $apiInstance->createColumn($body, $mailbox, $dictionary_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->createColumn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\DictionaryColumnRequestDTO**](../Model/DictionaryColumnRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createDictionary**
> \DocStudio\Client\Model\SingleUuidDTO createDictionary($mailbox)

Create empty dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createDictionary($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->createDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createRecord**
> \DocStudio\Client\Model\CreateRecordsResponseDTO createRecord($body, $mailbox, $dictionary_uuid)

Create record(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \DocStudio\Client\Model\array()); // \DocStudio\Client\Model\DictionaryColumnValueRequestDTO[][] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID

try {
    $result = $apiInstance->createRecord($body, $mailbox, $dictionary_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->createRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\DictionaryColumnValueRequestDTO[][]**](../Model/array.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |

### Return type

[**\DocStudio\Client\Model\CreateRecordsResponseDTO**](../Model/CreateRecordsResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteColumnDictionary**
> \DocStudio\Client\Model\SingleUuidDTO deleteColumnDictionary($dictionary_uuid, $column_uuid, $mailbox)

Delete column. Will return deleted column UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID
$column_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Column UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->deleteColumnDictionary($dictionary_uuid, $column_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->deleteColumnDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |
 **column_uuid** | [**string**](../Model/.md)| Column UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteRecords**
> \DocStudio\Client\Model\SingleUuidDTO[] deleteRecords($body, $mailbox, $dictionary_uuid)

Delete record(s). Will return deleted records UUID(s)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \DocStudio\Client\Model\SingleUuidDTO()); // \DocStudio\Client\Model\SingleUuidDTO[] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID

try {
    $result = $apiInstance->deleteRecords($body, $mailbox, $dictionary_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->deleteRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **download**
> \DocStudio\Client\Model\ExportTaskStatusDTO download($body, $mailbox, $dictionary_uuid)

Download the dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\DictionaryDownloadParamsDTO(); // \DocStudio\Client\Model\DictionaryDownloadParamsDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of dictionary

try {
    $result = $apiInstance->download($body, $mailbox, $dictionary_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->download: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\DictionaryDownloadParamsDTO**](../Model/DictionaryDownloadParamsDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)| UUID of dictionary |

### Return type

[**\DocStudio\Client\Model\ExportTaskStatusDTO**](../Model/ExportTaskStatusDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadStatus**
> \DocStudio\Client\Model\ExportTaskStatusDTO downloadStatus($dictionary_uuid, $task_uuid, $mailbox)

Download the dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of dictionary
$task_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of task
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->downloadStatus($dictionary_uuid, $task_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->downloadStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| UUID of dictionary |
 **task_uuid** | [**string**](../Model/.md)| UUID of task |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\ExportTaskStatusDTO**](../Model/ExportTaskStatusDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getColumnValue**
> \DocStudio\Client\Model\DictionaryColumnValueResponseDTO getColumnValue($dictionary_uuid, $record_uuid, $column_uuid, $mailbox)

Retrieve column value for specific record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID
$record_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Record UUID
$column_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Column UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getColumnValue($dictionary_uuid, $record_uuid, $column_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getColumnValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |
 **record_uuid** | [**string**](../Model/.md)| Record UUID |
 **column_uuid** | [**string**](../Model/.md)| Column UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\DictionaryColumnValueResponseDTO**](../Model/DictionaryColumnValueResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getColumnValues**
> \DocStudio\Client\Model\PageDTODictionaryColumnValueResponseDTO getColumnValues($dictionary_uuid, $column_uuid, $mailbox, $offset, $limit, $keyword)

Retrieve column values from dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID
$column_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Column UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000
$keyword = "keyword_example"; // string | Keyword to search by

try {
    $result = $apiInstance->getColumnValues($dictionary_uuid, $column_uuid, $mailbox, $offset, $limit, $keyword);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getColumnValues: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |
 **column_uuid** | [**string**](../Model/.md)| Column UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]
 **keyword** | **string**| Keyword to search by | [optional]

### Return type

[**\DocStudio\Client\Model\PageDTODictionaryColumnValueResponseDTO**](../Model/PageDTODictionaryColumnValueResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDictionaryRecord**
> \DocStudio\Client\Model\DictionaryRecordValuesResponseDTO getDictionaryRecord($dictionary_uuid, $record_uuid, $mailbox)

Retrieve record

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID
$record_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Record UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getDictionaryRecord($dictionary_uuid, $record_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getDictionaryRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |
 **record_uuid** | [**string**](../Model/.md)| Record UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\DocStudio\Client\Model\DictionaryRecordValuesResponseDTO**](../Model/DictionaryRecordValuesResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDictionaryRecords**
> \DocStudio\Client\Model\PageDTODictionaryRecordValuesResponseDTO getDictionaryRecords($body, $mailbox, $dictionary_uuid, $offset, $limit)

Get dictionary records

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\DictionaryFiltersRequestDTO(); // \DocStudio\Client\Model\DictionaryFiltersRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of dictionary
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->getDictionaryRecords($body, $mailbox, $dictionary_uuid, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->getDictionaryRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\DictionaryFiltersRequestDTO**](../Model/DictionaryFiltersRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)| UUID of dictionary |
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]

### Return type

[**\DocStudio\Client\Model\PageDTODictionaryRecordValuesResponseDTO**](../Model/PageDTODictionaryRecordValuesResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchDictionary**
> \DocStudio\Client\Model\DictionaryResponseDTO patchDictionary($body, $mailbox, $dictionary_uuid)

Update dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\DictionaryRequestDTO(); // \DocStudio\Client\Model\DictionaryRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of dictionary

try {
    $result = $apiInstance->patchDictionary($body, $mailbox, $dictionary_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->patchDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\DictionaryRequestDTO**](../Model/DictionaryRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)| UUID of dictionary |

### Return type

[**\DocStudio\Client\Model\DictionaryResponseDTO**](../Model/DictionaryResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchRecord**
> patchRecord($body, $mailbox, $dictionary_uuid, $record_uuid)

Update record column values

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \DocStudio\Client\Model\DictionaryColumnValueRequestDTO()); // \DocStudio\Client\Model\DictionaryColumnValueRequestDTO[] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID
$record_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Record UUID

try {
    $apiInstance->patchRecord($body, $mailbox, $dictionary_uuid, $record_uuid);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->patchRecord: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\DictionaryColumnValueRequestDTO[]**](../Model/DictionaryColumnValueRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |
 **record_uuid** | [**string**](../Model/.md)| Record UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **readDictionary**
> \DocStudio\Client\Model\DictionaryResponseDTO readDictionary($dictionary_uuid, $mailbox, $with_columns, $with_records_count)

Read/get dictionary

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of dictionary
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$with_columns = false; // bool | Add columns description to each dictionary
$with_records_count = false; // bool | Add records count value to each dictionary

try {
    $result = $apiInstance->readDictionary($dictionary_uuid, $mailbox, $with_columns, $with_records_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->readDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dictionary_uuid** | [**string**](../Model/.md)| UUID of dictionary |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **with_columns** | **bool**| Add columns description to each dictionary | [optional] [default to false]
 **with_records_count** | **bool**| Add records count value to each dictionary | [optional] [default to false]

### Return type

[**\DocStudio\Client\Model\DictionaryResponseDTO**](../Model/DictionaryResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchDictionaries**
> \DocStudio\Client\Model\PageDTODictionaryResponseDTO searchDictionaries($mailbox, $level, $keyword, $with_columns, $offset, $limit)

Get paged dictionary list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$level = "pub"; // string | Dictionary access level, 'pub' by default.
$keyword = "keyword_example"; // string | Keyword to search dictionary by or dictionary UUID
$with_columns = false; // bool | Add columns description to each dictionary
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->searchDictionaries($mailbox, $level, $keyword, $with_columns, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->searchDictionaries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **level** | **string**| Dictionary access level, &#x27;pub&#x27; by default. | [optional] [default to pub]
 **keyword** | **string**| Keyword to search dictionary by or dictionary UUID | [optional]
 **with_columns** | **bool**| Add columns description to each dictionary | [optional] [default to false]
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]

### Return type

[**\DocStudio\Client\Model\PageDTODictionaryResponseDTO**](../Model/PageDTODictionaryResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateColumnDictionary**
> \DocStudio\Client\Model\DictionaryColumnResponseDTO updateColumnDictionary($body, $mailbox, $dictionary_uuid, $column_uuid)

Update dictionary column

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\DictionaryControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\DictionaryColumnRequestDTO(); // \DocStudio\Client\Model\DictionaryColumnRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$dictionary_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Dictionary UUID
$column_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Column UUID

try {
    $result = $apiInstance->updateColumnDictionary($body, $mailbox, $dictionary_uuid, $column_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DictionaryControllerApi->updateColumnDictionary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\DictionaryColumnRequestDTO**](../Model/DictionaryColumnRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **dictionary_uuid** | [**string**](../Model/.md)| Dictionary UUID |
 **column_uuid** | [**string**](../Model/.md)| Column UUID |

### Return type

[**\DocStudio\Client\Model\DictionaryColumnResponseDTO**](../Model/DictionaryColumnResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

