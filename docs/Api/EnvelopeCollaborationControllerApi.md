# DocStudio\Client\EnvelopeCollaborationControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addEnvelopesIntoChain()**](EnvelopeCollaborationControllerApi.md#addEnvelopesIntoChain) | **PUT** /api/v1/envelope/chain/{chainId} | Add envelopes into chain |
| [**createEnvelopeComment()**](EnvelopeCollaborationControllerApi.md#createEnvelopeComment) | **POST** /api/v1/envelope/{id}/comment | Create envelope comment thread |
| [**deleteEnvelopeComment()**](EnvelopeCollaborationControllerApi.md#deleteEnvelopeComment) | **DELETE** /api/v1/envelope/{id}/comment | Delete envelope comment in thread or the whole thread |
| [**getChainEnvelopes()**](EnvelopeCollaborationControllerApi.md#getChainEnvelopes) | **GET** /api/v1/envelope/chain/{chainId} | Get chain envelopes list |
| [**getEnvelopeComments()**](EnvelopeCollaborationControllerApi.md#getEnvelopeComments) | **GET** /api/v1/envelope/{id}/comment | Get envelope comments for each document |
| [**mergeEnvelopesIntoChain()**](EnvelopeCollaborationControllerApi.md#mergeEnvelopesIntoChain) | **POST** /api/v1/envelope/chain | Merge envelopes into chain |
| [**removeEnvelopeFromChain()**](EnvelopeCollaborationControllerApi.md#removeEnvelopeFromChain) | **DELETE** /api/v1/envelope/{id}/chain | Remove envelope from chain |
| [**removeEnvelopesFromChain()**](EnvelopeCollaborationControllerApi.md#removeEnvelopesFromChain) | **PUT** /api/v1/envelope/unchain | Remove envelopes from chain |
| [**resolvedEnvelopeComment()**](EnvelopeCollaborationControllerApi.md#resolvedEnvelopeComment) | **POST** /api/v1/envelope/{id}/resolve-comment | Set Resolved Flag for comment thread |
| [**revokeEnvelopeSharing()**](EnvelopeCollaborationControllerApi.md#revokeEnvelopeSharing) | **DELETE** /api/v1/envelope/share-copy | Revoke sharing an envelope copy |
| [**shareEnvelopesCopy()**](EnvelopeCollaborationControllerApi.md#shareEnvelopesCopy) | **POST** /api/v1/envelope/share-copy | Share envelopes copies |
| [**updateEnvelopeComment()**](EnvelopeCollaborationControllerApi.md#updateEnvelopeComment) | **PUT** /api/v1/envelope/{id}/comment | Add/Update envelope comment in thread |
| [**updateEnvelopeCommentAccess()**](EnvelopeCollaborationControllerApi.md#updateEnvelopeCommentAccess) | **PUT** /api/v1/envelope/{id}/comment-access | Update envelope comment thread access level |


## `addEnvelopesIntoChain()`

```php
addEnvelopesIntoChain($chain_id, $mailbox, $request_body)
```

Add envelopes into chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 'chain_id_example'; // string | Chain UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->addEnvelopesIntoChain($chain_id, $mailbox, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->addEnvelopesIntoChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **string**| Chain UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

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

## `createEnvelopeComment()`

```php
createEnvelopeComment($id, $mailbox, $comment_post_dto): \DocStudio\Client\Model\CommentThreadDTO
```

Create envelope comment thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$comment_post_dto = new \DocStudio\Client\Model\CommentPostDTO(); // \DocStudio\Client\Model\CommentPostDTO

try {
    $result = $apiInstance->createEnvelopeComment($id, $mailbox, $comment_post_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->createEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **comment_post_dto** | [**\DocStudio\Client\Model\CommentPostDTO**](../Model/CommentPostDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvelopeComment()`

```php
deleteEnvelopeComment($id, $thread_uuid, $mailbox, $message_id): \DocStudio\Client\Model\CommentThreadDTO
```

Delete envelope comment in thread or the whole thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$thread_uuid = 'thread_uuid_example'; // string | Thread UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$message_id = 56; // int | Message ID (optional)

try {
    $result = $apiInstance->deleteEnvelopeComment($id, $thread_uuid, $mailbox, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->deleteEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **thread_uuid** | **string**| Thread UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **message_id** | **int**| Message ID (optional) | [optional] |

### Return type

[**\DocStudio\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getChainEnvelopes()`

```php
getChainEnvelopes($chain_id, $mailbox): \DocStudio\Client\Model\ChainEnvelopeDTO[]
```

Get chain envelopes list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_id = 'chain_id_example'; // string | Chain UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getChainEnvelopes($chain_id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->getChainEnvelopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **chain_id** | **string**| Chain UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\ChainEnvelopeDTO[]**](../Model/ChainEnvelopeDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeComments()`

```php
getEnvelopeComments($id, $mailbox): \DocStudio\Client\Model\DocumentCommentsDTO[]
```

Get envelope comments for each document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getEnvelopeComments($id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->getEnvelopeComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\DocumentCommentsDTO[]**](../Model/DocumentCommentsDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mergeEnvelopesIntoChain()`

```php
mergeEnvelopesIntoChain($mailbox, $request_body): \DocStudio\Client\Model\SingleUuidDTO
```

Merge envelopes into chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $result = $apiInstance->mergeEnvelopesIntoChain($mailbox, $request_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->mergeEnvelopesIntoChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeEnvelopeFromChain()`

```php
removeEnvelopeFromChain($id, $mailbox)
```

Remove envelope from chain

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->removeEnvelopeFromChain($id, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->removeEnvelopeFromChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

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

## `removeEnvelopesFromChain()`

```php
removeEnvelopesFromChain($mailbox, $request_body)
```

Remove envelopes from chain

Remove one or more envelopes from chain. Send list of envelope UUIDs in the request body to be removed from the chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->removeEnvelopesFromChain($mailbox, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->removeEnvelopesFromChain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**string[]**](../Model/string.md)|  | |

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

## `resolvedEnvelopeComment()`

```php
resolvedEnvelopeComment($id, $mailbox, $resolve_comment_thread_dto)
```

Set Resolved Flag for comment thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$resolve_comment_thread_dto = new \DocStudio\Client\Model\ResolveCommentThreadDTO(); // \DocStudio\Client\Model\ResolveCommentThreadDTO

try {
    $apiInstance->resolvedEnvelopeComment($id, $mailbox, $resolve_comment_thread_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->resolvedEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **resolve_comment_thread_dto** | [**\DocStudio\Client\Model\ResolveCommentThreadDTO**](../Model/ResolveCommentThreadDTO.md)|  | |

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

## `revokeEnvelopeSharing()`

```php
revokeEnvelopeSharing($mailbox, $envelope_shared_copy_request_dto)
```

Revoke sharing an envelope copy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_shared_copy_request_dto = new \DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO(); // \DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO

try {
    $apiInstance->revokeEnvelopeSharing($mailbox, $envelope_shared_copy_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->revokeEnvelopeSharing: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_shared_copy_request_dto** | [**\DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO**](../Model/EnvelopeSharedCopyRequestDTO.md)|  | |

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

## `shareEnvelopesCopy()`

```php
shareEnvelopesCopy($mailbox, $envelope_shared_copy_request_dto): \DocStudio\Client\Model\ShareEnvelopesResult
```

Share envelopes copies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_shared_copy_request_dto = new \DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO(); // \DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO

try {
    $result = $apiInstance->shareEnvelopesCopy($mailbox, $envelope_shared_copy_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->shareEnvelopesCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_shared_copy_request_dto** | [**\DocStudio\Client\Model\EnvelopeSharedCopyRequestDTO**](../Model/EnvelopeSharedCopyRequestDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ShareEnvelopesResult**](../Model/ShareEnvelopesResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvelopeComment()`

```php
updateEnvelopeComment($id, $mailbox, $comment_put_dto): \DocStudio\Client\Model\CommentThreadDTO
```

Add/Update envelope comment in thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$comment_put_dto = new \DocStudio\Client\Model\CommentPutDTO(); // \DocStudio\Client\Model\CommentPutDTO

try {
    $result = $apiInstance->updateEnvelopeComment($id, $mailbox, $comment_put_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->updateEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **comment_put_dto** | [**\DocStudio\Client\Model\CommentPutDTO**](../Model/CommentPutDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEnvelopeCommentAccess()`

```php
updateEnvelopeCommentAccess($id, $mailbox, $comment_access_dto): \DocStudio\Client\Model\CommentThreadDTO
```

Update envelope comment thread access level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeCollaborationControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$comment_access_dto = new \DocStudio\Client\Model\CommentAccessDTO(); // \DocStudio\Client\Model\CommentAccessDTO

try {
    $result = $apiInstance->updateEnvelopeCommentAccess($id, $mailbox, $comment_access_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeCollaborationControllerApi->updateEnvelopeCommentAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **comment_access_dto** | [**\DocStudio\Client\Model\CommentAccessDTO**](../Model/CommentAccessDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
