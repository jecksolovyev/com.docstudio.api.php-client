# # FullTemplateResponseDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Template UUID | [optional]
**name** | **string** | Template name | [optional]
**description** | **string** | Template description | [optional]
**data** | **string** | Template data | [optional]
**version** | **string** | Template version | [optional]
**data_created_at** | **\DateTime** | Template data create date | [optional]
**data_modified_at** | **\DateTime** | Template data update date | [optional]
**access** | **string** | Template access level | [optional]
**mailbox** | **string** | Template creator&#39;s mailbox | [optional]
**archive** | **bool** | Template archived | [optional]
**new_envelope_can_be_created** | **bool** | Returns a flag whether a new envelope can be created using this template | [optional]
**default_download_options** | **bool** | Returns a flag whether default download options should appear or only custom one | [optional]
**categories** | **string[]** | Template categories ids. Empty array if not within any category. | [optional]
**shared_categories** | **string[]** | Template shared categories ids. Absent if not within any shared category. | [optional]
**shared_to** | **string[]** | Mailboxes to which template is shared to | [optional]
**shared_to_mailbox_groups** | **string[]** | Mailbox groups to which template is shared to | [optional]
**logo_image_uuid** | **string** | UUID of the template logo image | [optional]
**created_at** | **\DateTime** | Template create date | [optional]
**modified_at** | **\DateTime** | Template update date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
