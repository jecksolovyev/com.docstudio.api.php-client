# # IntegrationRuleDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integration_rule_uuid** | **string** | Integration rule uuid | [optional]
**account_uuid** | **string** | Account uuid |
**mailbox_uuid** | **string** | Mailbox uuid | [optional]
**active** | **bool** | Integration rule status |
**in** | **bool** | Integration rule direction, true: in, false: out |
**name** | **string** | Integration rule name |
**template_uuid** | **string** | Template uuid |
**template_name** | **string** | Template name | [optional]
**version_uuid** | **string** | Version uuid |
**matching_pattern** | **string** | File matching pattern | [optional]
**matching_pattern_src** | **string** | File matching pattern source: name or content | [optional]
**naming_pattern** | **string** | File naming pattern | [optional]
**rule** | **string** | XSLT mapping | [optional]
**zip_structure_name** | **string** | The name of pre-saved zip structure in the template | [optional]
**exclude_zip_files** | **string** | Mask to exclude some files from ZIP. c - for signature/processing Certificate, p - for Printable version, a - for Audit trail | [optional]
**multiple_envelopes** | **bool** | Rule using for creating multiple envelopes | [optional]
**attributes** | **array<string,string>** | Some additional attributes (XPATH can be used as a value) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
