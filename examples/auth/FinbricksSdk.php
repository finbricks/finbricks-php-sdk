<?php

use Finbricks\Api\Auth\Api\AuthApi;
use Finbricks\Api\Auth\Configuration as AuthConfiguration;
use Finbricks\Sdk\Client\FinbricksClient;
use Finbricks\Sdk\Encryptor\AsymmetricEncryptor;
use GuzzleHttp\Client;
use GuzzleHttp\Middleware;
use Psr\Http\Message\RequestInterface;

class FinbricksSdk
{
    public function __construct(public string $privateKey, public string $merchantId, public string $baseUrl)
    {
    }



    public function getClient(): Client
    {
        if (isset($this->client)) {
            return $this->client;
        }

        $this->encryptor = new AsymmetricEncryptor($this->privateKey);
        $fbClient = new FinbricksClient($this->encryptor);


        $fbClient->getStack()->push(Middleware::mapRequest(function (RequestInterface $request) {
            $request->getHeaders()["x-request-id"] = uniqid();
            return $request;
        }));


        $this->client = $fbClient->getClient();

        return $this->client;
    }

    public function getAuthApi(): AuthApi
    {
        if (isset($this->authApi)) {
            return $this->authApi;
        }

        $configuration = new AuthConfiguration();
        $configuration->setHost($this->baseUrl);


        $this->authApi = new AuthApi($this->getClient(), $configuration);
        return $this->authApi;
    }

}