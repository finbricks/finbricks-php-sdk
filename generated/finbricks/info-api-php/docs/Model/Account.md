# # Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | API payment account identifier from the response to a query on the list of accounts. | [optional]
**identification** | [**\Finbricks\Api\Info\Model\AccountIdentification**](AccountIdentification.md) |  | [optional]
**currency** | **string** | CurrencyCode, ISO 4217. | [optional]
**servicer** | [**\Finbricks\Api\Info\Model\AccountServicer**](AccountServicer.md) |  | [optional]
**accountName** | **string** | Account name. | [optional]
**productName** | **string** | Product name | [optional]
**ownersNames** | **string[]** | Array of name/s of the account holder/s for consumers or trade name/s for commercial clients. | [optional]
**pispSuitable** | **bool** | Indication whether the account number is suitable for payment transactions. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
