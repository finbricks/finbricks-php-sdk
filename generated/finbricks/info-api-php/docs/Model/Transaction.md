# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entryReference** | **string** | Identification no. of the payment assigned by the bank | [optional]
**amount** | [**\Finbricks\Api\Info\Model\Amount**](Amount.md) |  | [optional]
**creditDebitIndicator** | [**\Finbricks\Api\Info\Model\CreditDebitIndicator**](CreditDebitIndicator.md) |  | [optional]
**reversalIndicator** | **bool** | Indication of whether it is a cancellation. An expression of whether it is a cancellation or not is marked with one of the codes below:  - true: It is cancellation - false: It is not cancellation\&quot; | [optional]
**status** | **string** | Item status (debited or credited payments) of the account from the point of view of the bank. The statement will present only posted items, with the constant BOOK, or blocked items, with the constant PDNG.  Example values:  * __BOOK__ - posted items * __PDNG__ - blocked items * INFO - status specific for some banks | [optional]
**bookingDate** | [**\Finbricks\Api\Info\Model\BookingDate**](BookingDate.md) |  | [optional]
**valueDate** | [**\Finbricks\Api\Info\Model\ValueDate**](ValueDate.md) |  | [optional]
**bankTransactionCode** | [**\Finbricks\Api\Info\Model\BankTransactionCode**](BankTransactionCode.md) |  | [optional]
**entryDetails** | [**\Finbricks\Api\Info\Model\EntryDetails**](EntryDetails.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
