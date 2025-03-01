# # AccountDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Account UUID | [optional]
**name** | **string** | Account Name |
**inn** | **string** | Account TAX number | [optional]
**created_at** | **\DateTime** | Account creation date | [optional]
**modified_at** | **\DateTime** | Account last modification date | [optional]
**mailboxes** | [**\DocStudio\Client\Model\MailboxSimpleDTO[]**](MailboxSimpleDTO.md) |  | [optional]
**users** | [**\DocStudio\Client\Model\AccountUserDTO[]**](AccountUserDTO.md) |  | [optional]
**logo** | **string** | Account logo in base64 format (svg, png, jpeg) | [optional]
**brand** | **string** | Account brand logo in base64 format (svg, png, jpeg) | [optional]
**currency** | **string** | Account currency for billing purposes | [optional]
**timezone** | **string** | Account timezone for billing purposes | [optional]
**allow_create_personal_mailbox_with_role** | **string** | Create personal mailbox for self-registered corporate user with role UUID | [optional]
**allow_microsoft_office_viewer** | **bool** | Allow envelope attachments public access for MS Office Viewer | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
