# EnvApprovalSearchResultDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**envelope_uuid** | **string** | The envelope UUID | [optional] 
**subject** | **string** | The envelope subject | [optional] 
**message** | **string** | The envelope message | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | The date the approval was created | [optional] 
**status** | **string** | Status of approval | [optional] 
**mailbox_uuid** | **string** | Mailbox UUID of approval initiator | [optional] 
**account_uuid** | **string** | Mailbox account UUID of approval initiator | [optional] 
**mailbox_name** | **string** | Mailbox name of approval initiator | [optional] 
**total** | **int** | Total number of participants | [optional] 
**completed** | **int** | Number of participants processed | [optional] 
**template_uuid** | **string** | Envelope template UUID | [optional] 
**template_name** | **string** | Envelope template name | [optional] 
**seen_at** | [**\DateTime**](\DateTime.md) | Date-time it was seen by approver | [optional] 
**expired_after** | [**\DateTime**](\DateTime.md) | The date the envelope will be expired | [optional] 
**approval_flow_uuid** | **string** | UUID of approval flow | [optional] 
**urgent** | **bool** | Is approval flow urgent? | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

