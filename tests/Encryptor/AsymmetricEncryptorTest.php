<?php

namespace Encryptor;

use Finbricks\Sdk\Encryptor\AsymmetricEncryptor;
use PHPUnit\Framework\TestCase;

class AsymmetricEncryptorTest extends TestCase
{
    /**
     * @var AsymmetricEncryptor
     */
    private $instance;

    protected function setUp(): void
    {
        $this->instance = new AsymmetricEncryptor("-----BEGIN PRIVATE KEY-----
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
aGq6cPsKuiDAyoy70K/35zqNkqQWmbQ=
-----END PRIVATE KEY-----"); // from official documentation
    }


    public function testEncryptQueryShouldReturnValidSignature()
    {
        $jsonData = '{
                        "merchantId": "f807a45b-4e9d-470f-a085-9698bfad030f",
                        "merchantTransactionId": "332fc855-fcde-4ec8-86a1-8de4f5086611",
                        "paymentMethod": "PSD2",
                        "paymentProvider": "AIRBANK",
                        "language": "CZ",
                        "totalPrice": "0.01",
                        "currency": "CZK",
                        "description": "Popis platby",
                        "variableSymbol": "6543218",
                        "callbackUrl": "https://mujeshop.cz/pgw",
                        "constantSymbol": "0308",
                        "specificSymbol": "1234567890"
                    }';
        // Data that we want to send
        $data = json_decode($jsonData, true);
        $actual = $this->instance->encryptQuery($data);

        $expected = "iLwVR9mursSSyZp4piPPCU+4hDj+q4pootCCgOfj80wrwG9zRDlbXrTdZNRVS/4BQQ65QtlvmeVNOZmCCWEN2FBhb4lnv4/iuNg/tRWRIHuARpB/dzH05K758qGNUdG+rOn+4wMW6Er+fVJYiWkzrX4H9waJsWBds8njFsmdm8mdusUI5wKyUIZ8ks7VZS0fxgouSCxz+hHwFgho4xtng06hevf2+H+ffxy4vdrX05yYudEvlpv0lhEkmw5msS+vAyVLdvWKxpTijnhbX55cArgLL+8M91ExUhaJ+J9L9zMSKqzuSYCad0w12BcsATVgZq1a3ZHfrKUQdQQGHa78GRNlV29JbRezciCVUFD0cT/8e8TXrq9srnBRgTeKjFGQeZkCCcoYIveXSS9ZU37nORTCvpmh+F1rv5UbSLLFP53/75tbp+bAWORLMRGhe/B2kxkYKgj+xmZ+kQcMnRbNDYOcFoxiAt0ik9qoBOjarOoyX5JeBV2eyLxJOhS2yw8dpKpEmIDP6oJuUyyeKWhDTn+EWF8AUEk12g0tUAt1ep0bt7T9uOjGW1Ob/HJSx+es033HoVGg16h156N4VegQnRZSdoQVifF+LMMsQSMtFZjR4NKJEo2cgArtXQwuWTkE1KVcBEgrq8QZ7HaAwH/nY4JZ154CxInjhI0sE6S+03A=";

        self::assertEquals($expected, $actual);
    }
}
