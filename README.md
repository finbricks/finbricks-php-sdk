Finbricks PHP SDK
=========================

# Apis

* auth - Authenticate api. All endpoint with suffix /auth/
* info - All endpoint with suffix /account/
* platform - Platforms data
* eshop - Eshop
* status - List of payment providers and status, outages etc..
* recurring_payment - Recurring payments apis

# Basic usage

## Install

Finbricks SDK can be installed by composer

```bash
    composer require finbricks/finbricks-php-sdk
```

## Set up

* Prepare private `key` and `merchantId`, you need this data for call API

## Using

### Create a basic client
```php
$encryptor = new AsymmetricEncryptor($key="here is your private key.");
$client = (new FinbricksClient($encryptor))->getClient();
$authApiConfiguration = new  Configuration(); // All api have configuration please be sure you import the correct one
$authApiConfiguration->setHost("https://api.zaplaceno.cleverlance.com"); // Here paste where is API server (sandbox or prod)
$authApi = new AuthApi($this->client, $authApiConfiguration); // Instantiate SDK with client and configuration.

```

### Calling api
From the previous step you have the working instance of SDK (in our case AuthApi). Now you can simply call method to get
info or to make a transaction.

```php
$req = new AuthenticateRequest(); // Create a class of request 
$req->setScope(Enums::AISP_PISP); // You can use Enums class for scopes
$req->setClientId("someClientId");
$req->setCallbackUrl("http://google.com");
$req->setProvider("KB");
$req->setMerchantId("4d605d8e-4c31-43eb-bf8b-0ce041d4ef1b"); // Here is your merchantID

// Make a call of api and receive response
$response = $this->authApi->authAuthenticatePost("", $req); // If you generate a client with AsymmetricEncryptor then you dont need to paste signature. Fill it with empty string.
```
