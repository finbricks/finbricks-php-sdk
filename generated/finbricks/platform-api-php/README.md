# OpenAPIClient-php

Finbricks.com API - Payment processing


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
      "url": "https://github.com/finbricks/platform-api-php.git"
    }
  ],
  "require": {
    "finbricks/platform-api-php": "*@dev"
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

## API Endpoints

All URIs are relative to *https://api.zaplaceno.cz*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*PlatformTransactionApi* | [**transactionPlatformInitPost**](docs/Api/PlatformTransactionApi.md#transactionplatforminitpost) | **POST** /transaction/platform/init | Transaction initialization
*PlatformTransactionApi* | [**transactionPlatformStatusGet**](docs/Api/PlatformTransactionApi.md#transactionplatformstatusget) | **GET** /transaction/platform/status | Transaction status

## Models

- [Error](docs/Model/Error.md)
- [TransactionInitDTO](docs/Model/TransactionInitDTO.md)
- [TransactionInitResultDTO](docs/Model/TransactionInitResultDTO.md)
- [TransactionStatusResultDTO](docs/Model/TransactionStatusResultDTO.md)

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

- API version: `1.2.0`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`