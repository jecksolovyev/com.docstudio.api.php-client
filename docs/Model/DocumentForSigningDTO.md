# DocumentForSigningDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**binary_file_name** | **string** | Binary file name | [optional]
**binary_hash** | **string** | Binary file hash for signing | [optional]
**document_id** | **string** | ID of document | [optional]
**expected_signature_container** | **string** | Expected signature container for &#39;sign&#39; endpoint | [optional]
**signature_algorithm** | **string** | Signature algorithm | [optional]
**signature_container** | **string** | Signature container | [optional]
**signatures** | [**\DocStudio\Client\Model\RequiredSignatureDTO[]**](RequiredSignatureDTO.md) | Signatures | [optional]
**xades_files** | [**\DocStudio\Client\Model\XadesFile[]**](XadesFile.md) | Files to generate XADES | [optional]
**xml_hash** | **string** | XML hash for signing | [optional]
**xml_name** | **string** | XML file name | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
