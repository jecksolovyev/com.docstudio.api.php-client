# EnvelopeCallbackDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Envelope callback ID | [optional] 
**filter** | [**\Swagger\Client\Model\CallbackEnvelopeFilterDTO**](CallbackEnvelopeFilterDTO.md) |  | [optional] 
**url** | **string** | Callback url | [optional] 
**retries** | **int** | Retries count, 0 &lt; X &lt;&#x3D; 10 | [optional] 
**timeout** | **int** | Request timeout (ms), 100 &lt; X &lt; 60000 | [optional] 
**success_code** | **int** | Http response success code | [optional] [default to 200]
**auth_type** | **string** | Auth type | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

