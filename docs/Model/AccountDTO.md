# AccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Account UUID | [optional] 
**name** | **string** | Account Name | 
**inn** | **string** | Account TAX number | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Account creation date | [optional] 
**modified_at** | [**\DateTime**](\DateTime.md) | Account last modification date | [optional] 
**mailboxes** | [**\Swagger\Client\Model\MailboxSimpleDTO[]**](MailboxSimpleDTO.md) |  | [optional] 
**users** | [**\Swagger\Client\Model\AccountUserDTO[]**](AccountUserDTO.md) |  | [optional] 
**logo** | **string** | Account logo in base64 format (svg, png, jpeg) | [optional] 
**brand** | **string** | Account brand logo in base64 format (svg, png, jpeg) | [optional] 
**currency** | **string** | Account currency for billing purposes | [optional] 
**timezone** | **string** | Account timezone for billing purposes | [optional] 
**create_personal_mailbox** | **bool** | Create personal mailbox for self-registered corporate user | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

