# PaymentDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** | Payment amount in UAH | [optional]
**envelope_id** | **string** | Envelope ID; use it with the access code to download the envelope archive | [optional]
**expire_at** | **string** | When the payment expires, version 3 only | [optional]
**function** | **string** | NBU QR code function, version 3 only | [optional]
**iban** | **string** | Recipient IBAN | [optional]
**itn** | **string** | Recipient tax identification number (EDRPOU or ITN) | [optional]
**purpose** | **string** | Purpose of the payment | [optional]
**qr** | **string** | QR code image in SVG format | [optional]
**recipient** | **string** | Payment recipient name | [optional]
**reference** | **string** | Payment reference, version 3 only | [optional]
**version** | **int** | NBU QR code format version: 2 or 3 | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
