# # EnvelopeToMailboxDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**envelope_uuid** | **string** |  | [optional]
**subject** | **string** | Subject of the envelope | [optional]
**message** | **string** | Message of the envelope | [optional]
**archived** | **bool** | Is envelope archived? | [optional]
**deleted** | **bool** | Is envelope in recycle bin? | [optional]
**shared** | **bool** | Is envelope shared to the mailbox? (if the mailbox is not in the main flow) | [optional]
**sent_by_me** | **bool** | Flag meaning &#39;outbox&#39;. Probably not necessary on UI | [optional]
**created_at** | **\DateTime** | Envelope creation date | [optional]
**received_at** | **\DateTime** | Date of receiving the envelope by the mailbox | [optional]
**sent_at** | **\DateTime** | The envelope sending date | [optional]
**seen_at** | **\DateTime** | Date-time it was seen by receiver | [optional]
**expired_after** | **\DateTime** |  | [optional]
**sharing_forbidden** | **bool** | Sharing by email is forbidden | [optional]
**status** | **string** |  | [optional]
**account_uuid** | **string** | Sender account UUID | [optional]
**mailbox_uuid** | **string** | UUID of sender | [optional]
**mailbox_name** | **string** | Mailbox name of sender | [optional]
**total** | **int** | Total number of participants | [optional]
**completed** | **int** | Number of participants processed | [optional]
**labels** | **string[]** |  | [optional]
**template_uuid** | **string** | Envelope template UUID | [optional]
**template_version** | **string** | Envelope template version | [optional]
**template_name** | **string** | Envelope template name | [optional]
**invitation_code** | **string** | Invitation code, if acceptable | [optional]
**chain_uuid** | **string** | Envelope chain UUID | [optional]
**chained_by_me** | **bool** | Envelope chained by requested user | [optional]
**extra_fields** | [**\DocStudio\Client\Model\EnvelopeExtraFieldDTO[]**](EnvelopeExtraFieldDTO.md) | Data for extra columns | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
