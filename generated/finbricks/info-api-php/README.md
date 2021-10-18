# OpenAPIClient-php

Finbricks.com API - Account information


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
      "url": "https://github.com/finbricks/info-api-php.git"
    }
  ],
  "require": {
    "finbricks/info-api-php": "*@dev"
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




$apiInstance = new Finbricks\Api\Info\Api\BankAccountInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$merchantId = 'merchantId_example'; // string | Unique merchant identifier from merchant registration process.
$paymentProvider = KB; // string | Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint.
$bankAccountId = y3FeaZyvItso-clhpV18X60orMVgulFdBx7; // string | API payment account identifier from the response to a query on the list of accounts.
$signature = 'signature_example'; // string | Signature of the request. For more information, see chapter [Signing the request](#section/Security/Signing-the-request).
$clientId = 'clientId_example'; // string | Identification of client (end-user). `clientId` or `operationId` is required.
$operationId = 'operationId_example'; // string | End-user identifier assigned by Finbricks.com. `clientId` or `operationId` is required. For more information, see chapter [Identifiers](#section/Overview/Identifiers).

try {
    $result = $apiInstance->accountBalanceGet($merchantId, $paymentProvider, $bankAccountId, $signature, $clientId, $operationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BankAccountInformationApi->accountBalanceGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.finbricks.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BankAccountInformationApi* | [**accountBalanceGet**](docs/Api/BankAccountInformationApi.md#accountbalanceget) | **GET** /account/balance | Balances for user&#39;s accounts
*BankAccountInformationApi* | [**accountListGet**](docs/Api/BankAccountInformationApi.md#accountlistget) | **GET** /account/list | List of user&#39;s accounts
*BankAccountInformationApi* | [**accountListWithBalanceGet**](docs/Api/BankAccountInformationApi.md#accountlistwithbalanceget) | **GET** /account/listWithBalance | User&#39;s accounts with balances
*BankAccountInformationApi* | [**accountTransactionsGet**](docs/Api/BankAccountInformationApi.md#accounttransactionsget) | **GET** /account/transactions | User&#39;s account transactions

## Models

- [Account](docs/Model/Account.md)
- [AccountBalance](docs/Model/AccountBalance.md)
- [AccountIdentification](docs/Model/AccountIdentification.md)
- [AccountList](docs/Model/AccountList.md)
- [AccountServicer](docs/Model/AccountServicer.md)
- [AccountTransactions](docs/Model/AccountTransactions.md)
- [Amount](docs/Model/Amount.md)
- [AmountDetails](docs/Model/AmountDetails.md)
- [BankTransactionCode](docs/Model/BankTransactionCode.md)
- [BankTransactionCodeProprietary](docs/Model/BankTransactionCodeProprietary.md)
- [BookingDate](docs/Model/BookingDate.md)
- [Charges](docs/Model/Charges.md)
- [ClearingSystemIdentification](docs/Model/ClearingSystemIdentification.md)
- [ClearingSystemMemberIdentification](docs/Model/ClearingSystemMemberIdentification.md)
- [CounterValueAmount](docs/Model/CounterValueAmount.md)
- [CreditDebitIndicator](docs/Model/CreditDebitIndicator.md)
- [Creditor](docs/Model/Creditor.md)
- [CreditorAccount](docs/Model/CreditorAccount.md)
- [CreditorAccountIdentification](docs/Model/CreditorAccountIdentification.md)
- [CreditorAccountIdentificationOther](docs/Model/CreditorAccountIdentificationOther.md)
- [CreditorAgent](docs/Model/CreditorAgent.md)
- [CreditorIdentification](docs/Model/CreditorIdentification.md)
- [CreditorReferenceInformation](docs/Model/CreditorReferenceInformation.md)
- [CurrencyExchange](docs/Model/CurrencyExchange.md)
- [Debtor](docs/Model/Debtor.md)
- [DebtorAccount](docs/Model/DebtorAccount.md)
- [DebtorAccountIdentification](docs/Model/DebtorAccountIdentification.md)
- [DebtorAccountIdentificationOther](docs/Model/DebtorAccountIdentificationOther.md)
- [DebtorAgent](docs/Model/DebtorAgent.md)
- [DebtorIdentification](docs/Model/DebtorIdentification.md)
- [EntryDetails](docs/Model/EntryDetails.md)
- [Error](docs/Model/Error.md)
- [FinancialInstitutionIdentification](docs/Model/FinancialInstitutionIdentification.md)
- [FinancialInstitutionIdentificationOther](docs/Model/FinancialInstitutionIdentificationOther.md)
- [InstructedAmount](docs/Model/InstructedAmount.md)
- [Link](docs/Model/Link.md)
- [OrganisationIdentification](docs/Model/OrganisationIdentification.md)
- [Other](docs/Model/Other.md)
- [OtherSchemeName](docs/Model/OtherSchemeName.md)
- [PostalAddress](docs/Model/PostalAddress.md)
- [PrivateIdentification](docs/Model/PrivateIdentification.md)
- [ProprietaryAmount](docs/Model/ProprietaryAmount.md)
- [Purpose](docs/Model/Purpose.md)
- [RelatedAgents](docs/Model/RelatedAgents.md)
- [RelatedParties](docs/Model/RelatedParties.md)
- [RelatedPartiesProprietary](docs/Model/RelatedPartiesProprietary.md)
- [RelatedPartiesProprietaryParty](docs/Model/RelatedPartiesProprietaryParty.md)
- [RemittanceInformation](docs/Model/RemittanceInformation.md)
- [Structured](docs/Model/Structured.md)
- [Transaction](docs/Model/Transaction.md)
- [TransactionAmount](docs/Model/TransactionAmount.md)
- [TransactionDetails](docs/Model/TransactionDetails.md)
- [TransactionDetailsReferences](docs/Model/TransactionDetailsReferences.md)
- [UltimateCreditor](docs/Model/UltimateCreditor.md)
- [UltimateCreditorIdentification](docs/Model/UltimateCreditorIdentification.md)
- [UltimateDebtor](docs/Model/UltimateDebtor.md)
- [UltimateDebtorIdentification](docs/Model/UltimateDebtorIdentification.md)
- [ValueDate](docs/Model/ValueDate.md)

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

- API version: `1.1.0`
    - Package version: `0.0.1`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
