<?php
/**
 * NameFormatConfigurationFieldDetail
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
 * NameFormatConfigurationFieldDetail Class Doc Comment
 *
 * @category Class
 * @description Contains the fields needed to configure a field in a constituent name format.
 * @package  SKY\NXT\DataIntegration
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NameFormatConfigurationFieldDetail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NameFormatConfigurationFieldDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fieldId' => 'int',
        'initial' => 'bool',
        'comma' => 'bool',
        'conditionalBreak' => 'bool',
        'hardBreak' => 'bool',
        'concatenate' => 'bool',
        'smart' => 'bool',
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
        'fieldId' => 'int32',
        'initial' => null,
        'comma' => null,
        'conditionalBreak' => null,
        'hardBreak' => null,
        'concatenate' => null,
        'smart' => null,
        'sequence' => 'int32',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'fieldId' => false,
        'initial' => false,
        'comma' => false,
        'conditionalBreak' => false,
        'hardBreak' => false,
        'concatenate' => false,
        'smart' => false,
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
        'fieldId' => 'field_id',
        'initial' => 'initial',
        'comma' => 'comma',
        'conditionalBreak' => 'conditional_break',
        'hardBreak' => 'hard_break',
        'concatenate' => 'concatenate',
        'smart' => 'smart',
        'sequence' => 'sequence',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fieldId' => 'setFieldId',
        'initial' => 'setInitial',
        'comma' => 'setComma',
        'conditionalBreak' => 'setConditionalBreak',
        'hardBreak' => 'setHardBreak',
        'concatenate' => 'setConcatenate',
        'smart' => 'setSmart',
        'sequence' => 'setSequence',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fieldId' => 'getFieldId',
        'initial' => 'getInitial',
        'comma' => 'getComma',
        'conditionalBreak' => 'getConditionalBreak',
        'hardBreak' => 'getHardBreak',
        'concatenate' => 'getConcatenate',
        'smart' => 'getSmart',
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
        $this->setIfExists('fieldId', $data ?? [], null);
        $this->setIfExists('initial', $data ?? [], null);
        $this->setIfExists('comma', $data ?? [], null);
        $this->setIfExists('conditionalBreak', $data ?? [], null);
        $this->setIfExists('hardBreak', $data ?? [], null);
        $this->setIfExists('concatenate', $data ?? [], null);
        $this->setIfExists('smart', $data ?? [], null);
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

        if ($this->container['fieldId'] === null) {
            $invalidProperties[] = "'fieldId' can't be null";
        }
        if ($this->container['sequence'] === null) {
            $invalidProperties[] = "'sequence' can't be null";
        }
        if (($this->container['sequence'] > 20)) {
            $invalidProperties[] = "invalid value for 'sequence', must be smaller than or equal to 20.";
        }

        if (($this->container['sequence'] < 1)) {
            $invalidProperties[] = "invalid value for 'sequence', must be bigger than or equal to 1.";
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
     * Gets fieldId
     *
     * @return int
     */
    public function getFieldId()
    {
        return $this->container['fieldId'];
    }

    /**
     * Sets fieldId
     *
     * @param int $fieldId The unique identifier for the field.
     *
     * @return self
     */
    public function setFieldId($fieldId)
    {
        if (is_null($fieldId)) {
            throw new \InvalidArgumentException('non-nullable fieldId cannot be null');
        }
        $this->container['fieldId'] = $fieldId;

        return $this;
    }

    /**
     * Gets initial
     *
     * @return bool|null
     */
    public function getInitial()
    {
        return $this->container['initial'];
    }

    /**
     * Sets initial
     *
     * @param bool|null $initial The value used to indicate whether the field is the initial field in a name format.
     *
     * @return self
     */
    public function setInitial($initial)
    {
        if (is_null($initial)) {
            throw new \InvalidArgumentException('non-nullable initial cannot be null');
        }
        $this->container['initial'] = $initial;

        return $this;
    }

    /**
     * Gets comma
     *
     * @return bool|null
     */
    public function getComma()
    {
        return $this->container['comma'];
    }

    /**
     * Sets comma
     *
     * @param bool|null $comma The value used to indicate whether a comma is included in the field.
     *
     * @return self
     */
    public function setComma($comma)
    {
        if (is_null($comma)) {
            throw new \InvalidArgumentException('non-nullable comma cannot be null');
        }
        $this->container['comma'] = $comma;

        return $this;
    }

    /**
     * Gets conditionalBreak
     *
     * @return bool|null
     */
    public function getConditionalBreak()
    {
        return $this->container['conditionalBreak'];
    }

    /**
     * Sets conditionalBreak
     *
     * @param bool|null $conditionalBreak The value used to indicate whether a conditional break is included in the field.
     *
     * @return self
     */
    public function setConditionalBreak($conditionalBreak)
    {
        if (is_null($conditionalBreak)) {
            throw new \InvalidArgumentException('non-nullable conditionalBreak cannot be null');
        }
        $this->container['conditionalBreak'] = $conditionalBreak;

        return $this;
    }

    /**
     * Gets hardBreak
     *
     * @return bool|null
     */
    public function getHardBreak()
    {
        return $this->container['hardBreak'];
    }

    /**
     * Sets hardBreak
     *
     * @param bool|null $hardBreak The value used to indicate whether a hard break is included in the field.
     *
     * @return self
     */
    public function setHardBreak($hardBreak)
    {
        if (is_null($hardBreak)) {
            throw new \InvalidArgumentException('non-nullable hardBreak cannot be null');
        }
        $this->container['hardBreak'] = $hardBreak;

        return $this;
    }

    /**
     * Gets concatenate
     *
     * @return bool|null
     */
    public function getConcatenate()
    {
        return $this->container['concatenate'];
    }

    /**
     * Sets concatenate
     *
     * @param bool|null $concatenate The value used to indicate whether the field can be concatenated.
     *
     * @return self
     */
    public function setConcatenate($concatenate)
    {
        if (is_null($concatenate)) {
            throw new \InvalidArgumentException('non-nullable concatenate cannot be null');
        }
        $this->container['concatenate'] = $concatenate;

        return $this;
    }

    /**
     * Gets smart
     *
     * @return bool|null
     */
    public function getSmart()
    {
        return $this->container['smart'];
    }

    /**
     * Sets smart
     *
     * @param bool|null $smart The value used to indicate whether the field is a smart concatenate field; it can be true only when preceded by a user-defined field.
     *
     * @return self
     */
    public function setSmart($smart)
    {
        if (is_null($smart)) {
            throw new \InvalidArgumentException('non-nullable smart cannot be null');
        }
        $this->container['smart'] = $smart;

        return $this;
    }

    /**
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence The numeric sequence associated with the field.
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        if (is_null($sequence)) {
            throw new \InvalidArgumentException('non-nullable sequence cannot be null');
        }

        if (($sequence > 20)) {
            throw new \InvalidArgumentException('invalid value for $sequence when calling NameFormatConfigurationFieldDetail., must be smaller than or equal to 20.');
        }
        if (($sequence < 1)) {
            throw new \InvalidArgumentException('invalid value for $sequence when calling NameFormatConfigurationFieldDetail., must be bigger than or equal to 1.');
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
