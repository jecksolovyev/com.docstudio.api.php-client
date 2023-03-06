# FullTemplateResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Template UUID | [optional] 
**name** | **string** | Template name | [optional] 
**description** | **string** | Template description | [optional] 
**data** | **string** | Template data | [optional] 
**version** | **string** | Template version | [optional] 
**data_created_at** | [**\DateTime**](\DateTime.md) | Template data create date | [optional] 
**data_modified_at** | [**\DateTime**](\DateTime.md) | Template data update date | [optional] 
**access** | **string** | Template access level | [optional] 
**mailbox** | **string** | Template creator&#x27;s mailbox | [optional] 
**archive** | **bool** | Template archive | [optional] 
**categories** | **int[]** | Template categories ids. Empty array if not within any category. | [optional] 
**shared_categories** | **int[]** | Template shared categories ids. Absent if not within any shared category. | [optional] 
**shared_to** | **string[]** | Mailboxes to which template is shared to | [optional] 
**logo_image_uuid** | **string** | UUID of the template logo image | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | Template create date | [optional] 
**modified_at** | [**\DateTime**](\DateTime.md) | Template update date | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

