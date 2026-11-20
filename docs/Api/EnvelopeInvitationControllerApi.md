# DocStudio\Client\EnvelopeInvitationControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptUserPendingInvitations()**](EnvelopeInvitationControllerApi.md#acceptUserPendingInvitations) | **POST** /api/v1/envelope/invitations | Accept user&#39;s pending invitations |
| [**checkUserHasInvitations()**](EnvelopeInvitationControllerApi.md#checkUserHasInvitations) | **HEAD** /api/v1/envelope/invitations | Check user has pending invitations |
| [**confirmInvite()**](EnvelopeInvitationControllerApi.md#confirmInvite) | **POST** /api/v1/envelope/confirm-invite | Accept/confirm invitations |
| [**getActionLinkForUser()**](EnvelopeInvitationControllerApi.md#getActionLinkForUser) | **GET** /api/v1/envelope/{id}/action-link |  |
| [**getEnvelopeInviteAuthorized()**](EnvelopeInvitationControllerApi.md#getEnvelopeInviteAuthorized) | **GET** /api/v1/envelope/invite-authorized-info | Get information about envelope by the invitation code (by already registered user) |
| [**getEnvelopeInviteUnauthorized()**](EnvelopeInvitationControllerApi.md#getEnvelopeInviteUnauthorized) | **GET** /api/v1/envelope/invite-info | Get information about envelope by the invitation code (by unauthenticated user) |
| [**getUserPendingInvitations()**](EnvelopeInvitationControllerApi.md#getUserPendingInvitations) | **GET** /api/v1/envelope/invitations | Get user&#39;s pending invitations |


## `acceptUserPendingInvitations()`

```php
acceptUserPendingInvitations($mailbox, $request_body, $type)
```

Accept user's pending invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeInvitationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]
$type = 'type_example'; // string | Type of the invitations

try {
    $apiInstance->acceptUserPendingInvitations($mailbox, $request_body, $type);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeInvitationControllerApi->acceptUserPendingInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |
| **type** | **string**| Type of the invitations | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkUserHasInvitations()`

```php
checkUserHasInvitations()
```

Check user has pending invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeInvitationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->checkUserHasInvitations();
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeInvitationControllerApi->checkUserHasInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `confirmInvite()`

```php
confirmInvite($envelope_confirm_invite_dto)
```

Accept/confirm invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeInvitationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_confirm_invite_dto = new \DocStudio\Client\Model\EnvelopeConfirmInviteDTO(); // \DocStudio\Client\Model\EnvelopeConfirmInviteDTO

try {
    $apiInstance->confirmInvite($envelope_confirm_invite_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeInvitationControllerApi->confirmInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_confirm_invite_dto** | [**\DocStudio\Client\Model\EnvelopeConfirmInviteDTO**](../Model/EnvelopeConfirmInviteDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getActionLinkForUser()`

```php
getActionLinkForUser($id, $email, $mailbox): \DocStudio\Client\Model\ActionLinkResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeInvitationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of envelope
$email = 'email_example'; // string | Email of user assigned to a role
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getActionLinkForUser($id, $email, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeInvitationControllerApi->getActionLinkForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of envelope | |
| **email** | **string**| Email of user assigned to a role | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\ActionLinkResponse**](../Model/ActionLinkResponse.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeInviteAuthorized()`

```php
getEnvelopeInviteAuthorized($code): \DocStudio\Client\Model\InvitedEnvelopeInfoDTO
```

Get information about envelope by the invitation code (by already registered user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeInvitationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Invitation code from email

try {
    $result = $apiInstance->getEnvelopeInviteAuthorized($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeInvitationControllerApi->getEnvelopeInviteAuthorized: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Invitation code from email | |

### Return type

[**\DocStudio\Client\Model\InvitedEnvelopeInfoDTO**](../Model/InvitedEnvelopeInfoDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeInviteUnauthorized()`

```php
getEnvelopeInviteUnauthorized($code): \DocStudio\Client\Model\InvitedEnvelopeInfoDTO
```

Get information about envelope by the invitation code (by unauthenticated user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeInvitationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | Invitation code from email

try {
    $result = $apiInstance->getEnvelopeInviteUnauthorized($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeInvitationControllerApi->getEnvelopeInviteUnauthorized: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Invitation code from email | |

### Return type

[**\DocStudio\Client\Model\InvitedEnvelopeInfoDTO**](../Model/InvitedEnvelopeInfoDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPendingInvitations()`

```php
getUserPendingInvitations($type, $offset, $limit): \DocStudio\Client\Model\PageDTOEnvelopeToMailboxDTO
```

Get user's pending invitations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeInvitationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Invitation type
$offset = 0; // int | Offset, how much envelopes to skip
$limit = 25; // int | Limit, how much envelopes to retrieve

try {
    $result = $apiInstance->getUserPendingInvitations($type, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeInvitationControllerApi->getUserPendingInvitations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Invitation type | [optional] |
| **offset** | **int**| Offset, how much envelopes to skip | [optional] [default to 0] |
| **limit** | **int**| Limit, how much envelopes to retrieve | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOEnvelopeToMailboxDTO**](../Model/PageDTOEnvelopeToMailboxDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
