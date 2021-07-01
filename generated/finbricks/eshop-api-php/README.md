# OpenAPIClient-php

Finbricks.com API - E-commerce solution


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
      "url": "https://github.com/finbricks/eshop-api-php.git"
    }
  ],
  "require": {
    "finbricks/eshop-api-php": "*@dev"
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

## API Endpoints

All URIs are relative to *https://api.zaplaceno.cz*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*EshopTransactionApi* | [**eshopPaymentProvidersGet**](docs/Api/EshopTransactionApi.md#eshoppaymentprovidersget) | **GET** /eshop/paymentProviders | Allowed payment providers
*EshopTransactionApi* | [**transactionEshopInitPost**](docs/Api/EshopTransactionApi.md#transactioneshopinitpost) | **POST** /transaction/eshop/init | Transaction initialization
*EshopTransactionApi* | [**transactionEshopStatusGet**](docs/Api/EshopTransactionApi.md#transactioneshopstatusget) | **GET** /transaction/eshop/status | Transaction status
*EshopTransactionApi* | [**transactionZaplacenoplusInitPost**](docs/Api/EshopTransactionApi.md#transactionzaplacenoplusinitpost) | **POST** /transaction/zaplacenoplus/init | Transaction initialization for Zaplaceno PLUS

## Models

- [Error](docs/Model/Error.md)
- [PaymentProvidersEshopResultDTO](docs/Model/PaymentProvidersEshopResultDTO.md)
- [PaymentProvidersEshopResultDTOAllowedBanks](docs/Model/PaymentProvidersEshopResultDTOAllowedBanks.md)
- [TransactionEshopInitDTO](docs/Model/TransactionEshopInitDTO.md)
- [TransactionEshopInitResultDTO](docs/Model/TransactionEshopInitResultDTO.md)
- [TransactionEshopStatusResultDTO](docs/Model/TransactionEshopStatusResultDTO.md)
- [TransactionZaplacenoPlusInitDTO](docs/Model/TransactionZaplacenoPlusInitDTO.md)
- [TransactionZaplacenoPlusInitDTOAllOf](docs/Model/TransactionZaplacenoPlusInitDTOAllOf.md)

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

- API version: `2.2.2`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`