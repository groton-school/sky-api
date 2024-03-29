<?php
/**
 * ScheduleSetMettingPattern
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
 * ScheduleSetMettingPattern Class Doc Comment
 *
 * @category Class
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ScheduleSetMettingPattern implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScheduleSetMettingPattern';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'patternNum' => 'int',
        'sun' => 'bool',
        'mon' => 'bool',
        'tue' => 'bool',
        'wed' => 'bool',
        'thu' => 'bool',
        'fri' => 'bool',
        'sat' => 'bool',
        'meetingTimeList' => '\SKY\School\Model\ScheduleSetMettingTime[]',
        'hasAttendance' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'patternNum' => 'int32',
        'sun' => null,
        'mon' => null,
        'tue' => null,
        'wed' => null,
        'thu' => null,
        'fri' => null,
        'sat' => null,
        'meetingTimeList' => null,
        'hasAttendance' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'patternNum' => true,
        'sun' => true,
        'mon' => true,
        'tue' => true,
        'wed' => true,
        'thu' => true,
        'fri' => true,
        'sat' => true,
        'meetingTimeList' => true,
        'hasAttendance' => true,
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
        'patternNum' => 'PatternNum',
        'sun' => 'Sun',
        'mon' => 'Mon',
        'tue' => 'Tue',
        'wed' => 'Wed',
        'thu' => 'Thu',
        'fri' => 'Fri',
        'sat' => 'Sat',
        'meetingTimeList' => 'MeetingTimeList',
        'hasAttendance' => 'HasAttendance',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'patternNum' => 'setPatternNum',
        'sun' => 'setSun',
        'mon' => 'setMon',
        'tue' => 'setTue',
        'wed' => 'setWed',
        'thu' => 'setThu',
        'fri' => 'setFri',
        'sat' => 'setSat',
        'meetingTimeList' => 'setMeetingTimeList',
        'hasAttendance' => 'setHasAttendance',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'patternNum' => 'getPatternNum',
        'sun' => 'getSun',
        'mon' => 'getMon',
        'tue' => 'getTue',
        'wed' => 'getWed',
        'thu' => 'getThu',
        'fri' => 'getFri',
        'sat' => 'getSat',
        'meetingTimeList' => 'getMeetingTimeList',
        'hasAttendance' => 'getHasAttendance',
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
        $this->setIfExists('patternNum', $data ?? [], null);
        $this->setIfExists('sun', $data ?? [], null);
        $this->setIfExists('mon', $data ?? [], null);
        $this->setIfExists('tue', $data ?? [], null);
        $this->setIfExists('wed', $data ?? [], null);
        $this->setIfExists('thu', $data ?? [], null);
        $this->setIfExists('fri', $data ?? [], null);
        $this->setIfExists('sat', $data ?? [], null);
        $this->setIfExists('meetingTimeList', $data ?? [], null);
        $this->setIfExists('hasAttendance', $data ?? [], null);
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
     * Gets patternNum
     *
     * @return int|null
     */
    public function getPatternNum()
    {
        return $this->container['patternNum'];
    }

    /**
     * Sets patternNum
     *
     * @param int|null $patternNum patternNum
     *
     * @return self
     */
    public function setPatternNum($patternNum)
    {
        if (is_null($patternNum)) {
            array_push($this->openAPINullablesSetToNull, 'patternNum');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('patternNum', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['patternNum'] = $patternNum;

        return $this;
    }

    /**
     * Gets sun
     *
     * @return bool|null
     */
    public function getSun()
    {
        return $this->container['sun'];
    }

    /**
     * Sets sun
     *
     * @param bool|null $sun sun
     *
     * @return self
     */
    public function setSun($sun)
    {
        if (is_null($sun)) {
            array_push($this->openAPINullablesSetToNull, 'sun');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sun', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sun'] = $sun;

        return $this;
    }

    /**
     * Gets mon
     *
     * @return bool|null
     */
    public function getMon()
    {
        return $this->container['mon'];
    }

    /**
     * Sets mon
     *
     * @param bool|null $mon mon
     *
     * @return self
     */
    public function setMon($mon)
    {
        if (is_null($mon)) {
            array_push($this->openAPINullablesSetToNull, 'mon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('mon', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['mon'] = $mon;

        return $this;
    }

    /**
     * Gets tue
     *
     * @return bool|null
     */
    public function getTue()
    {
        return $this->container['tue'];
    }

    /**
     * Sets tue
     *
     * @param bool|null $tue tue
     *
     * @return self
     */
    public function setTue($tue)
    {
        if (is_null($tue)) {
            array_push($this->openAPINullablesSetToNull, 'tue');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('tue', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['tue'] = $tue;

        return $this;
    }

    /**
     * Gets wed
     *
     * @return bool|null
     */
    public function getWed()
    {
        return $this->container['wed'];
    }

    /**
     * Sets wed
     *
     * @param bool|null $wed wed
     *
     * @return self
     */
    public function setWed($wed)
    {
        if (is_null($wed)) {
            array_push($this->openAPINullablesSetToNull, 'wed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('wed', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['wed'] = $wed;

        return $this;
    }

    /**
     * Gets thu
     *
     * @return bool|null
     */
    public function getThu()
    {
        return $this->container['thu'];
    }

    /**
     * Sets thu
     *
     * @param bool|null $thu thu
     *
     * @return self
     */
    public function setThu($thu)
    {
        if (is_null($thu)) {
            array_push($this->openAPINullablesSetToNull, 'thu');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('thu', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['thu'] = $thu;

        return $this;
    }

    /**
     * Gets fri
     *
     * @return bool|null
     */
    public function getFri()
    {
        return $this->container['fri'];
    }

    /**
     * Sets fri
     *
     * @param bool|null $fri fri
     *
     * @return self
     */
    public function setFri($fri)
    {
        if (is_null($fri)) {
            array_push($this->openAPINullablesSetToNull, 'fri');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('fri', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['fri'] = $fri;

        return $this;
    }

    /**
     * Gets sat
     *
     * @return bool|null
     */
    public function getSat()
    {
        return $this->container['sat'];
    }

    /**
     * Sets sat
     *
     * @param bool|null $sat sat
     *
     * @return self
     */
    public function setSat($sat)
    {
        if (is_null($sat)) {
            array_push($this->openAPINullablesSetToNull, 'sat');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sat', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sat'] = $sat;

        return $this;
    }

    /**
     * Gets meetingTimeList
     *
     * @return \SKY\School\Model\ScheduleSetMettingTime[]|null
     */
    public function getMeetingTimeList()
    {
        return $this->container['meetingTimeList'];
    }

    /**
     * Sets meetingTimeList
     *
     * @param \SKY\School\Model\ScheduleSetMettingTime[]|null $meetingTimeList meetingTimeList
     *
     * @return self
     */
    public function setMeetingTimeList($meetingTimeList)
    {
        if (is_null($meetingTimeList)) {
            array_push($this->openAPINullablesSetToNull, 'meetingTimeList');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('meetingTimeList', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['meetingTimeList'] = $meetingTimeList;

        return $this;
    }

    /**
     * Gets hasAttendance
     *
     * @return bool|null
     */
    public function getHasAttendance()
    {
        return $this->container['hasAttendance'];
    }

    /**
     * Sets hasAttendance
     *
     * @param bool|null $hasAttendance hasAttendance
     *
     * @return self
     */
    public function setHasAttendance($hasAttendance)
    {
        if (is_null($hasAttendance)) {
            array_push($this->openAPINullablesSetToNull, 'hasAttendance');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('hasAttendance', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['hasAttendance'] = $hasAttendance;

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
