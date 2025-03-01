# # User2AccountWithMailboxesDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Account UUID | [optional]
**name** | **string** | Account Name | [optional]
**system** | **bool** |  | [optional]
**allow_microsoft_office_viewer** | **bool** | Allow envelope attachments public access for MS Office Viewer | [optional]
**company** | **bool** | Is account registered as a company? | [optional]
**permissions** | **int[]** | Permissions for current user | [optional]
**mailboxes** | [**\DocStudio\Client\Model\MailboxProfileDTO[]**](MailboxProfileDTO.md) | Mailboxes linked to this account | [optional]
**document_sharing_providers** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
