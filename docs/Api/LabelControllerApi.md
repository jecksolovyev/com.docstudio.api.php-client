# DocStudio\Client\LabelControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**assignments()**](LabelControllerApi.md#assignments) | **POST** /api/v1/label/assignments | Assign label to envelopes |
| [**createLabel()**](LabelControllerApi.md#createLabel) | **POST** /api/v1/label | Save label to DB |
| [**deAssignments()**](LabelControllerApi.md#deAssignments) | **DELETE** /api/v1/label/assignments | Unassign label from envelopes |
| [**deleteLabel()**](LabelControllerApi.md#deleteLabel) | **DELETE** /api/v1/label/{uuid} | Delete label |
| [**getAll()**](LabelControllerApi.md#getAll) | **GET** /api/v1/label | Retrieve all labels for mailbox for authorized user |
| [**updateLabel()**](LabelControllerApi.md#updateLabel) | **PUT** /api/v1/label/{uuid} | Update label |


## `assignments()`

```php
assignments($mailbox, $label_association_dto)
```

Assign label to envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\LabelControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$label_association_dto = new \DocStudio\Client\Model\LabelAssociationDTO(); // \DocStudio\Client\Model\LabelAssociationDTO

try {
    $apiInstance->assignments($mailbox, $label_association_dto);
} catch (Exception $e) {
    echo 'Exception when calling LabelControllerApi->assignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **label_association_dto** | [**\DocStudio\Client\Model\LabelAssociationDTO**](../Model/LabelAssociationDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLabel()`

```php
createLabel($mailbox, $label_dto): \DocStudio\Client\Model\LabelDTO
```

Save label to DB

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\LabelControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$label_dto = new \DocStudio\Client\Model\LabelDTO(); // \DocStudio\Client\Model\LabelDTO

try {
    $result = $apiInstance->createLabel($mailbox, $label_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelControllerApi->createLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **label_dto** | [**\DocStudio\Client\Model\LabelDTO**](../Model/LabelDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\LabelDTO**](../Model/LabelDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deAssignments()`

```php
deAssignments($mailbox, $label_association_dto)
```

Unassign label from envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\LabelControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$label_association_dto = new \DocStudio\Client\Model\LabelAssociationDTO(); // \DocStudio\Client\Model\LabelAssociationDTO

try {
    $apiInstance->deAssignments($mailbox, $label_association_dto);
} catch (Exception $e) {
    echo 'Exception when calling LabelControllerApi->deAssignments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **label_association_dto** | [**\DocStudio\Client\Model\LabelAssociationDTO**](../Model/LabelAssociationDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLabel()`

```php
deleteLabel($uuid, $mailbox)
```

Delete label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\LabelControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of label to delete
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteLabel($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling LabelControllerApi->deleteLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of label to delete | |
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

## `getAll()`

```php
getAll($mailbox): \DocStudio\Client\Model\LabelDTO[]
```

Retrieve all labels for mailbox for authorized user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\LabelControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getAll($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelControllerApi->getAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\LabelDTO[]**](../Model/LabelDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLabel()`

```php
updateLabel($uuid, $mailbox, $label_dto): \DocStudio\Client\Model\LabelDTO
```

Update label

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\LabelControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | UUID of label to update
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$label_dto = new \DocStudio\Client\Model\LabelDTO(); // \DocStudio\Client\Model\LabelDTO

try {
    $result = $apiInstance->updateLabel($uuid, $mailbox, $label_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LabelControllerApi->updateLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of label to update | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **label_dto** | [**\DocStudio\Client\Model\LabelDTO**](../Model/LabelDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\LabelDTO**](../Model/LabelDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
