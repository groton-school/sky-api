<?php
/**
 * TributeListSummary
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SKY\Altru\Constituent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Altru Constituent
 *
 * Altru Constituent SKY API
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

namespace SKY\Altru\Constituent\Model;

use ArrayAccess;
use SKY\Altru\Constituent\ObjectSerializer;

/**
 * TributeListSummary Class Doc Comment
 *
 * @category Class
 * @description ListTribute
 * @package  SKY\Altru\Constituent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TributeListSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TributeListSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'tributeText' => 'string',
        'tributeType' => 'string',
        'active' => 'bool',
        'dateCreated' => '\DateTime',
        'tributee' => 'bool',
        'acknowledgee' => 'bool',
        'sites' => 'string',
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
        'tributeText' => null,
        'tributeType' => null,
        'active' => null,
        'dateCreated' => 'date',
        'tributee' => null,
        'acknowledgee' => null,
        'sites' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'tributeText' => false,
        'tributeType' => false,
        'active' => false,
        'dateCreated' => false,
        'tributee' => false,
        'acknowledgee' => false,
        'sites' => false,
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
        'tributeText' => 'tribute_text',
        'tributeType' => 'tribute_type',
        'active' => 'active',
        'dateCreated' => 'date_created',
        'tributee' => 'tributee',
        'acknowledgee' => 'acknowledgee',
        'sites' => 'sites',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'tributeText' => 'setTributeText',
        'tributeType' => 'setTributeType',
        'active' => 'setActive',
        'dateCreated' => 'setDateCreated',
        'tributee' => 'setTributee',
        'acknowledgee' => 'setAcknowledgee',
        'sites' => 'setSites',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'tributeText' => 'getTributeText',
        'tributeType' => 'getTributeType',
        'active' => 'getActive',
        'dateCreated' => 'getDateCreated',
        'tributee' => 'getTributee',
        'acknowledgee' => 'getAcknowledgee',
        'sites' => 'getSites',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('tributeText', $data ?? [], null);
        $this->setIfExists('tributeType', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('dateCreated', $data ?? [], null);
        $this->setIfExists('tributee', $data ?? [], null);
        $this->setIfExists('acknowledgee', $data ?? [], null);
        $this->setIfExists('sites', $data ?? [], null);
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
     * @param string|null $id The id.
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
     * Gets tributeText
     *
     * @return string|null
     */
    public function getTributeText()
    {
        return $this->container['tributeText'];
    }

    /**
     * Sets tributeText
     *
     * @param string|null $tributeText The tribute text.
     *
     * @return self
     */
    public function setTributeText($tributeText)
    {
        if (is_null($tributeText)) {
            throw new \InvalidArgumentException('non-nullable tributeText cannot be null');
        }
        $this->container['tributeText'] = $tributeText;

        return $this;
    }

    /**
     * Gets tributeType
     *
     * @return string|null
     */
    public function getTributeType()
    {
        return $this->container['tributeType'];
    }

    /**
     * Sets tributeType
     *
     * @param string|null $tributeType The tribute type.
     *
     * @return self
     */
    public function setTributeType($tributeType)
    {
        if (is_null($tributeType)) {
            throw new \InvalidArgumentException('non-nullable tributeType cannot be null');
        }
        $this->container['tributeType'] = $tributeType;

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
     * @param bool|null $active Indicates whether is active.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime|null
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime|null $dateCreated The date created.Uses the format YYYY-MM-DD. An example date: <i>2019-11-21</i>.
     *
     * @return self
     */
    public function setDateCreated($dateCreated)
    {
        if (is_null($dateCreated)) {
            throw new \InvalidArgumentException('non-nullable dateCreated cannot be null');
        }
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets tributee
     *
     * @return bool|null
     */
    public function getTributee()
    {
        return $this->container['tributee'];
    }

    /**
     * Sets tributee
     *
     * @param bool|null $tributee Indicates whether is tributee.
     *
     * @return self
     */
    public function setTributee($tributee)
    {
        if (is_null($tributee)) {
            throw new \InvalidArgumentException('non-nullable tributee cannot be null');
        }
        $this->container['tributee'] = $tributee;

        return $this;
    }

    /**
     * Gets acknowledgee
     *
     * @return bool|null
     */
    public function getAcknowledgee()
    {
        return $this->container['acknowledgee'];
    }

    /**
     * Sets acknowledgee
     *
     * @param bool|null $acknowledgee Indicates whether is acknowledgee.
     *
     * @return self
     */
    public function setAcknowledgee($acknowledgee)
    {
        if (is_null($acknowledgee)) {
            throw new \InvalidArgumentException('non-nullable acknowledgee cannot be null');
        }
        $this->container['acknowledgee'] = $acknowledgee;

        return $this;
    }

    /**
     * Gets sites
     *
     * @return string|null
     */
    public function getSites()
    {
        return $this->container['sites'];
    }

    /**
     * Sets sites
     *
     * @param string|null $sites The sites.
     *
     * @return self
     */
    public function setSites($sites)
    {
        if (is_null($sites)) {
            throw new \InvalidArgumentException('non-nullable sites cannot be null');
        }
        $this->container['sites'] = $sites;

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
