# Finbricks\Api\BankId\BankIdApi

All URIs are relative to https://api.finbricks.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankIdAuthenticate()**](BankIdApi.md#bankIdAuthenticate) | **POST** /bankId/authenticate | Get redirect url for end-user to BankId authentication
[**bankIdBanks()**](BankIdApi.md#bankIdBanks) | **GET** /bankId/banks | List of banks supported by BankId.
[**bankIdConnect()**](BankIdApi.md#bankIdConnect) | **GET** /bankId/connect | Returns basic Claims about the authenticated End-User
[**bankIdDelete()**](BankIdApi.md#bankIdDelete) | **DELETE** /bankId/revoke | Delete all existing user authentications
[**bankIdProfileGet()**](BankIdApi.md#bankIdProfileGet) | **GET** /bankId/profile | Returns an extended (down to AML) set of authenticated End-User information.


## `bankIdAuthenticate()`

```php
bankIdAuthenticate($signature, $bankIdAuthRequest): \Finbricks\Api\BankId\Model\BankIdAuthResponse
```

Get redirect url for end-user to BankId authentication

This endpoint serves as a starting point, which can be used to obtain a link to the end user's login in a bank that supports bankId.  Supported scopeGroups for /bankId/connect endpoint:  * __CONNECT__   * user id   * name (name, given_name, family_name, middle_name, nickname, preferred_username)   * phonenumber   * email  Supported scopeGroups for /bankId/profile endpoint:  * __KYC_BASIC__   * *all from CONNECT* plus:   * addresses (addresses.type, addresses.street, addresses.buildingapartment, addresses.streetnumber, addresses.city, addresses.zipcode, addresses.country, ruian_reference)   * birthdate   * birthnumber   * titles   * gender * __KYC_PLUS__   * *all from KYC_BASIC* plus:   * birthplace   * idcards (idcards.type, idcards.description, idcards.country, idcards.number, idcards.valid_to, issuer, issue_date)   * legalstatus   * maritalstatus   * paymentAccounts * __AML__   * *all from KYC_PLUS* plus:   * AML verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\BankId\Api\BankIdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$bankIdAuthRequest = new \Finbricks\Api\BankId\Model\BankIdAuthRequest(); // \Finbricks\Api\BankId\Model\BankIdAuthRequest

try {
    $result = $apiInstance->bankIdAuthenticate($signature, $bankIdAuthRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankIdApi->bankIdAuthenticate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **bankIdAuthRequest** | [**\Finbricks\Api\BankId\Model\BankIdAuthRequest**](../Model/BankIdAuthRequest.md)|  |

### Return type

[**\Finbricks\Api\BankId\Model\BankIdAuthResponse**](../Model/BankIdAuthResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankIdBanks()`

```php
bankIdBanks($merchantId, $signature): \Finbricks\Api\BankId\Model\Banks
```

List of banks supported by BankId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\BankId\Api\BankIdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).

try {
    $result = $apiInstance->bankIdBanks($merchantId, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankIdApi->bankIdBanks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |

### Return type

[**\Finbricks\Api\BankId\Model\Banks**](../Model/Banks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankIdConnect()`

```php
bankIdConnect($merchantId, $clientIdForBankId, $provider, $signature): \Finbricks\Api\BankId\Model\UserInfo
```

Returns basic Claims about the authenticated End-User

The Connect Endpoint is resource that returns user data for authenticated end-user.  Connect endpoint is intended primarily for frequently performed identification and authentication, such as repeated login processes to the system/application.  Access is authorized using a valid end-user access_token that was obtained from a completed login flow (/bankId/authenticate).  ScopeGroup is set to `CONNECT`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\BankId\Api\BankIdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$clientIdForBankId = 0000001; // string | Id identifying the end user at the merchant.
$provider = CSAS; // string | Provider code. Identifier of the bank where the end user authenticates. Example values CSOB, CSAS.
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).

try {
    $result = $apiInstance->bankIdConnect($merchantId, $clientIdForBankId, $provider, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankIdApi->bankIdConnect: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **clientIdForBankId** | **string**| Id identifying the end user at the merchant. |
 **provider** | **string**| Provider code. Identifier of the bank where the end user authenticates. Example values CSOB, CSAS. |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |

### Return type

[**\Finbricks\Api\BankId\Model\UserInfo**](../Model/UserInfo.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankIdDelete()`

```php
bankIdDelete($merchantId, $signature, $clientIdForBankId, $provider)
```

Delete all existing user authentications

TODO - This endpoint is inteded for end user revocation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\BankId\Api\BankIdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientIdForBankId = 0000001; // string | Id identifying the end user at the merchant.
$provider = CSAS; // string | Provider code. Identifier of the bank where the end user authenticates. Example values CSOB, CSAS.

try {
    $apiInstance->bankIdDelete($merchantId, $signature, $clientIdForBankId, $provider);
} catch (Exception $e) {
    echo 'Exception when calling BankIdApi->bankIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientIdForBankId** | **string**| Id identifying the end user at the merchant. |
 **provider** | **string**| Provider code. Identifier of the bank where the end user authenticates. Example values CSOB, CSAS. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bankIdProfileGet()`

```php
bankIdProfileGet($merchantId, $clientIdForBankId, $provider, $scopeGroup, $signature): \Finbricks\Api\BankId\Model\Profile
```

Returns an extended (down to AML) set of authenticated End-User information.

Unlike Connect, the Profile API is designed primarily to perform KYC or AML client authentication. This corresponds to a much more extensive range of data provided. For supported scopes and claims see desctription of `/bankId/authenticate` endpoint.  Access is authorized using a valid end-user access_token that was obtained from a completed login flow (/bankId/authenticate).  Use one of listed `scopeGroup`: * KYC_BASIC * KYC_PLUS * AML

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\BankId\Api\BankIdApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = c3073b9d-edd0-49f2-a28d-b7ded8ff9a8b; // string | Unique merchant identifier from merchant registration process
$clientIdForBankId = 0000001; // string | Id identifying the end user at the merchant.
$provider = CSAS; // string | Provider code. Identifier of the bank where the end user authenticates. Example values CSOB, CSAS.
$scopeGroup = KYC_BASIC; // string | Scope group defines, what scopes will be requested when authentication in the bank. For more information see description of `/bankId/authenticate` endpoint.
$signature = d7fILo5uES9aX/uHgz/N4qZq2MN5lKnxv6HzQx7gVaXcMSRwzcc+k8FXWcyA3FzC5Ps0kxmiwSkR8Rco6vFsyfo3nubtuqPByfhV9kZ5gG4o3JUZAchZL99M6zX4uVBVMs+DWuUX80jlHVOk6DLsOYMoMVEoTAoPUQL22GsPelMFG9ZyujbNAY23jKJxi/Y89s2/n5+OsIG0+LlDD1fpxbROzPQcXj2dZXGI7CqTEAEQvnS0wCJvpJPdxcyKxF+F7wpmlzJLD3kMA8w6ffw4O8DX00KJOJv2ROLd3u1whtLqO7unbHYkNVk05q6gT4nl1TMkKtZP0I/dCuGrWzf0QlBTLExK2JTYpj3mvKuWBJWcJDb61sAn3r+SE7zltmY9cqgnX9UId8Ax97ToqwGl6GUFv47LN+gOp88V7H4HIGu8C1+VF0OxRgIerSrKKHg0GgoxBWkT8XJr3ULdegE4AtQqQIpZZZPE3ios5+3LU/HjlNQnpoMwgcPPZE4UX5vN2uRIYkugcTn7CF13OTX9Qdqfy21gvO9Jbu+pydlyvod6HyvDiEv4W1v8Nex1yrS7rVW8vkufb8K/aTt9LxZxb+4ZM4c6Zd0n+FwkZSma25mNTNOAwJ321ev82PTLuw8mGqM8oPZKSR+sU0WVrzOQvpdBKwjgryKLoS8AoiPSoxY=; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).

try {
    $result = $apiInstance->bankIdProfileGet($merchantId, $clientIdForBankId, $provider, $scopeGroup, $signature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankIdApi->bankIdProfileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier from merchant registration process |
 **clientIdForBankId** | **string**| Id identifying the end user at the merchant. |
 **provider** | **string**| Provider code. Identifier of the bank where the end user authenticates. Example values CSOB, CSAS. |
 **scopeGroup** | **string**| Scope group defines, what scopes will be requested when authentication in the bank. For more information see description of &#x60;/bankId/authenticate&#x60; endpoint. |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |

### Return type

[**\Finbricks\Api\BankId\Model\Profile**](../Model/Profile.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
