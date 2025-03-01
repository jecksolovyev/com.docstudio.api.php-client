# # SettingsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**build_version** | **string** | The version of the build | [optional]
**application_name** | **string** | The name of the platform | [optional]
**theme** | **string** | The name of the UI theme | [optional]
**support_chat_provider** | **string** | Support live chat provider name | [optional]
**hide_unauthorized_functions** | **bool** | Hide or disable unauthorized functions | [optional]
**pod_name** | **string** | Kubernetes Pod Name | [optional]
**links** | [**\DocStudio\Client\Model\AppLinks**](AppLinks.md) |  | [optional]
**locales** | [**\DocStudio\Client\Model\AppLocales**](AppLocales.md) |  | [optional]
**test_mode** | **bool** | Is Test Mode enabled? | [optional]
**envelope** | [**\DocStudio\Client\Model\EnvelopeRestrictions**](EnvelopeRestrictions.md) |  | [optional]
**template** | [**\DocStudio\Client\Model\TemplateRestriction**](TemplateRestriction.md) |  | [optional]
**user** | [**\DocStudio\Client\Model\UserProperties**](UserProperties.md) |  | [optional]
**page_scripts** | [**\DocStudio\Client\Model\AppPageScripts**](AppPageScripts.md) |  | [optional]
**chunk_upload** | [**\DocStudio\Client\Model\ChunkUploadProps**](ChunkUploadProps.md) |  | [optional]
**crypto** | [**\DocStudio\Client\Model\CryptoProperties**](CryptoProperties.md) |  | [optional]
**logos_properties** | [**\DocStudio\Client\Model\LogosProperties**](LogosProperties.md) |  | [optional]
**email_properties** | [**\DocStudio\Client\Model\EmailProperties**](EmailProperties.md) |  | [optional]
**billing** | [**\DocStudio\Client\Model\BillingProperties**](BillingProperties.md) |  | [optional]
**sso** | [**\DocStudio\Client\Model\SsoProperties**](SsoProperties.md) |  | [optional]
**geolocation** | [**\DocStudio\Client\Model\GeolocationProperties**](GeolocationProperties.md) |  | [optional]
**google_maps_api_key** | **string** | Google maps api key | [optional]
**pdf** | [**\DocStudio\Client\Model\PdfPropertiesDTO**](PdfPropertiesDTO.md) |  | [optional]
**mailbox** | [**\DocStudio\Client\Model\MailboxProperties**](MailboxProperties.md) |  | [optional]
**exchange_protocols** | [**array<string,\DocStudio\Client\Model\ExchangeProps>**](ExchangeProps.md) | Available exchange protocols | [optional]
**info_links** | [**\DocStudio\Client\Model\ExternalLinkShortResponseDTO[]**](ExternalLinkShortResponseDTO.md) | Info menu links | [optional]
**supported_barcodes** | [**\DocStudio\Client\Model\SupportedBarcodeDTO[]**](SupportedBarcodeDTO.md) | Supported barcodes | [optional]
**default_envelope_list_columns** | [**\DocStudio\Client\Model\DefaultEnvelopeListColumns**](DefaultEnvelopeListColumns.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
