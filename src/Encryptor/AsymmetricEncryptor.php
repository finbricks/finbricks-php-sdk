<?php


namespace Finbricks\Sdk\Encryptor;

class AsymmetricEncryptor extends AEncryptor
{
    /**
     * @var string
     */
    private $asymmetricKey;


    /**
     * SymmetricEncryptor constructor.
     * @param string $asymmetricKey Key from backoffice
     */
    public function __construct(string $asymmetricKey)
    {
        $this->asymmetricKey = $asymmetricKey;
    }


    public function encryptQuery(array $data): string
    {
        $signature = "";
        $separatedString = $this->makeStringForSign($data);
        openssl_sign(
            $separatedString,
            $signature,
            $this->asymmetricKey,
            "sha256WithRSAEncryption"
        );
        return base64_encode($signature);
    }
}
