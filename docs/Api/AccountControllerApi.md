# Swagger\Client\AccountControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNewCryptoConfigs**](AccountControllerApi.md#addnewcryptoconfigs) | **PUT** /api/v1/account/{accountUuid}/crypto-configs | Add crypto configs
[**blockUsers**](AccountControllerApi.md#blockusers) | **PATCH** /api/v1/account/{accountUuid}/block-users/{flag} | Block/Unblock corporate users
[**createAccount**](AccountControllerApi.md#createaccount) | **POST** /api/v1/account | Create account and mailbox(es) under this account. User will be assigned with default system roles for this account and mailbox(es).
[**createCorporateUser**](AccountControllerApi.md#createcorporateuser) | **POST** /api/v1/account/{accountUuid}/user | Create corporate user
[**createMassAccountUsers**](AccountControllerApi.md#createmassaccountusers) | **POST** /api/v1/account/{accountUuid}/create-users | Mass create corporate users
[**deleteAccount**](AccountControllerApi.md#deleteaccount) | **DELETE** /api/v1/account/{uuid} | Delete account
[**deleteCorporateUsers**](AccountControllerApi.md#deletecorporateusers) | **DELETE** /api/v1/account/{accountUuid}/user | Delete corporate users
[**deleteCryptoConfigs**](AccountControllerApi.md#deletecryptoconfigs) | **DELETE** /api/v1/account/{accountUuid}/crypto-configs | Delete crypto configs
[**getAccountBillingAddress**](AccountControllerApi.md#getaccountbillingaddress) | **GET** /api/v1/account/{accountUuid}/billing/address | Get account billing address
[**getAccountBrandLogo**](AccountControllerApi.md#getaccountbrandlogo) | **GET** /api/v1/account/brand-logo/{accountUuid} | Retrieve account brand logo
[**getAccountDetails**](AccountControllerApi.md#getaccountdetails) | **GET** /api/v1/account/{uuid} | 
[**getAccountLogoAccount**](AccountControllerApi.md#getaccountlogoaccount) | **GET** /api/v1/account/logo/{accountUuid} | Retrieve account logo
[**getAccountUsersImportFileExample**](AccountControllerApi.md#getaccountusersimportfileexample) | **GET** /api/v1/account/{accountUuid}/users/example | Get account users import file example
[**getCryptoConfigs**](AccountControllerApi.md#getcryptoconfigs) | **GET** /api/v1/account/{accountUuid}/crypto-configs | Get crypto configs
[**getMailbox**](AccountControllerApi.md#getmailbox) | **GET** /api/v1/account/mailbox/{uuid} | Users and their permissions by mailbox
[**getUserPolicies**](AccountControllerApi.md#getuserpolicies) | **GET** /api/v1/account/{accountUuid}/user-policies | Get user password/session policies
[**getUsersPermissions**](AccountControllerApi.md#getuserspermissions) | **POST** /api/v1/account/{accountUuid}/users | Get users with permissions per account and mailboxes
[**mailboxesReport**](AccountControllerApi.md#mailboxesreport) | **POST** /api/v1/account/{accountUuid}/mailbox/report | Generate account mailboxes report
[**resendCorporateUserWelcomeMessage**](AccountControllerApi.md#resendcorporateuserwelcomemessage) | **POST** /api/v1/account/{accountUuid}/user/{userUuid}/welcome | Resend corporate user welcome message
[**saveUserPolicies**](AccountControllerApi.md#saveuserpolicies) | **POST** /api/v1/account/{accountUuid}/user-policies | Save user password/session policies
[**searchMailboxesAccount**](AccountControllerApi.md#searchmailboxesaccount) | **GET** /api/v1/account/{accountUuid}/mailbox | Get paged account mailboxes list
[**updateAccountBillingAddress**](AccountControllerApi.md#updateaccountbillingaddress) | **POST** /api/v1/account/{accountUuid}/billing/address | Create/update account billing address
[**updateAccountDetails**](AccountControllerApi.md#updateaccountdetails) | **PUT** /api/v1/account/{uuid} | 
[**usersReport**](AccountControllerApi.md#usersreport) | **POST** /api/v1/account/{accountUuid}/users/report | Generate account users report

# **addNewCryptoConfigs**
> addNewCryptoConfigs($body, $account_uuid)

Add crypto configs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\CryptoConfigDTO()); // \Swagger\Client\Model\CryptoConfigDTO[] | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $apiInstance->addNewCryptoConfigs($body, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->addNewCryptoConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CryptoConfigDTO[]**](../Model/CryptoConfigDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **blockUsers**
> blockUsers($body, $account_uuid, $flag)

Block/Unblock corporate users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\SingleUuidDTO()); // \Swagger\Client\Model\SingleUuidDTO[] | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$flag = true; // bool | Block/Unblock flag

try {
    $apiInstance->blockUsers($body, $account_uuid, $flag);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->blockUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **flag** | **bool**| Block/Unblock flag |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAccount**
> \Swagger\Client\Model\User2AccountWithMailboxesDTO createAccount($body, $code, $code_type)

Create account and mailbox(es) under this account. User will be assigned with default system roles for this account and mailbox(es).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AccountCreateDTO(); // \Swagger\Client\Model\AccountCreateDTO | 
$code = "code_example"; // string | Invitation code from email
$code_type = "code_type_example"; // string | Type of code

try {
    $result = $apiInstance->createAccount($body, $code, $code_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->createAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountCreateDTO**](../Model/AccountCreateDTO.md)|  |
 **code** | **string**| Invitation code from email | [optional]
 **code_type** | **string**| Type of code | [optional]

### Return type

[**\Swagger\Client\Model\User2AccountWithMailboxesDTO**](../Model/User2AccountWithMailboxesDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCorporateUser**
> \Swagger\Client\Model\UserDTO createCorporateUser($body, $account_uuid)

Create corporate user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CorporateUserCreateDTO(); // \Swagger\Client\Model\CorporateUserCreateDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->createCorporateUser($body, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->createCorporateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CorporateUserCreateDTO**](../Model/CorporateUserCreateDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\Swagger\Client\Model\UserDTO**](../Model/UserDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMassAccountUsers**
> createMassAccountUsers($account_uuid, $file)

Mass create corporate users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$file = "file_example"; // string | 

try {
    $apiInstance->createMassAccountUsers($account_uuid, $file);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->createMassAccountUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **file** | **string****string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccount**
> deleteAccount($check_message, $uuid)

Delete account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$check_message = "check_message_example"; // string | Proof message
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of account to delete

try {
    $apiInstance->deleteAccount($check_message, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->deleteAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_message** | **string**| Proof message |
 **uuid** | [**string**](../Model/.md)| UUID of account to delete |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCorporateUsers**
> deleteCorporateUsers($body, $check_message, $account_uuid)

Delete corporate users

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\SingleUuidDTO()); // \Swagger\Client\Model\SingleUuidDTO[] | 
$check_message = "check_message_example"; // string | Proof message
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $apiInstance->deleteCorporateUsers($body, $check_message, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->deleteCorporateUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)|  |
 **check_message** | **string**| Proof message |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCryptoConfigs**
> deleteCryptoConfigs($body, $account_uuid)

Delete crypto configs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $apiInstance->deleteCryptoConfigs($body, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->deleteCryptoConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountBillingAddress**
> \Swagger\Client\Model\AccountAddressDTO getAccountBillingAddress($account_uuid)

Get account billing address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->getAccountBillingAddress($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\Swagger\Client\Model\AccountAddressDTO**](../Model/AccountAddressDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountBrandLogo**
> string getAccountBrandLogo($account_uuid, $initials)

Retrieve account brand logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$initials = true; // bool | Get default avatar

try {
    $result = $apiInstance->getAccountBrandLogo($account_uuid, $initials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountBrandLogo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)|  |
 **initials** | **bool**| Get default avatar | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountDetails**
> \Swagger\Client\Model\AccountDTO getAccountDetails($uuid, $with_users)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$with_users = false; // bool | 

try {
    $result = $apiInstance->getAccountDetails($uuid, $with_users);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |
 **with_users** | **bool**|  | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\AccountDTO**](../Model/AccountDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountLogoAccount**
> string getAccountLogoAccount($account_uuid, $initials)

Retrieve account logo

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$initials = true; // bool | Get default avatar

try {
    $result = $apiInstance->getAccountLogoAccount($account_uuid, $initials);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountLogoAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)|  |
 **initials** | **bool**| Get default avatar | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountUsersImportFileExample**
> string getAccountUsersImportFileExample($account_uuid)

Get account users import file example

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->getAccountUsersImportFileExample($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getAccountUsersImportFileExample: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCryptoConfigs**
> \Swagger\Client\Model\CryptoConfigDTO[] getCryptoConfigs($account_uuid)

Get crypto configs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->getCryptoConfigs($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getCryptoConfigs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\Swagger\Client\Model\CryptoConfigDTO[]**](../Model/CryptoConfigDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMailbox**
> \Swagger\Client\Model\MailboxAccountSimpleDTO getMailbox($uuid)

Users and their permissions by mailbox

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->getMailbox($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getMailbox: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\MailboxAccountSimpleDTO**](../Model/MailboxAccountSimpleDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserPolicies**
> \Swagger\Client\Model\AccountPoliciesDTO getUserPolicies($account_uuid)

Get user password/session policies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->getUserPolicies($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getUserPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\Swagger\Client\Model\AccountPoliciesDTO**](../Model/AccountPoliciesDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsersPermissions**
> \Swagger\Client\Model\PageDTOUserMailboxPermissionsDTO getUsersPermissions($body, $account_uuid, $offset, $limit)

Get users with permissions per account and mailboxes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\UsersSearchFilterDTO(); // \Swagger\Client\Model\UsersSearchFilterDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of Account
$offset = 0; // int | Offset, how much envelopes to skip
$limit = 25; // int | Limit, how much envelopes to retrieve

try {
    $result = $apiInstance->getUsersPermissions($body, $account_uuid, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->getUsersPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\UsersSearchFilterDTO**](../Model/UsersSearchFilterDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| UUID of Account |
 **offset** | **int**| Offset, how much envelopes to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how much envelopes to retrieve | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\PageDTOUserMailboxPermissionsDTO**](../Model/PageDTOUserMailboxPermissionsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mailboxesReport**
> mailboxesReport($body, $account_uuid)

Generate account mailboxes report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReportMailboxesRequestDTO(); // \Swagger\Client\Model\ReportMailboxesRequestDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $apiInstance->mailboxesReport($body, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->mailboxesReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReportMailboxesRequestDTO**](../Model/ReportMailboxesRequestDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendCorporateUserWelcomeMessage**
> resendCorporateUserWelcomeMessage($account_uuid, $user_uuid)

Resend corporate user welcome message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$user_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | User UUID

try {
    $apiInstance->resendCorporateUserWelcomeMessage($account_uuid, $user_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->resendCorporateUserWelcomeMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **user_uuid** | [**string**](../Model/.md)| User UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveUserPolicies**
> saveUserPolicies($body, $account_uuid)

Save user password/session policies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AccountPoliciesDTO(); // \Swagger\Client\Model\AccountPoliciesDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $apiInstance->saveUserPolicies($body, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->saveUserPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountPoliciesDTO**](../Model/AccountPoliciesDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchMailboxesAccount**
> \Swagger\Client\Model\PageDTOAccountMailboxInfoDTO searchMailboxesAccount($account_uuid, $keyword, $offset, $limit)

Get paged account mailboxes list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$keyword = "keyword_example"; // string | Keyword to search mailbox by or mailbox UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->searchMailboxesAccount($account_uuid, $keyword, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->searchMailboxesAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **keyword** | **string**| Keyword to search mailbox by or mailbox UUID | [optional]
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\PageDTOAccountMailboxInfoDTO**](../Model/PageDTOAccountMailboxInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountBillingAddress**
> \Swagger\Client\Model\AccountAddressDTO updateAccountBillingAddress($body, $account_uuid)

Create/update account billing address

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AccountAddressDTO(); // \Swagger\Client\Model\AccountAddressDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->updateAccountBillingAddress($body, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->updateAccountBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountAddressDTO**](../Model/AccountAddressDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\Swagger\Client\Model\AccountAddressDTO**](../Model/AccountAddressDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountDetails**
> \Swagger\Client\Model\AccountDTO updateAccountDetails($body, $uuid)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\AccountDTO(); // \Swagger\Client\Model\AccountDTO | 
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->updateAccountDetails($body, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->updateAccountDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AccountDTO**](../Model/AccountDTO.md)|  |
 **uuid** | [**string**](../Model/.md)|  |

### Return type

[**\Swagger\Client\Model\AccountDTO**](../Model/AccountDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **usersReport**
> usersReport($body, $account_uuid)

Generate account users report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AccountControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReportUsersRequestDTO(); // \Swagger\Client\Model\ReportUsersRequestDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of Account

try {
    $apiInstance->usersReport($body, $account_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountControllerApi->usersReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReportUsersRequestDTO**](../Model/ReportUsersRequestDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| UUID of Account |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

