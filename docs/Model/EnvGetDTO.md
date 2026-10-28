# EnvGetDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**approval_flow_uuid** | **string** | Approval flow UUID | [optional]
**archived** | **bool** | Is envelope archived? | [optional]
**chain_uuid** | **string** | Envelope chain UUID | [optional]
**chained_by_me** | **bool** | Envelope chained by requested user | [optional]
**completed** | **int** | Number of participants who completed their processing | [optional]
**created_at** | **\DateTime** | Envelope creation date | [optional]
**data** | **string** | Envelope XML | [optional]
**deleted** | **bool** | Is envelope in recycle bin? | [optional]
**labels** | **string[]** |  | [optional]
**metadata** | **array<string,string>** | Envelope metadata | [optional]
**received_at** | **\DateTime** | Date of receiving the envelope by the mailbox | [optional]
**saved_doc_signatures** | [**\DocStudio\Client\Model\ExtEnvelopeDocumentSignaturesDTO[]**](ExtEnvelopeDocumentSignaturesDTO.md) |  | [optional]
**sender** | [**\DocStudio\Client\Model\EnvelopeSenderDTO**](EnvelopeSenderDTO.md) | Envelope sender info | [optional]
**sent_at** | **\DateTime** | Envelope sending date | [optional]
**shared** | **bool** | Is envelope shared to the mailbox? (if the mailbox is not in the main flow) | [optional]
**shared_to** | [**\DocStudio\Client\Model\EnvSharedToDTO[]**](EnvSharedToDTO.md) | Mailboxes the envelope shared with | [optional]
**status** | **string** | Calculated status for mailbox | [optional]
**total** | **int** | Total number of participants | [optional]
**type** | **string** | Extended envelope type | [optional]
**uuid** | **string** | UUID of envelope | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
