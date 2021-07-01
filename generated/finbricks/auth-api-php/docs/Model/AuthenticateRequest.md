# # AuthenticateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** | Unique merchant identifier assigned by the payment gateway. |
**clientId** | **string** | Id identifying the end user at the merchant. | [optional]
**provider** | **string** | Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO. |
**scope** | **string** | Scope. If the value is not filled in, the payment gateway will use the default value &#x60;AISP_PISP&#x60;. | [optional]
**callbackUrl** | **string** | The URL address of the merchant to which the payment gateway will callback after the user authentication is completed. The merchant will receive &#x60;clientId&#x60; as a query param. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
