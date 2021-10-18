# Finbricks\Api\Recurring\RecurringPaymentsApi

All URIs are relative to https://api.finbricks.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**recurringPaymentDetail()**](RecurringPaymentsApi.md#recurringPaymentDetail) | **GET** /recurringPayments/detail | Detail of user&#39;s recurring payment
[**recurringPaymentsInit()**](RecurringPaymentsApi.md#recurringPaymentsInit) | **POST** /recurringPayments/init | Recurring payment inicialization
[**recurringPaymentsList()**](RecurringPaymentsApi.md#recurringPaymentsList) | **GET** /recurringPayments/list | List of user&#39;s recurring payments
[**recurringPaymentsListWithDetail()**](RecurringPaymentsApi.md#recurringPaymentsListWithDetail) | **GET** /recurringPayments/listWithDetail | List of user&#39;s recurring payments with details
[**recurringPaymentsStatus()**](RecurringPaymentsApi.md#recurringPaymentsStatus) | **GET** /recurringPayments/status | Transaction status


## `recurringPaymentDetail()`

```php
recurringPaymentDetail($merchantId, $paymentProvider, $transactionIdentification, $signature, $clientId, $operationId): \Finbricks\Api\Recurring\Model\RecurringPaymentDetail
```

Detail of user's recurring payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Recurring\Api\RecurringPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$paymentProvider = KB; // string | Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO...
$transactionIdentification = 3G3148492; // string | Identifier of recurring payment instruction.
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 'clientId_example'; // string | Identification of the client (end-user).
$operationId = 'operationId_example'; // string | End-user identifier assigned by Finbricks.com. For more information, see chapter [Identifiers](#section/Overview/Identifiers).

try {
    $result = $apiInstance->recurringPaymentDetail($merchantId, $paymentProvider, $transactionIdentification, $signature, $clientId, $operationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringPaymentsApi->recurringPaymentDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **paymentProvider** | **string**| Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO... |
 **transactionIdentification** | **string**| Identifier of recurring payment instruction. |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Identification of the client (end-user). | [optional]
 **operationId** | [**string**](../Model/.md)| End-user identifier assigned by Finbricks.com. For more information, see chapter [Identifiers](#section/Overview/Identifiers). | [optional]

### Return type

[**\Finbricks\Api\Recurring\Model\RecurringPaymentDetail**](../Model/RecurringPaymentDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recurringPaymentsInit()`

```php
recurringPaymentsInit($signature, $recurringPaymentInit): \Finbricks\Api\Recurring\Model\InitResult
```

Recurring payment inicialization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Recurring\Api\RecurringPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$recurringPaymentInit = new \Finbricks\Api\Recurring\Model\RecurringPaymentInit(); // \Finbricks\Api\Recurring\Model\RecurringPaymentInit

try {
    $result = $apiInstance->recurringPaymentsInit($signature, $recurringPaymentInit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringPaymentsApi->recurringPaymentsInit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **recurringPaymentInit** | [**\Finbricks\Api\Recurring\Model\RecurringPaymentInit**](../Model/RecurringPaymentInit.md)|  |

### Return type

[**\Finbricks\Api\Recurring\Model\InitResult**](../Model/InitResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recurringPaymentsList()`

```php
recurringPaymentsList($merchantId, $paymentProvider, $signature, $clientId, $operationId, $size, $page): \Finbricks\Api\Recurring\Model\RecurringPaymentsList
```

List of user's recurring payments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Recurring\Api\RecurringPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$paymentProvider = KB; // string | Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO...
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 'clientId_example'; // string | Identification of the client (end-user).
$operationId = 'operationId_example'; // string | End-user identifier assigned by Finbricks.com. For more information, see chapter [Identifiers](#section/Overview/Identifiers).
$size = 10; // int | Paging. Number of entries per page. There is a limit to the number of records that helps prevent a bank request from timeouting.
$page = 0; // int | Paging. Required page. Default: 0

try {
    $result = $apiInstance->recurringPaymentsList($merchantId, $paymentProvider, $signature, $clientId, $operationId, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringPaymentsApi->recurringPaymentsList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **paymentProvider** | **string**| Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO... |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Identification of the client (end-user). | [optional]
 **operationId** | [**string**](../Model/.md)| End-user identifier assigned by Finbricks.com. For more information, see chapter [Identifiers](#section/Overview/Identifiers). | [optional]
 **size** | **int**| Paging. Number of entries per page. There is a limit to the number of records that helps prevent a bank request from timeouting. | [optional]
 **page** | **int**| Paging. Required page. Default: 0 | [optional]

### Return type

[**\Finbricks\Api\Recurring\Model\RecurringPaymentsList**](../Model/RecurringPaymentsList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recurringPaymentsListWithDetail()`

```php
recurringPaymentsListWithDetail($merchantId, $paymentProvider, $signature, $clientId, $operationId, $size, $page): \Finbricks\Api\Recurring\Model\RecurringPaymentsListWithDetail
```

List of user's recurring payments with details

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Recurring\Api\RecurringPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$paymentProvider = KB; // string | Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO...
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 'clientId_example'; // string | Identification of the client (end-user).
$operationId = 'operationId_example'; // string | End-user identifier assigned by Finbricks.com. For more information, see chapter [Identifiers](#section/Overview/Identifiers).
$size = 10; // int | Paging. Number of entries per page. There is a limit to the number of records that helps prevent a bank request from timeouting.
$page = 0; // int | Paging. Required page. Default: 0

try {
    $result = $apiInstance->recurringPaymentsListWithDetail($merchantId, $paymentProvider, $signature, $clientId, $operationId, $size, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringPaymentsApi->recurringPaymentsListWithDetail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **paymentProvider** | **string**| Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO... |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Identification of the client (end-user). | [optional]
 **operationId** | [**string**](../Model/.md)| End-user identifier assigned by Finbricks.com. For more information, see chapter [Identifiers](#section/Overview/Identifiers). | [optional]
 **size** | **int**| Paging. Number of entries per page. There is a limit to the number of records that helps prevent a bank request from timeouting. | [optional]
 **page** | **int**| Paging. Required page. Default: 0 | [optional]

### Return type

[**\Finbricks\Api\Recurring\Model\RecurringPaymentsListWithDetail**](../Model/RecurringPaymentsListWithDetail.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recurringPaymentsStatus()`

```php
recurringPaymentsStatus($merchantId, $merchantTransactionId, $signature): \Finbricks\Api\Recurring\Model\RecurringPaymentStatusResult
```

Transaction status

The endpoint is used to verify the status of the transaction. The merchant should call this endpoint after receiving a callback containing merchantTransactionId, thus informing you that the transaction was processed either successfully or with an error.  The recommended call frequency for this service is as follows:  * Immediately after receiving the callback for the initiated payment, when the end-user is present at the customer's front end. * Possibly again in a matter of seconds, if the end-user is present.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Recurring\Api\RecurringPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$merchantTransactionId = e284d244-f2ce-4ee6-9ae3-27869cbd8d0f; // string | Unique transaction identifier generated by merchant
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).

try {
    $result = $apiInstance->recurringPaymentsStatus($merchantId, $merchantTransactionId, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecurringPaymentsApi->recurringPaymentsStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **merchantTransactionId** | [**string**](../Model/.md)| Unique transaction identifier generated by merchant |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |

### Return type

[**\Finbricks\Api\Recurring\Model\RecurringPaymentStatusResult**](../Model/RecurringPaymentStatusResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
