# Finbricks\Api\Split\SplitPaymentApi

All URIs are relative to https://api.finbricks.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**splitPaymentInit()**](SplitPaymentApi.md#splitPaymentInit) | **POST** /splitPayment/init | Split payment initiation


## `splitPaymentInit()`

```php
splitPaymentInit($signature, $splitPaymentInit): \Finbricks\Api\Split\Model\InitResult
```

Split payment initiation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Split\Api\SplitPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$splitPaymentInit = new \Finbricks\Api\Split\Model\SplitPaymentInit(); // \Finbricks\Api\Split\Model\SplitPaymentInit

try {
    $result = $apiInstance->splitPaymentInit($signature, $splitPaymentInit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SplitPaymentApi->splitPaymentInit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **splitPaymentInit** | [**\Finbricks\Api\Split\Model\SplitPaymentInit**](../Model/SplitPaymentInit.md)|  |

### Return type

[**\Finbricks\Api\Split\Model\InitResult**](../Model/InitResult.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
