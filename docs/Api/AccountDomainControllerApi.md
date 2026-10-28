# DocStudio\Client\AccountDomainControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionAccountDomain()**](AccountDomainControllerApi.md#actionAccountDomain) | **PATCH** /api/v1/account/{accountUuid}/domain/{domainUuid}/{action} | Change account domain status |
| [**createAccountDomain()**](AccountDomainControllerApi.md#createAccountDomain) | **POST** /api/v1/account/{accountUuid}/domain | Create account domain |
| [**createAccountOauthProvider()**](AccountDomainControllerApi.md#createAccountOauthProvider) | **POST** /api/v1/account/{accountId}/oauth-provider | Create account OAuth2 Provider |
| [**createAccountSsoIdp()**](AccountDomainControllerApi.md#createAccountSsoIdp) | **POST** /api/v1/account/{accountId}/saml-provider | Create account SAML2 Identity Provider |
| [**deleteAccountDomain()**](AccountDomainControllerApi.md#deleteAccountDomain) | **DELETE** /api/v1/account/{accountUuid}/domain/{domainUuid} | Delete account domain |
| [**deleteAccountIdp()**](AccountDomainControllerApi.md#deleteAccountIdp) | **DELETE** /api/v1/account/{accountId}/saml-provider/{id} | Delete account SAML2 IdP |
| [**deleteAccountOauthProvider()**](AccountDomainControllerApi.md#deleteAccountOauthProvider) | **DELETE** /api/v1/account/{accountId}/oauth-provider/{id} | Delete account OAuth2 Provider |
| [**getAccountDomain()**](AccountDomainControllerApi.md#getAccountDomain) | **GET** /api/v1/account/{accountUuid}/domain/{domainUuid} | Get account domain |
| [**getAccountDomains()**](AccountDomainControllerApi.md#getAccountDomains) | **GET** /api/v1/account/{accountUuid}/domain | Get paged account domains list |
| [**getAccountIdp()**](AccountDomainControllerApi.md#getAccountIdp) | **GET** /api/v1/account/{accountId}/saml-provider/{id} | Get account SAML2 IdP |
| [**getAccountOauthProvider()**](AccountDomainControllerApi.md#getAccountOauthProvider) | **GET** /api/v1/account/{accountId}/oauth-provider/{id} | Get account OAuth2 Provider |
| [**getAllAccountIdps()**](AccountDomainControllerApi.md#getAllAccountIdps) | **GET** /api/v1/account/{accountId}/saml-provider | Get all account SAML2 IdPs |
| [**getAllAccountOauthProviders()**](AccountDomainControllerApi.md#getAllAccountOauthProviders) | **GET** /api/v1/account/{accountId}/oauth-provider | Get all account OAuth2 Providers |
| [**updateAccountDomain()**](AccountDomainControllerApi.md#updateAccountDomain) | **PUT** /api/v1/account/{accountUuid}/domain/{domainUuid} | Update account domain |
| [**updateAccountOauthProvider()**](AccountDomainControllerApi.md#updateAccountOauthProvider) | **PUT** /api/v1/account/{accountId}/oauth-provider/{id} | Update account OAuth2 Provider |
| [**updateAccountSsoIdp()**](AccountDomainControllerApi.md#updateAccountSsoIdp) | **PUT** /api/v1/account/{accountId}/saml-provider/{id} | Update account SAML2 Identity Provider |


## `actionAccountDomain()`

```php
actionAccountDomain($account_uuid, $domain_uuid, $action, $change_domain_status_dto): \DocStudio\Client\Model\AccountDomainDTO
```

Change account domain status

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountDomain()`

```php
createAccountDomain($account_uuid, $account_domain_create): \DocStudio\Client\Model\AccountDomainDTO
```

Create account domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$account_domain_create = new \DocStudio\Client\Model\AccountDomainCreate(); // \DocStudio\Client\Model\AccountDomainCreate

try {
    $result = $apiInstance->createAccountDomain($account_uuid, $account_domain_create);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->createAccountDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**| Account UUID | |
| **account_domain_create** | [**\DocStudio\Client\Model\AccountDomainCreate**](../Model/AccountDomainCreate.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountOauthProvider()`

```php
createAccountOauthProvider($account_id, $account_oauth_provider_update_dto): \DocStudio\Client\Model\AccountOauthProviderDTO
```

Create account OAuth2 Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$account_oauth_provider_update_dto = new \DocStudio\Client\Model\AccountOauthProviderUpdateDTO(); // \DocStudio\Client\Model\AccountOauthProviderUpdateDTO

try {
    $result = $apiInstance->createAccountOauthProvider($account_id, $account_oauth_provider_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->createAccountOauthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **account_oauth_provider_update_dto** | [**\DocStudio\Client\Model\AccountOauthProviderUpdateDTO**](../Model/AccountOauthProviderUpdateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountOauthProviderDTO**](../Model/AccountOauthProviderDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAccountSsoIdp()`

```php
createAccountSsoIdp($account_id, $account_saml_provider_update_dto): \DocStudio\Client\Model\AccountSamlProviderDTO
```

Create account SAML2 Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$account_saml_provider_update_dto = new \DocStudio\Client\Model\AccountSamlProviderUpdateDTO(); // \DocStudio\Client\Model\AccountSamlProviderUpdateDTO

try {
    $result = $apiInstance->createAccountSsoIdp($account_id, $account_saml_provider_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->createAccountSsoIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **account_saml_provider_update_dto** | [**\DocStudio\Client\Model\AccountSamlProviderUpdateDTO**](../Model/AccountSamlProviderUpdateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountSamlProviderDTO**](../Model/AccountSamlProviderDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountIdp()`

```php
deleteAccountIdp($account_id, $id)
```

Delete account SAML2 IdP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | IdP UUID

try {
    $apiInstance->deleteAccountIdp($account_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->deleteAccountIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| IdP UUID | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAccountOauthProvider()`

```php
deleteAccountOauthProvider($account_id, $id)
```

Delete account OAuth2 Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | OAuth2 Provider UUID

try {
    $apiInstance->deleteAccountOauthProvider($account_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->deleteAccountOauthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| OAuth2 Provider UUID | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

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


// Configure Bearer authorization: bearerAuth
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

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountIdp()`

```php
getAccountIdp($account_id, $id): \DocStudio\Client\Model\AccountSamlProviderDTO
```

Get account SAML2 IdP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | IdP UUID

try {
    $result = $apiInstance->getAccountIdp($account_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAccountIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| IdP UUID | |

### Return type

[**\DocStudio\Client\Model\AccountSamlProviderDTO**](../Model/AccountSamlProviderDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountOauthProvider()`

```php
getAccountOauthProvider($account_id, $id): \DocStudio\Client\Model\AccountOauthProviderDTO
```

Get account OAuth2 Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | OAuth2 Provider UUID

try {
    $result = $apiInstance->getAccountOauthProvider($account_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAccountOauthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| OAuth2 Provider UUID | |

### Return type

[**\DocStudio\Client\Model\AccountOauthProviderDTO**](../Model/AccountOauthProviderDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountIdps()`

```php
getAllAccountIdps($account_id): \DocStudio\Client\Model\AccountSsoIdProviderShortDTO[]
```

Get all account SAML2 IdPs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID

try {
    $result = $apiInstance->getAllAccountIdps($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAllAccountIdps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderShortDTO[]**](../Model/AccountSsoIdProviderShortDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllAccountOauthProviders()`

```php
getAllAccountOauthProviders($account_id): \DocStudio\Client\Model\AccountSsoIdProviderShortDTO[]
```

Get all account OAuth2 Providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account ID

try {
    $result = $apiInstance->getAllAccountOauthProviders($account_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->getAllAccountOauthProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account ID | |

### Return type

[**\DocStudio\Client\Model\AccountSsoIdProviderShortDTO[]**](../Model/AccountSsoIdProviderShortDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountDomain()`

```php
updateAccountDomain($account_uuid, $domain_uuid, $account_domain_update): \DocStudio\Client\Model\AccountDomainDTO
```

Update account domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string | Account UUID
$domain_uuid = 'domain_uuid_example'; // string | Domain UUID
$account_domain_update = new \DocStudio\Client\Model\AccountDomainUpdate(); // \DocStudio\Client\Model\AccountDomainUpdate

try {
    $result = $apiInstance->updateAccountDomain($account_uuid, $domain_uuid, $account_domain_update);
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
| **account_domain_update** | [**\DocStudio\Client\Model\AccountDomainUpdate**](../Model/AccountDomainUpdate.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountDomainDTO**](../Model/AccountDomainDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountOauthProvider()`

```php
updateAccountOauthProvider($account_id, $id, $account_oauth_provider_update_dto): \DocStudio\Client\Model\AccountOauthProviderDTO
```

Update account OAuth2 Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | OAuth2 Provider UUID
$account_oauth_provider_update_dto = new \DocStudio\Client\Model\AccountOauthProviderUpdateDTO(); // \DocStudio\Client\Model\AccountOauthProviderUpdateDTO

try {
    $result = $apiInstance->updateAccountOauthProvider($account_id, $id, $account_oauth_provider_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->updateAccountOauthProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| OAuth2 Provider UUID | |
| **account_oauth_provider_update_dto** | [**\DocStudio\Client\Model\AccountOauthProviderUpdateDTO**](../Model/AccountOauthProviderUpdateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountOauthProviderDTO**](../Model/AccountOauthProviderDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAccountSsoIdp()`

```php
updateAccountSsoIdp($account_id, $id, $account_saml_provider_update_dto): \DocStudio\Client\Model\AccountSamlProviderDTO
```

Update account SAML2 Identity Provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\AccountDomainControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_id = 'account_id_example'; // string | Account UUID
$id = 'id_example'; // string | IdP UUID
$account_saml_provider_update_dto = new \DocStudio\Client\Model\AccountSamlProviderUpdateDTO(); // \DocStudio\Client\Model\AccountSamlProviderUpdateDTO

try {
    $result = $apiInstance->updateAccountSsoIdp($account_id, $id, $account_saml_provider_update_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountDomainControllerApi->updateAccountSsoIdp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_id** | **string**| Account UUID | |
| **id** | **string**| IdP UUID | |
| **account_saml_provider_update_dto** | [**\DocStudio\Client\Model\AccountSamlProviderUpdateDTO**](../Model/AccountSamlProviderUpdateDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\AccountSamlProviderDTO**](../Model/AccountSamlProviderDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
