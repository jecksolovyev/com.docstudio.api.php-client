# DocStudio\Client\AccountDomainControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionAccountDomain()**](AccountDomainControllerApi.md#actionAccountDomain) | **PATCH** /api/v1/account/{accountUuid}/domain/{domainUuid}/{action} | Change account domain status |
| [**createAccountDomain()**](AccountDomainControllerApi.md#createAccountDomain) | **POST** /api/v1/account/{accountUuid}/domain | Create account domain |
| [**createAccountSsoIdp()**](AccountDomainControllerApi.md#createAccountSsoIdp) | **POST** /api/v1/account/{accountUuid}/idp | Create account SSO Identity Provider |
| [**deleteAccountDomain()**](AccountDomainControllerApi.md#deleteAccountDomain) | **DELETE** /api/v1/account/{accountUuid}/domain/{domainUuid} | Delete account domain |
| [**deleteAccountIdp()**](AccountDomainControllerApi.md#deleteAccountIdp) | **DELETE** /api/v1/account/{accountUuid}/idp/{idpUuid} | Delete account SSO IdP |
| [**getAccountDomain()**](AccountDomainControllerApi.md#getAccountDomain) | **GET** /api/v1/account/{accountUuid}/domain/{domainUuid} | Get account domain |
| [**getAccountDomains()**](AccountDomainControllerApi.md#getAccountDomains) | **GET** /api/v1/account/{accountUuid}/domain | Get paged account domains list |
| [**getAccountIdp()**](AccountDomainControllerApi.md#getAccountIdp) | **GET** /api/v1/account/{accountUuid}/idp/{idpUuid} | Get account SSO IdP |
| [**getAllAccountIdps()**](AccountDomainControllerApi.md#getAllAccountIdps) | **GET** /api/v1/account/{accountUuid}/idp | Get all account SSO IdPs |
| [**updateAccountDomain()**](AccountDomainControllerApi.md#updateAccountDomain) | **PUT** /api/v1/account/{accountUuid}/domain/{domainUuid} | Update account domain |
| [**updateAccountSsoIdp()**](AccountDomainControllerApi.md#updateAccountSsoIdp) | **PUT** /api/v1/account/{accountUuid}/idp/{idpUuid} | Update account SSO Identity Provider |


## `actionAccountDomain()`

```php
actionAccountDomain($account_uuid, $domain_uuid, $action, $change_domain_status_dto): \DocStudio\Client\Model\AccountDomainDTO
```

Change account domain status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$domain_uuid = 'domain_uuid_example'; // string | Domain UUID
$action = 'action_example'; // string | Action
$change_domain_status_dto = new \DocStudio\Client\Model\ChangeDomainStatusDTO(); // \DocStudio\Client\Model\ChangeDomainStatusDTO

try {
    $result = $apiInstance->actionAccountDomain($account_uuid, $domain_uuid, $action, $change_domain_status_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->actionAccountDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **domain_uuid** | **string**| Domain UUID | |
| **action** | **string**| Action | |
| **change_domain_status_dto** | [**\DocStudio\Client\Model\ChangeDomainStatusDTO**](../Model/ChangeDomainStatusDTO.md)|  | [optional] |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountDomain()`

```php
createAccountDomain($account_uuid, $account_domain_create_dto): \DocStudio\Client\Model\AccountDomainDTO
```

Create account domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$account_domain_create_dto = new \DocStudio\Client\Model\AccountDomainCreateDTO(); // \DocStudio\Client\Model\AccountDomainCreateDTO

try {
    $result = $apiInstance->createAccountDomain($account_uuid, $account_domain_create_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->createAccountDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **account_domain_create_dto** | [**\DocStudio\Client\Model\AccountDomainCreateDTO**](../Model/AccountDomainCreateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountSsoIdp()`

```php
createAccountSsoIdp($account_uuid, $account_sso_id_provider_update_dto): \DocStudio\Client\Model\AccountSsoIdProviderDTO
```

Create account SSO Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$account_sso_id_provider_update_dto = new \DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO(); // \DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO

try {
    $result = $apiInstance->createAccountSsoIdp($account_uuid, $account_sso_id_provider_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->createAccountSsoIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **account_sso_id_provider_update_dto** | [**\DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO**](../Model/AccountSsoIdProviderUpdateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderDTO**](../Model/AccountSsoIdProviderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountDomain()`

```php
deleteAccountDomain($account_uuid, $domain_uuid)
```

Delete account domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$domain_uuid = 'domain_uuid_example'; // string | Domain UUID

try {
    $apiInstance->deleteAccountDomain($account_uuid, $domain_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->deleteAccountDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **domain_uuid** | **string**| Domain UUID | |

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

## `deleteAccountIdp()`

```php
deleteAccountIdp($account_uuid, $idp_uuid)
```

Delete account SSO IdP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$idp_uuid = 'idp_uuid_example'; // string | IdP UUID

try {
    $apiInstance->deleteAccountIdp($account_uuid, $idp_uuid);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->deleteAccountIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **idp_uuid** | **string**| IdP UUID | |

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

## `getAccountDomain()`

```php
getAccountDomain($account_uuid, $domain_uuid): \DocStudio\Client\Model\AccountDomainDTO
```

Get account domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$domain_uuid = 'domain_uuid_example'; // string | Domain UUID

try {
    $result = $apiInstance->getAccountDomain($account_uuid, $domain_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAccountDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **domain_uuid** | **string**| Domain UUID | |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountDomains()`

```php
getAccountDomains($account_uuid, $offset, $limit, $keyword, $status): \DocStudio\Client\Model\PageDTOAccountDomainDTO
```

Get paged account domains list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000
$keyword = 'keyword_example'; // string | Domain name or part of name
$status = 'status_example'; // string | Domain status

try {
    $result = $apiInstance->getAccountDomains($account_uuid, $offset, $limit, $keyword, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAccountDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |
| **keyword** | **string**| Domain name or part of name | [optional] |
| **status** | **string**| Domain status | [optional] |

### Return type

[**\DocStudio\Client\Model\PageDTOAccountDomainDTO**](../Model/PageDTOAccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountIdp()`

```php
getAccountIdp($account_uuid, $idp_uuid): \DocStudio\Client\Model\AccountSsoIdProviderDTO
```

Get account SSO IdP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$idp_uuid = 'idp_uuid_example'; // string | IdP UUID

try {
    $result = $apiInstance->getAccountIdp($account_uuid, $idp_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAccountIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **idp_uuid** | **string**| IdP UUID | |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderDTO**](../Model/AccountSsoIdProviderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountIdps()`

```php
getAllAccountIdps($account_uuid): \DocStudio\Client\Model\AccountSsoIdProviderShortDTO[]
```

Get all account SSO IdPs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID

try {
    $result = $apiInstance->getAllAccountIdps($account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAllAccountIdps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderShortDTO[]**](../Model/AccountSsoIdProviderShortDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountDomain()`

```php
updateAccountDomain($account_uuid, $domain_uuid, $account_domain_update_dto): \DocStudio\Client\Model\AccountDomainDTO
```

Update account domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$domain_uuid = 'domain_uuid_example'; // string | Domain UUID
$account_domain_update_dto = new \DocStudio\Client\Model\AccountDomainUpdateDTO(); // \DocStudio\Client\Model\AccountDomainUpdateDTO

try {
    $result = $apiInstance->updateAccountDomain($account_uuid, $domain_uuid, $account_domain_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->updateAccountDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **domain_uuid** | **string**| Domain UUID | |
| **account_domain_update_dto** | [**\DocStudio\Client\Model\AccountDomainUpdateDTO**](../Model/AccountDomainUpdateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountSsoIdp()`

```php
updateAccountSsoIdp($account_uuid, $idp_uuid, $account_sso_id_provider_update_dto): \DocStudio\Client\Model\AccountSsoIdProviderDTO
```

Update account SSO Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$idp_uuid = 'idp_uuid_example'; // string | IdP UUID
$account_sso_id_provider_update_dto = new \DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO(); // \DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO

try {
    $result = $apiInstance->updateAccountSsoIdp($account_uuid, $idp_uuid, $account_sso_id_provider_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->updateAccountSsoIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **idp_uuid** | **string**| IdP UUID | |
| **account_sso_id_provider_update_dto** | [**\DocStudio\Client\Model\AccountSsoIdProviderUpdateDTO**](../Model/AccountSsoIdProviderUpdateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderDTO**](../Model/AccountSsoIdProviderDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
