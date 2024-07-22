# # ActivityLogRecordDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**mailbox_uuid** | **string** | UUID of mailbox | [optional]
**mailbox_name** | **string** | Name of mailbox | [optional]
**action** | [**\DocStudio\Client\Model\ActivityLogAction**](ActivityLogAction.md) |  | [optional]
**object_name** | **string** | Object name | [optional]
**object_type** | [**\DocStudio\Client\Model\ActivityLogObjectType**](ActivityLogObjectType.md) |  | [optional]
**object_id** | **string** | Object UUID | [optional]
**operator_id** | **string** | Operator UUID | [optional]
**operator_name** | **string** | Operator name | [optional]
**timestamp** | **\DateTime** | Action timestamp | [optional]
**source** | [**\DocStudio\Client\Model\OperationSource**](OperationSource.md) |  | [optional]
**ip** | **string** | IP address | [optional]
**browser** | **string** | Browser | [optional]
**os** | **string** | Operation System | [optional]
**error_code** | **int** | Error code | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
