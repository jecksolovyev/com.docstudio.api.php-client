# DocStudio\Client\MailboxControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMailbox()**](MailboxControllerApi.md#createMailbox) | **POST** /api/v1/mailbox/account/{uuid} | Create mailbox |
| [**customizeDashboard()**](MailboxControllerApi.md#customizeDashboard) | **PUT** /api/v1/mailbox/{mailboxUuid}/dashboard | Customize mailbox dashboard |
| [**deleteMailbox()**](MailboxControllerApi.md#deleteMailbox) | **DELETE** /api/v1/mailbox | Delete mailbox by UUID in the header. |
| [**deleteMailboxUsers()**](MailboxControllerApi.md#deleteMailboxUsers) | **DELETE** /api/v1/mailbox/{mailboxUuid}/users | Delete mailbox users except requester |
| [**getAccountLogo()**](MailboxControllerApi.md#getAccountLogo) | **GET** /api/v1/mailbox/{mailboxUuid}/logo | Retrieve mailbox account logo |
| [**getActivityLog()**](MailboxControllerApi.md#getActivityLog) | **GET** /api/v1/mailbox/activity-log | Audit trail feed for mailbox |
| [**getAllForUser()**](MailboxControllerApi.md#getAllForUser) | **GET** /api/v1/mailbox | Retrieve user&#39;s mailboxes list |
| [**getAutoDelegation()**](MailboxControllerApi.md#getAutoDelegation) | **GET** /api/v1/mailbox/{mailboxUuid}/auto-delegation | Get auto delegation settings |
| [**getCustomizedDashboard()**](MailboxControllerApi.md#getCustomizedDashboard) | **GET** /api/v1/mailbox/{mailboxUuid}/dashboard | Get mailbox dashboard |
| [**getCustomizedDashboardHtml()**](MailboxControllerApi.md#getCustomizedDashboardHtml) | **GET** /api/v1/mailbox/dashboard.html | Get mailbox dashboard html |
| [**getMailboxEssentials()**](MailboxControllerApi.md#getMailboxEssentials) | **GET** /api/v1/mailbox/essentials | Get mailbox essentials |
| [**getMailboxesByAccount()**](MailboxControllerApi.md#getMailboxesByAccount) | **GET** /api/v1/mailbox/account/{uuid} | Read list of account mailboxes |
| [**getMailboxesInfoMailbox()**](MailboxControllerApi.md#getMailboxesInfoMailbox) | **POST** /api/v1/mailbox/info | Retrieve mailboxes info |
| [**getStat()**](MailboxControllerApi.md#getStat) | **GET** /api/v1/mailbox/stat | Get number of unread envelopes in every scope |
| [**getUsedTemplates()**](MailboxControllerApi.md#getUsedTemplates) | **GET** /api/v1/mailbox/templates/used | List of used templates |
| [**patchMailbox()**](MailboxControllerApi.md#patchMailbox) | **PATCH** /api/v1/mailbox/{mailboxUuid} | Patch mailbox, return patched mailbox w/o users count |
| [**searchMailboxes()**](MailboxControllerApi.md#searchMailboxes) | **GET** /api/v1/mailbox/search | Search mailboxes by name, contact, alias, user |
| [**searchMailboxesAsParticipants()**](MailboxControllerApi.md#searchMailboxesAsParticipants) | **GET** /api/v1/mailbox/search-participants | Search mailboxes by name, contact, alias, user |
| [**updateAutoDelegation()**](MailboxControllerApi.md#updateAutoDelegation) | **PUT** /api/v1/mailbox/{mailboxUuid}/auto-delegation | Update auto delegation settings |
| [**updateMailbox()**](MailboxControllerApi.md#updateMailbox) | **PUT** /api/v1/mailbox/{mailboxUuid} | Update mailbox |


## `createMailbox()`

```php
createMailbox($uuid, $mailbox_create_dto, $code, $code_type): \DocStudio\Client\Model\User2MailboxDTO
```

Create mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | UUID of account for which to create a mailbox
$mailbox_create_dto = new \DocStudio\Client\Model\MailboxCreateDTO(); // \DocStudio\Client\Model\MailboxCreateDTO
$code = 'code_example'; // string | Invitation code from email
$code_type = 'code_type_example'; // string | Type of code

try {
    $result = $apiInstance->createMailbox($uuid, $mailbox_create_dto, $code, $code_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->createMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| UUID of account for which to create a mailbox | |
| **mailbox_create_dto** | [**\DocStudio\Client\Model\MailboxCreateDTO**](../Model/MailboxCreateDTO.md)|  | |
| **code** | **string**| Invitation code from email | [optional] |
| **code_type** | **string**| Type of code | [optional] |

### Return type

[**\DocStudio\Client\Model\User2MailboxDTO**](../Model/User2MailboxDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customizeDashboard()`

```php
customizeDashboard($mailbox_uuid, $mailbox_dashboard_dto)
```

Customize mailbox dashboard

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string
$mailbox_dashboard_dto = new \DocStudio\Client\Model\MailboxDashboardDTO(); // \DocStudio\Client\Model\MailboxDashboardDTO

try {
    $apiInstance->customizeDashboard($mailbox_uuid, $mailbox_dashboard_dto);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->customizeDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**|  | |
| **mailbox_dashboard_dto** | [**\DocStudio\Client\Model\MailboxDashboardDTO**](../Model/MailboxDashboardDTO.md)|  | |

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

## `deleteMailbox()`

```php
deleteMailbox($check_message, $mailbox)
```

Delete mailbox by UUID in the header.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$check_message = 'check_message_example'; // string | Proof message
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteMailbox($check_message, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->deleteMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_message** | **string**| Proof message | |
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

## `deleteMailboxUsers()`

```php
deleteMailboxUsers($mailbox_uuid)
```

Delete mailbox users except requester

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string | Mailbox UUID

try {
    $apiInstance->deleteMailboxUsers($mailbox_uuid);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->deleteMailboxUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**| Mailbox UUID | |

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

## `getAccountLogo()`

```php
getAccountLogo($mailbox_uuid): \SplFileObject
```

Retrieve mailbox account logo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string

try {
    $result = $apiInstance->getAccountLogo($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getAccountLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActivityLog()`

```php
getActivityLog($mailbox, $from, $to, $offset, $limit): \DocStudio\Client\Model\PageDTOActivityLogRecordDTO
```

Audit trail feed for mailbox

Records sorted by date in descending order

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$from = 'from_example'; // string | A datetime value in 'ISO-8601' format, lowest record date, default - 3 days ago
$to = 'to_example'; // string | A datetime value in 'ISO-8601' format, highest record date, default - now
$offset = 0; // int | Offset, how much records to skip
$limit = 25; // int | Limit, how much records to retrieve, max is 1000

try {
    $result = $apiInstance->getActivityLog($mailbox, $from, $to, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getActivityLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **from** | **string**| A datetime value in &#39;ISO-8601&#39; format, lowest record date, default - 3 days ago | [optional] |
| **to** | **string**| A datetime value in &#39;ISO-8601&#39; format, highest record date, default - now | [optional] |
| **offset** | **int**| Offset, how much records to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how much records to retrieve, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOActivityLogRecordDTO**](../Model/PageDTOActivityLogRecordDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllForUser()`

```php
getAllForUser(): \DocStudio\Client\Model\User2MailboxDTO[]
```

Retrieve user's mailboxes list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllForUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getAllForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\DocStudio\Client\Model\User2MailboxDTO[]**](../Model/User2MailboxDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAutoDelegation()`

```php
getAutoDelegation($mailbox_uuid): \DocStudio\Client\Model\MailboxDelegationDTO
```

Get auto delegation settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string

try {
    $result = $apiInstance->getAutoDelegation($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getAutoDelegation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\MailboxDelegationDTO**](../Model/MailboxDelegationDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomizedDashboard()`

```php
getCustomizedDashboard($mailbox_uuid): \DocStudio\Client\Model\MailboxDashboardDTO
```

Get mailbox dashboard

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string

try {
    $result = $apiInstance->getCustomizedDashboard($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getCustomizedDashboard: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\MailboxDashboardDTO**](../Model/MailboxDashboardDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomizedDashboardHtml()`

```php
getCustomizedDashboardHtml($mailbox): string
```

Get mailbox dashboard html

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getCustomizedDashboardHtml($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getCustomizedDashboardHtml: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxEssentials()`

```php
getMailboxEssentials($mailbox): \DocStudio\Client\Model\MailboxEssentialsDTO
```

Get mailbox essentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getMailboxEssentials($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getMailboxEssentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\MailboxEssentialsDTO**](../Model/MailboxEssentialsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxesByAccount()`

```php
getMailboxesByAccount($uuid): \DocStudio\Client\Model\MailboxNameUuidDTO[]
```

Read list of account mailboxes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string | Account UUID

try {
    $result = $apiInstance->getMailboxesByAccount($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getMailboxesByAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Account UUID | |

### Return type

[**\DocStudio\Client\Model\MailboxNameUuidDTO[]**](../Model/MailboxNameUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailboxesInfoMailbox()`

```php
getMailboxesInfoMailbox($request_body, $account_name, $account_itn): array<string,\DocStudio\Client\Model\MailboxInfoDTO>
```

Retrieve mailboxes info

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$request_body = array('request_body_example'); // string[]
$account_name = false; // bool | Including account name
$account_itn = false; // bool | Including account ITN

try {
    $result = $apiInstance->getMailboxesInfoMailbox($request_body, $account_name, $account_itn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getMailboxesInfoMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**string[]**](../Model/string.md)|  | |
| **account_name** | **bool**| Including account name | [optional] [default to false] |
| **account_itn** | **bool**| Including account ITN | [optional] [default to false] |

### Return type

[**array<string,\DocStudio\Client\Model\MailboxInfoDTO>**](../Model/MailboxInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getStat()`

```php
getStat($mailbox): \DocStudio\Client\Model\StatDTO
```

Get number of unread envelopes in every scope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getStat($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getStat: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\StatDTO**](../Model/StatDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsedTemplates()`

```php
getUsedTemplates($mailbox, $name, $offset, $limit): \DocStudio\Client\Model\PageDTOUsedTemplateDTO
```

List of used templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$name = 'name_example'; // string | Template name to search by
$offset = 0; // int | Offset, how much envelopes to skip
$limit = 25; // int | Limit, how much envelopes to retrieve

try {
    $result = $apiInstance->getUsedTemplates($mailbox, $name, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getUsedTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **name** | **string**| Template name to search by | [optional] |
| **offset** | **int**| Offset, how much envelopes to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how much envelopes to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOUsedTemplateDTO**](../Model/PageDTOUsedTemplateDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchMailbox()`

```php
patchMailbox($mailbox_uuid, $mailbox_patch_request_dto): \DocStudio\Client\Model\AccountMailboxInfoDTO
```

Patch mailbox, return patched mailbox w/o users count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string | UUID of mailbox
$mailbox_patch_request_dto = new \DocStudio\Client\Model\MailboxPatchRequestDTO(); // \DocStudio\Client\Model\MailboxPatchRequestDTO

try {
    $result = $apiInstance->patchMailbox($mailbox_uuid, $mailbox_patch_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->patchMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**| UUID of mailbox | |
| **mailbox_patch_request_dto** | [**\DocStudio\Client\Model\MailboxPatchRequestDTO**](../Model/MailboxPatchRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountMailboxInfoDTO**](../Model/AccountMailboxInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMailboxes()`

```php
searchMailboxes($q, $mailbox, $type): \DocStudio\Client\Model\MailboxSearchResultDTO[]
```

Search mailboxes by name, contact, alias, user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = ''; // string | String to search by alias, contact, user email, mailbox name or UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$type = 'type_example'; // string | Search type: name, alias or uuid. Default - all values

try {
    $result = $apiInstance->searchMailboxes($q, $mailbox, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->searchMailboxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| String to search by alias, contact, user email, mailbox name or UUID | [default to &#39;&#39;] |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **type** | **string**| Search type: name, alias or uuid. Default - all values | [optional] |

### Return type

[**\DocStudio\Client\Model\MailboxSearchResultDTO[]**](../Model/MailboxSearchResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchMailboxesAsParticipants()`

```php
searchMailboxesAsParticipants($q, $type, $mailbox): \DocStudio\Client\Model\MailboxSearchResultDTO[]
```

Search mailboxes by name, contact, alias, user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$q = ''; // string | String to search by alias, contact, user email, mailbox name or UUID
$type = 'type_example'; // string | Participant type
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->searchMailboxesAsParticipants($q, $type, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->searchMailboxesAsParticipants: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **q** | **string**| String to search by alias, contact, user email, mailbox name or UUID | [default to &#39;&#39;] |
| **type** | **string**| Participant type | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\MailboxSearchResultDTO[]**](../Model/MailboxSearchResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAutoDelegation()`

```php
updateAutoDelegation($mailbox_uuid, $mailbox_delegation_dto)
```

Update auto delegation settings

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string
$mailbox_delegation_dto = new \DocStudio\Client\Model\MailboxDelegationDTO(); // \DocStudio\Client\Model\MailboxDelegationDTO

try {
    $apiInstance->updateAutoDelegation($mailbox_uuid, $mailbox_delegation_dto);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->updateAutoDelegation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**|  | |
| **mailbox_delegation_dto** | [**\DocStudio\Client\Model\MailboxDelegationDTO**](../Model/MailboxDelegationDTO.md)|  | |

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

## `updateMailbox()`

```php
updateMailbox($mailbox_uuid, $mailbox_update_request_dto): \DocStudio\Client\Model\AccountMailboxInfoDTO
```

Update mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$mailbox_uuid = 'mailbox_uuid_example'; // string | UUID of mailbox
$mailbox_update_request_dto = new \DocStudio\Client\Model\MailboxUpdateRequestDTO(); // \DocStudio\Client\Model\MailboxUpdateRequestDTO

try {
    $result = $apiInstance->updateMailbox($mailbox_uuid, $mailbox_update_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->updateMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox_uuid** | **string**| UUID of mailbox | |
| **mailbox_update_request_dto** | [**\DocStudio\Client\Model\MailboxUpdateRequestDTO**](../Model/MailboxUpdateRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountMailboxInfoDTO**](../Model/AccountMailboxInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
