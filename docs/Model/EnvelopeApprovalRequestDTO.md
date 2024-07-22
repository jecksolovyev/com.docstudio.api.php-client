# # EnvelopeApprovalRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuids** | **string[]** |  |
**urgent** | **bool** | Is approval urgent? | [optional]
**flow_uuid** | **string** | UUID of saved approval flow (Approvers must not be set) | [optional]
**approvers** | [**\DocStudio\Client\Model\EnvelopeApproverDTO[]**](EnvelopeApproverDTO.md) | Set of approvers (Flow UUID must not be set) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
