# DocStudio\Client\SsoAuthenticationControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**loginOauth2()**](SsoAuthenticationControllerApi.md#loginOauth2) | **GET** /oauth2/authorization/{registrationId} | Login with oauth2 |
| [**loginSaml2()**](SsoAuthenticationControllerApi.md#loginSaml2) | **GET** /saml2/authenticate/{registrationId} | Login with SAML2 |
| [**samlMetadata()**](SsoAuthenticationControllerApi.md#samlMetadata) | **GET** /saml/metadata | Returns SAML Metadata |


## `loginOauth2()`

```php
loginOauth2($registration_id, $redirect_url, $forward_path)
```

Login with oauth2

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
$redirect_url = 'redirect_url_example'; // string | The URL where the token or error message should be sent when redirecting using the GET method (default is {UI_HOST}/sso-login
$forward_path = 'forward_path_example'; // string | The path to which the user should be redirected within the host {redirectUrl}

try {
    $apiInstance->loginOauth2($registration_id, $redirect_url, $forward_path);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->loginOauth2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **registration_id** | **string**|  | |
| **redirect_url** | **string**| The URL where the token or error message should be sent when redirecting using the GET method (default is {UI_HOST}/sso-login | [optional] |
| **forward_path** | **string**| The path to which the user should be redirected within the host {redirectUrl} | [optional] |

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
loginSaml2($registration_id, $redirect_url, $forward_path)
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
$redirect_url = 'redirect_url_example'; // string | The URL where the token or error message should be sent when redirecting using the GET method (default is {UI_HOST}/sso-login
$forward_path = 'forward_path_example'; // string | The path to which the user should be redirected within the host {redirectUrl}

try {
    $apiInstance->loginSaml2($registration_id, $redirect_url, $forward_path);
} catch (Exception $e) {
    echo 'Exception when calling SsoAuthenticationControllerApi->loginSaml2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **registration_id** | **string**|  | |
| **redirect_url** | **string**| The URL where the token or error message should be sent when redirecting using the GET method (default is {UI_HOST}/sso-login | [optional] |
| **forward_path** | **string**| The path to which the user should be redirected within the host {redirectUrl} | [optional] |

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
