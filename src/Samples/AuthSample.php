<?php

namespace Finbricks\Sdk\Samples;

use Finbricks\Api\AuthApi;
use Finbricks\ApiException;
use Finbricks\Configuration;
use Finbricks\Model\AuthenticateRequest;
use Finbricks\Sdk\Client\FinbricksClient;
use Finbricks\Sdk\Constants;
use Finbricks\Sdk\Encryptor\AsymmetricEncryptor;
use GuzzleHttp\Client;

class AuthSample
{

    /**
     * @var Client
     */
    private $client;

    /**
     * @var AuthApi
     */
    private $authApi;

    /**
     * @var AsymmetricEncryptor
     */
    private $encryptor;

    public function __construct()
    {
        $this->encryptor = new AsymmetricEncryptor(Constants::PRIVATE_KEY); // Asymmetric encryptor

        $this->client = (new FinbricksClient($this->encryptor))->getClient(); // Htpp Client with Log and encryptor interceptor
//        OR if we  want to compute signature always before each request
//        $this->client = (new FinbricksClient(null))->getClient(); // Htpp Client with Log and without encryptor interceptor

        $authApiConfiguration = new  Configuration(); // Some configuration that we want to change

        $this->authApi = new AuthApi($this->client, $authApiConfiguration); // Instance of api with Http client and Asymmetric encryptor
    }


    public function callAuthWithSignature()
    {
        // Create request
        $request = new AuthenticateRequest();

        $request->setClientId("123");
        $request->setCallbackUrl("https://www.mujweb.cz/callback");
        $request->setScope("AISP_PISP");

        // Compute signature
//        $signature = $this->encryptor->encryptQuery($request->jsonSerialize());

        // Call
        try {
            $response = $this->authApi->authAuthenticatePost("", $request);
//            OR if we do not provide Encryptor for client
//            $response = $this->authApi->authAuthenticatePost($signature, $request);
        } catch (ApiException $e) {
        }
    }
}
