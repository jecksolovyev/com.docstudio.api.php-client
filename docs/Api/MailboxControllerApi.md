# Swagger\Client\MailboxControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMailbox**](MailboxControllerApi.md#createmailbox) | **POST** /api/v1/mailbox/account/{uuid} | Create mailbox
[**deleteMailbox**](MailboxControllerApi.md#deletemailbox) | **DELETE** /api/v1/mailbox | Delete mailbox by UUID in the header.
[**deleteMailboxUsers**](MailboxControllerApi.md#deletemailboxusers) | **DELETE** /api/v1/mailbox/{mailboxUuid}/users | Delete mailbox users except requester
[**getAccountLogo**](MailboxControllerApi.md#getaccountlogo) | **GET** /api/v1/mailbox/logo/{mailboxUuid} | Retrieve mailbox account logo
[**getActivityLog**](MailboxControllerApi.md#getactivitylog) | **GET** /api/v1/mailbox/activity-log | Audit trail feed for mailbox
[**getAllForUser**](MailboxControllerApi.md#getallforuser) | **GET** /api/v1/mailbox | Retrieve user&#x27;s mailboxes list
[**getMailboxesByAccount**](MailboxControllerApi.md#getmailboxesbyaccount) | **GET** /api/v1/mailbox/account/{uuid} | Read list of mailboxes
[**getMailboxesInfoMailbox**](MailboxControllerApi.md#getmailboxesinfomailbox) | **POST** /api/v1/mailbox/info | Retrieve mailboxes info
[**getStat**](MailboxControllerApi.md#getstat) | **GET** /api/v1/mailbox/stat | Get number of unread envelopes in every scope
[**getUsedTemplates**](MailboxControllerApi.md#getusedtemplates) | **GET** /api/v1/mailbox/templates/used | List of used templates
[**patchMailbox**](MailboxControllerApi.md#patchmailbox) | **PATCH** /api/v1/mailbox/{mailboxUuid} | Patch mailbox, return patched mailbox w/o users count
[**searchMailboxes**](MailboxControllerApi.md#searchmailboxes) | **GET** /api/v1/mailbox/search | Search mailboxes by name, contact, alias, user
[**updateMailbox**](MailboxControllerApi.md#updatemailbox) | **PUT** /api/v1/mailbox/{mailboxUuid} | Update mailbox

# **createMailbox**
> \Swagger\Client\Model\User2MailboxDTO createMailbox($body, $uuid, $code, $code_type)

Create mailbox

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MailboxCreateDTO(); // \Swagger\Client\Model\MailboxCreateDTO | 
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account for which to create a mailbox
$code = "code_example"; // string | Invitation code from email
$code_type = "code_type_example"; // string | Type of code

try {
    $result = $apiInstance->createMailbox($body, $uuid, $code, $code_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->createMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailboxCreateDTO**](../Model/MailboxCreateDTO.md)|  |
 **uuid** | [**string**](../Model/.md)| UUID of account for which to create a mailbox |
 **code** | **string**| Invitation code from email | [optional]
 **code_type** | **string**| Type of code | [optional]

### Return type

[**\Swagger\Client\Model\User2MailboxDTO**](../Model/User2MailboxDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMailbox**
> deleteMailbox($check_message, $mailbox)

Delete mailbox by UUID in the header.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_message = "check_message_example"; // string | Proof message
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteMailbox($check_message, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->deleteMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_message** | **string**| Proof message |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteMailboxUsers**
> deleteMailboxUsers($mailbox_uuid)

Delete mailbox users except requester

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox UUID

try {
    $apiInstance->deleteMailboxUsers($mailbox_uuid);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->deleteMailboxUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox_uuid** | [**string**](../Model/.md)| Mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountLogo**
> string getAccountLogo($mailbox_uuid)

Retrieve mailbox account logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getAccountLogo($mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getAccountLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox_uuid** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivityLog**
> \Swagger\Client\Model\PageDTOActivityLogRecordDTO getActivityLog($mailbox, $from, $to, $offset, $limit)

Audit trail feed for mailbox

Records sorted by date in descending order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$from = "from_example"; // string | A datetime value in 'ISO-8601' format, lowest record date, default - 3 days ago
$to = "to_example"; // string | A datetime value in 'ISO-8601' format, highest record date, default - now
$offset = 0; // int | Offset, how much records to skip
$limit = 25; // int | Limit, how much records to retrieve, max is 1000

try {
    $result = $apiInstance->getActivityLog($mailbox, $from, $to, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getActivityLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **from** | **string**| A datetime value in &#x27;ISO-8601&#x27; format, lowest record date, default - 3 days ago | [optional]
 **to** | **string**| A datetime value in &#x27;ISO-8601&#x27; format, highest record date, default - now | [optional]
 **offset** | **int**| Offset, how much records to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how much records to retrieve, max is 1000 | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\PageDTOActivityLogRecordDTO**](../Model/PageDTOActivityLogRecordDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllForUser**
> \Swagger\Client\Model\User2MailboxDTO[] getAllForUser()

Retrieve user's mailboxes list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAllForUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getAllForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\User2MailboxDTO[]**](../Model/User2MailboxDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailboxesByAccount**
> \Swagger\Client\Model\MailboxNameUuidDTO[] getMailboxesByAccount($uuid)

Read list of mailboxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account for which to create a mailbox

try {
    $result = $apiInstance->getMailboxesByAccount($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getMailboxesByAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of account for which to create a mailbox |

### Return type

[**\Swagger\Client\Model\MailboxNameUuidDTO[]**](../Model/MailboxNameUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailboxesInfoMailbox**
> map[string,\Swagger\Client\Model\MailboxInfoDTO] getMailboxesInfoMailbox($body, $account_name, $account_itn)

Retrieve mailboxes info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | 
$account_name = false; // bool | Including account name
$account_itn = false; // bool | Including account ITN

try {
    $result = $apiInstance->getMailboxesInfoMailbox($body, $account_name, $account_itn);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getMailboxesInfoMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)|  |
 **account_name** | **bool**| Including account name | [optional] [default to false]
 **account_itn** | **bool**| Including account ITN | [optional] [default to false]

### Return type

[**map[string,\Swagger\Client\Model\MailboxInfoDTO]**](../Model/MailboxInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStat**
> \Swagger\Client\Model\StatDTO getStat($mailbox)

Get number of unread envelopes in every scope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getStat($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getStat: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\StatDTO**](../Model/StatDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsedTemplates**
> \Swagger\Client\Model\PageDTOUsedTemplateDTO getUsedTemplates($mailbox, $name, $offset, $limit)

List of used templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$name = "name_example"; // string | Template name to search by
$offset = 0; // int | Offset, how much envelopes to skip
$limit = 25; // int | Limit, how much envelopes to retrieve

try {
    $result = $apiInstance->getUsedTemplates($mailbox, $name, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->getUsedTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **name** | **string**| Template name to search by | [optional]
 **offset** | **int**| Offset, how much envelopes to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how much envelopes to retrieve | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\PageDTOUsedTemplateDTO**](../Model/PageDTOUsedTemplateDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchMailbox**
> \Swagger\Client\Model\AccountMailboxInfoDTO patchMailbox($body, $mailbox_uuid)

Patch mailbox, return patched mailbox w/o users count

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MailboxPatchRequestDTO(); // \Swagger\Client\Model\MailboxPatchRequestDTO | 
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of mailbox

try {
    $result = $apiInstance->patchMailbox($body, $mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->patchMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailboxPatchRequestDTO**](../Model/MailboxPatchRequestDTO.md)|  |
 **mailbox_uuid** | [**string**](../Model/.md)| UUID of mailbox |

### Return type

[**\Swagger\Client\Model\AccountMailboxInfoDTO**](../Model/AccountMailboxInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchMailboxes**
> \Swagger\Client\Model\MailboxSearchResultDTO[] searchMailboxes($mailbox, $q)

Search mailboxes by name, contact, alias, user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$q = ""; // string | String to search by alias, contact, user email, mailbox name or UUID

try {
    $result = $apiInstance->searchMailboxes($mailbox, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->searchMailboxes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **q** | **string**| String to search by alias, contact, user email, mailbox name or UUID | [optional]

### Return type

[**\Swagger\Client\Model\MailboxSearchResultDTO[]**](../Model/MailboxSearchResultDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateMailbox**
> \Swagger\Client\Model\AccountMailboxInfoDTO updateMailbox($body, $mailbox_uuid)

Update mailbox

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MailboxControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MailboxUpdateRequestDTO(); // \Swagger\Client\Model\MailboxUpdateRequestDTO | 
$mailbox_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of mailbox

try {
    $result = $apiInstance->updateMailbox($body, $mailbox_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MailboxControllerApi->updateMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MailboxUpdateRequestDTO**](../Model/MailboxUpdateRequestDTO.md)|  |
 **mailbox_uuid** | [**string**](../Model/.md)| UUID of mailbox |

### Return type

[**\Swagger\Client\Model\AccountMailboxInfoDTO**](../Model/AccountMailboxInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

