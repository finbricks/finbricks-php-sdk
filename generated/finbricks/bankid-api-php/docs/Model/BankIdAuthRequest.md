# # BankIdAuthRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** | Unique merchant identifier assigned by the payment gateway. |
**clientIdForBankId** | **string** | Id identifying the end user at the merchant. |
**provider** | **string** | Provider code. Example values CSOB, CSAS |
**scopeGroup** | [**\Finbricks\Api\BankId\Model\ScopeGroup**](ScopeGroup.md) |  |
**callbackUrl** | **string** | The URL address of the merchant to which the payment gateway will callback after the user authentication is completed. The merchant will receive &#x60;clientIdForBankId&#x60; as a query param. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
