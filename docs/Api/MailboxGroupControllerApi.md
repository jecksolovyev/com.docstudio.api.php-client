# DocStudio\Client\MailboxGroupControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addMailboxesToGroup()**](MailboxGroupControllerApi.md#addMailboxesToGroup) | **POST** /api/v1/account/{accountUuid}/mailbox-group/{groupUuid}/mailbox | Add mailboxes to group |
| [**createMailboxGroup()**](MailboxGroupControllerApi.md#createMailboxGroup) | **POST** /api/v1/account/{accountUuid}/mailbox-group | Create mailbox group |
| [**getMailboxGroup()**](MailboxGroupControllerApi.md#getMailboxGroup) | **GET** /api/v1/account/{accountUuid}/mailbox-group/{groupUuid} | Get mailbox group |
| [**getMailboxGroupsNames()**](MailboxGroupControllerApi.md#getMailboxGroupsNames) | **POST** /api/v1/account/{accountUuid}/mailbox-group/info | Get groups names |
| [**removeMailboxesFromGroup()**](MailboxGroupControllerApi.md#removeMailboxesFromGroup) | **DELETE** /api/v1/account/{accountUuid}/mailbox-group/{groupUuid}/mailbox | Remove mailboxes from group |
| [**searchGroups()**](MailboxGroupControllerApi.md#searchGroups) | **GET** /api/v1/account/{accountUuid}/mailbox-group | List/search groups |
| [**updateMailboxGroup()**](MailboxGroupControllerApi.md#updateMailboxGroup) | **PATCH** /api/v1/account/{accountUuid}/mailbox-group/{groupUuid} | Update mailbox group |
| [**updateMailboxGroupMailboxGroup()**](MailboxGroupControllerApi.md#updateMailboxGroupMailboxGroup) | **DELETE** /api/v1/account/{accountUuid}/mailbox-group/{groupUuid} | Delete mailbox group |


## `addMailboxesToGroup()`

```php
addMailboxesToGroup($account_uuid, $group_uuid, $request_body): \DocStudio\Client\Model\GroupInfoDTO
```

Add mailboxes to group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxGroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$group_uuid = 'group_uuid_example'; // string | Group UUID
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->addMailboxesToGroup($account_uuid, $group_uuid, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxGroupControllerApi->addMailboxesToGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **group_uuid** | **string**| Group UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\DocStudio\Client\Model\GroupInfoDTO**](../Model/GroupInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMailboxGroup()`

```php
createMailboxGroup($account_uuid, $update_group_dto): \DocStudio\Client\Model\GroupInfoDTO
```

Create mailbox group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxGroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$update_group_dto = new \DocStudio\Client\Model\UpdateGroupDTO(); // \DocStudio\Client\Model\UpdateGroupDTO

try {
    $result = $apiInstance->createMailboxGroup($account_uuid, $update_group_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxGroupControllerApi->createMailboxGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **update_group_dto** | [**\DocStudio\Client\Model\UpdateGroupDTO**](../Model/UpdateGroupDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\GroupInfoDTO**](../Model/GroupInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxGroup()`

```php
getMailboxGroup($account_uuid, $group_uuid): \DocStudio\Client\Model\GroupInfoDTO
```

Get mailbox group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxGroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$group_uuid = 'group_uuid_example'; // string | Group UUID

try {
    $result = $apiInstance->getMailboxGroup($account_uuid, $group_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxGroupControllerApi->getMailboxGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **group_uuid** | **string**| Group UUID | |

### Return type

[**\DocStudio\Client\Model\GroupInfoDTO**](../Model/GroupInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxGroupsNames()`

```php
getMailboxGroupsNames($account_uuid, $mailbox, $request_body): \DocStudio\Client\Model\NameUuidDTO[]
```

Get groups names

Search groups by UUID list and return list of name and uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxGroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->getMailboxGroupsNames($account_uuid, $mailbox, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxGroupControllerApi->getMailboxGroupsNames: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\DocStudio\Client\Model\NameUuidDTO[]**](../Model/NameUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeMailboxesFromGroup()`

```php
removeMailboxesFromGroup($account_uuid, $group_uuid, $request_body): \DocStudio\Client\Model\GroupInfoDTO
```

Remove mailboxes from group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxGroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$group_uuid = 'group_uuid_example'; // string | Group UUID
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->removeMailboxesFromGroup($account_uuid, $group_uuid, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxGroupControllerApi->removeMailboxesFromGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **group_uuid** | **string**| Group UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\DocStudio\Client\Model\GroupInfoDTO**](../Model/GroupInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchGroups()`

```php
searchGroups($account_uuid, $keyword, $offset, $limit, $asc, $mailbox): \DocStudio\Client\Model\PageDTOGroupListInfoDTO
```

List/search groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxGroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$keyword = 'keyword_example'; // string | Keyword to search group by or group UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000
$asc = true; // bool | Sort by name in ASC order
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->searchGroups($account_uuid, $keyword, $offset, $limit, $asc, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxGroupControllerApi->searchGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **keyword** | **string**| Keyword to search group by or group UUID | [optional] |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |
| **asc** | **bool**| Sort by name in ASC order | [optional] [default to true] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\PageDTOGroupListInfoDTO**](../Model/PageDTOGroupListInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMailboxGroup()`

```php
updateMailboxGroup($account_uuid, $group_uuid, $update_group_dto): \DocStudio\Client\Model\GroupInfoDTO
```

Update mailbox group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxGroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$group_uuid = 'group_uuid_example'; // string | Group UUID
$update_group_dto = new \DocStudio\Client\Model\UpdateGroupDTO(); // \DocStudio\Client\Model\UpdateGroupDTO

try {
    $result = $apiInstance->updateMailboxGroup($account_uuid, $group_uuid, $update_group_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxGroupControllerApi->updateMailboxGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **group_uuid** | **string**| Group UUID | |
| **update_group_dto** | [**\DocStudio\Client\Model\UpdateGroupDTO**](../Model/UpdateGroupDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\GroupInfoDTO**](../Model/GroupInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMailboxGroupMailboxGroup()`

```php
updateMailboxGroupMailboxGroup($account_uuid, $group_uuid)
```

Delete mailbox group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxGroupControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$group_uuid = 'group_uuid_example'; // string | Group UUID

try {
    $apiInstance->updateMailboxGroupMailboxGroup($account_uuid, $group_uuid);
} catch (Exception $e) {
    echo 'Exception when calling MailboxGroupControllerApi->updateMailboxGroupMailboxGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **group_uuid** | **string**| Group UUID | |

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
