# InvitedEnvelopeInfoDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completed** | **int** | Number of roles completed processing of this envelope | [optional]
**created_at** | **\DateTime** | Envelope creation date | [optional]
**expire_after** | **\DateTime** | Envelope expiration date | [optional]
**flow** | [**\DocStudio\Client\Model\EnvelopeFlowInfoDTO[]**](EnvelopeFlowInfoDTO.md) | Detailed information about every role | [optional]
**message** | **string** | Envelope message | [optional]
**role_id** | **string** | The role user was invited to | [optional]
**sender** | [**\DocStudio\Client\Model\EnvelopeSenderDTO**](EnvelopeSenderDTO.md) | Envelope sender info | [optional]
**subject** | **string** | Envelope subject | [optional]
**template_name** | **string** | Name of the template of this envelope | [optional]
**total** | **int** | Total number of roles assigned for processing of this envelope | [optional]
**type** | **string** | Invitation type | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
