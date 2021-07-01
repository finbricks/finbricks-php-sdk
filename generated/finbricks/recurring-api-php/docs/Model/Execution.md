# # Execution

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**interval** | **string** | Execution interval defines how often order is executed.  Possible values: * __DAILY__ Once per day * __WEEKLY__ Once a week * __MONTHLY__ Once a month * __BI_MONTHLY__ Once every two months * __QUARTERLY__ Is done once every quarter of a year * __HALFYEARLY__ Will be done once every six months * __YEARLY__ Is done once a year * __IRREGULAR__ It is performed irregularly | [optional]
**intervalDue** | **int** | Value represents order number of the day within particular period when the standing order will be reqularly executed.  Possible values: 1-7 (for WEEKLY interval), 1-28 for MONTHLY, 1-2 for BI_MONTHLY, 1-3 for QUARTERLY, 1-6 for HALFYEARLY, 1-12 for YEARLY.  Possible values: * __1-7__ for WEEKLY interval * __1-28__ for MONTHLY * __1-2__ for BI_MONTHLY * __1-3__ for QUARTERLY * __1-6__ for HALFYEARLY * __1-12__ for YEARLY | [optional]
**mode** | **string** | The execution mode defines when or how recurring payment will be cancelled, processed the last time.  Possible values: * __UNTIL_DATE__ recurring payment is valid until specific date * __UNTIL_CANCELLATION__ recurring payment is valid forever and must be cancelled by client * __AFTER_MAX_ITERATION_EXCEEDED__ certain count of executions is specified * __MAX_AMOUNT_EXCEEDED__ maximum amount which can be transferred for this order is specified, if next iteration would exceed this amount it is not executed | [optional]
**modeDue** | **string** | The execution due mode defines how the date when order should be executed is specified.  Possible values: * __DUE_DAY_OF_MONTH__ specific number of day in the month is defined * __DUE_OR_BEFORE_DAY_OF_MONTH__ is defined as a specific day of the month or the previous day if the day falls on a non-banking day * __DUE_OR_NEXT_DAY_OF_MONTH__ is defined as a specific day of the month or the next day if the day falls on a non-banking day * __DUE_LAST_DAY_OF_MONTH__ order is executed on last day of particular month | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
