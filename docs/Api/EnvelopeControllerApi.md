# Swagger\Client\EnvelopeControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptUserPendingInvitations**](EnvelopeControllerApi.md#acceptuserpendinginvitations) | **POST** /api/v1/envelope/invitations | Accept user&#x27;s pending invitations
[**addEnvelopesIntoChain**](EnvelopeControllerApi.md#addenvelopesintochain) | **PUT** /api/v1/envelope/chain/{chainUuid} | Add envelopes into chain
[**archive**](EnvelopeControllerApi.md#archive) | **PATCH** /api/v1/envelope/archive/{flag} | Archive envelopes
[**cancelApprovalFlow**](EnvelopeControllerApi.md#cancelapprovalflow) | **DELETE** /api/v1/envelope/{envelopeUuid}/approval/{flowUuid} | Cancel envelope approval
[**cancelEnvelopeDelegation**](EnvelopeControllerApi.md#cancelenvelopedelegation) | **DELETE** /api/v1/envelope/delegate | Cancel envelope delegation
[**cancelEnvelopes**](EnvelopeControllerApi.md#cancelenvelopes) | **DELETE** /api/v1/envelope/cancel | Cancel envelopes
[**check**](EnvelopeControllerApi.md#check) | **POST** /api/v1/envelope/check | Check an envelope
[**checkUserHasInvitations**](EnvelopeControllerApi.md#checkuserhasinvitations) | **HEAD** /api/v1/envelope/invitations | Check user has pending invitations
[**cloneAttachment**](EnvelopeControllerApi.md#cloneattachment) | **POST** /api/v1/envelope/clone-attachment | Clone an existing attachment
[**confirmInvite**](EnvelopeControllerApi.md#confirminvite) | **POST** /api/v1/envelope/confirm-invite | Accept/confirm invitations
[**continueScenarioStep**](EnvelopeControllerApi.md#continuescenariostep) | **POST** /api/v1/envelope/{envelopeUuid}/scenario/{stepId} | Continue scenario flow with step
[**convertAttachmentToPdf**](EnvelopeControllerApi.md#convertattachmenttopdf) | **GET** /api/v1/envelope/attachment-as-pdf/{attachmentUuid} | Convert attachment to PDF
[**createAttachment**](EnvelopeControllerApi.md#createattachment) | **POST** /api/v1/envelope/attachment | Create/upload new attachment
[**createEnvelope**](EnvelopeControllerApi.md#createenvelope) | **POST** /api/v1/envelope | Create draft envelope
[**createEnvelopeComment**](EnvelopeControllerApi.md#createenvelopecomment) | **POST** /api/v1/envelope/{envelopeUuid}/comment | Create envelope comment thread
[**delegateEnvelopes**](EnvelopeControllerApi.md#delegateenvelopes) | **POST** /api/v1/envelope/delegate | Delegate envelopes
[**deleteDrafts**](EnvelopeControllerApi.md#deletedrafts) | **DELETE** /api/v1/envelope | Delete draft envelopes
[**deleteEnvelopeComment**](EnvelopeControllerApi.md#deleteenvelopecomment) | **DELETE** /api/v1/envelope/{envelopeUuid}/comment | Delete envelope comment in thread or the whole thread
[**downloadEnvelopeAttachment**](EnvelopeControllerApi.md#downloadenvelopeattachment) | **GET** /api/v1/envelope/{envelopeUuid}/attachment | Download envelope attachment
[**envelopeApproval**](EnvelopeControllerApi.md#envelopeapproval) | **PUT** /api/v1/envelope/{envelopeUuid}/approval/{flowUuid} | Approve or Reject envelope
[**envelopeApprovalHistory**](EnvelopeControllerApi.md#envelopeapprovalhistory) | **GET** /api/v1/envelope/{envelopeUuid}/approval-history | Get approval history
[**fill**](EnvelopeControllerApi.md#fill) | **PUT** /api/v1/envelope/fill | Fill envelope
[**getActiveRoles**](EnvelopeControllerApi.md#getactiveroles) | **GET** /api/v1/envelope/{uuid}/activeRoles | Get active roles by Envelope UUID
[**getApprovalFlow**](EnvelopeControllerApi.md#getapprovalflow) | **GET** /api/v1/envelope/{envelopeUuid}/approval/{flowUuid} | Get envelope approval
[**getChainEnvelopes**](EnvelopeControllerApi.md#getchainenvelopes) | **GET** /api/v1/envelope/chain/{chainUuid} | Get chain envelopes list
[**getDocumentPrintVersion**](EnvelopeControllerApi.md#getdocumentprintversion) | **GET** /api/v1/envelope/{envelopeUuid}/for-print | Get document PDF for printing
[**getDocumentsForSign**](EnvelopeControllerApi.md#getdocumentsforsign) | **POST** /api/v1/envelope/{envelopeUuid}/for-sign | PDFs and XMLs for signing
[**getEnvelopeByUuid**](EnvelopeControllerApi.md#getenvelopebyuuid) | **GET** /api/v1/envelope/{uuid} | Retrieve envelope by UUID
[**getEnvelopeComments**](EnvelopeControllerApi.md#getenvelopecomments) | **GET** /api/v1/envelope/{envelopeUuid}/comment | Get envelope comments for each document
[**getEnvelopeInviteAuthorized**](EnvelopeControllerApi.md#getenvelopeinviteauthorized) | **GET** /api/v1/envelope/invite-authorized-info | Get information about envelope by the invitation code (by already registered user)
[**getEnvelopeInviteUnauthorized**](EnvelopeControllerApi.md#getenvelopeinviteunauthorized) | **GET** /api/v1/envelope/invite-info | Get information about envelope by the invitation code (by unauthenticated user)
[**getEnvelopeSharedZip**](EnvelopeControllerApi.md#getenvelopesharedzip) | **GET** /api/v1/envelope/download-shared | Get shared zip archive
[**getEnvelopeZip**](EnvelopeControllerApi.md#getenvelopezip) | **GET** /api/v1/envelope/{envelopeUuid}/zip | Get envelope or document zip archive
[**getUserPendingInvitations**](EnvelopeControllerApi.md#getuserpendinginvitations) | **GET** /api/v1/envelope/invitations | Get user&#x27;s pending invitations
[**mergeEnvelopesIntoChain**](EnvelopeControllerApi.md#mergeenvelopesintochain) | **POST** /api/v1/envelope/chain | Merge envelopes into chain
[**quickSendExternalDocuments**](EnvelopeControllerApi.md#quicksendexternaldocuments) | **POST** /api/v1/envelope/quick-send | Quick send envelope with external documents only
[**removeEnvelopeFromChain**](EnvelopeControllerApi.md#removeenvelopefromchain) | **DELETE** /api/v1/envelope/{envelopeUuid}/chain | Remove envelope from chain
[**resendNotifications**](EnvelopeControllerApi.md#resendnotifications) | **POST** /api/v1/envelope/notify | Resend notifications for active roles
[**resolvedEnvelopeComment**](EnvelopeControllerApi.md#resolvedenvelopecomment) | **POST** /api/v1/envelope/{envelopeUuid}/resolve-comment | Set Resolved Flag for comment thread
[**send**](EnvelopeControllerApi.md#send) | **POST** /api/v1/envelope/send | Send envelope
[**sendByTemplateCode**](EnvelopeControllerApi.md#sendbytemplatecode) | **POST** /api/v1/envelope/send-by-share-code | Send envelope by template code
[**sendForApproval**](EnvelopeControllerApi.md#sendforapproval) | **PUT** /api/v1/envelope/send-for-approval | Send envelope for approval
[**shareEnvelopesByEmail**](EnvelopeControllerApi.md#shareenvelopesbyemail) | **POST** /api/v1/envelope/share | Share envelopes by email
[**sign**](EnvelopeControllerApi.md#sign) | **PUT** /api/v1/envelope/{envelopeUuid}/sign | Sign envelope documents
[**updateEnvelope**](EnvelopeControllerApi.md#updateenvelope) | **PUT** /api/v1/envelope | Update draft envelope
[**updateEnvelopeComment**](EnvelopeControllerApi.md#updateenvelopecomment) | **PUT** /api/v1/envelope/{envelopeUuid}/comment | Add/Update envelope comment in thread
[**updateEnvelopeCommentAccess**](EnvelopeControllerApi.md#updateenvelopecommentaccess) | **PUT** /api/v1/envelope/{envelopeUuid}/comment-access | Update envelope comment thread access level

# **acceptUserPendingInvitations**
> acceptUserPendingInvitations($body, $mailbox)

Accept user's pending invitations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->acceptUserPendingInvitations($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->acceptUserPendingInvitations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addEnvelopesIntoChain**
> addEnvelopesIntoChain($body, $mailbox, $chain_uuid)

Add envelopes into chain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$chain_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Chain UUID

try {
    $apiInstance->addEnvelopesIntoChain($body, $mailbox, $chain_uuid);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->addEnvelopesIntoChain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **chain_uuid** | [**string**](../Model/.md)| Chain UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **archive**
> archive($body, $mailbox, $flag)

Archive envelopes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BulkEnvelopeActionDTO(); // \Swagger\Client\Model\BulkEnvelopeActionDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$flag = true; // bool | 

try {
    $apiInstance->archive($body, $mailbox, $flag);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->archive: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **flag** | **bool**|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelApprovalFlow**
> cancelApprovalFlow($envelope_uuid, $flow_uuid, $mailbox)

Cancel envelope approval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope to approve
$flow_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Flow to approve
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->cancelApprovalFlow($envelope_uuid, $flow_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cancelApprovalFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope to approve |
 **flow_uuid** | [**string**](../Model/.md)| Flow to approve |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelEnvelopeDelegation**
> cancelEnvelopeDelegation($body, $mailbox)

Cancel envelope delegation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvCancelDelegationDTO(); // \Swagger\Client\Model\EnvCancelDelegationDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->cancelEnvelopeDelegation($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cancelEnvelopeDelegation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvCancelDelegationDTO**](../Model/EnvCancelDelegationDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelEnvelopes**
> cancelEnvelopes($body, $mailbox)

Cancel envelopes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvCancellationRequestDTO(); // \Swagger\Client\Model\EnvCancellationRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->cancelEnvelopes($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cancelEnvelopes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvCancellationRequestDTO**](../Model/EnvCancellationRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **check**
> \Swagger\Client\Model\ValidationResponseDTO check($body, $mailbox)

Check an envelope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvDTO(); // \Swagger\Client\Model\EnvDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->check($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->check: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvDTO**](../Model/EnvDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\ValidationResponseDTO**](../Model/ValidationResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkUserHasInvitations**
> checkUserHasInvitations()

Check user has pending invitations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->checkUserHasInvitations();
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->checkUserHasInvitations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneAttachment**
> \Swagger\Client\Model\UploadedAttachmentDTO cloneAttachment($attachment_uuid, $mailbox)

Clone an existing attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->cloneAttachment($attachment_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->cloneAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_uuid** | [**string**](../Model/.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\UploadedAttachmentDTO**](../Model/UploadedAttachmentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confirmInvite**
> confirmInvite($body)

Accept/confirm invitations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvelopeConfirmInviteDTO(); // \Swagger\Client\Model\EnvelopeConfirmInviteDTO | 

try {
    $apiInstance->confirmInvite($body);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->confirmInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvelopeConfirmInviteDTO**](../Model/EnvelopeConfirmInviteDTO.md)|  |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **continueScenarioStep**
> \Swagger\Client\Model\SingleUuidDTO[] continueScenarioStep($envelope_uuid, $step_id, $mailbox)

Continue scenario flow with step

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$step_id = "step_id_example"; // string | Step id
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->continueScenarioStep($envelope_uuid, $step_id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->continueScenarioStep: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |
 **step_id** | **string**| Step id |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **convertAttachmentToPdf**
> string convertAttachmentToPdf($attachment_uuid, $mailbox)

Convert attachment to PDF

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$attachment_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Attachment UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->convertAttachmentToPdf($attachment_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->convertAttachmentToPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **attachment_uuid** | [**string**](../Model/.md)| Attachment UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAttachment**
> \Swagger\Client\Model\UploadedAttachmentDTO createAttachment($mailbox, $file, $validate, $type)

Create/upload new attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$file = "file_example"; // string | 
$validate = "validate_example"; // string | 
$type = "type_example"; // string | 

try {
    $result = $apiInstance->createAttachment($mailbox, $file, $validate, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->createAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **file** | **string****string**|  | [optional]
 **validate** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UploadedAttachmentDTO**](../Model/UploadedAttachmentDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEnvelope**
> \Swagger\Client\Model\SingleUuidDTO createEnvelope($body, $mailbox)

Create draft envelope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvPostDTO(); // \Swagger\Client\Model\EnvPostDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->createEnvelope($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->createEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEnvelopeComment**
> \Swagger\Client\Model\CommentThreadDTO createEnvelopeComment($body, $mailbox, $envelope_uuid)

Create envelope comment thread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CommentPostDTO(); // \Swagger\Client\Model\CommentPostDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID

try {
    $result = $apiInstance->createEnvelopeComment($body, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->createEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CommentPostDTO**](../Model/CommentPostDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |

### Return type

[**\Swagger\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **delegateEnvelopes**
> delegateEnvelopes($body, $mailbox)

Delegate envelopes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvDelegationDTO(); // \Swagger\Client\Model\EnvDelegationDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->delegateEnvelopes($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->delegateEnvelopes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvDelegationDTO**](../Model/EnvDelegationDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDrafts**
> deleteDrafts($body, $mailbox)

Delete draft envelopes

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\BulkEnvelopeActionDTO(); // \Swagger\Client\Model\BulkEnvelopeActionDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteDrafts($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->deleteDrafts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\BulkEnvelopeActionDTO**](../Model/BulkEnvelopeActionDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEnvelopeComment**
> \Swagger\Client\Model\CommentThreadDTO deleteEnvelopeComment($envelope_uuid, $thread_uuid, $mailbox, $message_id)

Delete envelope comment in thread or the whole thread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$thread_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Thread UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$message_id = 56; // int | Message ID (optional)

try {
    $result = $apiInstance->deleteEnvelopeComment($envelope_uuid, $thread_uuid, $mailbox, $message_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->deleteEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |
 **thread_uuid** | [**string**](../Model/.md)| Thread UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **message_id** | **int**| Message ID (optional) | [optional]

### Return type

[**\Swagger\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadEnvelopeAttachment**
> string downloadEnvelopeAttachment($envelope_uuid, $attachment_uuid, $mailbox)

Download envelope attachment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$attachment_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Attachment UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->downloadEnvelopeAttachment($envelope_uuid, $attachment_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->downloadEnvelopeAttachment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |
 **attachment_uuid** | [**string**](../Model/.md)| Attachment UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **envelopeApproval**
> envelopeApproval($body, $mailbox, $envelope_uuid, $flow_uuid)

Approve or Reject envelope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ApprovalStatusDTO(); // \Swagger\Client\Model\ApprovalStatusDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope to approve
$flow_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Flow to approve

try {
    $apiInstance->envelopeApproval($body, $mailbox, $envelope_uuid, $flow_uuid);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->envelopeApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ApprovalStatusDTO**](../Model/ApprovalStatusDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **envelope_uuid** | [**string**](../Model/.md)| Envelope to approve |
 **flow_uuid** | [**string**](../Model/.md)| Flow to approve |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **envelopeApprovalHistory**
> \Swagger\Client\Model\EnvelopeApprovalHistoryDTO[] envelopeApprovalHistory($envelope_uuid, $mailbox)

Get approval history

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->envelopeApprovalHistory($envelope_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->envelopeApprovalHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\EnvelopeApprovalHistoryDTO[]**](../Model/EnvelopeApprovalHistoryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fill**
> fill($body, $mailbox)

Fill envelope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvPostDTO(); // \Swagger\Client\Model\EnvPostDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->fill($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->fill: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveRoles**
> \Swagger\Client\Model\SingleUuidDTO[] getActiveRoles($uuid, $mailbox)

Get active roles by Envelope UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of envelope to get active roles from
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getActiveRoles($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getActiveRoles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of envelope to get active roles from |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\SingleUuidDTO[]**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApprovalFlow**
> \Swagger\Client\Model\EnvelopeApprovalHistoryDTO getApprovalFlow($envelope_uuid, $flow_uuid, $mailbox)

Get envelope approval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope to approve
$flow_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Flow to approve
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getApprovalFlow($envelope_uuid, $flow_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getApprovalFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope to approve |
 **flow_uuid** | [**string**](../Model/.md)| Flow to approve |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\EnvelopeApprovalHistoryDTO**](../Model/EnvelopeApprovalHistoryDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getChainEnvelopes**
> \Swagger\Client\Model\ChainEnvelopeDTO[] getChainEnvelopes($chain_uuid, $mailbox)

Get chain envelopes list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chain_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Chain UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getChainEnvelopes($chain_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getChainEnvelopes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chain_uuid** | [**string**](../Model/.md)| Chain UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\ChainEnvelopeDTO[]**](../Model/ChainEnvelopeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentPrintVersion**
> string getDocumentPrintVersion($envelope_uuid, $document_id, $mailbox)

Get document PDF for printing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$document_id = "document_id_example"; // string | Document id
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getDocumentPrintVersion($envelope_uuid, $document_id, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getDocumentPrintVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |
 **document_id** | **string**| Document id |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentsForSign**
> \Swagger\Client\Model\DocumentForSigningDTO[] getDocumentsForSign($body, $mailbox, $envelope_uuid)

PDFs and XMLs for signing

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\DocumentsForSignRequestDTO(); // \Swagger\Client\Model\DocumentsForSignRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID

try {
    $result = $apiInstance->getDocumentsForSign($body, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getDocumentsForSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\DocumentsForSignRequestDTO**](../Model/DocumentsForSignRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |

### Return type

[**\Swagger\Client\Model\DocumentForSigningDTO[]**](../Model/DocumentForSigningDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvelopeByUuid**
> \Swagger\Client\Model\EnvelopeWithTemplateDTO getEnvelopeByUuid($uuid, $mailbox)

Retrieve envelope by UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of envelope to retrieve
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getEnvelopeByUuid($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeByUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of envelope to retrieve |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\EnvelopeWithTemplateDTO**](../Model/EnvelopeWithTemplateDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvelopeComments**
> \Swagger\Client\Model\DocumentCommentsDTO[] getEnvelopeComments($envelope_uuid, $mailbox)

Get envelope comments for each document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getEnvelopeComments($envelope_uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\DocumentCommentsDTO[]**](../Model/DocumentCommentsDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvelopeInviteAuthorized**
> \Swagger\Client\Model\InvitedEnvelopeInfoDTO getEnvelopeInviteAuthorized($code)

Get information about envelope by the invitation code (by already registered user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | Invitation code from email

try {
    $result = $apiInstance->getEnvelopeInviteAuthorized($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeInviteAuthorized: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Invitation code from email |

### Return type

[**\Swagger\Client\Model\InvitedEnvelopeInfoDTO**](../Model/InvitedEnvelopeInfoDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvelopeInviteUnauthorized**
> \Swagger\Client\Model\InvitedEnvelopeInfoDTO getEnvelopeInviteUnauthorized($code)

Get information about envelope by the invitation code (by unauthenticated user)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$code = "code_example"; // string | Invitation code from email

try {
    $result = $apiInstance->getEnvelopeInviteUnauthorized($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeInviteUnauthorized: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Invitation code from email |

### Return type

[**\Swagger\Client\Model\InvitedEnvelopeInfoDTO**](../Model/InvitedEnvelopeInfoDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvelopeSharedZip**
> string getEnvelopeSharedZip($code)

Get shared zip archive

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | Code for downloading

try {
    $result = $apiInstance->getEnvelopeSharedZip($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeSharedZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Code for downloading |

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEnvelopeZip**
> string getEnvelopeZip($envelope_uuid, $mailbox, $document_id, $exclude_files)

Get envelope or document zip archive

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$document_id = "document_id_example"; // string | Document id
$exclude_files = "exclude_files_example"; // string | Mask to exclude some files. c - for signature/processing Certificate, p - for Printable version, a - for Audit trail

try {
    $result = $apiInstance->getEnvelopeZip($envelope_uuid, $mailbox, $document_id, $exclude_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getEnvelopeZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **document_id** | **string**| Document id | [optional]
 **exclude_files** | **string**| Mask to exclude some files. c - for signature/processing Certificate, p - for Printable version, a - for Audit trail | [optional]

### Return type

**string**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserPendingInvitations**
> \Swagger\Client\Model\PageDTOEnvelopeToMailboxDTO getUserPendingInvitations($offset, $limit)

Get user's pending invitations

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int | Offset, how much envelopes to skip
$limit = 25; // int | Limit, how much envelopes to retrieve

try {
    $result = $apiInstance->getUserPendingInvitations($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->getUserPendingInvitations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Offset, how much envelopes to skip | [optional] [default to 0]
 **limit** | **int**| Limit, how much envelopes to retrieve | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\PageDTOEnvelopeToMailboxDTO**](../Model/PageDTOEnvelopeToMailboxDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeEnvelopesIntoChain**
> \Swagger\Client\Model\SingleUuidDTO mergeEnvelopesIntoChain($body, $mailbox)

Merge envelopes into chain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array("body_example"); // string[] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->mergeEnvelopesIntoChain($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->mergeEnvelopesIntoChain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string[]**](../Model/string.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **quickSendExternalDocuments**
> \Swagger\Client\Model\SingleUuidDTO quickSendExternalDocuments($files, $data, $mailbox)

Quick send envelope with external documents only

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$files = array("files_example"); // string[] | 
$data = new \Swagger\Client\Model\QuickSendDTO(); // \Swagger\Client\Model\QuickSendDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->quickSendExternalDocuments($files, $data, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->quickSendExternalDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **files** | [**string[]**](../Model/string.md)|  |
 **data** | [**\Swagger\Client\Model\QuickSendDTO**](../Model/.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeEnvelopeFromChain**
> removeEnvelopeFromChain($envelope_uuid, $mailbox)

Remove envelope from chain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->removeEnvelopeFromChain($envelope_uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->removeEnvelopeFromChain: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resendNotifications**
> resendNotifications($body, $mailbox)

Resend notifications for active roles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ReportEnvelopeRequestDTO(); // \Swagger\Client\Model\ReportEnvelopeRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->resendNotifications($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->resendNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ReportEnvelopeRequestDTO**](../Model/ReportEnvelopeRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resolvedEnvelopeComment**
> resolvedEnvelopeComment($body, $mailbox, $envelope_uuid)

Set Resolved Flag for comment thread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ResolveCommentThreadDTO(); // \Swagger\Client\Model\ResolveCommentThreadDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID

try {
    $apiInstance->resolvedEnvelopeComment($body, $mailbox, $envelope_uuid);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->resolvedEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ResolveCommentThreadDTO**](../Model/ResolveCommentThreadDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **send**
> \Swagger\Client\Model\SingleUuidDTO send($body, $mailbox)

Send envelope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvPostDTO(); // \Swagger\Client\Model\EnvPostDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->send($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->send: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendByTemplateCode**
> \Swagger\Client\Model\SingleUuidDTO sendByTemplateCode($body)

Send envelope by template code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\SendEnvByCodeDTO(); // \Swagger\Client\Model\SendEnvByCodeDTO | 

try {
    $result = $apiInstance->sendByTemplateCode($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->sendByTemplateCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\SendEnvByCodeDTO**](../Model/SendEnvByCodeDTO.md)|  |

### Return type

[**\Swagger\Client\Model\SingleUuidDTO**](../Model/SingleUuidDTO.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendForApproval**
> sendForApproval($body, $mailbox)

Send envelope for approval

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvelopeApprovalRequestDTO(); // \Swagger\Client\Model\EnvelopeApprovalRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->sendForApproval($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->sendForApproval: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvelopeApprovalRequestDTO**](../Model/EnvelopeApprovalRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **shareEnvelopesByEmail**
> shareEnvelopesByEmail($body, $mailbox)

Share envelopes by email

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvelopeSharedArchiveRequestDTO(); // \Swagger\Client\Model\EnvelopeSharedArchiveRequestDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->shareEnvelopesByEmail($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->shareEnvelopesByEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvelopeSharedArchiveRequestDTO**](../Model/EnvelopeSharedArchiveRequestDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sign**
> sign($body, $mailbox, $envelope_uuid)

Sign envelope documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\EnvelopeDocumentSignaturesDTO()); // \Swagger\Client\Model\EnvelopeDocumentSignaturesDTO[] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope to update

try {
    $apiInstance->sign($body, $mailbox, $envelope_uuid);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->sign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvelopeDocumentSignaturesDTO[]**](../Model/EnvelopeDocumentSignaturesDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **envelope_uuid** | [**string**](../Model/.md)| Envelope to update |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEnvelope**
> updateEnvelope($body, $mailbox)

Update draft envelope

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\EnvPostDTO(); // \Swagger\Client\Model\EnvPostDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->updateEnvelope($body, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateEnvelope: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\EnvPostDTO**](../Model/EnvPostDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEnvelopeComment**
> \Swagger\Client\Model\CommentThreadDTO updateEnvelopeComment($body, $mailbox, $envelope_uuid)

Add/Update envelope comment in thread

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CommentPutDTO(); // \Swagger\Client\Model\CommentPutDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID

try {
    $result = $apiInstance->updateEnvelopeComment($body, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateEnvelopeComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CommentPutDTO**](../Model/CommentPutDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |

### Return type

[**\Swagger\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEnvelopeCommentAccess**
> \Swagger\Client\Model\CommentThreadDTO updateEnvelopeCommentAccess($body, $mailbox, $envelope_uuid)

Update envelope comment thread access level

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\EnvelopeControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CommentAccessDTO(); // \Swagger\Client\Model\CommentAccessDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID

try {
    $result = $apiInstance->updateEnvelopeCommentAccess($body, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvelopeControllerApi->updateEnvelopeCommentAccess: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CommentAccessDTO**](../Model/CommentAccessDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID |

### Return type

[**\Swagger\Client\Model\CommentThreadDTO**](../Model/CommentThreadDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

