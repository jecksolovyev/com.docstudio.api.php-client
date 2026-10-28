# IntegrationRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_uuid** | **string** | Account uuid |
**active** | **bool** | Integration rule status |
**attributes** | **array<string,string>** | Some additional attributes (XPATH can be used as a value) | [optional]
**exclude_zip_files** | **string** | Mask to exclude some files from ZIP. c - for signature/processing Certificate, p - for Printable version, a - for Audit trail | [optional]
**in** | **bool** | Integration rule direction, true: in, false: out |
**integration_rule_uuid** | **string** | Integration rule uuid | [optional]
**mailbox_uuid** | **string** | Mailbox uuid | [optional]
**matching_pattern** | **string** | File matching pattern | [optional]
**matching_pattern_src** | **string** | File matching pattern source: name or content | [optional]
**multiple_envelopes** | **bool** | Rule using for creating multiple envelopes | [optional]
**name** | **string** | Integration rule name |
**naming_pattern** | **string** | File naming pattern | [optional]
**rule** | **string** | XSLT mapping | [optional]
**template_name** | **string** | Template name | [optional]
**template_uuid** | **string** | Template uuid |
**validation_files** | [**\DocStudio\Client\Model\IntegrationRuleValidationFile[]**](IntegrationRuleValidationFile.md) |  | [optional]
**version_uuid** | **string** | Version uuid |
**zip_structure_name** | **string** | The name of pre-saved zip structure in the template | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
