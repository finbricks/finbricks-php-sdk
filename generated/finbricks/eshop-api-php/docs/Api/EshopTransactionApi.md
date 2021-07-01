# Finbricks\Api\Eshop\EshopTransactionApi

All URIs are relative to https://api.zaplaceno.cz.

Method | HTTP request | Description
------------- | ------------- | -------------
[**eshopPaymentProvidersGet()**](EshopTransactionApi.md#eshopPaymentProvidersGet) | **GET** /eshop/paymentProviders | Allowed payment providers
[**transactionEshopInitPost()**](EshopTransactionApi.md#transactionEshopInitPost) | **POST** /transaction/eshop/init | Transaction initialization
[**transactionEshopStatusGet()**](EshopTransactionApi.md#transactionEshopStatusGet) | **GET** /transaction/eshop/status | Transaction status
[**transactionZaplacenoplusInitPost()**](EshopTransactionApi.md#transactionZaplacenoplusInitPost) | **POST** /transaction/zaplacenoplus/init | Transaction initialization for Zaplaceno PLUS


## `eshopPaymentProvidersGet()`

```php
eshopPaymentProvidersGet($merchantId, $signature): \Finbricks\Api\Eshop\Model\PaymentProvidersEshopResultDTO
```

Allowed payment providers

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Eshop\Api\EshopTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$signature = 2aff7a414ad975a704cbc2a4c917cde862b63206a760ea143f03fdbf9caf4fa2; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).

try {
    $result = $apiInstance->eshopPaymentProvidersGet($merchantId, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EshopTransactionApi->eshopPaymentProvidersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |

### Return type

[**\Finbricks\Api\Eshop\Model\PaymentProvidersEshopResultDTO**](../Model/PaymentProvidersEshopResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionEshopInitPost()`

```php
transactionEshopInitPost($signature, $transactionEshopInitDTO): \Finbricks\Api\Eshop\Model\TransactionEshopInitResultDTO
```

Transaction initialization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Eshop\Api\EshopTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signature = 2aff7a414ad975a704cbc2a4c917cde862b63206a760ea143f03fdbf9caf4fa2; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$transactionEshopInitDTO = new \Finbricks\Api\Eshop\Model\TransactionEshopInitDTO(); // \Finbricks\Api\Eshop\Model\TransactionEshopInitDTO

try {
    $result = $apiInstance->transactionEshopInitPost($signature, $transactionEshopInitDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EshopTransactionApi->transactionEshopInitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **transactionEshopInitDTO** | [**\Finbricks\Api\Eshop\Model\TransactionEshopInitDTO**](../Model/TransactionEshopInitDTO.md)|  |

### Return type

[**\Finbricks\Api\Eshop\Model\TransactionEshopInitResultDTO**](../Model/TransactionEshopInitResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionEshopStatusGet()`

```php
transactionEshopStatusGet($merchantId, $merchantTransactionId, $signature): \Finbricks\Api\Eshop\Model\TransactionEshopStatusResultDTO
```

Transaction status

The endpoint is used to verify the status of the transaction. The merchant should call this endpoint after receiving a callback containing merchantTransactionId, thus informing you that the transaction was processed either successfully or with an error.  The recommended call frequency for this service is as follows:  * Immediately after receiving the callback for the initiated payment, when the end-user is present at the customer's front end. * Possibly again in a matter of seconds, if the end-user is present.  Furthermore, it is not assumed that the end-user is present at the front-end and it is pointless to check the status in seconds or minutes. Therefore, we recommend calling the endpoint after 5 minutes after callback and further depending on the subsequent business processes: * before order processing, e.g. twice a day or * once in 2 hours  We recommend that you do not call the service more often than once an hour, because the probability of a change of status in the bank is rather small.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Eshop\Api\EshopTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$merchantTransactionId = e284d244-f2ce-4ee6-9ae3-27869cbd8d0f; // string | Unique transaction identifier generated by merchant
$signature = 2aff7a414ad975a704cbc2a4c917cde862b63206a760ea143f03fdbf9caf4fa2; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).

try {
    $result = $apiInstance->transactionEshopStatusGet($merchantId, $merchantTransactionId, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EshopTransactionApi->transactionEshopStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **merchantTransactionId** | [**string**](../Model/.md)| Unique transaction identifier generated by merchant |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |

### Return type

[**\Finbricks\Api\Eshop\Model\TransactionEshopStatusResultDTO**](../Model/TransactionEshopStatusResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `transactionZaplacenoplusInitPost()`

```php
transactionZaplacenoplusInitPost($signature, $transactionZaplacenoPlusInitDTO): \Finbricks\Api\Eshop\Model\TransactionEshopInitResultDTO
```

Transaction initialization for Zaplaceno PLUS

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Eshop\Api\EshopTransactionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signature = 2aff7a414ad975a704cbc2a4c917cde862b63206a760ea143f03fdbf9caf4fa2; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$transactionZaplacenoPlusInitDTO = new \Finbricks\Api\Eshop\Model\TransactionZaplacenoPlusInitDTO(); // \Finbricks\Api\Eshop\Model\TransactionZaplacenoPlusInitDTO

try {
    $result = $apiInstance->transactionZaplacenoplusInitPost($signature, $transactionZaplacenoPlusInitDTO);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EshopTransactionApi->transactionZaplacenoplusInitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **transactionZaplacenoPlusInitDTO** | [**\Finbricks\Api\Eshop\Model\TransactionZaplacenoPlusInitDTO**](../Model/TransactionZaplacenoPlusInitDTO.md)|  |

### Return type

[**\Finbricks\Api\Eshop\Model\TransactionEshopInitResultDTO**](../Model/TransactionEshopInitResultDTO.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
