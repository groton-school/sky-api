<?php
/**
 * UserDefinedTableValue
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * School
 *
 * This API is used to provide access to school information such as users, academics, admissions, athletics, content, lists, and general school info.
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

namespace SKY\School\Model;

use ArrayAccess;
use SKY\School\ObjectSerializer;

/**
 * UserDefinedTableValue Class Doc Comment
 *
 * @category Class
 * @description User Defined Table Values
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UserDefinedTableValue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UserDefinedTableValue';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'tableId' => 'int',
        'tableValueId' => 'int',
        'valueName' => 'string',
        'valueAbbreviation' => 'string',
        'inUse' => 'bool',
        'active' => 'bool',
        'sort' => 'int',
        'baseTableValueId' => 'int',
        'baseValue' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'tableId' => 'int32',
        'tableValueId' => 'int32',
        'valueName' => null,
        'valueAbbreviation' => null,
        'inUse' => null,
        'active' => null,
        'sort' => 'int32',
        'baseTableValueId' => 'int32',
        'baseValue' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'tableId' => true,
        'tableValueId' => true,
        'valueName' => true,
        'valueAbbreviation' => true,
        'inUse' => true,
        'active' => true,
        'sort' => true,
        'baseTableValueId' => true,
        'baseValue' => true,
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
        'tableId' => 'table_id',
        'tableValueId' => 'table_value_id',
        'valueName' => 'value_name',
        'valueAbbreviation' => 'value_abbreviation',
        'inUse' => 'in_use',
        'active' => 'active',
        'sort' => 'sort',
        'baseTableValueId' => 'base_table_value_id',
        'baseValue' => 'base_value',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'tableId' => 'setTableId',
        'tableValueId' => 'setTableValueId',
        'valueName' => 'setValueName',
        'valueAbbreviation' => 'setValueAbbreviation',
        'inUse' => 'setInUse',
        'active' => 'setActive',
        'sort' => 'setSort',
        'baseTableValueId' => 'setBaseTableValueId',
        'baseValue' => 'setBaseValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'tableId' => 'getTableId',
        'tableValueId' => 'getTableValueId',
        'valueName' => 'getValueName',
        'valueAbbreviation' => 'getValueAbbreviation',
        'inUse' => 'getInUse',
        'active' => 'getActive',
        'sort' => 'getSort',
        'baseTableValueId' => 'getBaseTableValueId',
        'baseValue' => 'getBaseValue',
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
        $this->setIfExists('tableId', $data ?? [], null);
        $this->setIfExists('tableValueId', $data ?? [], null);
        $this->setIfExists('valueName', $data ?? [], null);
        $this->setIfExists('valueAbbreviation', $data ?? [], null);
        $this->setIfExists('inUse', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
        $this->setIfExists('baseTableValueId', $data ?? [], null);
        $this->setIfExists('baseValue', $data ?? [], null);
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
     * Gets tableId
     *
     * @return int|null
     */
    public function getTableId()
    {
        return $this->container['tableId'];
    }

    /**
     * Sets tableId
     *
     * @param int|null $tableId
     *
     * @return self
     */
    public function setTableId($tableId)
    {
        if (is_null($tableId)) {
            array_push($this->openAPINullablesSetToNull, 'tableId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tableId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tableId'] = $tableId;

        return $this;
    }

    /**
     * Gets tableValueId
     *
     * @return int|null
     */
    public function getTableValueId()
    {
        return $this->container['tableValueId'];
    }

    /**
     * Sets tableValueId
     *
     * @param int|null $tableValueId
     *
     * @return self
     */
    public function setTableValueId($tableValueId)
    {
        if (is_null($tableValueId)) {
            array_push($this->openAPINullablesSetToNull, 'tableValueId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tableValueId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tableValueId'] = $tableValueId;

        return $this;
    }

    /**
     * Gets valueName
     *
     * @return string|null
     */
    public function getValueName()
    {
        return $this->container['valueName'];
    }

    /**
     * Sets valueName
     *
     * @param string|null $valueName
     *
     * @return self
     */
    public function setValueName($valueName)
    {
        if (is_null($valueName)) {
            array_push($this->openAPINullablesSetToNull, 'valueName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valueName', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valueName'] = $valueName;

        return $this;
    }

    /**
     * Gets valueAbbreviation
     *
     * @return string|null
     */
    public function getValueAbbreviation()
    {
        return $this->container['valueAbbreviation'];
    }

    /**
     * Sets valueAbbreviation
     *
     * @param string|null $valueAbbreviation
     *
     * @return self
     */
    public function setValueAbbreviation($valueAbbreviation)
    {
        if (is_null($valueAbbreviation)) {
            array_push($this->openAPINullablesSetToNull, 'valueAbbreviation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('valueAbbreviation', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['valueAbbreviation'] = $valueAbbreviation;

        return $this;
    }

    /**
     * Gets inUse
     *
     * @return bool|null
     */
    public function getInUse()
    {
        return $this->container['inUse'];
    }

    /**
     * Sets inUse
     *
     * @param bool|null $inUse
     *
     * @return self
     */
    public function setInUse($inUse)
    {
        if (is_null($inUse)) {
            array_push($this->openAPINullablesSetToNull, 'inUse');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inUse', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['inUse'] = $inUse;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            array_push($this->openAPINullablesSetToNull, 'active');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('active', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return int|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param int|null $sort
     *
     * @return self
     */
    public function setSort($sort)
    {
        if (is_null($sort)) {
            array_push($this->openAPINullablesSetToNull, 'sort');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sort', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets baseTableValueId
     *
     * @return int|null
     */
    public function getBaseTableValueId()
    {
        return $this->container['baseTableValueId'];
    }

    /**
     * Sets baseTableValueId
     *
     * @param int|null $baseTableValueId
     *
     * @return self
     */
    public function setBaseTableValueId($baseTableValueId)
    {
        if (is_null($baseTableValueId)) {
            array_push($this->openAPINullablesSetToNull, 'baseTableValueId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('baseTableValueId', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['baseTableValueId'] = $baseTableValueId;

        return $this;
    }

    /**
     * Gets baseValue
     *
     * @return bool|null
     */
    public function getBaseValue()
    {
        return $this->container['baseValue'];
    }

    /**
     * Sets baseValue
     *
     * @param bool|null $baseValue
     *
     * @return self
     */
    public function setBaseValue($baseValue)
    {
        if (is_null($baseValue)) {
            array_push($this->openAPINullablesSetToNull, 'baseValue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('baseValue', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['baseValue'] = $baseValue;

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
