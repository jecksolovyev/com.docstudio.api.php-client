# EnvelopeToMailboxDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**envelope_uuid** | **string** |  | [optional] 
**subject** | **string** |  | [optional] 
**message** | **string** |  | [optional] 
**archived** | **bool** |  | [optional] 
**sent_by_me** | **bool** | Flag meaning &#x27;outbox&#x27;. Probably not necessary on UI | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**seen_at** | [**\DateTime**](\DateTime.md) | Date-time it was seen by receiver | [optional] 
**expired_after** | [**\DateTime**](\DateTime.md) |  | [optional] 
**sharing_forbidden** | **bool** | Sharing by email is forbidden | [optional] 
**status** | **string** |  | [optional] 
**account_uuid** | **string** | Sender account UUID | [optional] 
**mailbox_uuid** | **string** | UUID of sender | [optional] 
**mailbox_name** | **string** | Mailbox name of sender | [optional] 
**total** | **int** | Total number of participants | [optional] 
**completed** | **int** | Number of participants processed | [optional] 
**labels** | **string[]** |  | [optional] 
**template_uuid** | **string** | Envelope template UUID | [optional] 
**template_name** | **string** | Envelope template name | [optional] 
**invitation_code** | **string** | Invitation code, if acceptable | [optional] 
**chain_uuid** | **string** | Envelope chain UUID | [optional] 
**chained_by_me** | **bool** | Envelope chained by requested user | [optional] 
**extra_fields** | [**\DocStudio\Client\Model\EnvelopeExtraFieldDTO[]**](EnvelopeExtraFieldDTO.md) | Data for extra columns | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

