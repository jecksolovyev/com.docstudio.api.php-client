# # CommentThreadDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mailbox_uuid** | **string** | UUID of Mailbox created this comment | [optional]
**mailbox_name** | **string** | Name of Mailbox created this comment | [optional]
**thread_uuid** | **string** | Thread UUID | [optional]
**xpath** | **string** | xPath to find selected area | [optional]
**messages** | [**\DocStudio\Client\Model\CommentMessageDTO[]**](CommentMessageDTO.md) | All messages in the thread | [optional]
**access_type** | **string** | Access level | [optional]
**shared_to** | [**\DocStudio\Client\Model\NameUuidDTO[]**](NameUuidDTO.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
