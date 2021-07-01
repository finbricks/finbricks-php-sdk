<?php
/**
 * TransactionDetailsReferences
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
 * The version of the OpenAPI document: 1.0.11
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
 * TransactionDetailsReferences Class Doc Comment
 *
 * @category Class
 * @package  Finbricks\Api\Info
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionDetailsReferences implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionDetailsReferences';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'messageIdentification' => 'string',
        'accountServicerReference' => 'string',
        'paymentInformationIdentification' => 'string',
        'instructionIdentification' => 'string',
        'endToEndIdentification' => 'string',
        'mandateIdentification' => 'string',
        'chequeNumber' => 'string',
        'clearingSystemReference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'messageIdentification' => null,
        'accountServicerReference' => null,
        'paymentInformationIdentification' => null,
        'instructionIdentification' => null,
        'endToEndIdentification' => null,
        'mandateIdentification' => null,
        'chequeNumber' => null,
        'clearingSystemReference' => null
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
        'messageIdentification' => 'messageIdentification',
        'accountServicerReference' => 'accountServicerReference',
        'paymentInformationIdentification' => 'paymentInformationIdentification',
        'instructionIdentification' => 'instructionIdentification',
        'endToEndIdentification' => 'endToEndIdentification',
        'mandateIdentification' => 'mandateIdentification',
        'chequeNumber' => 'chequeNumber',
        'clearingSystemReference' => 'clearingSystemReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'messageIdentification' => 'setMessageIdentification',
        'accountServicerReference' => 'setAccountServicerReference',
        'paymentInformationIdentification' => 'setPaymentInformationIdentification',
        'instructionIdentification' => 'setInstructionIdentification',
        'endToEndIdentification' => 'setEndToEndIdentification',
        'mandateIdentification' => 'setMandateIdentification',
        'chequeNumber' => 'setChequeNumber',
        'clearingSystemReference' => 'setClearingSystemReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'messageIdentification' => 'getMessageIdentification',
        'accountServicerReference' => 'getAccountServicerReference',
        'paymentInformationIdentification' => 'getPaymentInformationIdentification',
        'instructionIdentification' => 'getInstructionIdentification',
        'endToEndIdentification' => 'getEndToEndIdentification',
        'mandateIdentification' => 'getMandateIdentification',
        'chequeNumber' => 'getChequeNumber',
        'clearingSystemReference' => 'getClearingSystemReference'
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
        $this->container['messageIdentification'] = $data['messageIdentification'] ?? null;
        $this->container['accountServicerReference'] = $data['accountServicerReference'] ?? null;
        $this->container['paymentInformationIdentification'] = $data['paymentInformationIdentification'] ?? null;
        $this->container['instructionIdentification'] = $data['instructionIdentification'] ?? null;
        $this->container['endToEndIdentification'] = $data['endToEndIdentification'] ?? null;
        $this->container['mandateIdentification'] = $data['mandateIdentification'] ?? null;
        $this->container['chequeNumber'] = $data['chequeNumber'] ?? null;
        $this->container['clearingSystemReference'] = $data['clearingSystemReference'] ?? null;
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
     * Gets messageIdentification
     *
     * @return string|null
     */
    public function getMessageIdentification()
    {
        return $this->container['messageIdentification'];
    }

    /**
     * Sets messageIdentification
     *
     * @param string|null $messageIdentification messageIdentification
     *
     * @return self
     */
    public function setMessageIdentification($messageIdentification)
    {
        $this->container['messageIdentification'] = $messageIdentification;

        return $this;
    }

    /**
     * Gets accountServicerReference
     *
     * @return string|null
     */
    public function getAccountServicerReference()
    {
        return $this->container['accountServicerReference'];
    }

    /**
     * Sets accountServicerReference
     *
     * @param string|null $accountServicerReference accountServicerReference
     *
     * @return self
     */
    public function setAccountServicerReference($accountServicerReference)
    {
        $this->container['accountServicerReference'] = $accountServicerReference;

        return $this;
    }

    /**
     * Gets paymentInformationIdentification
     *
     * @return string|null
     */
    public function getPaymentInformationIdentification()
    {
        return $this->container['paymentInformationIdentification'];
    }

    /**
     * Sets paymentInformationIdentification
     *
     * @param string|null $paymentInformationIdentification paymentInformationIdentification
     *
     * @return self
     */
    public function setPaymentInformationIdentification($paymentInformationIdentification)
    {
        $this->container['paymentInformationIdentification'] = $paymentInformationIdentification;

        return $this;
    }

    /**
     * Gets instructionIdentification
     *
     * @return string|null
     */
    public function getInstructionIdentification()
    {
        return $this->container['instructionIdentification'];
    }

    /**
     * Sets instructionIdentification
     *
     * @param string|null $instructionIdentification instructionIdentification
     *
     * @return self
     */
    public function setInstructionIdentification($instructionIdentification)
    {
        $this->container['instructionIdentification'] = $instructionIdentification;

        return $this;
    }

    /**
     * Gets endToEndIdentification
     *
     * @return string|null
     */
    public function getEndToEndIdentification()
    {
        return $this->container['endToEndIdentification'];
    }

    /**
     * Sets endToEndIdentification
     *
     * @param string|null $endToEndIdentification endToEndIdentification
     *
     * @return self
     */
    public function setEndToEndIdentification($endToEndIdentification)
    {
        $this->container['endToEndIdentification'] = $endToEndIdentification;

        return $this;
    }

    /**
     * Gets mandateIdentification
     *
     * @return string|null
     */
    public function getMandateIdentification()
    {
        return $this->container['mandateIdentification'];
    }

    /**
     * Sets mandateIdentification
     *
     * @param string|null $mandateIdentification mandateIdentification
     *
     * @return self
     */
    public function setMandateIdentification($mandateIdentification)
    {
        $this->container['mandateIdentification'] = $mandateIdentification;

        return $this;
    }

    /**
     * Gets chequeNumber
     *
     * @return string|null
     */
    public function getChequeNumber()
    {
        return $this->container['chequeNumber'];
    }

    /**
     * Sets chequeNumber
     *
     * @param string|null $chequeNumber chequeNumber
     *
     * @return self
     */
    public function setChequeNumber($chequeNumber)
    {
        $this->container['chequeNumber'] = $chequeNumber;

        return $this;
    }

    /**
     * Gets clearingSystemReference
     *
     * @return string|null
     */
    public function getClearingSystemReference()
    {
        return $this->container['clearingSystemReference'];
    }

    /**
     * Sets clearingSystemReference
     *
     * @param string|null $clearingSystemReference clearingSystemReference
     *
     * @return self
     */
    public function setClearingSystemReference($clearingSystemReference)
    {
        $this->container['clearingSystemReference'] = $clearingSystemReference;

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

