# ApproverDetailsDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can_only_comment** | **bool** | True for an editorial review commentator who can only comment the document; false for a reviewer | [optional]
**comment** | **string** | Comment left with the decision | [optional]
**completed_at** | **\DateTime** | When the participant made a decision | [optional]
**created_at** | **\DateTime** | When the participant was added to the flow | [optional]
**email** | **string** | Email the participant was invited by | [optional]
**mailbox_name** | **string** | Current name of the participant mailbox | [optional]
**mailbox_uuid** | **string** | Mailbox id of the participant; null for an invited email without a mailbox yet | [optional]
**name** | **string** | Display name of the participant within the flow | [optional]
**order** | **int** | Step order of the participant in the flow | [optional]
**seen_at** | **\DateTime** | When the participant first opened the envelope | [optional]
**status** | **string** | Decision status of the participant | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
