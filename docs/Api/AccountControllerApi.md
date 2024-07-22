# DocStudio\Client\AccountControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addNewCryptoConfigs()**](AccountControllerApi.md#addNewCryptoConfigs) | **PUT** /api/v1/account/{accountUuid}/crypto-configs | Add crypto configs |
| [**blockUsers()**](AccountControllerApi.md#blockUsers) | **PATCH** /api/v1/account/{accountUuid}/block-users/{flag} | Block/Unblock corporate users |
| [**createAccount()**](AccountControllerApi.md#createAccount) | **POST** /api/v1/account | Create account and mailbox(es) under this account. User will be assigned with default system roles for this account and mailbox(es). |
| [**createCorporateUser()**](AccountControllerApi.md#createCorporateUser) | **POST** /api/v1/account/{accountUuid}/user | Create corporate user |
| [**createMassAccountUsers()**](AccountControllerApi.md#createMassAccountUsers) | **POST** /api/v1/account/{accountUuid}/create-users | Mass create corporate users |
| [**deleteAccount()**](AccountControllerApi.md#deleteAccount) | **DELETE** /api/v1/account/{uuid} | Delete account |
| [**deleteCorporateUsers()**](AccountControllerApi.md#deleteCorporateUsers) | **DELETE** /api/v1/account/{accountUuid}/user | Delete corporate users |
| [**deleteCryptoConfigs()**](AccountControllerApi.md#deleteCryptoConfigs) | **DELETE** /api/v1/account/{accountUuid}/crypto-configs | Delete crypto configs |
| [**getAccountBillingAddress()**](AccountControllerApi.md#getAccountBillingAddress) | **GET** /api/v1/account/{accountUuid}/billing/address | Get account billing address |
| [**getAccountBrandLogo()**](AccountControllerApi.md#getAccountBrandLogo) | **GET** /api/v1/account/brand-logo/{accountUuid} | Retrieve account brand logo |
| [**getAccountDetails()**](AccountControllerApi.md#getAccountDetails) | **GET** /api/v1/account/{uuid} |  |
| [**getAccountLogoAccount()**](AccountControllerApi.md#getAccountLogoAccount) | **GET** /api/v1/account/logo/{accountUuid} | Retrieve account logo |
| [**getAccountUsersImportFileExample()**](AccountControllerApi.md#getAccountUsersImportFileExample) | **GET** /api/v1/account/{accountUuid}/users/example | Get account users import file example |
| [**getCryptoConfigs()**](AccountControllerApi.md#getCryptoConfigs) | **GET** /api/v1/account/{accountUuid}/crypto-configs | Get crypto configs |
| [**getMailbox()**](AccountControllerApi.md#getMailbox) | **GET** /api/v1/account/mailbox/{uuid} | Users and their permissions by mailbox |
| [**getUserPolicies()**](AccountControllerApi.md#getUserPolicies) | **GET** /api/v1/account/{accountUuid}/user-policies | Get user password/session policies |
| [**getUsersPermissions()**](AccountControllerApi.md#getUsersPermissions) | **POST** /api/v1/account/{accountUuid}/users | Get users with permissions per account and mailboxes |
| [**mailboxesReport()**](AccountControllerApi.md#mailboxesReport) | **POST** /api/v1/account/{accountUuid}/mailbox/report | Generate account mailboxes report |
| [**resendCorporateUserWelcomeMessage()**](AccountControllerApi.md#resendCorporateUserWelcomeMessage) | **POST** /api/v1/account/{accountUuid}/user/{userUuid}/welcome | Resend corporate user welcome message |
| [**saveUserPolicies()**](AccountControllerApi.md#saveUserPolicies) | **POST** /api/v1/account/{accountUuid}/user-policies | Save user password/session policies |
| [**searchMailboxesAccount()**](AccountControllerApi.md#searchMailboxesAccount) | **GET** /api/v1/account/{accountUuid}/mailbox | Get paged account mailboxes list |
| [**updateAccountBillingAddress()**](AccountControllerApi.md#updateAccountBillingAddress) | **POST** /api/v1/account/{accountUuid}/billing/address | Create/update account billing address |
| [**updateAccountDetails()**](AccountControllerApi.md#updateAccountDetails) | **PUT** /api/v1/account/{uuid} |  |
| [**usersReport()**](AccountControllerApi.md#usersReport) | **POST** /api/v1/account/{accountUuid}/users/report | Generate account users report |


## `addNewCryptoConfigs()`

```php
addNewCryptoConfigs($account_uuid, $crypto_config_dto)
```

Add crypto configs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$crypto_config_dto = array(new \DocStudio\Client\Model\CryptoConfigDTO()); // \DocStudio\Client\Model\CryptoConfigDTO[]

try {
    $apiInstance->addNewCryptoConfigs($account_uuid, $crypto_config_dto);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->addNewCryptoConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **crypto_config_dto** | [**\DocStudio\Client\Model\CryptoConfigDTO[]**](../Model/CryptoConfigDTO.md)|  | |

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

## `blockUsers()`

```php
blockUsers($account_uuid, $flag, $single_uuid_dto)
```

Block/Unblock corporate users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$flag = True; // bool | Block/Unblock flag
$single_uuid_dto = array(new \DocStudio\Client\Model\SingleUuidDTO()); // \DocStudio\Client\Model\SingleUuidDTO[]

try {
    $apiInstance->blockUsers($account_uuid, $flag, $single_uuid_dto);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->blockUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **flag** | **bool**| Block/Unblock flag | |
| **single_uuid_dto** | [**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)|  | |

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

## `createAccount()`

```php
createAccount($account_create_dto, $code, $code_type): \DocStudio\Client\Model\User2AccountWithMailboxesDTO
```

Create account and mailbox(es) under this account. User will be assigned with default system roles for this account and mailbox(es).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_create_dto = new \DocStudio\Client\Model\AccountCreateDTO(); // \DocStudio\Client\Model\AccountCreateDTO
$code = 'code_example'; // string | Invitation code from email
$code_type = 'code_type_example'; // string | Type of code

try {
    $result = $apiInstance->createAccount($account_create_dto, $code, $code_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_create_dto** | [**\DocStudio\Client\Model\AccountCreateDTO**](../Model/AccountCreateDTO.md)|  | |
| **code** | **string**| Invitation code from email | [optional] |
| **code_type** | **string**| Type of code | [optional] |

### Return type

[**\DocStudio\Client\Model\User2AccountWithMailboxesDTO**](../Model/User2AccountWithMailboxesDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCorporateUser()`

```php
createCorporateUser($account_uuid, $corporate_user_create_dto): \DocStudio\Client\Model\UserDTO
```

Create corporate user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$corporate_user_create_dto = new \DocStudio\Client\Model\CorporateUserCreateDTO(); // \DocStudio\Client\Model\CorporateUserCreateDTO

try {
    $result = $apiInstance->createCorporateUser($account_uuid, $corporate_user_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->createCorporateUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **corporate_user_create_dto** | [**\DocStudio\Client\Model\CorporateUserCreateDTO**](../Model/CorporateUserCreateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\UserDTO**](../Model/UserDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createMassAccountUsers()`

```php
createMassAccountUsers($account_uuid, $file): \DocStudio\Client\Model\SingleUuidDTO
```

Mass create corporate users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$file = "/path/to/file.txt"; // \SplFileObject

try {
    $result = $apiInstance->createMassAccountUsers($account_uuid, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->createMassAccountUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **file** | **\SplFileObject****\SplFileObject**|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccount()`

```php
deleteAccount($check_message, $uuid)
```

Delete account

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$check_message = 'check_message_example'; // string | Proof message
$uuid = 'uuid_example'; // string | UUID of account to delete

try {
    $apiInstance->deleteAccount($check_message, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **check_message** | **string**| Proof message | |
| **uuid** | **string**| UUID of account to delete | |

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

## `deleteCorporateUsers()`

```php
deleteCorporateUsers($account_uuid, $check_message, $single_uuid_dto)
```

Delete corporate users

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$check_message = 'check_message_example'; // string | Proof message
$single_uuid_dto = array(new \DocStudio\Client\Model\SingleUuidDTO()); // \DocStudio\Client\Model\SingleUuidDTO[]

try {
    $apiInstance->deleteCorporateUsers($account_uuid, $check_message, $single_uuid_dto);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->deleteCorporateUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **check_message** | **string**| Proof message | |
| **single_uuid_dto** | [**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)|  | |

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

## `deleteCryptoConfigs()`

```php
deleteCryptoConfigs($account_uuid, $request_body)
```

Delete crypto configs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->deleteCryptoConfigs($account_uuid, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->deleteCryptoConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

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

## `getAccountBillingAddress()`

```php
getAccountBillingAddress($account_uuid): \DocStudio\Client\Model\AccountAddressDTO
```

Get account billing address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID

try {
    $result = $apiInstance->getAccountBillingAddress($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountBillingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |

### Return type

[**\DocStudio\Client\Model\AccountAddressDTO**](../Model/AccountAddressDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountBrandLogo()`

```php
getAccountBrandLogo($account_uuid, $initials): \SplFileObject
```

Retrieve account brand logo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string
$initials = True; // bool | Get default avatar

try {
    $result = $apiInstance->getAccountBrandLogo($account_uuid, $initials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountBrandLogo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **initials** | **bool**| Get default avatar | [optional] |

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

## `getAccountDetails()`

```php
getAccountDetails($uuid, $with_users): \DocStudio\Client\Model\AccountDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$with_users = false; // bool

try {
    $result = $apiInstance->getAccountDetails($uuid, $with_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **with_users** | **bool**|  | [optional] [default to false] |

### Return type

[**\DocStudio\Client\Model\AccountDTO**](../Model/AccountDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountLogoAccount()`

```php
getAccountLogoAccount($account_uuid, $initials): \SplFileObject
```

Retrieve account logo

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string
$initials = True; // bool | Get default avatar

try {
    $result = $apiInstance->getAccountLogoAccount($account_uuid, $initials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountLogoAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **initials** | **bool**| Get default avatar | [optional] |

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

## `getAccountUsersImportFileExample()`

```php
getAccountUsersImportFileExample($account_uuid): \SplFileObject
```

Get account users import file example

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID

try {
    $result = $apiInstance->getAccountUsersImportFileExample($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountUsersImportFileExample: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCryptoConfigs()`

```php
getCryptoConfigs($account_uuid, $mailbox): \DocStudio\Client\Model\CryptoConfigDTO[]
```

Get crypto configs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getCryptoConfigs($account_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getCryptoConfigs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | [optional] |

### Return type

[**\DocStudio\Client\Model\CryptoConfigDTO[]**](../Model/CryptoConfigDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMailbox()`

```php
getMailbox($uuid): \DocStudio\Client\Model\MailboxAccountSimpleDTO
```

Users and their permissions by mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string

try {
    $result = $apiInstance->getMailbox($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getMailbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\MailboxAccountSimpleDTO**](../Model/MailboxAccountSimpleDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPolicies()`

```php
getUserPolicies($account_uuid): \DocStudio\Client\Model\AccountPoliciesDTO
```

Get user password/session policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID

try {
    $result = $apiInstance->getUserPolicies($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getUserPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |

### Return type

[**\DocStudio\Client\Model\AccountPoliciesDTO**](../Model/AccountPoliciesDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersPermissions()`

```php
getUsersPermissions($account_uuid, $users_search_filter_dto, $offset, $limit): \DocStudio\Client\Model\PageDTOUserMailboxPermissionsDTO
```

Get users with permissions per account and mailboxes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | UUID of Account
$users_search_filter_dto = new \DocStudio\Client\Model\UsersSearchFilterDTO(); // \DocStudio\Client\Model\UsersSearchFilterDTO
$offset = 0; // int | Offset, how much envelopes to skip
$limit = 25; // int | Limit, how much envelopes to retrieve

try {
    $result = $apiInstance->getUsersPermissions($account_uuid, $users_search_filter_dto, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getUsersPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| UUID of Account | |
| **users_search_filter_dto** | [**\DocStudio\Client\Model\UsersSearchFilterDTO**](../Model/UsersSearchFilterDTO.md)|  | |
| **offset** | **int**| Offset, how much envelopes to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how much envelopes to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOUserMailboxPermissionsDTO**](../Model/PageDTOUserMailboxPermissionsDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mailboxesReport()`

```php
mailboxesReport($account_uuid, $report_mailboxes_request_dto)
```

Generate account mailboxes report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$report_mailboxes_request_dto = new \DocStudio\Client\Model\ReportMailboxesRequestDTO(); // \DocStudio\Client\Model\ReportMailboxesRequestDTO

try {
    $apiInstance->mailboxesReport($account_uuid, $report_mailboxes_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->mailboxesReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **report_mailboxes_request_dto** | [**\DocStudio\Client\Model\ReportMailboxesRequestDTO**](../Model/ReportMailboxesRequestDTO.md)|  | |

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

## `resendCorporateUserWelcomeMessage()`

```php
resendCorporateUserWelcomeMessage($account_uuid, $user_uuid)
```

Resend corporate user welcome message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$user_uuid = 'user_uuid_example'; // string | User UUID

try {
    $apiInstance->resendCorporateUserWelcomeMessage($account_uuid, $user_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->resendCorporateUserWelcomeMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **user_uuid** | **string**| User UUID | |

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

## `saveUserPolicies()`

```php
saveUserPolicies($account_uuid, $account_policies_dto)
```

Save user password/session policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$account_policies_dto = new \DocStudio\Client\Model\AccountPoliciesDTO(); // \DocStudio\Client\Model\AccountPoliciesDTO

try {
    $apiInstance->saveUserPolicies($account_uuid, $account_policies_dto);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->saveUserPolicies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **account_policies_dto** | [**\DocStudio\Client\Model\AccountPoliciesDTO**](../Model/AccountPoliciesDTO.md)|  | |

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

## `searchMailboxesAccount()`

```php
searchMailboxesAccount($account_uuid, $keyword, $with_groups, $group, $offset, $limit): \DocStudio\Client\Model\PageDTOAccountMailboxInfoDTO
```

Get paged account mailboxes list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$keyword = 'keyword_example'; // string | Keyword to search mailbox by or mailbox UUID
$with_groups = True; // bool | Include groups info into response
$group = array('group_example'); // string[] | Include groups info into response
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->searchMailboxesAccount($account_uuid, $keyword, $with_groups, $group, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->searchMailboxesAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **keyword** | **string**| Keyword to search mailbox by or mailbox UUID | [optional] |
| **with_groups** | **bool**| Include groups info into response | [optional] |
| **group** | [**string[]**](../Model/string.md)| Include groups info into response | [optional] |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOAccountMailboxInfoDTO**](../Model/PageDTOAccountMailboxInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountBillingAddress()`

```php
updateAccountBillingAddress($account_uuid, $account_address_dto): \DocStudio\Client\Model\AccountAddressDTO
```

Create/update account billing address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$account_address_dto = new \DocStudio\Client\Model\AccountAddressDTO(); // \DocStudio\Client\Model\AccountAddressDTO

try {
    $result = $apiInstance->updateAccountBillingAddress($account_uuid, $account_address_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->updateAccountBillingAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **account_address_dto** | [**\DocStudio\Client\Model\AccountAddressDTO**](../Model/AccountAddressDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountAddressDTO**](../Model/AccountAddressDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountDetails()`

```php
updateAccountDetails($uuid, $account_dto): \DocStudio\Client\Model\AccountDTO
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$uuid = 'uuid_example'; // string
$account_dto = new \DocStudio\Client\Model\AccountDTO(); // \DocStudio\Client\Model\AccountDTO

try {
    $result = $apiInstance->updateAccountDetails($uuid, $account_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->updateAccountDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **account_dto** | [**\DocStudio\Client\Model\AccountDTO**](../Model/AccountDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountDTO**](../Model/AccountDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `usersReport()`

```php
usersReport($account_uuid, $report_users_request_dto)
```

Generate account users report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_uuid = 'account_uuid_example'; // string | UUID of Account
$report_users_request_dto = new \DocStudio\Client\Model\ReportUsersRequestDTO(); // \DocStudio\Client\Model\ReportUsersRequestDTO

try {
    $apiInstance->usersReport($account_uuid, $report_users_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->usersReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| UUID of Account | |
| **report_users_request_dto** | [**\DocStudio\Client\Model\ReportUsersRequestDTO**](../Model/ReportUsersRequestDTO.md)|  | |

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
