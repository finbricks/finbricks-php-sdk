# # TransactionEshopStatusResultDTO

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantTransactionId** | **string** | Unique transaction identifier | [optional]
**resultCode** | **string** | Payment result code  __ResultCode descriptions:__ * __OPENED__ - The transaction is awaiting payment by the user. You must wait for the next payment status. The result of the payment is uncertain, yet. * __AUTHORIZED__ - Payment confirmed by user. The bank will perform a final check of the payment, including a check of the balance, and will process the payment. The payment will most likely be made. * __COMPLETED__ - The bank has confirmed that it has processed the transaction, payment is on its way to your account. Transaction processing is almost certain. * __BOOKED__ - The payment has already appeared in the payer&#39;s account and is on its way to your account. Transaction processing is almost certain. * __SETTLED__ - (BETA mode) The payment has been credited to the payee&#39;s account. * __REJECTED__ - The payment was rejected by the user or the payer&#39;s bank. | [optional]
**finalBankStatus** | **bool** | Indicates whether the resultCode for the transaction is final. If &#39;true&#39;, the eshop should no longer call the GET/transaction/eshop/status service for the given transaction. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
