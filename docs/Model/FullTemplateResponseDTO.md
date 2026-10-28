# FullTemplateResponseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access** | **string** | Template access level | [optional]
**account** | **string** | Template creator&#39;s account | [optional]
**archive** | **bool** | Template archived | [optional]
**categories** | **string[]** | Template categories ids. Empty array if not within any category. | [optional]
**created_at** | **\DateTime** | Template create date | [optional]
**data** | **string** | Template data | [optional]
**data_created_at** | **\DateTime** | Template data create date | [optional]
**data_modified_at** | **\DateTime** | Template data update date | [optional]
**default_download_options** | **bool** | Returns a flag whether default download options should appear or only custom one | [optional]
**description** | **string** | Template description | [optional]
**draft_initialization_required** | **bool** | For proper envelope initialization a draft must be created at once | [optional]
**logo_image_uuid** | **string** | UUID of the template logo image | [optional]
**mailbox** | **string** | Template creator&#39;s mailbox | [optional]
**modified_at** | **\DateTime** | Template update date | [optional]
**name** | **string** | Template name | [optional]
**new_envelope_can_be_created** | **bool** | Returns a flag whether a new envelope can be created using this template | [optional]
**publicly_shared** | **bool** | Returns a flag indicating whether the template is publicly accessible by code | [optional]
**shared_categories** | **string[]** | Template shared categories ids. Absent if not within any shared category. | [optional]
**shared_to** | **string[]** | Mailboxes to which template is shared to | [optional]
**shared_to_mailbox_groups** | **string[]** | Mailbox groups to which template is shared to | [optional]
**signature_algorithm** | **string** | Signature algorithm | [optional]
**signature_container** | **string** | Signature container | [optional]
**uuid** | **string** | Template UUID | [optional]
**version** | **string** | Template version | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
