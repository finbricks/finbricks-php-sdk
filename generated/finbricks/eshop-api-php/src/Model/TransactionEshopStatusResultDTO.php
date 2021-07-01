<?php
/**
 * TransactionEshopStatusResultDTO
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
 * The version of the OpenAPI document: 2.2.2
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
 * TransactionEshopStatusResultDTO Class Doc Comment
 *
 * @category Class
 * @package  Finbricks\Api\Eshop
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TransactionEshopStatusResultDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TransactionEshopStatusResultDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantTransactionId' => 'string',
        'resultCode' => 'string',
        'finalBankStatus' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchantTransactionId' => 'uuid',
        'resultCode' => null,
        'finalBankStatus' => null
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
        'merchantTransactionId' => 'merchantTransactionId',
        'resultCode' => 'resultCode',
        'finalBankStatus' => 'finalBankStatus'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantTransactionId' => 'setMerchantTransactionId',
        'resultCode' => 'setResultCode',
        'finalBankStatus' => 'setFinalBankStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantTransactionId' => 'getMerchantTransactionId',
        'resultCode' => 'getResultCode',
        'finalBankStatus' => 'getFinalBankStatus'
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

    const RESULT_CODE_OPENED = 'OPENED';
    const RESULT_CODE_AUTHORIZED = 'AUTHORIZED';
    const RESULT_CODE_COMPLETED = 'COMPLETED';
    const RESULT_CODE_BOOKED = 'BOOKED';
    const RESULT_CODE_SETTLED = 'SETTLED';
    const RESULT_CODE_REJECTED = 'REJECTED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultCodeAllowableValues()
    {
        return [
            self::RESULT_CODE_OPENED,
            self::RESULT_CODE_AUTHORIZED,
            self::RESULT_CODE_COMPLETED,
            self::RESULT_CODE_BOOKED,
            self::RESULT_CODE_SETTLED,
            self::RESULT_CODE_REJECTED,
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
        $this->container['merchantTransactionId'] = $data['merchantTransactionId'] ?? null;
        $this->container['resultCode'] = $data['resultCode'] ?? null;
        $this->container['finalBankStatus'] = $data['finalBankStatus'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResultCodeAllowableValues();
        if (!is_null($this->container['resultCode']) && !in_array($this->container['resultCode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'resultCode', must be one of '%s'",
                $this->container['resultCode'],
                implode("', '", $allowedValues)
            );
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
     * Gets merchantTransactionId
     *
     * @return string|null
     */
    public function getMerchantTransactionId()
    {
        return $this->container['merchantTransactionId'];
    }

    /**
     * Sets merchantTransactionId
     *
     * @param string|null $merchantTransactionId Unique transaction identifier
     *
     * @return self
     */
    public function setMerchantTransactionId($merchantTransactionId)
    {
        $this->container['merchantTransactionId'] = $merchantTransactionId;

        return $this;
    }

    /**
     * Gets resultCode
     *
     * @return string|null
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     *
     * @param string|null $resultCode Payment result code  __ResultCode descriptions:__ * __OPENED__ - The transaction is awaiting payment by the user. You must wait for the next payment status. The result of the payment is uncertain, yet. * __AUTHORIZED__ - Payment confirmed by user. The bank will perform a final check of the payment, including a check of the balance, and will process the payment. The payment will most likely be made. * __COMPLETED__ - The bank has confirmed that it has processed the transaction, payment is on its way to your account. Transaction processing is almost certain. * __BOOKED__ - The payment has already appeared in the payer's account and is on its way to your account. Transaction processing is almost certain. * __SETTLED__ - (BETA mode) The payment has been credited to the payee's account. * __REJECTED__ - The payment was rejected by the user or the payer's bank.
     *
     * @return self
     */
    public function setResultCode($resultCode)
    {
        $allowedValues = $this->getResultCodeAllowableValues();
        if (!is_null($resultCode) && !in_array($resultCode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'resultCode', must be one of '%s'",
                    $resultCode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets finalBankStatus
     *
     * @return bool|null
     */
    public function getFinalBankStatus()
    {
        return $this->container['finalBankStatus'];
    }

    /**
     * Sets finalBankStatus
     *
     * @param bool|null $finalBankStatus Indicates whether the resultCode for the transaction is final. If 'true', the eshop should no longer call the GET/transaction/eshop/status service for the given transaction.
     *
     * @return self
     */
    public function setFinalBankStatus($finalBankStatus)
    {
        $this->container['finalBankStatus'] = $finalBankStatus;

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


