# Finbricks\Api\Platform\PlatformTransactionApi

All URIs are relative to https://api.finbricks.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**transactionPlatformInitPost()**](PlatformTransactionApi.md#transactionPlatformInitPost) | **POST** /transaction/platform/init | Transaction initialization
[**transactionPlatformStatusGet()**](PlatformTransactionApi.md#transactionPlatformStatusGet) | **GET** /transaction/platform/status | Transaction status


## `transactionPlatformInitPost()`

```php
transactionPlatformInitPost($signature, $transactionInitDTO): \Finbricks\Api\Platform\Model\TransactionInitResultDTO
```

Transaction initialization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Platform\Api\PlatformTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$transactionInitDTO = new \Finbricks\Api\Platform\Model\TransactionInitDTO(); // \Finbricks\Api\Platform\Model\TransactionInitDTO

try {
    $result = $apiInstance->transactionPlatformInitPost($signature, $transactionInitDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformTransactionApi->transactionPlatformInitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **transactionInitDTO** | [**\Finbricks\Api\Platform\Model\TransactionInitDTO**](../Model/TransactionInitDTO.md)|  |

### Return type

[**\Finbricks\Api\Platform\Model\TransactionInitResultDTO**](../Model/TransactionInitResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionPlatformStatusGet()`

```php
transactionPlatformStatusGet($merchantId, $merchantTransactionId, $signature): \Finbricks\Api\Platform\Model\TransactionStatusResultDTO
```

Transaction status

The endpoint is used to verify the status of the transaction. The merchant should call this endpoint after receiving a callback containing merchantTransactionId, thus informing you that the transaction was processed either successfully or with an error.  The recommended call frequency for this service is as follows:  * Immediately after receiving the callback for the initiated payment, when the end-user is present at the customer's front end. * Possibly again in a matter of seconds, if the end-user is present.  Furthermore, it is not assumed that the end-user is present at the front-end and it is pointless to check the status in seconds or minutes. Therefore, we recommend calling the endpoint after 5 minutes after callback and further depending on the subsequent business processes: * before order processing, e.g. twice a day or * once in 2 hours  We recommend that you do not call the service more often than once an hour, because the probability of a change of status in the bank is rather small.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Platform\Api\PlatformTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$merchantTransactionId = e284d244-f2ce-4ee6-9ae3-27869cbd8d0f; // string | Unique transaction identifier generated by merchant
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).

try {
    $result = $apiInstance->transactionPlatformStatusGet($merchantId, $merchantTransactionId, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlatformTransactionApi->transactionPlatformStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **merchantTransactionId** | [**string**](../Model/.md)| Unique transaction identifier generated by merchant |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |

### Return type

[**\Finbricks\Api\Platform\Model\TransactionStatusResultDTO**](../Model/TransactionStatusResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
