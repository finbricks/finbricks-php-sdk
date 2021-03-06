<?php
/**
 * Account
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Finbricks\Api\Info
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Finbricks.com API - Account information
 *
 * Finbricks.com API - Account information
 *
 * The version of the OpenAPI document: 1.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Finbricks\Api\Info\Model;

use \ArrayAccess;
use \Finbricks\Api\Info\ObjectSerializer;

/**
 * Account Class Doc Comment
 *
 * @category Class
 * @package  Finbricks\Api\Info
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'identification' => '\Finbricks\Api\Info\Model\AccountIdentification',
        'currency' => 'string',
        'servicer' => '\Finbricks\Api\Info\Model\AccountServicer',
        'accountName' => 'string',
        'productName' => 'string',
        'ownersNames' => 'string[]',
        'pispSuitable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'identification' => null,
        'currency' => null,
        'servicer' => null,
        'accountName' => null,
        'productName' => null,
        'ownersNames' => null,
        'pispSuitable' => null
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
        'id' => 'id',
        'identification' => 'identification',
        'currency' => 'currency',
        'servicer' => 'servicer',
        'accountName' => 'accountName',
        'productName' => 'productName',
        'ownersNames' => 'ownersNames',
        'pispSuitable' => 'pispSuitable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'identification' => 'setIdentification',
        'currency' => 'setCurrency',
        'servicer' => 'setServicer',
        'accountName' => 'setAccountName',
        'productName' => 'setProductName',
        'ownersNames' => 'setOwnersNames',
        'pispSuitable' => 'setPispSuitable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'identification' => 'getIdentification',
        'currency' => 'getCurrency',
        'servicer' => 'getServicer',
        'accountName' => 'getAccountName',
        'productName' => 'getProductName',
        'ownersNames' => 'getOwnersNames',
        'pispSuitable' => 'getPispSuitable'
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
        $this->container['id'] = $data['id'] ?? null;
        $this->container['identification'] = $data['identification'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['servicer'] = $data['servicer'] ?? null;
        $this->container['accountName'] = $data['accountName'] ?? null;
        $this->container['productName'] = $data['productName'] ?? null;
        $this->container['ownersNames'] = $data['ownersNames'] ?? null;
        $this->container['pispSuitable'] = $data['pispSuitable'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id API payment account identifier from the response to a query on the list of accounts.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets identification
     *
     * @return \Finbricks\Api\Info\Model\AccountIdentification|null
     */
    public function getIdentification()
    {
        return $this->container['identification'];
    }

    /**
     * Sets identification
     *
     * @param \Finbricks\Api\Info\Model\AccountIdentification|null $identification identification
     *
     * @return self
     */
    public function setIdentification($identification)
    {
        $this->container['identification'] = $identification;

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
     * @param string|null $currency CurrencyCode, ISO 4217.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets servicer
     *
     * @return \Finbricks\Api\Info\Model\AccountServicer|null
     */
    public function getServicer()
    {
        return $this->container['servicer'];
    }

    /**
     * Sets servicer
     *
     * @param \Finbricks\Api\Info\Model\AccountServicer|null $servicer servicer
     *
     * @return self
     */
    public function setServicer($servicer)
    {
        $this->container['servicer'] = $servicer;

        return $this;
    }

    /**
     * Gets accountName
     *
     * @return string|null
     */
    public function getAccountName()
    {
        return $this->container['accountName'];
    }

    /**
     * Sets accountName
     *
     * @param string|null $accountName Account name.
     *
     * @return self
     */
    public function setAccountName($accountName)
    {
        $this->container['accountName'] = $accountName;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string|null
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string|null $productName Product name
     *
     * @return self
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets ownersNames
     *
     * @return string[]|null
     */
    public function getOwnersNames()
    {
        return $this->container['ownersNames'];
    }

    /**
     * Sets ownersNames
     *
     * @param string[]|null $ownersNames Array of name/s of the account holder/s for consumers or trade name/s for commercial clients.
     *
     * @return self
     */
    public function setOwnersNames($ownersNames)
    {
        $this->container['ownersNames'] = $ownersNames;

        return $this;
    }

    /**
     * Gets pispSuitable
     *
     * @return bool|null
     */
    public function getPispSuitable()
    {
        return $this->container['pispSuitable'];
    }

    /**
     * Sets pispSuitable
     *
     * @param bool|null $pispSuitable Indication whether the account number is suitable for payment transactions.
     *
     * @return self
     */
    public function setPispSuitable($pispSuitable)
    {
        $this->container['pispSuitable'] = $pispSuitable;

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


