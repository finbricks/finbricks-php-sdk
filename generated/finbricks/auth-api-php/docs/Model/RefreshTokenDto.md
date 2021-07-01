# # RefreshTokenDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clientId** | **string** | Id identifying the end-user at the merchant. | [optional]
**provider** | **string** | Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO. | [optional]
**scope** | **string** | Scope. If the value is not filled in, the payment gateway will use the default value &#x60;AISP_PISP&#x60;. | [optional]
**validFrom** | [**\DateTime**](\DateTime.md) | Date and time when token has been created. | [optional]
**validTo** | [**\DateTime**](\DateTime.md) | Date and time of user authentication expiration.  Please note that the value is only indicative, because the client can, for example, invalidate all existing access rights from the environment of his internet banking. On the other hand, the existence of a token at the time of the service call is verified at the bank. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
