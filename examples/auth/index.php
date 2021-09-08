<?php

/*************** Prepare configuration  *******************************************************************************/

// Load variables from .env file
use Finbricks\Api\Auth\ApiException;
use Finbricks\Api\Auth\Model\AuthenticateRequest;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Merchant ID from finbricks administration
$merchantId = getenv('merchantId');

// Base URL of finbricks server. api.finbricks.com
$baseUrl = getenv('baseUrl');

// Path where we store our PRIVATE key
$privateKeyFile = getenv('privateKeyPath');

// Read private key as string
$privateKey = file_get_contents($privateKeyFile);

/**************** Making a call to server  ****************************************************************************/

// Create instance of configured SDK
$sdk = new FinbricksSdk($privateKey, $merchantId, $baseUrl);

// Create API for auth call
$authApi = $sdk->getAuthApi();


// Now we need to create POST object
$request = new AuthenticateRequest();

$request->setScope("AISP");
$request->setCallbackUrl("http://my.website.com/callback/auth"); // Callback where we are waiting auth response
$request->setProvider("KB"); // Bank where we want to authorized
$request->setClientId(uniqid()); // Some unique string, for identify user in YOUR system
$request->setMerchantId($merchantId); // MerchantID


try {
    // Make a HTTP call to finbricks server
    $response = $authApi->authAuthenticatePost("", $request); // We dont need to fill signature, because we use middleware in aur FinbricksSdk
    if ($response->getAuthStatus() === "need_auth") {
        // User identified by client ID is not authorized (new user or token is expired)
        // We should redirect him to bank
        $url = $response->getRedirectUrl();
        header("Location: $url");
        exit(0);
    }

    exit(0);
} catch (ApiException $e) { // Some error occurred
    var_dump($e);
    exit($e->getCode());
}
