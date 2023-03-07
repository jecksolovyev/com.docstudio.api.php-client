# EnvGetDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | UUID of envelope | [optional] 
**data** | **string** | Envelope XML | [optional] 
**received_at** | [**\DateTime**](\DateTime.md) | Date of receiving the envelope by the mailbox | [optional] 
**labels** | **string[]** |  | [optional] 
**total** | **int** | Total number of participants | [optional] 
**completed** | **int** | Number of participants who completed their processing | [optional] 
**chain_uuid** | **string** | Envelope chain UUID | [optional] 
**chained_by_me** | **bool** | Envelope chained by requested user | [optional] 
**approval_flow_uuid** | **string** | Approval flow UUID | [optional] 
**status** | **string** | Calculated status for mailbox | [optional] 
**sender** | [**\Docstudio\ClientModel\EnvelopeSenderDTO**](EnvelopeSenderDTO.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

