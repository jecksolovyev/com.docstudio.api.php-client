# DocStudio\Client\SsoAuthenticationControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loginOauth2()**](SsoAuthenticationControllerApi.md#loginOauth2) | **GET** /oauth2/authorization/{registrationId} | Login with oAuth2 |
| [**loginSaml2()**](SsoAuthenticationControllerApi.md#loginSaml2) | **GET** /saml2/authenticate/{registrationId} | Login with SAML2 |
| [**samlMetadata()**](SsoAuthenticationControllerApi.md#samlMetadata) | **GET** /saml/metadata | Returns SAML Metadata |
| [**samlRegistrationIdByDomain()**](SsoAuthenticationControllerApi.md#samlRegistrationIdByDomain) | **GET** /saml/registrationId | Returns EntityID by domain |


## `loginOauth2()`

```php
loginOauth2($registration_id, $redirect_url)
```

Login with oAuth2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\SsoAuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_id = 'registration_id_example'; // string
$redirect_url = 'redirect_url_example'; // string

try {
    $apiInstance->loginOauth2($registration_id, $redirect_url);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->loginOauth2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **registration_id** | **string**|  | |
| **redirect_url** | **string**|  | [optional] |

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

## `loginSaml2()`

```php
loginSaml2($registration_id, $redirect_url)
```

Login with SAML2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\SsoAuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$registration_id = 'registration_id_example'; // string
$redirect_url = 'redirect_url_example'; // string

try {
    $apiInstance->loginSaml2($registration_id, $redirect_url);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->loginSaml2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **registration_id** | **string**|  | |
| **redirect_url** | **string**|  | [optional] |

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

## `samlMetadata()`

```php
samlMetadata(): string
```

Returns SAML Metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\SsoAuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->samlMetadata();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->samlMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `samlRegistrationIdByDomain()`

```php
samlRegistrationIdByDomain($domain): \DocStudio\Client\Model\SsoEntityDTO
```

Returns EntityID by domain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\SsoAuthenticationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = 'domain_example'; // string

try {
    $result = $apiInstance->samlRegistrationIdByDomain($domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->samlRegistrationIdByDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **domain** | **string**|  | |

### Return type

[**\DocStudio\Client\Model\SsoEntityDTO**](../Model/SsoEntityDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
