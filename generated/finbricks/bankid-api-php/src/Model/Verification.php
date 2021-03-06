<?php
/**
 * Verification
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
 * The version of the OpenAPI document: 1.0.2
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
 * Verification Class Doc Comment
 *
 * @category Class
 * @description This element contains the information about the process conducted to verify a person&#39;s identity and bind the respective person data to a user account.
 * @package  Finbricks\Api\BankId
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Verification implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Verification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'trustFramework' => 'string',
        'time' => '\DateTime',
        'verificationProcess' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'trustFramework' => null,
        'time' => 'date-time',
        'verificationProcess' => null
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
        'trustFramework' => 'trust_framework',
        'time' => 'time',
        'verificationProcess' => 'verification_process'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trustFramework' => 'setTrustFramework',
        'time' => 'setTime',
        'verificationProcess' => 'setVerificationProcess'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trustFramework' => 'getTrustFramework',
        'time' => 'getTime',
        'verificationProcess' => 'getVerificationProcess'
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

    const TRUST_FRAMEWORK_CZ_AML = 'cz_aml';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrustFrameworkAllowableValues()
    {
        return [
            self::TRUST_FRAMEWORK_CZ_AML,
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
        $this->container['trustFramework'] = $data['trustFramework'] ?? null;
        $this->container['time'] = $data['time'] ?? null;
        $this->container['verificationProcess'] = $data['verificationProcess'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['trustFramework'] === null) {
            $invalidProperties[] = "'trustFramework' can't be null";
        }
        $allowedValues = $this->getTrustFrameworkAllowableValues();
        if (!is_null($this->container['trustFramework']) && !in_array($this->container['trustFramework'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'trustFramework', must be one of '%s'",
                $this->container['trustFramework'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['verificationProcess'] === null) {
            $invalidProperties[] = "'verificationProcess' can't be null";
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
     * Gets trustFramework
     *
     * @return string
     */
    public function getTrustFramework()
    {
        return $this->container['trustFramework'];
    }

    /**
     * Sets trustFramework
     *
     * @param string $trustFramework String determining the trust framework governing the identity verification process and the identity assurance level of the OP.
     *
     * @return self
     */
    public function setTrustFramework($trustFramework)
    {
        $allowedValues = $this->getTrustFrameworkAllowableValues();
        if (!in_array($trustFramework, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'trustFramework', must be one of '%s'",
                    $trustFramework,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['trustFramework'] = $trustFramework;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \DateTime|null
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime|null $time Time stamp in ISO 8601:2004 [ISO8601-2004] YYYY-MM-DDThh:mm:ss??hh format representing the date and time when identity verification took place. Presence of this element might be required for certain trust frameworks.
     *
     * @return self
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets verificationProcess
     *
     * @return string
     */
    public function getVerificationProcess()
    {
        return $this->container['verificationProcess'];
    }

    /**
     * Sets verificationProcess
     *
     * @param string $verificationProcess Reference to the identity verification process as performed by the identity providers. Used for backtracing in case of disputes or audits. Presence of this element might be required for certain trust frameworks. In the case of BankID, the value of this element requires the tax number of the bank (financial institution) that carried out the identification process.  This is the bank's tax number, which is kept in the list of regulated and registered entities of the CNB JERRS.
     *
     * @return self
     */
    public function setVerificationProcess($verificationProcess)
    {
        $this->container['verificationProcess'] = $verificationProcess;

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


