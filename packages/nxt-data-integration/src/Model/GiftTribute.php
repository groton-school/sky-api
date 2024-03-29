<?php
/**
 * GiftTribute
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SKY\NXT\DataIntegration
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * NXT Data Integration
 *
 * This API supports an expanded set of endpoints optimized for data integration scenarios.
 *
 * The version of the OpenAPI document: 1.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.4.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SKY\NXT\DataIntegration\Model;

use ArrayAccess;
use SKY\NXT\DataIntegration\ObjectSerializer;

/**
 * GiftTribute Class Doc Comment
 *
 * @category Class
 * @description A gift tribute record in Raiser&#39;s Edge.
 * @package  SKY\NXT\DataIntegration
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GiftTribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GiftTribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'giftId' => 'int',
        'tributeId' => 'int',
        'tributeType' => 'int',
        'importId' => 'string',
        'acknowledge' => 'string',
        'sequence' => 'int',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'giftId' => 'int32',
        'tributeId' => 'int32',
        'tributeType' => 'int32',
        'importId' => null,
        'acknowledge' => null,
        'sequence' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'giftId' => false,
        'tributeId' => false,
        'tributeType' => true,
        'importId' => true,
        'acknowledge' => false,
        'sequence' => false,
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'giftId' => 'gift_id',
        'tributeId' => 'tribute_id',
        'tributeType' => 'tribute_type',
        'importId' => 'import_id',
        'acknowledge' => 'acknowledge',
        'sequence' => 'sequence',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'giftId' => 'setGiftId',
        'tributeId' => 'setTributeId',
        'tributeType' => 'setTributeType',
        'importId' => 'setImportId',
        'acknowledge' => 'setAcknowledge',
        'sequence' => 'setSequence',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'giftId' => 'getGiftId',
        'tributeId' => 'getTributeId',
        'tributeType' => 'getTributeType',
        'importId' => 'getImportId',
        'acknowledge' => 'getAcknowledge',
        'sequence' => 'getSequence',
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

    public const ACKNOWLEDGE_ACKNOWLEDGED = 'Acknowledged';
    public const ACKNOWLEDGE_NOT_ACKNOWLEDGED = 'NotAcknowledged';
    public const ACKNOWLEDGE_DO_NOT_ACKNOWLEDGE = 'DoNotAcknowledge';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcknowledgeAllowableValues()
    {
        return [
            self::ACKNOWLEDGE_ACKNOWLEDGED,
            self::ACKNOWLEDGE_NOT_ACKNOWLEDGED,
            self::ACKNOWLEDGE_DO_NOT_ACKNOWLEDGE,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('giftId', $data ?? [], null);
        $this->setIfExists('tributeId', $data ?? [], null);
        $this->setIfExists('tributeType', $data ?? [], null);
        $this->setIfExists('importId', $data ?? [], null);
        $this->setIfExists('acknowledge', $data ?? [], null);
        $this->setIfExists('sequence', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAcknowledgeAllowableValues();
        if (!is_null($this->container['acknowledge']) && !in_array($this->container['acknowledge'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'acknowledge', must be one of '%s'",
                $this->container['acknowledge'],
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id The system record ID of the gift tribute.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets giftId
     *
     * @return int|null
     */
    public function getGiftId()
    {
        return $this->container['giftId'];
    }

    /**
     * Sets giftId
     *
     * @param int|null $giftId The system record ID of the gift.
     *
     * @return self
     */
    public function setGiftId($giftId)
    {
        if (is_null($giftId)) {
            throw new \InvalidArgumentException('non-nullable giftId cannot be null');
        }
        $this->container['giftId'] = $giftId;

        return $this;
    }

    /**
     * Gets tributeId
     *
     * @return int|null
     */
    public function getTributeId()
    {
        return $this->container['tributeId'];
    }

    /**
     * Sets tributeId
     *
     * @param int|null $tributeId The system record ID of the tribute.
     *
     * @return self
     */
    public function setTributeId($tributeId)
    {
        if (is_null($tributeId)) {
            throw new \InvalidArgumentException('non-nullable tributeId cannot be null');
        }
        $this->container['tributeId'] = $tributeId;

        return $this;
    }

    /**
     * Gets tributeType
     *
     * @return int|null
     */
    public function getTributeType()
    {
        return $this->container['tributeType'];
    }

    /**
     * Sets tributeType
     *
     * @param int|null $tributeType The tribute type.
     *
     * @return self
     */
    public function setTributeType($tributeType)
    {
        if (is_null($tributeType)) {
            array_push($this->openAPINullablesSetToNull, 'tributeType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tributeType', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tributeType'] = $tributeType;

        return $this;
    }

    /**
     * Gets importId
     *
     * @return string|null
     */
    public function getImportId()
    {
        return $this->container['importId'];
    }

    /**
     * Sets importId
     *
     * @param string|null $importId The import ID of thte gift tribute.
     *
     * @return self
     */
    public function setImportId($importId)
    {
        if (is_null($importId)) {
            array_push($this->openAPINullablesSetToNull, 'importId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('importId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['importId'] = $importId;

        return $this;
    }

    /**
     * Gets acknowledge
     *
     * @return string|null
     */
    public function getAcknowledge()
    {
        return $this->container['acknowledge'];
    }

    /**
     * Sets acknowledge
     *
     * @param string|null $acknowledge The gift tribute acknowledge status.
     *
     * @return self
     */
    public function setAcknowledge($acknowledge)
    {
        if (is_null($acknowledge)) {
            throw new \InvalidArgumentException('non-nullable acknowledge cannot be null');
        }
        $allowedValues = $this->getAcknowledgeAllowableValues();
        if (!in_array($acknowledge, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'acknowledge', must be one of '%s'",
                    $acknowledge,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['acknowledge'] = $acknowledge;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int|null $sequence The numeric sequence associated with the gift tribute.
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        if (is_null($sequence)) {
            throw new \InvalidArgumentException('non-nullable sequence cannot be null');
        }
        $this->container['sequence'] = $sequence;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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
