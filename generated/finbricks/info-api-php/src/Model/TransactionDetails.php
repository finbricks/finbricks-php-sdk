<?php
/**
 * TransactionDetails
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
 * TransactionDetails Class Doc Comment
 *
 * @category Class
 * @package  Finbricks\Api\Info
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'references' => '\Finbricks\Api\Info\Model\TransactionDetailsReferences',
        'amountDetails' => '\Finbricks\Api\Info\Model\AmountDetails',
        'charges' => '\Finbricks\Api\Info\Model\Charges',
        'relatedParties' => '\Finbricks\Api\Info\Model\RelatedParties',
        'relatedAgents' => '\Finbricks\Api\Info\Model\RelatedAgents',
        'purpose' => '\Finbricks\Api\Info\Model\Purpose',
        'remittanceInformation' => '\Finbricks\Api\Info\Model\RemittanceInformation',
        'additionalTransactionInformation' => 'string',
        'additionalRemittanceInformation' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'references' => null,
        'amountDetails' => null,
        'charges' => null,
        'relatedParties' => null,
        'relatedAgents' => null,
        'purpose' => null,
        'remittanceInformation' => null,
        'additionalTransactionInformation' => null,
        'additionalRemittanceInformation' => null
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
        'references' => 'references',
        'amountDetails' => 'amountDetails',
        'charges' => 'charges',
        'relatedParties' => 'relatedParties',
        'relatedAgents' => 'relatedAgents',
        'purpose' => 'purpose',
        'remittanceInformation' => 'remittanceInformation',
        'additionalTransactionInformation' => 'additionalTransactionInformation',
        'additionalRemittanceInformation' => 'additionalRemittanceInformation'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'references' => 'setReferences',
        'amountDetails' => 'setAmountDetails',
        'charges' => 'setCharges',
        'relatedParties' => 'setRelatedParties',
        'relatedAgents' => 'setRelatedAgents',
        'purpose' => 'setPurpose',
        'remittanceInformation' => 'setRemittanceInformation',
        'additionalTransactionInformation' => 'setAdditionalTransactionInformation',
        'additionalRemittanceInformation' => 'setAdditionalRemittanceInformation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'references' => 'getReferences',
        'amountDetails' => 'getAmountDetails',
        'charges' => 'getCharges',
        'relatedParties' => 'getRelatedParties',
        'relatedAgents' => 'getRelatedAgents',
        'purpose' => 'getPurpose',
        'remittanceInformation' => 'getRemittanceInformation',
        'additionalTransactionInformation' => 'getAdditionalTransactionInformation',
        'additionalRemittanceInformation' => 'getAdditionalRemittanceInformation'
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
        $this->container['references'] = $data['references'] ?? null;
        $this->container['amountDetails'] = $data['amountDetails'] ?? null;
        $this->container['charges'] = $data['charges'] ?? null;
        $this->container['relatedParties'] = $data['relatedParties'] ?? null;
        $this->container['relatedAgents'] = $data['relatedAgents'] ?? null;
        $this->container['purpose'] = $data['purpose'] ?? null;
        $this->container['remittanceInformation'] = $data['remittanceInformation'] ?? null;
        $this->container['additionalTransactionInformation'] = $data['additionalTransactionInformation'] ?? null;
        $this->container['additionalRemittanceInformation'] = $data['additionalRemittanceInformation'] ?? null;
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
     * Gets references
     *
     * @return \Finbricks\Api\Info\Model\TransactionDetailsReferences|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \Finbricks\Api\Info\Model\TransactionDetailsReferences|null $references references
     *
     * @return self
     */
    public function setReferences($references)
    {
        $this->container['references'] = $references;

        return $this;
    }

    /**
     * Gets amountDetails
     *
     * @return \Finbricks\Api\Info\Model\AmountDetails|null
     */
    public function getAmountDetails()
    {
        return $this->container['amountDetails'];
    }

    /**
     * Sets amountDetails
     *
     * @param \Finbricks\Api\Info\Model\AmountDetails|null $amountDetails amountDetails
     *
     * @return self
     */
    public function setAmountDetails($amountDetails)
    {
        $this->container['amountDetails'] = $amountDetails;

        return $this;
    }

    /**
     * Gets charges
     *
     * @return \Finbricks\Api\Info\Model\Charges|null
     */
    public function getCharges()
    {
        return $this->container['charges'];
    }

    /**
     * Sets charges
     *
     * @param \Finbricks\Api\Info\Model\Charges|null $charges charges
     *
     * @return self
     */
    public function setCharges($charges)
    {
        $this->container['charges'] = $charges;

        return $this;
    }

    /**
     * Gets relatedParties
     *
     * @return \Finbricks\Api\Info\Model\RelatedParties|null
     */
    public function getRelatedParties()
    {
        return $this->container['relatedParties'];
    }

    /**
     * Sets relatedParties
     *
     * @param \Finbricks\Api\Info\Model\RelatedParties|null $relatedParties relatedParties
     *
     * @return self
     */
    public function setRelatedParties($relatedParties)
    {
        $this->container['relatedParties'] = $relatedParties;

        return $this;
    }

    /**
     * Gets relatedAgents
     *
     * @return \Finbricks\Api\Info\Model\RelatedAgents|null
     */
    public function getRelatedAgents()
    {
        return $this->container['relatedAgents'];
    }

    /**
     * Sets relatedAgents
     *
     * @param \Finbricks\Api\Info\Model\RelatedAgents|null $relatedAgents relatedAgents
     *
     * @return self
     */
    public function setRelatedAgents($relatedAgents)
    {
        $this->container['relatedAgents'] = $relatedAgents;

        return $this;
    }

    /**
     * Gets purpose
     *
     * @return \Finbricks\Api\Info\Model\Purpose|null
     */
    public function getPurpose()
    {
        return $this->container['purpose'];
    }

    /**
     * Sets purpose
     *
     * @param \Finbricks\Api\Info\Model\Purpose|null $purpose purpose
     *
     * @return self
     */
    public function setPurpose($purpose)
    {
        $this->container['purpose'] = $purpose;

        return $this;
    }

    /**
     * Gets remittanceInformation
     *
     * @return \Finbricks\Api\Info\Model\RemittanceInformation|null
     */
    public function getRemittanceInformation()
    {
        return $this->container['remittanceInformation'];
    }

    /**
     * Sets remittanceInformation
     *
     * @param \Finbricks\Api\Info\Model\RemittanceInformation|null $remittanceInformation remittanceInformation
     *
     * @return self
     */
    public function setRemittanceInformation($remittanceInformation)
    {
        $this->container['remittanceInformation'] = $remittanceInformation;

        return $this;
    }

    /**
     * Gets additionalTransactionInformation
     *
     * @return string|null
     */
    public function getAdditionalTransactionInformation()
    {
        return $this->container['additionalTransactionInformation'];
    }

    /**
     * Sets additionalTransactionInformation
     *
     * @param string|null $additionalTransactionInformation Additional information provided by the bank. Only stated if it is included in the record. Additional info for SEPA DD is entered here (e.g., Creditor Identifier, Payment scheme, SEPA collection order, etc.)
     *
     * @return self
     */
    public function setAdditionalTransactionInformation($additionalTransactionInformation)
    {
        $this->container['additionalTransactionInformation'] = $additionalTransactionInformation;

        return $this;
    }

    /**
     * Gets additionalRemittanceInformation
     *
     * @return string|null
     */
    public function getAdditionalRemittanceInformation()
    {
        return $this->container['additionalRemittanceInformation'];
    }

    /**
     * Sets additionalRemittanceInformation
     *
     * @param string|null $additionalRemittanceInformation Additional free text information for payer of up to 140 characters.
     *
     * @return self
     */
    public function setAdditionalRemittanceInformation($additionalRemittanceInformation)
    {
        $this->container['additionalRemittanceInformation'] = $additionalRemittanceInformation;

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


