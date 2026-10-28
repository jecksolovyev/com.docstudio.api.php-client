# EnvApprovalSearchResultDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**account_uuid** | **string** | Mailbox account UUID of approval initiator | [optional]
**approval_flow_uuid** | **string** | UUID of approval flow | [optional]
**completed** | **int** | Number of participants processed | [optional]
**created_at** | **\DateTime** | The date the approval was created | [optional]
**envelope_uuid** | **string** | The envelope UUID | [optional]
**expired_after** | **\DateTime** | The date the envelope will be expired | [optional]
**last_updated_at** | **\DateTime** | Date and time of the last update | [optional]
**mailbox_name** | **string** | Mailbox name of approval initiator | [optional]
**mailbox_uuid** | **string** | Mailbox UUID of approval initiator | [optional]
**message** | **string** | The envelope message | [optional]
**seen_at** | **\DateTime** | Date-time it was seen by approver | [optional]
**status** | **string** | Status of approval | [optional]
**subject** | **string** | The envelope subject | [optional]
**template_name** | **string** | Envelope template name | [optional]
**template_uuid** | **string** | Envelope template UUID | [optional]
**total** | **int** | Total number of participants | [optional]
**urgent** | **bool** | Is approval flow urgent? | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
