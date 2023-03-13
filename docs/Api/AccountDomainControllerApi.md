# DocStudio\Client\AccountDomainControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**actionAccountDomain**](AccountDomainControllerApi.md#actionaccountdomain) | **PATCH** /api/v1/account/{accountUuid}/domain/{domainUuid}/{action} | Change account domain status
[**createAccountDomain**](AccountDomainControllerApi.md#createaccountdomain) | **POST** /api/v1/account/{accountUuid}/domain | Create account domain
[**createAccountSsoIdp**](AccountDomainControllerApi.md#createaccountssoidp) | **POST** /api/v1/account/{accountUuid}/idp | Create account SSO Identity Provider
[**deleteAccountDomain**](AccountDomainControllerApi.md#deleteaccountdomain) | **DELETE** /api/v1/account/{accountUuid}/domain/{domainUuid} | Delete account domain
[**deleteAccountIdp**](AccountDomainControllerApi.md#deleteaccountidp) | **DELETE** /api/v1/account/{accountUuid}/idp/{idpUuid} | Delete account SSO IdP
[**getAccountDomain**](AccountDomainControllerApi.md#getaccountdomain) | **GET** /api/v1/account/{accountUuid}/domain/{domainUuid} | Get account domain
[**getAccountDomains**](AccountDomainControllerApi.md#getaccountdomains) | **GET** /api/v1/account/{accountUuid}/domain | Get paged account domains list
[**getAccountIdp**](AccountDomainControllerApi.md#getaccountidp) | **GET** /api/v1/account/{accountUuid}/idp/{idpUuid} | Get account SSO IdP
[**getAllAccountIdps**](AccountDomainControllerApi.md#getallaccountidps) | **GET** /api/v1/account/{accountUuid}/idp | Get all account SSO IdPs
[**updateAccountDomain**](AccountDomainControllerApi.md#updateaccountdomain) | **PUT** /api/v1/account/{accountUuid}/domain/{domainUuid} | Update account domain
[**updateAccountSsoIdp**](AccountDomainControllerApi.md#updateaccountssoidp) | **PUT** /api/v1/account/{accountUuid}/idp/{idpUuid} | Update account SSO Identity Provider

# **actionAccountDomain**
> \DocStudio\Client\Model\AccountDomainDTO actionAccountDomain($account_uuid, $domain_uuid, $action, $body)

Change account domain status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$domain_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Domain UUID
$action = "action_example"; // string | Action
$body = new \DocStudio\Client\Model\ChangeDomainStatusDTO(); // \DocStudio\Client\Model\ChangeDomainStatusDTO | 

try {
    $result = $apiInstance->actionAccountDomain($account_uuid, $domain_uuid, $action, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->actionAccountDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **domain_uuid** | [**string**](../Model/.md)| Domain UUID |
 **action** | **string**| Action |
 **body** | [**\DocStudio\Client\Model\ChangeDomainStatusDTO**](../Model/ChangeDomainStatusDTO.md)|  | [optional]

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAccountDomain**
> \DocStudio\Client\Model\AccountDomainDTO createAccountDomain($body, $account_uuid)

Create account domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\AccountDomainCreateDTO(); // \DocStudio\Client\Model\AccountDomainCreateDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->createAccountDomain($body, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->createAccountDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\AccountDomainCreateDTO**](../Model/AccountDomainCreateDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAccountSsoIdp**
> \DocStudio\Client\Model\AccountSsoIdProviderDTO createAccountSsoIdp($body, $account_uuid)

Create account SSO Identity Provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO(); // \DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->createAccountSsoIdp($body, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->createAccountSsoIdp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO**](../Model/AccountSsoIdProviderUpdateDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderDTO**](../Model/AccountSsoIdProviderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountDomain**
> deleteAccountDomain($account_uuid, $domain_uuid)

Delete account domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$domain_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Domain UUID

try {
    $apiInstance->deleteAccountDomain($account_uuid, $domain_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->deleteAccountDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **domain_uuid** | [**string**](../Model/.md)| Domain UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountIdp**
> deleteAccountIdp($account_uuid, $idp_uuid)

Delete account SSO IdP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$idp_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | IdP UUID

try {
    $apiInstance->deleteAccountIdp($account_uuid, $idp_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->deleteAccountIdp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **idp_uuid** | [**string**](../Model/.md)| IdP UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountDomain**
> \DocStudio\Client\Model\AccountDomainDTO getAccountDomain($account_uuid, $domain_uuid)

Get account domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$domain_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Domain UUID

try {
    $result = $apiInstance->getAccountDomain($account_uuid, $domain_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAccountDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **domain_uuid** | [**string**](../Model/.md)| Domain UUID |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountDomains**
> \DocStudio\Client\Model\PageDTOAccountDomainDTO getAccountDomains($account_uuid, $offset, $limit, $keyword, $status)

Get paged account domains list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000
$keyword = "keyword_example"; // string | Domain name or part of name
$status = "status_example"; // string | Domain status

try {
    $result = $apiInstance->getAccountDomains($account_uuid, $offset, $limit, $keyword, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAccountDomains: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]
 **keyword** | **string**| Domain name or part of name | [optional]
 **status** | **string**| Domain status | [optional]

### Return type

[**\DocStudio\Client\Model\PageDTOAccountDomainDTO**](../Model/PageDTOAccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountIdp**
> \DocStudio\Client\Model\AccountSsoIdProviderDTO getAccountIdp($account_uuid, $idp_uuid)

Get account SSO IdP

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$idp_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | IdP UUID

try {
    $result = $apiInstance->getAccountIdp($account_uuid, $idp_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAccountIdp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **idp_uuid** | [**string**](../Model/.md)| IdP UUID |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderDTO**](../Model/AccountSsoIdProviderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllAccountIdps**
> \DocStudio\Client\Model\AccountSsoIdProviderShortDTO[] getAllAccountIdps($account_uuid)

Get all account SSO IdPs

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID

try {
    $result = $apiInstance->getAllAccountIdps($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAllAccountIdps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_uuid** | [**string**](../Model/.md)| Account UUID |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderShortDTO[]**](../Model/AccountSsoIdProviderShortDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountDomain**
> \DocStudio\Client\Model\AccountDomainDTO updateAccountDomain($body, $account_uuid, $domain_uuid)

Update account domain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\AccountDomainUpdateDTO(); // \DocStudio\Client\Model\AccountDomainUpdateDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$domain_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Domain UUID

try {
    $result = $apiInstance->updateAccountDomain($body, $account_uuid, $domain_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->updateAccountDomain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\AccountDomainUpdateDTO**](../Model/AccountDomainUpdateDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **domain_uuid** | [**string**](../Model/.md)| Domain UUID |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountSsoIdp**
> \DocStudio\Client\Model\AccountSsoIdProviderDTO updateAccountSsoIdp($body, $account_uuid, $idp_uuid)

Update account SSO Identity Provider

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = DocStudio\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO(); // \DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO | 
$account_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Account UUID
$idp_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | IdP UUID

try {
    $result = $apiInstance->updateAccountSsoIdp($body, $account_uuid, $idp_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->updateAccountSsoIdp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO**](../Model/AccountSsoIdProviderUpdateDTO.md)|  |
 **account_uuid** | [**string**](../Model/.md)| Account UUID |
 **idp_uuid** | [**string**](../Model/.md)| IdP UUID |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderDTO**](../Model/AccountSsoIdProviderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

