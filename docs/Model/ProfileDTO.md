# ProfileDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounts** | [**\DocStudio\Client\Model\User2AccountWithMailboxesDTO[]**](User2AccountWithMailboxesDTO.md) | User accounts belongs to | [optional]
**auto_deposit_mailbox_uuid** | **string** | Auto Deposit Mailbox UUID | [optional]
**corporate_account_id** | **string** | Corporate account UUID | [optional]
**corporate_user** | **bool** |  | [optional]
**date_locale** | **string** | User locale for dates | [optional]
**display_exact_date** | **bool** | Display exact date instead of relative | [optional]
**email** | **string** | User email | [optional]
**fields** | **array<string,mixed>** | Additional user fields | [optional]
**first_name** | **string** | User first name | [optional]
**initials** | **string** | Saved initials | [optional]
**last_name** | **string** | User last name | [optional]
**locale** | **string** | User locale | [optional]
**mfa_enabled** | **bool** | Is Multi-Factor Authentication enabled | [optional]
**only_sso_login** | **bool** | Is only SSO allowed for user (password forbidden) | [optional]
**phone** | **string** | User phone | [optional]
**preferences** | [**\DocStudio\Client\Model\UserPreferences**](UserPreferences.md) | User preferences (active mailbox, account, sign type, search recipients) | [optional]
**signature** | **string** | Saved eInk signature | [optional]
**sso_enabled** | **bool** | Is SSO enabled for user | [optional]
**status** | **string** | User status | [optional]
**timezone** | **string** | User timezone | [optional]
**uuid** | **string** | User uuid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
