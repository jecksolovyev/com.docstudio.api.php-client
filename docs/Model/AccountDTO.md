# AccountDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ai_assistant_restricted** | **bool** | Restrict AI Assistant usage for account users | [optional]
**allow_create_personal_mailbox_with_role** | **string** | Create personal mailbox for self-registered corporate user with role UUID | [optional]
**allow_microsoft_office_viewer** | **bool** | Allow envelope attachments public access for MS Office Viewer | [optional]
**brand** | **string** | Account brand logo in base64 format (svg, png, jpeg) | [optional]
**corporate_profile_edit_restricted** | **bool** | Is profile editing restricted for corporate users? | [optional]
**created_at** | **\DateTime** | Account creation date | [optional]
**currency** | **string** | Account currency for billing purposes | [optional]
**hide_community_templates** | **bool** | Hide community templates for account users | [optional]
**hide_official_templates** | **bool** | Hide official templates for account users | [optional]
**hide_sender_email_in_notifications** | **bool** | Hide sender&#39;s email as reply-to from notifications | [optional]
**inn** | **string** | Account TAX number | [optional]
**logo** | **string** | Account logo in base64 format (svg, png, jpeg) | [optional]
**modified_at** | **\DateTime** | Account last modification date | [optional]
**name** | **string** | Account Name |
**recipient_experience** | [**\DocStudio\Client\Model\RecipientExperience**](RecipientExperience.md) | Default recipient experience for account emails and recipient interface | [optional]
**uuid** | **string** | Account UUID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
