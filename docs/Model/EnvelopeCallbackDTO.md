# EnvelopeCallbackDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**auth_type** | **string** | Auth type | [optional]
**filter** | [**\DocStudio\Client\Model\CallbackEnvelopeFilterDTO**](CallbackEnvelopeFilterDTO.md) | Envelope filter | [optional]
**id** | **string** | Envelope callback ID | [optional]
**retries** | **int** | Retries count, 0 &lt; X &lt;&#x3D; 10 | [default to 3]
**success_code** | **int** | Http response success code | [optional] [default to 200]
**timeout** | **int** | Request timeout (ms), 100 &lt; X &lt; 60000 | [default to 5000]
**url** | **string** | Callback url |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
