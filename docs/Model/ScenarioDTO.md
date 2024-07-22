# # ScenarioDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | Scenario uuid | [optional]
**name** | **string** | Scenario name |
**description** | **string** | Scenario description |
**mailbox_uuid** | **string** | Scenario mailbox | [optional]
**access** | **string** | Scenario access level |
**shared_to** | **string[]** | Mailboxes list, which have access to scenario | [optional]
**steps** | [**\DocStudio\Client\Model\ScenarioStepDTO[]**](ScenarioStepDTO.md) | Scenario steps |
**add_to_chain** | **bool** | Should envelopes be chained? | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
