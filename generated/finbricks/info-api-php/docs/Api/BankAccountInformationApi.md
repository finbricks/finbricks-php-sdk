# Finbricks\Api\Info\BankAccountInformationApi

All URIs are relative to https://api.finbricks.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBalanceGet()**](BankAccountInformationApi.md#accountBalanceGet) | **GET** /account/balance | Balances for user&#39;s accounts
[**accountListGet()**](BankAccountInformationApi.md#accountListGet) | **GET** /account/list | List of user&#39;s accounts
[**accountListWithBalanceGet()**](BankAccountInformationApi.md#accountListWithBalanceGet) | **GET** /account/listWithBalance | User&#39;s accounts with balances
[**accountTransactionsGet()**](BankAccountInformationApi.md#accountTransactionsGet) | **GET** /account/transactions | User&#39;s account transactions


## `accountBalanceGet()`

```php
accountBalanceGet($merchantId, $paymentProvider, $bankAccountId, $signature, $clientId, $operationId): \Finbricks\Api\Info\Model\AccountBalance
```

Balances for user's accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Info\Api\BankAccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = 'merchantId_example'; // string | Unique merchant identifier from merchant registration process.
$paymentProvider = KB; // string | Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint.
$bankAccountId = y3FeaZyvItso-clhpV18X60orMVgulFdBx7; // string | API payment account identifier from the response to a query on the list of accounts.
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 'clientId_example'; // string | Identification of client (end-user). `clientId` or `operationId` is required.
$operationId = 'operationId_example'; // string | End-user identifier assigned by Finbricks.com. `clientId` or `operationId` is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers).

try {
    $result = $apiInstance->accountBalanceGet($merchantId, $paymentProvider, $bankAccountId, $signature, $clientId, $operationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountInformationApi->accountBalanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process. |
 **paymentProvider** | **string**| Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint. |
 **bankAccountId** | **string**| API payment account identifier from the response to a query on the list of accounts. |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Identification of client (end-user). &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. | [optional]
 **operationId** | [**string**](../Model/.md)| End-user identifier assigned by Finbricks.com. &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers). | [optional]

### Return type

[**\Finbricks\Api\Info\Model\AccountBalance**](../Model/AccountBalance.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountListGet()`

```php
accountListGet($merchantId, $paymentProvider, $signature, $clientId, $operationId): \Finbricks\Api\Info\Model\AccountList
```

List of user's accounts

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Info\Api\BankAccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = 'merchantId_example'; // string | Unique merchant identifier from merchant registration process.
$paymentProvider = KB; // string | Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint.
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 'clientId_example'; // string | Identification of client (end-user). `clientId` or `operationId` is required.
$operationId = 'operationId_example'; // string | End-user identifier assigned by Finbricks.com. `clientId` or `operationId` is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers).

try {
    $result = $apiInstance->accountListGet($merchantId, $paymentProvider, $signature, $clientId, $operationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountInformationApi->accountListGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process. |
 **paymentProvider** | **string**| Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint. |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Identification of client (end-user). &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. | [optional]
 **operationId** | [**string**](../Model/.md)| End-user identifier assigned by Finbricks.com. &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers). | [optional]

### Return type

[**\Finbricks\Api\Info\Model\AccountList**](../Model/AccountList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountListWithBalanceGet()`

```php
accountListWithBalanceGet($merchantId, $paymentProvider, $signature, $clientId, $operationId): object[]
```

User's accounts with balances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Info\Api\BankAccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = 'merchantId_example'; // string | Unique merchant identifier from merchant registration process.
$paymentProvider = KB; // string | Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint.
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 'clientId_example'; // string | Identification of client (end-user). `clientId` or `operationId` is required.
$operationId = 'operationId_example'; // string | End-user identifier assigned by Finbricks.com. `clientId` or `operationId` is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers).

try {
    $result = $apiInstance->accountListWithBalanceGet($merchantId, $paymentProvider, $signature, $clientId, $operationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountInformationApi->accountListWithBalanceGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process. |
 **paymentProvider** | **string**| Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint. |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Identification of client (end-user). &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. | [optional]
 **operationId** | [**string**](../Model/.md)| End-user identifier assigned by Finbricks.com. &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers). | [optional]

### Return type

**object[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accountTransactionsGet()`

```php
accountTransactionsGet($merchantId, $paymentProvider, $bankAccountId, $signature, $clientId, $operationId, $dateFrom, $dateTo, $currency, $size, $page, $cursor): \Finbricks\Api\Info\Model\AccountTransactions
```

User's account transactions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Info\Api\BankAccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = 'merchantId_example'; // string | Unique merchant identifier from merchant registration process.
$paymentProvider = KB; // string | Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint.
$bankAccountId = y3FeaZyvItso-clhpV18X60orMVgulFdBx7; // string | API payment account identifier from the response to a query on the list of accounts.
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 'clientId_example'; // string | Identification of client (end-user). `clientId` or `operationId` is required.
$operationId = 'operationId_example'; // string | End-user identifier assigned by Finbricks.com. `clientId` or `operationId` is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers).
$dateFrom = 2020-09-30; // \DateTime | Date of the start of required transaction history. Format yyyy-MM-dd.
$dateTo = 2020-09-30; // \DateTime | Date of the end of required transaction history [inclusive]. Format yyyy-MM-dd.
$currency = CZK; // string | Account currency. CurrencyCode, ISO 4217.
$size = 20; // float | Paging. Number of entries per page. There is a limit 50 per page to the number of records that helps prevent a bank request from timeouting.
$page = 0; // float | Paging. Required page. Default: 0
$cursor = 3e7e6eb50120afca6a619fdddebef108ad99c271; // string | A pagination cursor returned by a previous call to this endpoint. A cursor is a part of links.value response field. Provide this value to retrieve the next set of results for your original query.  __If the cursor is used in conjunction with other filters, it takes precedence and other filters are ignored.__

try {
    $result = $apiInstance->accountTransactionsGet($merchantId, $paymentProvider, $bankAccountId, $signature, $clientId, $operationId, $dateFrom, $dateTo, $currency, $size, $page, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountInformationApi->accountTransactionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process. |
 **paymentProvider** | **string**| Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint. |
 **bankAccountId** | **string**| API payment account identifier from the response to a query on the list of accounts. |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Identification of client (end-user). &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. | [optional]
 **operationId** | [**string**](../Model/.md)| End-user identifier assigned by Finbricks.com. &#x60;clientId&#x60; or &#x60;operationId&#x60; is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers). | [optional]
 **dateFrom** | **\DateTime**| Date of the start of required transaction history. Format yyyy-MM-dd. | [optional]
 **dateTo** | **\DateTime**| Date of the end of required transaction history [inclusive]. Format yyyy-MM-dd. | [optional]
 **currency** | **string**| Account currency. CurrencyCode, ISO 4217. | [optional]
 **size** | **float**| Paging. Number of entries per page. There is a limit 50 per page to the number of records that helps prevent a bank request from timeouting. | [optional]
 **page** | **float**| Paging. Required page. Default: 0 | [optional]
 **cursor** | **string**| A pagination cursor returned by a previous call to this endpoint. A cursor is a part of links.value response field. Provide this value to retrieve the next set of results for your original query.  __If the cursor is used in conjunction with other filters, it takes precedence and other filters are ignored.__ | [optional]

### Return type

[**\Finbricks\Api\Info\Model\AccountTransactions**](../Model/AccountTransactions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
