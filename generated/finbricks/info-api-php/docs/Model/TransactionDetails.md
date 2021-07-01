# # TransactionDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**references** | [**\Finbricks\Api\Info\Model\TransactionDetailsReferences**](TransactionDetailsReferences.md) |  | [optional]
**amountDetails** | [**\Finbricks\Api\Info\Model\AmountDetails**](AmountDetails.md) |  | [optional]
**charges** | [**\Finbricks\Api\Info\Model\Charges**](Charges.md) |  | [optional]
**relatedParties** | [**\Finbricks\Api\Info\Model\RelatedParties**](RelatedParties.md) |  | [optional]
**relatedAgents** | [**\Finbricks\Api\Info\Model\RelatedAgents**](RelatedAgents.md) |  | [optional]
**purpose** | [**\Finbricks\Api\Info\Model\Purpose**](Purpose.md) |  | [optional]
**remittanceInformation** | [**\Finbricks\Api\Info\Model\RemittanceInformation**](RemittanceInformation.md) |  | [optional]
**additionalTransactionInformation** | **string** | Additional information provided by the bank. Only stated if it is included in the record. Additional info for SEPA DD is entered here (e.g., Creditor Identifier, Payment scheme, SEPA collection order, etc.) | [optional]
**additionalRemittanceInformation** | **string** | Additional free text information for payer of up to 140 characters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
