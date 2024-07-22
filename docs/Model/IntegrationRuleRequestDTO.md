# # IntegrationRuleRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mailbox_uuid** | **string** | UUID of mailbox for applying rule for |
**template_uuid** | **string** | UUID of the template to use for generated envelope |
**version_uuid** | **string** | UUID of template version |
**in** | **bool** | Rule direction, true &#x3D; IN, false &#x3D; OUT | [optional]
**naming_rule** | **string** | Naming pattern rule. Tokens allowed: {mailboxUuid}, {envelopeUuid}, {randomNumber}, {templateUuid}, {date yyyy-MM-dd_HH-mm-ss}. Forbidden characters are: /:?*&lt;&gt;| | [optional]
**map** | **string** | XSLT map to use for transformation |
**source** | **string** | XML source to convert |
**multiple_envelopes** | **bool** | Multiple envelopes allowed | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
