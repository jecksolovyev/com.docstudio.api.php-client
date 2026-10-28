# DocumentsForSignRequestDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cloud_containers** | **string[]** | Containers supported by a cloud-based signing service provider | [optional]
**documents** | [**\DocStudio\Client\Model\DocIdSignatureNameDTO[]**](DocIdSignatureNameDTO.md) |  | [optional]
**signature_algorithm** | **string** | Check signature algorithm in advance | [optional]
**signer_information** | [**\DocStudio\Client\Model\SignerInformation**](SignerInformation.md) | Alternative info about the signer if no certificate | [optional]
**signing_certificate** | **string** | Certificate which will be used for signing | [optional]
**tin** | **string** | Check Tax Individual Number in advance | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
