# Finbricks\Api\Auth\AuthApi

All URIs are relative to https://api.finbricks.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authAuthenticatePost()**](AuthApi.md#authAuthenticatePost) | **POST** /auth/authenticate | Authenticate user
[**deleteAllRefreshTokens()**](AuthApi.md#deleteAllRefreshTokens) | **DELETE** /auth/revoke/all | Delete all users&#39; authentications within merchant
[**deleteRefreshToken()**](AuthApi.md#deleteRefreshToken) | **DELETE** /auth/revoke | Delete all existing user authentications
[**getRefreshTokens()**](AuthApi.md#getRefreshTokens) | **GET** /auth/token | Get expiration details of user&#39;s authentication


## `authAuthenticatePost()`

```php
authAuthenticatePost($signature, $authenticateRequest): \Finbricks\Api\Auth\Model\AuthenticateResponse
```

Authenticate user

To access the Account Information Services or to pre-authenticate the user for Payment services, the user must be authenticated in selected bank.  First, the merchant calls the __/auth/authenticate__ service.  If the user is identified by the merchant using `clientId`, the payment gateway verifies whether a valid token to the bank exists for the given user.  If valid authentication exists, the payment gateway returns `auth_approved`. If valid authentication does not exist, the payment gateway returns `need_auth` and a `redirectUrl` to which the user must be redirected in order to authenticate in the bank.  There is a possibility to call auth services without `clientId`, in which case a time-limited `operationId` is generated (see chapter [Identifiers](#section/Overview/Identifiers)).  This `operationId` can be then used in all Account Information Services in `operationId` parameter as a substitution for `clientId`. Be aware of time-limits of such `operationId`. When calling Account Information Services, only one of the above mentioned identifiers should be used, the `clientId` or the `operationId` parameter.  With the given `clientId` or `operationId` it is possible to call the Account Information Services (AISP scope) or use the `clientId` within payment process (/transaction/platform/init, PISP scope) so that the authentication step will be skipped. The user will have to authorize just the payment.  Each authentication is bound via `merchantId`, `clientId` (if used), `provider`, `scope` (if not used, AISP_PISP is set as default). If there is authentication for the above combination in the payment gateway and the merchant changes one of the parameters (e.g. scope), the result is evaluated as `need_auth` and the user must be authenticated again.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Auth\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$authenticateRequest = new \Finbricks\Api\Auth\Model\AuthenticateRequest(); // \Finbricks\Api\Auth\Model\AuthenticateRequest

try {
    $result = $apiInstance->authAuthenticatePost($signature, $authenticateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authAuthenticatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **authenticateRequest** | [**\Finbricks\Api\Auth\Model\AuthenticateRequest**](../Model/AuthenticateRequest.md)|  |

### Return type

[**\Finbricks\Api\Auth\Model\AuthenticateResponse**](../Model/AuthenticateResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAllRefreshTokens()`

```php
deleteAllRefreshTokens($merchantId, $signature)
```

Delete all users' authentications within merchant

The service deletes all existing users' authentications within the merchant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Auth\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = 0d2c62cf-e4f2-41a7-af7e-c7c50e5b9086; // string | Unique merchant identifier assigned by the payment gateway
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).

try {
    $apiInstance->deleteAllRefreshTokens($merchantId, $signature);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteAllRefreshTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier assigned by the payment gateway |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |

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

## `deleteRefreshToken()`

```php
deleteRefreshToken($merchantId, $signature, $clientId, $provider)
```

Delete all existing user authentications

The service deletes all existing user authentications that are identified within the merchnat via `clientId`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Auth\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = 0d2c62cf-e4f2-41a7-af7e-c7c50e5b9086; // string | Unique merchant identifier assigned by the payment gateway
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 0000001; // string | Id identifying the end user at the merchant.
$provider = KB; // string | Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO.

try {
    $apiInstance->deleteRefreshToken($merchantId, $signature, $clientId, $provider);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->deleteRefreshToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier assigned by the payment gateway |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Id identifying the end user at the merchant. |
 **provider** | **string**| Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO. | [optional]

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

## `getRefreshTokens()`

```php
getRefreshTokens($merchantId, $signature, $clientId, $provider): \Finbricks\Api\Auth\Model\RefreshTokenDto[]
```

Get expiration details of user's authentication

It is possible to call the __/auth/token__ service to obtain information about the existence of valid user authentication in the bank. The service returns a list of user authentications that is bind to its `clientId`. The service returns multiple records if there are authentications for different providers (banks) or scopes within one `clientId`.  Please note that the return attribute `validTo` is only indicative, because the client can, for example, invalidate all existing access rights from the environment of his internet banking. On the other hand, the existence of a token at the time of the service call is verified at the bank.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Finbricks\Api\Auth\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = 0d2c62cf-e4f2-41a7-af7e-c7c50e5b9086; // string | Unique merchant identifier assigned by the payment gateway
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 0000001; // string | Id identifying the end user at the merchant.
$provider = KB; // string | Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO.

try {
    $result = $apiInstance->getRefreshTokens($merchantId, $signature, $clientId, $provider);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getRefreshTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantId** | [**string**](../Model/.md)| Unique merchant identifier assigned by the payment gateway |
 **signature** | **string**| Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request). |
 **clientId** | **string**| Id identifying the end user at the merchant. |
 **provider** | **string**| Provider code. Example values KB, AIRBANK, MONETA, CSAS, CSOB, RAIFFEISEN, EQUA, FIO. | [optional]

### Return type

[**\Finbricks\Api\Auth\Model\RefreshTokenDto[]**](../Model/RefreshTokenDto.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
