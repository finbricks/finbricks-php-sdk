# # RecurringPaymentInit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantId** | **string** | Unique merchant identifier from merchant registration process |
**merchantTransactionId** | **string** | Unique transaction identifier generated by merchant |
**amount** | **float** | Recurring payment amount |
**debtorAccountIban** | **string** | Debtor&#39;s account number in IBAN format |
**creditorAccountIban** | **string** | Creditor&#39;s account number in IBAN format |
**description** | **string** | Payment description - message for the payee | [optional]
**variableSymbol** | **string** | Variable symbol. Some banks may trim &#39;0&#39;s at the beginning. | [optional]
**specificSymbol** | **string** | Specific symbol. Some banks may trim &#39;0&#39;s at the beginning. | [optional]
**constantSymbol** | **string** | Constant symbol. Some banks may trim &#39;0&#39;s at the beginning. | [optional]
**callbackUrl** | **string** | URL that is called after the process of recurring payment is done. | [optional]
**clientId** | **string** | End-user identifier assigned by the customer. Use [/auth/authenticate](#operation/authAuthenticatePost) to let the user authenticate in the bank.  &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers). | [optional]
**operationId** | **string** | End-user identifier assigned by Finbricks.com. Use [/auth/authenticate](#operation/authAuthenticatePost) to let the user authenticate in the bank.  &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers).\&quot; | [optional]
**requestedExecutionDate** | [**\DateTime**](\DateTime.md) | Requested date of recurring payment. ISODate i.e. YYYY-MM-DD.  where: YYYY &#x3D; four-digit year MM &#x3D; two-digit month (01&#x3D;January, etc.) DD &#x3D; two-digit day of month (01 through 31). |
**interval** | **string** | Execution interval defines how often order is executed.  Possible values: * __DAILY__ Once per day * __WEEKLY__ Once a week * __MONTHLY__ Once a month * __BI_MONTHLY__ Once every two months * __QUARTERLY__ Is done once every quarter of a year * __HALFYEARLY__ Will be done once every six months * __YEARLY__ Is done once a year * __IRREGULAR__ It is performed irregularly |
**intervalDue** | **int** | Value represents order number of the day within particular period when the standing order will be reqularly executed.  Possible values: 1-7 (for WEEKLY interval), 1-28 for MONTHLY, 1-2 for BI_MONTHLY, 1-3 for QUARTERLY, 1-6 for HALFYEARLY, 1-12 for YEARLY.  Possible values: * __1-7__ for WEEKLY interval * __1-28__ for MONTHLY * __1-2__ for BI_MONTHLY * __1-3__ for QUARTERLY * __1-6__ for HALFYEARLY * __1-12__ for YEARLY | [optional]
**mode** | **string** | The execution mode defines when or how recurring payment will be cancelled, processed the last time.  Possible values: * __UNTIL_DATE__ recurring payment is valid until specific date * __UNTIL_CANCELLATION__ recurring payment is valid forever and must be cancelled by client * __AFTER_MAX_ITERATION_EXCEEDED__ certain count of executions is specified * __MAX_AMOUNT_EXCEEDED__ maximum amount which can be transferred for this order is specified, if next iteration would exceed this amount it is not executed |
**modeDue** | **string** | The execution due mode defines how the date when order should be executed is specified.  Possible values: * __DUE_DAY_OF_MONTH__ specific number of day in the month is defined * __DUE_OR_BEFORE_DAY_OF_MONTH__ is defined as a specific day of the month or the previous day if the day falls on a non-banking day * __DUE_OR_NEXT_DAY_OF_MONTH__ is defined as a specific day of the month or the next day if the day falls on a non-banking day * __DUE_LAST_DAY_OF_MONTH__ order is executed on last day of particular month |
**lastExecutionDate** | [**\DateTime**](\DateTime.md) | Date when the last order will be processed. Only applicable in combination with &#x60;mode&#x60; &#x60;UNTIL_DATE&#x60; or &#x60;UNTIL_CANCELLATION&#x60;.  Null value responds to ending by the user. ISODate i.e. YYYY-MM-DD.  where: YYYY &#x3D; four-digit year MM &#x3D; two-digit month (01&#x3D;January, etc.) DD &#x3D; two-digit day of month (01 through 31). | [optional]
**maxIterations** | **int** | Maximum number of iterations - processing of the standing order. Only applicable in combination with &#x60;mode&#x60; &#x60;AFTER_MAX_ITERATION_EXCEEDED&#x60;. | [optional]
**initiatorName** | **string** | Name of the initiator of the payment. The initiator is a party using your services. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
