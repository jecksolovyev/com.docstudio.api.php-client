# Swagger\Client\TemplateControllerApi

All URIs are relative to *https://api.docstudio.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**archiveTemplate**](TemplateControllerApi.md#archivetemplate) | **PATCH** /api/v1/template/{uuid}/archive | Make template archived
[**callClone**](TemplateControllerApi.md#callclone) | **POST** /api/v1/template/{uuid}/clone | Clone template
[**checkTemplateExistsByUuid**](TemplateControllerApi.md#checktemplateexistsbyuuid) | **HEAD** /api/v1/template/{uuid} | Check template exists by UUID
[**create**](TemplateControllerApi.md#create) | **POST** /api/v1/template | Create new template
[**deleteShareCode**](TemplateControllerApi.md#deletesharecode) | **DELETE** /api/v1/template/{uuid}/share-code | Delete share code for template
[**downloadTemplateImage**](TemplateControllerApi.md#downloadtemplateimage) | **GET** /api/v1/template/{uuid}/image | Download template image
[**getRecentlyUsedTemplates**](TemplateControllerApi.md#getrecentlyusedtemplates) | **GET** /api/v1/template/recently-used | Get up to 10 recently used templates
[**getRecommendedTemplates**](TemplateControllerApi.md#getrecommendedtemplates) | **GET** /api/v1/template/recommended | Get up to 4 recommended templates
[**getShareCode**](TemplateControllerApi.md#getsharecode) | **GET** /api/v1/template/{uuid}/share-code | Retrieve share code for template
[**getTemplateByShareCode**](TemplateControllerApi.md#gettemplatebysharecode) | **GET** /api/v1/template/by-share-code/{code} | Retrieve template by share code
[**getTemplateByUuid**](TemplateControllerApi.md#gettemplatebyuuid) | **GET** /api/v1/template/{uuid} | Retrieve template by UUID
[**getTemplateVersionsByUuid**](TemplateControllerApi.md#gettemplateversionsbyuuid) | **GET** /api/v1/template/{uuid}/versions | Retrieve template versions by UUID
[**searchTemplates**](TemplateControllerApi.md#searchtemplates) | **GET** /api/v1/template | Get paged templates list
[**update**](TemplateControllerApi.md#update) | **PUT** /api/v1/template/{uuid} | Update template in DB. Category in template could be null.
[**updateCategories**](TemplateControllerApi.md#updatecategories) | **PATCH** /api/v1/template/{uuid}/categories | Update categories in template.
[**updateName**](TemplateControllerApi.md#updatename) | **PATCH** /api/v1/template/{uuid}/name | Update name in template.
[**uploadImage**](TemplateControllerApi.md#uploadimage) | **POST** /api/v1/template/image | Upload new image
[**validateTemplate**](TemplateControllerApi.md#validatetemplate) | **GET** /api/v1/template/validate | Validate template by UUID or version

# **archiveTemplate**
> archiveTemplate($uuid, $mailbox)

Make template archived

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Template UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->archiveTemplate($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->archiveTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| Template UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **callClone**
> \Swagger\Client\Model\FullTemplateResponseDTO callClone($uuid, $mailbox)

Clone template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Template UUID to clone
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->callClone($uuid, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->callClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| Template UUID to clone |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkTemplateExistsByUuid**
> checkTemplateExistsByUuid($uuid, $mailbox)

Check template exists by UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of template to retrieve
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->checkTemplateExistsByUuid($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->checkTemplateExistsByUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of template to retrieve |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **create**
> \Swagger\Client\Model\FullTemplateResponseDTO create($body, $mailbox)

Create new template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TemplateCreateDTO(); // \Swagger\Client\Model\TemplateCreateDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->create($body, $mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TemplateCreateDTO**](../Model/TemplateCreateDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteShareCode**
> deleteShareCode($uuid, $mailbox)

Delete share code for template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of template
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $apiInstance->deleteShareCode($uuid, $mailbox);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->deleteShareCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of template |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadTemplateImage**
> string[] downloadTemplateImage($uuid, $image_uuid, $mailbox, $envelope_uuid)

Download template image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Template UUID
$image_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Image UUID
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$envelope_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Envelope UUID

try {
    $result = $apiInstance->downloadTemplateImage($uuid, $image_uuid, $mailbox, $envelope_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->downloadTemplateImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| Template UUID |
 **image_uuid** | [**string**](../Model/.md)| Image UUID |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **envelope_uuid** | [**string**](../Model/.md)| Envelope UUID | [optional]

### Return type

**string[]**

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecentlyUsedTemplates**
> \Swagger\Client\Model\RecentlyUsedTemplateResponseDTO[] getRecentlyUsedTemplates($mailbox)

Get up to 10 recently used templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID

try {
    $result = $apiInstance->getRecentlyUsedTemplates($mailbox);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getRecentlyUsedTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |

### Return type

[**\Swagger\Client\Model\RecentlyUsedTemplateResponseDTO[]**](../Model/RecentlyUsedTemplateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getRecommendedTemplates**
> \Swagger\Client\Model\RecommendedTemplateResponseDTO[] getRecommendedTemplates()

Get up to 4 recommended templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRecommendedTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getRecommendedTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\RecommendedTemplateResponseDTO[]**](../Model/RecommendedTemplateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getShareCode**
> \Swagger\Client\Model\SharedCodeDTO getShareCode($uuid, $mailbox, $generate)

Retrieve share code for template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of template
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$generate = true; // bool | Code has to be re-generated if exists

try {
    $result = $apiInstance->getShareCode($uuid, $mailbox, $generate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getShareCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of template |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **generate** | **bool**| Code has to be re-generated if exists | [optional]

### Return type

[**\Swagger\Client\Model\SharedCodeDTO**](../Model/SharedCodeDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateByShareCode**
> \Swagger\Client\Model\FullTemplateResponseDTO getTemplateByShareCode($code)

Retrieve template by share code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = "code_example"; // string | Share code of template

try {
    $result = $apiInstance->getTemplateByShareCode($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getTemplateByShareCode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **code** | **string**| Share code of template |

### Return type

[**\Swagger\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateByUuid**
> \Swagger\Client\Model\FullTemplateResponseDTO getTemplateByUuid($uuid, $mailbox, $template_version)

Retrieve template by UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of template to retrieve
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_version = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of version

try {
    $result = $apiInstance->getTemplateByUuid($uuid, $mailbox, $template_version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getTemplateByUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of template to retrieve |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **template_version** | [**string**](../Model/.md)| UUID of version | [optional]

### Return type

[**\Swagger\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateVersionsByUuid**
> \Swagger\Client\Model\PageDTODataMap getTemplateVersionsByUuid($uuid, $mailbox, $offset, $limit, $version_uuid)

Retrieve template versions by UUID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of template
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000
$version_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of version, only this one will be returned

try {
    $result = $apiInstance->getTemplateVersionsByUuid($uuid, $mailbox, $offset, $limit, $version_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->getTemplateVersionsByUuid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **uuid** | [**string**](../Model/.md)| UUID of template |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]
 **version_uuid** | [**string**](../Model/.md)| UUID of version, only this one will be returned | [optional]

### Return type

[**\Swagger\Client\Model\PageDTODataMap**](../Model/PageDTODataMap.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchTemplates**
> \Swagger\Client\Model\PageDTOSearchTemplateDTO searchTemplates($mailbox, $level, $keyword, $category, $extended, $offset, $limit)

Get paged templates list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$level = "pub"; // string | Template access level, 'pub' by default.
$keyword = "keyword_example"; // string | Keyword to search template by or template UUID
$category = 789; // int | Category id to search template in
$extended = false; // bool | Add extended info to each template (access, account, categories)
$offset = 0; // int | Offset records
$limit = 25; // int | Limit records, max is 1000

try {
    $result = $apiInstance->searchTemplates($mailbox, $level, $keyword, $category, $extended, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->searchTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **level** | **string**| Template access level, &#x27;pub&#x27; by default. | [optional] [default to pub]
 **keyword** | **string**| Keyword to search template by or template UUID | [optional]
 **category** | **int**| Category id to search template in | [optional]
 **extended** | **bool**| Add extended info to each template (access, account, categories) | [optional] [default to false]
 **offset** | **int**| Offset records | [optional] [default to 0]
 **limit** | **int**| Limit records, max is 1000 | [optional] [default to 25]

### Return type

[**\Swagger\Client\Model\PageDTOSearchTemplateDTO**](../Model/PageDTOSearchTemplateDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **update**
> \Swagger\Client\Model\FullTemplateResponseDTO update($body, $mailbox, $uuid)

Update template in DB. Category in template could be null.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\TemplateCreateDTO(); // \Swagger\Client\Model\TemplateCreateDTO | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Template uuid

try {
    $result = $apiInstance->update($body, $mailbox, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->update: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TemplateCreateDTO**](../Model/TemplateCreateDTO.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **uuid** | [**string**](../Model/.md)| Template uuid |

### Return type

[**\Swagger\Client\Model\FullTemplateResponseDTO**](../Model/FullTemplateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCategories**
> updateCategories($body, $mailbox, $uuid)

Update categories in template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(56); // int[] | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Template UUID

try {
    $apiInstance->updateCategories($body, $mailbox, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->updateCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**int[]**](../Model/int.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **uuid** | [**string**](../Model/.md)| Template UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateName**
> updateName($body, $mailbox, $uuid)

Update name in template.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Template UUID

try {
    $apiInstance->updateName($body, $mailbox, $uuid);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->updateName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)|  |
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **uuid** | [**string**](../Model/.md)| Template UUID |

### Return type

void (empty response body)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadImage**
> \Swagger\Client\Model\UploadedImageDTO uploadImage($mailbox, $file)

Upload new image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$file = "file_example"; // string | 

try {
    $result = $apiInstance->uploadImage($mailbox, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->uploadImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **file** | **string****string**|  | [optional]

### Return type

[**\Swagger\Client\Model\UploadedImageDTO**](../Model/UploadedImageDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **validateTemplate**
> \Swagger\Client\Model\TemplateValidateResponseDTO validateTemplate($mailbox, $template_uuid, $version_uuid)

Validate template by UUID or version

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: Authorization
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\TemplateControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mailbox = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Mailbox context, HTTP Header with current mailbox UUID
$template_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | UUID of template
$version_uuid = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Version of template

try {
    $result = $apiInstance->validateTemplate($mailbox, $template_uuid, $version_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateControllerApi->validateTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mailbox** | [**string**](../Model/.md)| Mailbox context, HTTP Header with current mailbox UUID |
 **template_uuid** | [**string**](../Model/.md)| UUID of template | [optional]
 **version_uuid** | [**string**](../Model/.md)| Version of template | [optional]

### Return type

[**\Swagger\Client\Model\TemplateValidateResponseDTO**](../Model/TemplateValidateResponseDTO.md)

### Authorization

[Authorization](../../README.md#Authorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

