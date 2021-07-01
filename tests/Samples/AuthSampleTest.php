<?php

namespace Samples;

use Finbricks\Api\Auth\Api\AuthApi;
use Finbricks\Api\Auth\Configuration;
use Finbricks\Api\Auth\Model\AuthenticateRequest;
use Finbricks\Sdk\Client\Enums;
use Finbricks\Sdk\Client\FinbricksClient;
use Finbricks\Sdk\Encryptor\AsymmetricEncryptor;
use GuzzleHttp\Client;
use PHPUnit\Framework\TestCase;

class AuthSampleTest extends TestCase
{
    private const KEY = "-----BEGIN PRIVATE KEY-----
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
lthQRgPfRpnLf+cHN0nvjig/CzSnPkA=
-----END PRIVATE KEY-----";

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

    public function setUp(): void
    {
        $this->encryptor = new AsymmetricEncryptor(self::KEY);
        $this->client = (new FinbricksClient($this->encryptor))->getClient();
        $authApiConfiguration = new  Configuration();
        $authApiConfiguration->setHost("https://api.finbricks.com");
        $this->authApi = new AuthApi($this->client, $authApiConfiguration);
    }


    public function testCallToLocalServer()
    {
        $req = new AuthenticateRequest();

        $req->setScope(Enums::AISP_PISP);
        $req->setClientId("someClientId");
        $req->setCallbackUrl("http://google.com");
        $req->setProvider("KB");
        $req->setMerchantId("3d605d8a-4c32-43ed-bf8b-0ce041d4ef1a");


        $response = $this->authApi->authAuthenticatePost("", $req);


        self::assertTrue(true);
    }

    public function testCallToLocalServerWithCustomSignature()
    {
        $req = new AuthenticateRequest();

        $req->setScope("AISP_PISP");
        $req->setClientId("someClientId");
        $req->setCallbackUrl("http://google.com");
        $req->setProvider("KB");
        $req->setMerchantId("3d605d8a-4c32-43ed-bf8b-0ce041d4ef1a");

        $authApiConfiguration = new  Configuration();
        $authApiConfiguration->setHost("https://api.finbricks.com");
        $this->authApi = new AuthApi(new Client(), $authApiConfiguration);
        $this->authApi->authAuthenticatePost($this->encryptor->encryptQuery(json_decode($req, true)), $req);


        self::assertTrue(true);
    }
}
