# # InvitedEnvelopeInfoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Envelope message | [optional]
**subject** | **string** | Envelope subject | [optional]
**expire_after** | **\DateTime** | Envelope expiration date | [optional]
**created_at** | **\DateTime** | Envelope creation date | [optional]
**sender** | [**\DocStudio\Client\Model\EnvelopeSenderDTO**](EnvelopeSenderDTO.md) |  | [optional]
**template_name** | **string** | Name of the template of this envelope | [optional]
**total** | **int** | Total number of roles assigned for processing of this envelope | [optional]
**completed** | **int** | Number of roles completed processing of this envelope | [optional]
**flow** | [**\DocStudio\Client\Model\EnvelopeFlowInfoDTO[]**](EnvelopeFlowInfoDTO.md) | Detailed information about every role | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
