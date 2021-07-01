# OpenAPIClient-php

Finbricks.com API - User authentication services


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/finbricks/auth-api-php.git"
    }
  ],
  "require": {
    "finbricks/auth-api-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api.zaplaceno.cz*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AuthApi* | [**authAuthenticatePost**](docs/Api/AuthApi.md#authauthenticatepost) | **POST** /auth/authenticate | Authenticate user
*AuthApi* | [**deleteAllRefreshTokens**](docs/Api/AuthApi.md#deleteallrefreshtokens) | **DELETE** /auth/revoke/all | Delete all users&#39; authentications within merchant
*AuthApi* | [**deleteRefreshToken**](docs/Api/AuthApi.md#deleterefreshtoken) | **DELETE** /auth/revoke | Delete all existing user authentications
*AuthApi* | [**getRefreshTokens**](docs/Api/AuthApi.md#getrefreshtokens) | **GET** /auth/token | Get expiration details of user&#39;s authentication

## Models

- [AuthenticateRequest](docs/Model/AuthenticateRequest.md)
- [AuthenticateResponse](docs/Model/AuthenticateResponse.md)
- [Error](docs/Model/Error.md)
- [RefreshTokenDto](docs/Model/RefreshTokenDto.md)

## Authorization
All endpoints do not require authorization.
## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.2.3`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`