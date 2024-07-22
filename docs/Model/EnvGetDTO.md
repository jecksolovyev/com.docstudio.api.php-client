# # EnvGetDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | UUID of envelope | [optional]
**data** | **string** | Envelope XML | [optional]
**created_at** | **\DateTime** | Envelope creation date | [optional]
**received_at** | **\DateTime** | Date of receiving the envelope by the mailbox | [optional]
**sent_at** | **\DateTime** | Envelope sending date | [optional]
**labels** | **string[]** |  | [optional]
**total** | **int** | Total number of participants | [optional]
**completed** | **int** | Number of participants who completed their processing | [optional]
**chain_uuid** | **string** | Envelope chain UUID | [optional]
**chained_by_me** | **bool** | Envelope chained by requested user | [optional]
**approval_flow_uuid** | **string** | Approval flow UUID | [optional]
**status** | **string** | Calculated status for mailbox | [optional]
**sender** | [**\DocStudio\Client\Model\EnvelopeSenderDTO**](EnvelopeSenderDTO.md) |  | [optional]
**deleted** | **bool** | Is envelope in recycle bin? | [optional]
**archived** | **bool** | Is envelope archived? | [optional]
**shared** | **bool** | Is envelope shared to the mailbox? (if the mailbox is not in the main flow) | [optional]
**shared_to** | [**\DocStudio\Client\Model\EnvSharedToDTO[]**](EnvSharedToDTO.md) | Mailboxes the envelope shared with | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
