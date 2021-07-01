# # AccountTransactions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**pageNumber** | **float** | Number of current page | [optional]
**pageCount** | **float** | Total number of query pages | [optional]
**pageSize** | **float** | Number of entries per page. This parameter can match the required size value from the query, except for the cases when it is the last page, or when the requested page range exceeded the maximum limit defined for the particular API resource. | [optional]
**nextPage** | **float** | The number of the next page. If the current page is at the same time the last page of the list, then this parameter is not listed or is given with a null value. | [optional]
**transactions** | **object[]** | List of transactions | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
