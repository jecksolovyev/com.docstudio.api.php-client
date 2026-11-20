# DocStudio\Client\EnvelopeControllerApi



All URIs are relative to https://api.docstudio.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**archiveEnvelope()**](EnvelopeControllerApi.md#archiveEnvelope) | **PATCH** /api/v1/envelope/archive/{flag} | Archive envelopes |
| [**cancelEnvelopeDelegation()**](EnvelopeControllerApi.md#cancelEnvelopeDelegation) | **DELETE** /api/v1/envelope/delegate | Cancel envelope delegation |
| [**cancelEnvelopes()**](EnvelopeControllerApi.md#cancelEnvelopes) | **DELETE** /api/v1/envelope/cancel | Cancel envelopes |
| [**check()**](EnvelopeControllerApi.md#check) | **POST** /api/v1/envelope/check | Check an envelope |
| [**checkEnvelopeHasActiveRole()**](EnvelopeControllerApi.md#checkEnvelopeHasActiveRole) | **HEAD** /api/v1/envelope/{id}/has-active-role | Check envelope has active role |
| [**continueScenarioStep()**](EnvelopeControllerApi.md#continueScenarioStep) | **POST** /api/v1/envelope/{id}/scenario/{stepId} | Continue scenario flow with step |
| [**createEnvelope()**](EnvelopeControllerApi.md#createEnvelope) | **POST** /api/v1/envelope | Create draft envelope |
| [**delegateEnvelopes()**](EnvelopeControllerApi.md#delegateEnvelopes) | **POST** /api/v1/envelope/delegate | Delegate envelopes |
| [**deleteDrafts()**](EnvelopeControllerApi.md#deleteDrafts) | **DELETE** /api/v1/envelope | Delete draft envelopes |
| [**deleteEnvelopeMetadata()**](EnvelopeControllerApi.md#deleteEnvelopeMetadata) | **DELETE** /api/v1/envelope/{id}/metadata | Delete envelope metadata |
| [**getActiveRoles()**](EnvelopeControllerApi.md#getActiveRoles) | **GET** /api/v1/envelope/{id}/activeRoles | Get active roles by Envelope UUID |
| [**getEnvelopeByUuid()**](EnvelopeControllerApi.md#getEnvelopeByUuid) | **GET** /api/v1/envelope/{envelopeUuid} | Retrieve envelope by UUID |
| [**getPaymentDetails()**](EnvelopeControllerApi.md#getPaymentDetails) | **GET** /api/v1/envelope/payment-details/{accessCode} | Get payment details of a payment link for the checkout page |
| [**getPaymentLink()**](EnvelopeControllerApi.md#getPaymentLink) | **POST** /api/v1/envelope/{id}/payment-link | Get the public checkout link of a QR pay field; the role of the field must be completed |
| [**markEnvelopesAsRead()**](EnvelopeControllerApi.md#markEnvelopesAsRead) | **POST** /api/v1/envelope/mark-as-read | Mark envelopes as read by mailbox |
| [**numberToText()**](EnvelopeControllerApi.md#numberToText) | **POST** /api/v1/envelope/number-to-text | Convert a numeric amount to words |
| [**recycleBin()**](EnvelopeControllerApi.md#recycleBin) | **PATCH** /api/v1/envelope/recycle-bin/{flag} | Archive envelopes |
| [**resendNotifications()**](EnvelopeControllerApi.md#resendNotifications) | **POST** /api/v1/envelope/notify | Resend notifications for active roles |
| [**updateEnvelope()**](EnvelopeControllerApi.md#updateEnvelope) | **PUT** /api/v1/envelope | Update envelope without sending |
| [**updateEnvelopeMetadata()**](EnvelopeControllerApi.md#updateEnvelopeMetadata) | **PUT** /api/v1/envelope/{id}/metadata | Update envelope metadata. Will be saved on the account level |
| [**updateFlow()**](EnvelopeControllerApi.md#updateFlow) | **POST** /api/v1/envelope/{id}/flow-update | Update recipient email/mailbox for not finished roles in a sent envelope |


## `archiveEnvelope()`

```php
archiveEnvelope($flag, $mailbox, $bulk_envelope_action_dto)
```

Archive envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flag = True; // bool
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$bulk_envelope_action_dto = new \DocStudio\Client\Model\BulkEnvelopeActionDTO(); // \DocStudio\Client\Model\BulkEnvelopeActionDTO

try {
    $apiInstance->archiveEnvelope($flag, $mailbox, $bulk_envelope_action_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->archiveEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag** | **bool**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **bulk_envelope_action_dto** | [**\DocStudio\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  | |

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

## `cancelEnvelopeDelegation()`

```php
cancelEnvelopeDelegation($mailbox, $envelope_cancel_delegation_dto)
```

Cancel envelope delegation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_cancel_delegation_dto = new \DocStudio\Client\Model\EnvelopeCancelDelegationDTO(); // \DocStudio\Client\Model\EnvelopeCancelDelegationDTO

try {
    $apiInstance->cancelEnvelopeDelegation($mailbox, $envelope_cancel_delegation_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cancelEnvelopeDelegation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **envelope_cancel_delegation_dto** | [**\DocStudio\Client\Model\EnvelopeCancelDelegationDTO**](../Model/EnvelopeCancelDelegationDTO.md)|  | |

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

## `cancelEnvelopes()`

```php
cancelEnvelopes($mailbox, $env_cancellation_request_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Cancel envelopes

One envelope is processed synchronously and the response carries that envelope's uuid; several are handed to a background process and the response carries the process uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_cancellation_request_dto = new \DocStudio\Client\Model\EnvCancellationRequestDTO(); // \DocStudio\Client\Model\EnvCancellationRequestDTO

try {
    $result = $apiInstance->cancelEnvelopes($mailbox, $env_cancellation_request_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cancelEnvelopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_cancellation_request_dto** | [**\DocStudio\Client\Model\EnvCancellationRequestDTO**](../Model/EnvCancellationRequestDTO.md)|  | |

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

## `check()`

```php
check($mailbox, $env_dto): \DocStudio\Client\Model\ValidationResponseDTO
```

Check an envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_dto = new \DocStudio\Client\Model\EnvDTO(); // \DocStudio\Client\Model\EnvDTO

try {
    $result = $apiInstance->check($mailbox, $env_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->check: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_dto** | [**\DocStudio\Client\Model\EnvDTO**](../Model/EnvDTO.md)|  | |

### Return type

[**\DocStudio\Client\Model\ValidationResponseDTO**](../Model/ValidationResponseDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `checkEnvelopeHasActiveRole()`

```php
checkEnvelopeHasActiveRole($id, $mailbox)
```

Check envelope has active role

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of envelope
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->checkEnvelopeHasActiveRole($id, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->checkEnvelopeHasActiveRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of envelope | |
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

## `continueScenarioStep()`

```php
continueScenarioStep($id, $step_id, $mailbox): \DocStudio\Client\Model\SingleUuidDTO[]
```

Continue scenario flow with step

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$step_id = 'step_id_example'; // string | Step id
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->continueScenarioStep($id, $step_id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->continueScenarioStep: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **step_id** | **string**| Step id | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEnvelope()`

```php
createEnvelope($mailbox, $env_post_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Create draft envelope

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_post_dto = new \DocStudio\Client\Model\EnvPostDTO(); // \DocStudio\Client\Model\EnvPostDTO

try {
    $result = $apiInstance->createEnvelope($mailbox, $env_post_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->createEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_post_dto** | [**\DocStudio\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  | |

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

## `delegateEnvelopes()`

```php
delegateEnvelopes($mailbox, $env_delegation_dto): \DocStudio\Client\Model\SingleUuidDTO
```

Delegate envelopes

One envelope is processed synchronously and the response carries that envelope's uuid; several are handed to a background process and the response carries the process uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_delegation_dto = new \DocStudio\Client\Model\EnvDelegationDTO(); // \DocStudio\Client\Model\EnvDelegationDTO

try {
    $result = $apiInstance->delegateEnvelopes($mailbox, $env_delegation_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->delegateEnvelopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_delegation_dto** | [**\DocStudio\Client\Model\EnvDelegationDTO**](../Model/EnvDelegationDTO.md)|  | |

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

## `deleteDrafts()`

```php
deleteDrafts($mailbox, $bulk_envelope_action_dto)
```

Delete draft envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$bulk_envelope_action_dto = new \DocStudio\Client\Model\BulkEnvelopeActionDTO(); // \DocStudio\Client\Model\BulkEnvelopeActionDTO

try {
    $apiInstance->deleteDrafts($mailbox, $bulk_envelope_action_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->deleteDrafts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **bulk_envelope_action_dto** | [**\DocStudio\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  | |

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

## `deleteEnvelopeMetadata()`

```php
deleteEnvelopeMetadata($id, $mailbox, $key)
```

Delete envelope metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$key = array('key_example'); // string[]

try {
    $apiInstance->deleteEnvelopeMetadata($id, $mailbox, $key);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->deleteEnvelopeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **key** | [**string[]**](../Model/string.md)|  | [optional] |

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

## `getActiveRoles()`

```php
getActiveRoles($id, $mailbox): \DocStudio\Client\Model\SingleUuidDTO[]
```

Get active roles by Envelope UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of envelope to get active roles from
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getActiveRoles($id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getActiveRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of envelope to get active roles from | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvelopeByUuid()`

```php
getEnvelopeByUuid($envelope_uuid, $mailbox): \DocStudio\Client\Model\EnvelopeWithTemplateDTO
```

Retrieve envelope by UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = 'envelope_uuid_example'; // string | UUID of envelope to retrieve
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getEnvelopeByUuid($envelope_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **envelope_uuid** | **string**| UUID of envelope to retrieve | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |

### Return type

[**\DocStudio\Client\Model\EnvelopeWithTemplateDTO**](../Model/EnvelopeWithTemplateDTO.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentDetails()`

```php
getPaymentDetails($access_code): \DocStudio\Client\Model\PaymentDetails
```

Get payment details of a payment link for the checkout page

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_code = 'access_code_example'; // string | Access code from the payment link

try {
    $result = $apiInstance->getPaymentDetails($access_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getPaymentDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **access_code** | **string**| Access code from the payment link | |

### Return type

[**\DocStudio\Client\Model\PaymentDetails**](../Model/PaymentDetails.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaymentLink()`

```php
getPaymentLink($id, $mailbox, $payment_link_request): \DocStudio\Client\Model\PaymentLink
```

Get the public checkout link of a QR pay field; the role of the field must be completed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Envelope UUID
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$payment_link_request = new \DocStudio\Client\Model\PaymentLinkRequest(); // \DocStudio\Client\Model\PaymentLinkRequest

try {
    $result = $apiInstance->getPaymentLink($id, $mailbox, $payment_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getPaymentLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Envelope UUID | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **payment_link_request** | [**\DocStudio\Client\Model\PaymentLinkRequest**](../Model/PaymentLinkRequest.md)|  | |

### Return type

[**\DocStudio\Client\Model\PaymentLink**](../Model/PaymentLink.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `markEnvelopesAsRead()`

```php
markEnvelopesAsRead($mailbox, $mark_as_read_request)
```

Mark envelopes as read by mailbox

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$mark_as_read_request = new \DocStudio\Client\Model\MarkAsReadRequest(); // \DocStudio\Client\Model\MarkAsReadRequest

try {
    $apiInstance->markEnvelopesAsRead($mailbox, $mark_as_read_request);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->markEnvelopesAsRead: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **mark_as_read_request** | [**\DocStudio\Client\Model\MarkAsReadRequest**](../Model/MarkAsReadRequest.md)|  | |

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

## `numberToText()`

```php
numberToText($number_to_text_request): string
```

Convert a numeric amount to words

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$number_to_text_request = new \DocStudio\Client\Model\NumberToTextRequest(); // \DocStudio\Client\Model\NumberToTextRequest

try {
    $result = $apiInstance->numberToText($number_to_text_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->numberToText: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **number_to_text_request** | [**\DocStudio\Client\Model\NumberToTextRequest**](../Model/NumberToTextRequest.md)|  | |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recycleBin()`

```php
recycleBin($flag, $mailbox, $bulk_envelope_action_dto)
```

Archive envelopes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$flag = True; // bool
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$bulk_envelope_action_dto = new \DocStudio\Client\Model\BulkEnvelopeActionDTO(); // \DocStudio\Client\Model\BulkEnvelopeActionDTO

try {
    $apiInstance->recycleBin($flag, $mailbox, $bulk_envelope_action_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->recycleBin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **flag** | **bool**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **bulk_envelope_action_dto** | [**\DocStudio\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  | |

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

## `resendNotifications()`

```php
resendNotifications($mailbox, $report_envelope_request_dto)
```

Resend notifications for active roles

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$report_envelope_request_dto = new \DocStudio\Client\Model\ReportEnvelopeRequestDTO(); // \DocStudio\Client\Model\ReportEnvelopeRequestDTO

try {
    $apiInstance->resendNotifications($mailbox, $report_envelope_request_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->resendNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **report_envelope_request_dto** | [**\DocStudio\Client\Model\ReportEnvelopeRequestDTO**](../Model/ReportEnvelopeRequestDTO.md)|  | |

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

## `updateEnvelope()`

```php
updateEnvelope($mailbox, $env_put_dto)
```

Update envelope without sending

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$env_put_dto = new \DocStudio\Client\Model\EnvPutDTO(); // \DocStudio\Client\Model\EnvPutDTO

try {
    $apiInstance->updateEnvelope($mailbox, $env_put_dto);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateEnvelope: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **env_put_dto** | [**\DocStudio\Client\Model\EnvPutDTO**](../Model/EnvPutDTO.md)|  | |

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

## `updateEnvelopeMetadata()`

```php
updateEnvelopeMetadata($id, $mailbox, $request_body)
```

Update envelope metadata. Will be saved on the account level

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$request_body = array('key' => 'request_body_example'); // array<string,string>

try {
    $apiInstance->updateEnvelopeMetadata($id, $mailbox, $request_body);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateEnvelopeMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **request_body** | [**array<string,string>**](../Model/string.md)|  | |

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

## `updateFlow()`

```php
updateFlow($id, $mailbox, $flow_update)
```

Update recipient email/mailbox for not finished roles in a sent envelope

Sender can change addressee for any role whose invitation has not been accepted yet. Old invitation codes are revoked and new notifications are sent. Limited to one change per envelope per minute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = DocStudio\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new DocStudio\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of envelope
$mailbox = 'mailbox_example'; // string | Mailbox context, HTTP Header with current mailbox UUID
$flow_update = array(new \DocStudio\Client\Model\FlowUpdate()); // \DocStudio\Client\Model\FlowUpdate[]

try {
    $apiInstance->updateFlow($id, $mailbox, $flow_update);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateFlow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of envelope | |
| **mailbox** | **string**| Mailbox context, HTTP Header with current mailbox UUID | |
| **flow_update** | [**\DocStudio\Client\Model\FlowUpdate[]**](../Model/FlowUpdate.md)|  | |

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
