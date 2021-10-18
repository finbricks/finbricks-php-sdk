# Finbricks\Api\Status\StatusApi

All URIs are relative to https://api.zaplaceno.cz.

Method | HTTP request | Description
------------- | ------------- | -------------
[**statusPaymentProviders()**](StatusApi.md#statusPaymentProviders) | **GET** /status/paymentProviders | List of payment providers with their statuses.


## `statusPaymentProviders()`

```php
statusPaymentProviders($merchantId, $signature, $paymentProvider): \Finbricks\Api\Status\Model\PaymentProviders
```

List of payment providers with their statuses.

Get information about supported payment providers and their statuses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Status\Api\StatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$paymentProvider = KB; // string | Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO...

try {
    $result = $apiInstance->statusPaymentProviders($merchantId, $signature, $paymentProvider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatusApi->statusPaymentProviders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **paymentProvider** | **string**| Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO... | [optional]

### Return type

[**\Finbricks\Api\Status\Model\PaymentProviders**](../Model/PaymentProviders.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
