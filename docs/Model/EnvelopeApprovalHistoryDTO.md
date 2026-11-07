# EnvelopeApprovalHistoryDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approvers** | [**\DocStudio\Client\Model\ApproverDetailsDTO[]**](ApproverDetailsDTO.md) | Approvers with their statuses | [optional]
**completed** | **bool** | Is approval flow completed? | [optional]
**locked** | **bool** | If true, the document is locked for editing because approval of the current version has started | [optional]
**mailbox_uuid** | **string** | Mailbox UUID of approval initiator | [optional]
**mandatory_approval** | **bool** | If true, every reviewer has to approve the same document version before the review can be finished | [optional]
**urgent** | **bool** | Is approval flow urgent? | [optional]
**uuid** | **string** | Approval flow UUID | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
