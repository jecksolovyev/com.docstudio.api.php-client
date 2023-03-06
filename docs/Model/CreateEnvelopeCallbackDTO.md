# CreateEnvelopeCallbackDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filter** | [**\Swagger\Client\Model\CallbackEnvelopeFilterDTO**](CallbackEnvelopeFilterDTO.md) |  | 
**url** | **string** | Callback url | 
**retries** | **int** | Retries count, 0 &lt; X &lt;&#x3D; 10 | 
**timeout** | **int** | Request timeout (ms), 100 &lt; X &lt; 60000 | 
**success_code** | **int** | Http response success code | [optional] [default to 200]
**login** | **string** | Basic auth login | [optional] 
**password** | **string** | Basic auth password | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

