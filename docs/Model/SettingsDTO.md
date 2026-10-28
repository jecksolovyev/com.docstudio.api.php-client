# SettingsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_name** | **string** | The name of the platform | [optional]
**billing** | [**\DocStudio\Client\Model\BillingProperties**](BillingProperties.md) | Billing properties | [optional]
**build_version** | **string** | The version of the build | [optional]
**chunk_upload** | [**\DocStudio\Client\Model\ChunkUploadProps**](ChunkUploadProps.md) | Chunk Upload properties | [optional]
**crypto** | [**\DocStudio\Client\Model\CryptoProperties**](CryptoProperties.md) | Signature Providers and Region | [optional]
**default_envelope_list_columns** | [**\DocStudio\Client\Model\DefaultEnvelopeListColumns**](DefaultEnvelopeListColumns.md) | Default envelope list columns | [optional]
**email_properties** | [**\DocStudio\Client\Model\EmailProperties**](EmailProperties.md) | E-mails for support | [optional]
**envelope** | [**\DocStudio\Client\Model\EnvelopeRestrictions**](EnvelopeRestrictions.md) | Envelope Restrictions | [optional]
**exchange** | [**\DocStudio\Client\Model\ExchangeProperties**](ExchangeProperties.md) | Common properties for exchange protocols | [optional]
**exchange_protocols** | [**array<string,\DocStudio\Client\Model\ExchangeProtocolProps>**](ExchangeProtocolProps.md) | Available exchange protocols | [optional]
**geolocation** | [**\DocStudio\Client\Model\GeolocationProperties**](GeolocationProperties.md) | Geolocation properties | [optional]
**google_maps_api_key** | **string** | Google maps api key | [optional]
**hide_unauthorized_functions** | **bool** | Hide or disable unauthorized functions | [optional]
**info_links** | [**\DocStudio\Client\Model\ExternalLinkShortResponseDTO[]**](ExternalLinkShortResponseDTO.md) | Info menu links | [optional]
**integrations** | [**\DocStudio\Client\Model\ConnectorProperties**](ConnectorProperties.md) | Available integrations | [optional]
**links** | [**\DocStudio\Client\Model\AppLinks**](AppLinks.md) | Application Links | [optional]
**locales** | [**\DocStudio\Client\Model\AppLocales**](AppLocales.md) | Supported locales | [optional]
**logos_properties** | [**\DocStudio\Client\Model\LogosProperties**](LogosProperties.md) | Logos properties | [optional]
**mailbox** | [**\DocStudio\Client\Model\MailboxProperties**](MailboxProperties.md) | Mailbox properties | [optional]
**oauth_url** | **string** | OAuth service url | [optional]
**page_scripts** | [**\DocStudio\Client\Model\AppPageScripts**](AppPageScripts.md) | Additional JS scripts | [optional]
**pdf** | [**\DocStudio\Client\Model\PdfPropertiesDTO**](PdfPropertiesDTO.md) | PDF properties | [optional]
**pod_name** | **string** | Kubernetes Pod Name | [optional]
**sso** | [**\DocStudio\Client\Model\SsoProperties**](SsoProperties.md) | SSO properties | [optional]
**support_chat_provider** | **string** | Support live chat provider name | [optional]
**supported_barcodes** | [**\DocStudio\Client\Model\SupportedBarcodeDTO[]**](SupportedBarcodeDTO.md) | Supported barcodes | [optional]
**template** | [**\DocStudio\Client\Model\TemplateRestriction**](TemplateRestriction.md) | Template Restrictions | [optional]
**test_mode** | **bool** | Is Test Mode enabled? | [optional]
**theme** | **string** | The name of the UI theme | [optional]
**user** | [**\DocStudio\Client\Model\UserProperties**](UserProperties.md) | User settings | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
