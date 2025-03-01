# DocStudio\Client\UserInviteControllerApi

All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acceptInvite()**](UserInviteControllerApi.md#acceptInvite) | **POST** /api/v1/user/invite/accept/{inviteCode} | Accept invite |
| [**createInvitation()**](UserInviteControllerApi.md#createInvitation) | **POST** /api/v1/user/invite | Create invitation to join account or mailbox with defined permissions |
| [**declineInvite()**](UserInviteControllerApi.md#declineInvite) | **DELETE** /api/v1/user/invite/decline/{inviteCode} | Decline invite |
| [**getInvites()**](UserInviteControllerApi.md#getInvites) | **GET** /api/v1/user/invites | Get paged invites list |
| [**updateInvitation()**](UserInviteControllerApi.md#updateInvitation) | **PUT** /api/v1/user/invite/{uuid} | Update invitation by userUuid |


## `acceptInvite()`

```php
acceptInvite($invite_code)
```

Accept invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserInviteControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_code = 'invite_code_example'; // string | Invite code

try {
    $apiInstance->acceptInvite($invite_code);
} catch (Exception $e) {
    echo 'Exception when calling UserInviteControllerApi->acceptInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_code** | **string**| Invite code | |

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

## `createInvitation()`

```php
createInvitation($invitation_post_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Create invitation to join account or mailbox with defined permissions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserInviteControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invitation_post_dto = new \DocStudio\Client\Model\InvitationPostDTO(); // \DocStudio\Client\Model\InvitationPostDTO

try {
    $result = $apiInstance->createInvitation($invitation_post_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInviteControllerApi->createInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invitation_post_dto** | [**\DocStudio\Client\Model\InvitationPostDTO**](../Model/InvitationPostDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `declineInvite()`

```php
declineInvite($invite_code)
```

Decline invite

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserInviteControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invite_code = 'invite_code_example'; // string | Invite code

try {
    $apiInstance->declineInvite($invite_code);
} catch (Exception $e) {
    echo 'Exception when calling UserInviteControllerApi->declineInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invite_code** | **string**| Invite code | |

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

## `getInvites()`

```php
getInvites($offset, $limit): \DocStudio\Client\Model\PageDTOUserInvitationDTO
```

Get paged invites list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserInviteControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->getInvites($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserInviteControllerApi->getInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**| Offset records | [optional] [default to 0] |
| **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25] |

### Return type

[**\DocStudio\Client\Model\PageDTOUserInvitationDTO**](../Model/PageDTOUserInvitationDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvitation()`

```php
updateInvitation($uuid, $invitation_put_dto)
```

Update invitation by userUuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: Authorization
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\UserInviteControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$invitation_put_dto = new \DocStudio\Client\Model\InvitationPutDTO(); // \DocStudio\Client\Model\InvitationPutDTO

try {
    $apiInstance->updateInvitation($uuid, $invitation_put_dto);
} catch (Exception $e) {
    echo 'Exception when calling UserInviteControllerApi->updateInvitation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **invitation_put_dto** | [**\DocStudio\Client\Model\InvitationPutDTO**](../Model/InvitationPutDTO.md)|  | |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
