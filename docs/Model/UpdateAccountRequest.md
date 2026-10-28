# UpdateAccountRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ai_assistant_restricted** | **bool** | Restrict AI Assistant usage for account users. Skip property for non-owner users. | [optional]
**allow_create_personal_mailbox_with_role** | **string** | Create personal mailbox for self-registered corporate user with role UUID | [optional]
**allow_microsoft_office_viewer** | **bool** | Allow envelope attachments public access for MS Office Viewer. Skip property for non-owner users. | [optional]
**brand** | **string** | Account brand logo in base64 format (svg, png, jpeg) | [optional]
**corporate_profile_edit_restricted** | **bool** | Restrict profile editing for corporate users | [optional]
**hide_community_templates** | **bool** | Hide community templates for account users | [optional]
**hide_official_templates** | **bool** | Hide official templates for account users | [optional]
**hide_sender_email_in_notifications** | **bool** | Hide sender&#39;s email as reply-to from notifications | [optional]
**inn** | **string** | Account TAX number | [optional]
**logo** | **string** | Account logo in base64 format (svg, png, jpeg) | [optional]
**name** | **string** | Account Name |
**recipient_experience** | [**\DocStudio\Client\Model\RecipientExperience**](RecipientExperience.md) | Default recipient experience for account emails and recipient interface |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
