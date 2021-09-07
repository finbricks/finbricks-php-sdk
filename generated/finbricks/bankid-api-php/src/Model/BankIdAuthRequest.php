<?php
/**
 * BankIdAuthRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Finbricks\Api\BankId
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finbricks.com API - BankId services
 *
 * Finbricks.com API - BankId services
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finbricks\Api\BankId\Model;

use \ArrayAccess;
use \Finbricks\Api\BankId\ObjectSerializer;

/**
 * BankIdAuthRequest Class Doc Comment
 *
 * @category Class
 * @package  Finbricks\Api\BankId
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class BankIdAuthRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BankIdAuthRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantId' => 'string',
        'clientIdForBankId' => 'string',
        'provider' => 'string',
        'scopeGroup' => '\Finbricks\Api\BankId\Model\ScopeGroup',
        'callbackUrl' => 'string'
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
        'clientIdForBankId' => null,
        'provider' => null,
        'scopeGroup' => null,
        'callbackUrl' => null
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
        'clientIdForBankId' => 'clientIdForBankId',
        'provider' => 'provider',
        'scopeGroup' => 'scopeGroup',
        'callbackUrl' => 'callbackUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantId' => 'setMerchantId',
        'clientIdForBankId' => 'setClientIdForBankId',
        'provider' => 'setProvider',
        'scopeGroup' => 'setScopeGroup',
        'callbackUrl' => 'setCallbackUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantId' => 'getMerchantId',
        'clientIdForBankId' => 'getClientIdForBankId',
        'provider' => 'getProvider',
        'scopeGroup' => 'getScopeGroup',
        'callbackUrl' => 'getCallbackUrl'
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
        $this->container['clientIdForBankId'] = $data['clientIdForBankId'] ?? null;
        $this->container['provider'] = $data['provider'] ?? null;
        $this->container['scopeGroup'] = $data['scopeGroup'] ?? null;
        $this->container['callbackUrl'] = $data['callbackUrl'] ?? null;
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
        if ($this->container['clientIdForBankId'] === null) {
            $invalidProperties[] = "'clientIdForBankId' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['scopeGroup'] === null) {
            $invalidProperties[] = "'scopeGroup' can't be null";
        }
        if ($this->container['callbackUrl'] === null) {
            $invalidProperties[] = "'callbackUrl' can't be null";
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
     * @param string $merchantId Unique merchant identifier assigned by the payment gateway.
     *
     * @return self
     */
    public function setMerchantId($merchantId)
    {
        $this->container['merchantId'] = $merchantId;

        return $this;
    }

    /**
     * Gets clientIdForBankId
     *
     * @return string
     */
    public function getClientIdForBankId()
    {
        return $this->container['clientIdForBankId'];
    }

    /**
     * Sets clientIdForBankId
     *
     * @param string $clientIdForBankId Id identifying the end user at the merchant.
     *
     * @return self
     */
    public function setClientIdForBankId($clientIdForBankId)
    {
        $this->container['clientIdForBankId'] = $clientIdForBankId;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider Provider code. Example values CSOB, CSAS
     *
     * @return self
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets scopeGroup
     *
     * @return \Finbricks\Api\BankId\Model\ScopeGroup
     */
    public function getScopeGroup()
    {
        return $this->container['scopeGroup'];
    }

    /**
     * Sets scopeGroup
     *
     * @param \Finbricks\Api\BankId\Model\ScopeGroup $scopeGroup scopeGroup
     *
     * @return self
     */
    public function setScopeGroup($scopeGroup)
    {
        $this->container['scopeGroup'] = $scopeGroup;

        return $this;
    }

    /**
     * Gets callbackUrl
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->container['callbackUrl'];
    }

    /**
     * Sets callbackUrl
     *
     * @param string $callbackUrl The URL address of the merchant to which the payment gateway will callback after the user authentication is completed. The merchant will receive `clientIdForBankId` as a query param.
     *
     * @return self
     */
    public function setCallbackUrl($callbackUrl)
    {
        $this->container['callbackUrl'] = $callbackUrl;

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


