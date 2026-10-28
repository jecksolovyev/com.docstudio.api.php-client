# UserInvitationDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allow_microsoft_office_viewer** | **bool** | Allow envelope attachments public access for MS Office Viewer | [optional]
**code** | **string** | Invitation code | [optional]
**company** | **bool** | Is account registered as a company? | [optional]
**corporate_profile_edit_restricted** | **bool** | Is profile editing restricted for corporate users? | [optional]
**document_sharing_providers** | **string[]** |  | [optional]
**hide_community_templates** | **bool** | Hide community templates for account users | [optional]
**hide_official_templates** | **bool** | Hide official templates for account users | [optional]
**mailboxes** | [**\DocStudio\Client\Model\MailboxProfileDTO[]**](MailboxProfileDTO.md) | Mailboxes user invited to | [optional]
**mailboxes_count** | **int** | Count of mailboxes user has access to | [optional]
**mfa_enabled** | **bool** | Is Multi-Factor Authentication enabled | [optional]
**name** | **string** | Account Name | [optional]
**permissions** | **int[]** | Permissions for current user | [optional]
**recipient_experience** | [**\DocStudio\Client\Model\RecipientExperience**](RecipientExperience.md) | Default recipient experience for account emails and recipient interface | [optional]
**system** | **bool** |  | [optional]
**uuid** | **string** | Account UUID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
