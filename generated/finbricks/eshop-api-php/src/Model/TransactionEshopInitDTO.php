<?php
/**
 * TransactionEshopInitDTO
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Finbricks\Api\Eshop
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finbricks.com API - E-commerce solution
 *
 * Finbricks.com API - E-commerce solution
 *
 * The version of the OpenAPI document: 2.3.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finbricks\Api\Eshop\Model;

use \ArrayAccess;
use \Finbricks\Api\Eshop\ObjectSerializer;

/**
 * TransactionEshopInitDTO Class Doc Comment
 *
 * @category Class
 * @description Transaction init object
 * @package  Finbricks\Api\Eshop
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionEshopInitDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionEshopInitDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantId' => 'string',
        'merchantTransactionId' => 'string',
        'paymentMethod' => 'string',
        'paymentProvider' => 'string',
        'language' => 'string',
        'totalPrice' => 'float',
        'currency' => 'string',
        'description' => 'string',
        'variableSymbol' => 'string',
        'callbackUrl' => 'string',
        'constantSymbol' => 'string',
        'specificSymbol' => 'string',
        'creditorAccountIban' => 'string',
        'shoppingCartUrl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchantId' => 'uuid',
        'merchantTransactionId' => 'uuid',
        'paymentMethod' => null,
        'paymentProvider' => null,
        'language' => null,
        'totalPrice' => null,
        'currency' => null,
        'description' => null,
        'variableSymbol' => null,
        'callbackUrl' => null,
        'constantSymbol' => null,
        'specificSymbol' => null,
        'creditorAccountIban' => null,
        'shoppingCartUrl' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantId' => 'merchantId',
        'merchantTransactionId' => 'merchantTransactionId',
        'paymentMethod' => 'paymentMethod',
        'paymentProvider' => 'paymentProvider',
        'language' => 'language',
        'totalPrice' => 'totalPrice',
        'currency' => 'currency',
        'description' => 'description',
        'variableSymbol' => 'variableSymbol',
        'callbackUrl' => 'callbackUrl',
        'constantSymbol' => 'constantSymbol',
        'specificSymbol' => 'specificSymbol',
        'creditorAccountIban' => 'creditorAccountIban',
        'shoppingCartUrl' => 'shoppingCartUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantId' => 'setMerchantId',
        'merchantTransactionId' => 'setMerchantTransactionId',
        'paymentMethod' => 'setPaymentMethod',
        'paymentProvider' => 'setPaymentProvider',
        'language' => 'setLanguage',
        'totalPrice' => 'setTotalPrice',
        'currency' => 'setCurrency',
        'description' => 'setDescription',
        'variableSymbol' => 'setVariableSymbol',
        'callbackUrl' => 'setCallbackUrl',
        'constantSymbol' => 'setConstantSymbol',
        'specificSymbol' => 'setSpecificSymbol',
        'creditorAccountIban' => 'setCreditorAccountIban',
        'shoppingCartUrl' => 'setShoppingCartUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantId' => 'getMerchantId',
        'merchantTransactionId' => 'getMerchantTransactionId',
        'paymentMethod' => 'getPaymentMethod',
        'paymentProvider' => 'getPaymentProvider',
        'language' => 'getLanguage',
        'totalPrice' => 'getTotalPrice',
        'currency' => 'getCurrency',
        'description' => 'getDescription',
        'variableSymbol' => 'getVariableSymbol',
        'callbackUrl' => 'getCallbackUrl',
        'constantSymbol' => 'getConstantSymbol',
        'specificSymbol' => 'getSpecificSymbol',
        'creditorAccountIban' => 'getCreditorAccountIban',
        'shoppingCartUrl' => 'getShoppingCartUrl'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const PAYMENT_METHOD_PSD2 = 'PSD2';
    const PAYMENT_METHOD_CARD = 'CARD';
    const LANGUAGE_CZ = 'CZ';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_PSD2,
            self::PAYMENT_METHOD_CARD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_CZ,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['merchantId'] = $data['merchantId'] ?? null;
        $this->container['merchantTransactionId'] = $data['merchantTransactionId'] ?? null;
        $this->container['paymentMethod'] = $data['paymentMethod'] ?? null;
        $this->container['paymentProvider'] = $data['paymentProvider'] ?? null;
        $this->container['language'] = $data['language'] ?? null;
        $this->container['totalPrice'] = $data['totalPrice'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['variableSymbol'] = $data['variableSymbol'] ?? null;
        $this->container['callbackUrl'] = $data['callbackUrl'] ?? null;
        $this->container['constantSymbol'] = $data['constantSymbol'] ?? null;
        $this->container['specificSymbol'] = $data['specificSymbol'] ?? null;
        $this->container['creditorAccountIban'] = $data['creditorAccountIban'] ?? null;
        $this->container['shoppingCartUrl'] = $data['shoppingCartUrl'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchantId'] === null) {
            $invalidProperties[] = "'merchantId' can't be null";
        }
        if ($this->container['merchantTransactionId'] === null) {
            $invalidProperties[] = "'merchantTransactionId' can't be null";
        }
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['paymentMethod']) && !in_array($this->container['paymentMethod'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'paymentMethod', must be one of '%s'",
                $this->container['paymentMethod'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'language', must be one of '%s'",
                $this->container['language'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['totalPrice'] === null) {
            $invalidProperties[] = "'totalPrice' can't be null";
        }
        if ($this->container['variableSymbol'] === null) {
            $invalidProperties[] = "'variableSymbol' can't be null";
        }
        if ((mb_strlen($this->container['variableSymbol']) > 10)) {
            $invalidProperties[] = "invalid value for 'variableSymbol', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['constantSymbol']) && (mb_strlen($this->container['constantSymbol']) > 10)) {
            $invalidProperties[] = "invalid value for 'constantSymbol', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['specificSymbol']) && (mb_strlen($this->container['specificSymbol']) > 10)) {
            $invalidProperties[] = "invalid value for 'specificSymbol', the character length must be smaller than or equal to 10.";
        }

        if (!is_null($this->container['creditorAccountIban']) && (mb_strlen($this->container['creditorAccountIban']) > 24)) {
            $invalidProperties[] = "invalid value for 'creditorAccountIban', the character length must be smaller than or equal to 24.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets merchantId
     *
     * @return string
     */
    public function getMerchantId()
    {
        return $this->container['merchantId'];
    }

    /**
     * Sets merchantId
     *
     * @param string $merchantId Unique merchant identifier from merchant registration process
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets merchantTransactionId
     *
     * @return string
     */
    public function getMerchantTransactionId()
    {
        return $this->container['merchantTransactionId'];
    }

    /**
     * Sets merchantTransactionId
     *
     * @param string $merchantTransactionId Unique transaction identifier generated by merchant
     *
     * @return self
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        $this->container['merchantTransactionId'] = $merchantTransactionId;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string|null $paymentMethod Payment method - fill in if the user chooses a payment method on the e-shop. If not used, the client will be redirected to Zaplaceno.cz front-end to choose the payment method.
     *
     * @return self
     */
    public function setPaymentMethod($paymentMethod)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($paymentMethod) && !in_array($paymentMethod, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'paymentMethod', must be one of '%s'",
                    $paymentMethod,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets paymentProvider
     *
     * @return string|null
     */
    public function getPaymentProvider()
    {
        return $this->container['paymentProvider'];
    }

    /**
     * Sets paymentProvider
     *
     * @param string|null $paymentProvider Provider code - fill in if the user chooses a payment provider on the e-shop. Supported payment provider codes can be obtained from [/status/paymentProviders](#tag/status) endpoint.
     *
     * @return self
     */
    public function setPaymentProvider($paymentProvider)
    {
        $this->container['paymentProvider'] = $paymentProvider;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string|null
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string|null $language Language of payment gateway. Currently only CZ is supported
     *
     * @return self
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($language) && !in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'language', must be one of '%s'",
                    $language,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['totalPrice'];
    }

    /**
     * Sets totalPrice
     *
     * @param float $totalPrice Transaction amount
     *
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        $this->container['totalPrice'] = $totalPrice;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Payment order currency code according to ISO 4217 - if not set, CZK is used
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Payment description - message for the payee. Zaplaceno.cz adds the following text to the beginning of the description: 'Zaplaceno.cz - platba pro <MERCHANT_NAME> obj.č. <ORDER_NUMBER> <DESCRIPTION>'. Maximum lenght of description is 140 characters in total, longer text will be cut.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets variableSymbol
     *
     * @return string
     */
    public function getVariableSymbol()
    {
        return $this->container['variableSymbol'];
    }

    /**
     * Sets variableSymbol
     *
     * @param string $variableSymbol Order number. Some banks may trim '0's at the beginning.
     *
     * @return self
     */
    public function setVariableSymbol($variableSymbol)
    {
        if ((mb_strlen($variableSymbol) > 10)) {
            throw new \InvalidArgumentException('invalid length for $variableSymbol when calling TransactionEshopInitDTO., must be smaller than or equal to 10.');
        }

        $this->container['variableSymbol'] = $variableSymbol;

        return $this;
    }

    /**
     * Gets callbackUrl
     *
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
     * Sets callbackUrl
     *
     * @param string|null $callbackUrl URL that is called after process of payment is done. It is the place where the client should land after the payment.
     *
     * @return self
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;

        return $this;
    }

    /**
     * Gets constantSymbol
     *
     * @return string|null
     */
    public function getConstantSymbol()
    {
        return $this->container['constantSymbol'];
    }

    /**
     * Sets constantSymbol
     *
     * @param string|null $constantSymbol Constant symbol. Some banks may trim '0's at the beginning.
     *
     * @return self
     */
    public function setConstantSymbol($constantSymbol)
    {
        if (!is_null($constantSymbol) && (mb_strlen($constantSymbol) > 10)) {
            throw new \InvalidArgumentException('invalid length for $constantSymbol when calling TransactionEshopInitDTO., must be smaller than or equal to 10.');
        }

        $this->container['constantSymbol'] = $constantSymbol;

        return $this;
    }

    /**
     * Gets specificSymbol
     *
     * @return string|null
     */
    public function getSpecificSymbol()
    {
        return $this->container['specificSymbol'];
    }

    /**
     * Sets specificSymbol
     *
     * @param string|null $specificSymbol Specific symbol. Some banks may trim '0's at the beginning.
     *
     * @return self
     */
    public function setSpecificSymbol($specificSymbol)
    {
        if (!is_null($specificSymbol) && (mb_strlen($specificSymbol) > 10)) {
            throw new \InvalidArgumentException('invalid length for $specificSymbol when calling TransactionEshopInitDTO., must be smaller than or equal to 10.');
        }

        $this->container['specificSymbol'] = $specificSymbol;

        return $this;
    }

    /**
     * Gets creditorAccountIban
     *
     * @return string|null
     */
    public function getCreditorAccountIban()
    {
        return $this->container['creditorAccountIban'];
    }

    /**
     * Sets creditorAccountIban
     *
     * @param string|null $creditorAccountIban Creditor's account number in IBAN format  * E-shop - The value sent by e-shops is validated according to the creditors' whitelist that is set in an administration app by the bank. Only whitelisted IBANs will be accepted. The parameter is optional. * Zaplaceno Plus - The value is not validated according to any whitelist. The parameter is mandatory.
     *
     * @return self
     */
    public function setCreditorAccountIban($creditorAccountIban)
    {
        if (!is_null($creditorAccountIban) && (mb_strlen($creditorAccountIban) > 24)) {
            throw new \InvalidArgumentException('invalid length for $creditorAccountIban when calling TransactionEshopInitDTO., must be smaller than or equal to 24.');
        }

        $this->container['creditorAccountIban'] = $creditorAccountIban;

        return $this;
    }

    /**
     * Gets shoppingCartUrl
     *
     * @return string|null
     */
    public function getShoppingCartUrl()
    {
        return $this->container['shoppingCartUrl'];
    }

    /**
     * Sets shoppingCartUrl
     *
     * @param string|null $shoppingCartUrl Merchant's shopping cart URL. Zaplaceno.cz calls this URL in case the end-user navigates to 'Back to e-shop / Zpět na e-shop' while selecting payment method od payment provider on Zaplaceno.cz front-end.
     *
     * @return self
     */
    public function setShoppingCartUrl($shoppingCartUrl)
    {
        $this->container['shoppingCartUrl'] = $shoppingCartUrl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


