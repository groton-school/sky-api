<?php
/**
 * TableEntryEdit
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
 * TableEntryEdit Class Doc Comment
 *
 * @category Class
 * @description RE7 Table entry record edit class from the dbo.TableEntries table in Raiser&#39;s Edge.
 * @package  SKY\NXT\DataIntegration
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TableEntryEdit implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TableEntryEdit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'isActive' => 'bool',
        'longDescription' => 'string',
        'shortDescription' => 'string',
        'numericValue' => 'float',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'isActive' => null,
        'longDescription' => null,
        'shortDescription' => null,
        'numericValue' => 'double',
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'isActive' => false,
        'longDescription' => false,
        'shortDescription' => true,
        'numericValue' => true,
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
        'isActive' => 'is_active',
        'longDescription' => 'long_description',
        'shortDescription' => 'short_description',
        'numericValue' => 'numeric_value',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'isActive' => 'setIsActive',
        'longDescription' => 'setLongDescription',
        'shortDescription' => 'setShortDescription',
        'numericValue' => 'setNumericValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'isActive' => 'getIsActive',
        'longDescription' => 'getLongDescription',
        'shortDescription' => 'getShortDescription',
        'numericValue' => 'getNumericValue',
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
        $this->setIfExists('isActive', $data ?? [], null);
        $this->setIfExists('longDescription', $data ?? [], null);
        $this->setIfExists('shortDescription', $data ?? [], null);
        $this->setIfExists('numericValue', $data ?? [], null);
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

        if ($this->container['longDescription'] === null) {
            $invalidProperties[] = "'longDescription' can't be null";
        }
        if ((mb_strlen($this->container['longDescription']) > 100)) {
            $invalidProperties[] = "invalid value for 'longDescription', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['longDescription']) < 0)) {
            $invalidProperties[] = "invalid value for 'longDescription', the character length must be bigger than or equal to 0.";
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
     * Gets isActive
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['isActive'];
    }

    /**
     * Sets isActive
     *
     * @param bool|null $isActive The active status of the entry.
     *
     * @return self
     */
    public function setIsActive($isActive)
    {
        if (is_null($isActive)) {
            throw new \InvalidArgumentException('non-nullable isActive cannot be null');
        }
        $this->container['isActive'] = $isActive;

        return $this;
    }

    /**
     * Gets longDescription
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->container['longDescription'];
    }

    /**
     * Sets longDescription
     *
     * @param string $longDescription The long description of the entry.
     *
     * @return self
     */
    public function setLongDescription($longDescription)
    {
        if (is_null($longDescription)) {
            throw new \InvalidArgumentException('non-nullable longDescription cannot be null');
        }
        if ((mb_strlen($longDescription) > 100)) {
            throw new \InvalidArgumentException('invalid length for $longDescription when calling TableEntryEdit., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($longDescription) < 0)) {
            throw new \InvalidArgumentException('invalid length for $longDescription when calling TableEntryEdit., must be bigger than or equal to 0.');
        }

        $this->container['longDescription'] = $longDescription;

        return $this;
    }

    /**
     * Gets shortDescription
     *
     * @return string|null
     */
    public function getShortDescription()
    {
        return $this->container['shortDescription'];
    }

    /**
     * Sets shortDescription
     *
     * @param string|null $shortDescription The short description of the entry.
     *
     * @return self
     */
    public function setShortDescription($shortDescription)
    {
        if (is_null($shortDescription)) {
            array_push($this->openAPINullablesSetToNull, 'shortDescription');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shortDescription', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shortDescription'] = $shortDescription;

        return $this;
    }

    /**
     * Gets numericValue
     *
     * @return float|null
     */
    public function getNumericValue()
    {
        return $this->container['numericValue'];
    }

    /**
     * Sets numericValue
     *
     * @param float|null $numericValue The numeric value of the entry.
     *
     * @return self
     */
    public function setNumericValue($numericValue)
    {
        if (is_null($numericValue)) {
            array_push($this->openAPINullablesSetToNull, 'numericValue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('numericValue', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['numericValue'] = $numericValue;

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
