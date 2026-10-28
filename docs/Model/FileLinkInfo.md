# FileLinkInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content_type** | **string** | Content type | [optional]
**direction** | **string** | download or upload | [optional]
**error** | **string** | Why the file could not be prepared, when the state is failed | [optional]
**expires_at** | **\DateTime** | When the link stops working | [optional]
**filename** | **string** | File name | [optional]
**size_bytes** | **int** | Size in bytes | [optional]
**state** | **string** | preparing, ready, uploading, used, failed, expired or not_found | [optional]
**upload** | [**\DocStudio\Client\Model\FileLinkUploadInfo**](FileLinkUploadInfo.md) | What an uploaded file may be, for upload links only | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
