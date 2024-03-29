<?php
/**
 * NewConstituentMerge
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
 * NewConstituentMerge Class Doc Comment
 *
 * @category Class
 * @description CreateMergeTwoConstituents
 * @package  SKY\Altru\Constituent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NewConstituentMerge implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewConstituentMerge';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sourceId' => 'string',
        'targetid' => 'string',
        'config' => 'string',
        'deleteSource' => 'bool',
        'constituentInactivityReasonCode' => 'string',
        'constituentInactivityDetails' => 'string',
        'deleteSourceConstituent' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sourceId' => null,
        'targetid' => null,
        'config' => null,
        'deleteSource' => null,
        'constituentInactivityReasonCode' => null,
        'constituentInactivityDetails' => null,
        'deleteSourceConstituent' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sourceId' => false,
        'targetid' => false,
        'config' => false,
        'deleteSource' => false,
        'constituentInactivityReasonCode' => false,
        'constituentInactivityDetails' => false,
        'deleteSourceConstituent' => false,
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
        'sourceId' => 'source_id',
        'targetid' => 'targetid',
        'config' => 'config',
        'deleteSource' => 'delete_source',
        'constituentInactivityReasonCode' => 'constituent_inactivity_reason_code',
        'constituentInactivityDetails' => 'constituent_inactivity_details',
        'deleteSourceConstituent' => 'delete_source_constituent',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceId' => 'setSourceId',
        'targetid' => 'setTargetid',
        'config' => 'setConfig',
        'deleteSource' => 'setDeleteSource',
        'constituentInactivityReasonCode' => 'setConstituentInactivityReasonCode',
        'constituentInactivityDetails' => 'setConstituentInactivityDetails',
        'deleteSourceConstituent' => 'setDeleteSourceConstituent',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceId' => 'getSourceId',
        'targetid' => 'getTargetid',
        'config' => 'getConfig',
        'deleteSource' => 'getDeleteSource',
        'constituentInactivityReasonCode' => 'getConstituentInactivityReasonCode',
        'constituentInactivityDetails' => 'getConstituentInactivityDetails',
        'deleteSourceConstituent' => 'getDeleteSourceConstituent',
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
        $this->setIfExists('sourceId', $data ?? [], null);
        $this->setIfExists('targetid', $data ?? [], null);
        $this->setIfExists('config', $data ?? [], null);
        $this->setIfExists('deleteSource', $data ?? [], null);
        $this->setIfExists('constituentInactivityReasonCode', $data ?? [], null);
        $this->setIfExists('constituentInactivityDetails', $data ?? [], null);
        $this->setIfExists('deleteSourceConstituent', $data ?? [], null);
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

        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
        if ($this->container['targetid'] === null) {
            $invalidProperties[] = "'targetid' can't be null";
        }
        if ($this->container['config'] === null) {
            $invalidProperties[] = "'config' can't be null";
        }
        if ($this->container['deleteSource'] === null) {
            $invalidProperties[] = "'deleteSource' can't be null";
        }
        if (!is_null($this->container['constituentInactivityDetails']) && (mb_strlen($this->container['constituentInactivityDetails']) > 300)) {
            $invalidProperties[] = "invalid value for 'constituentInactivityDetails', the character length must be smaller than or equal to 300.";
        }

        if (!is_null($this->container['constituentInactivityDetails']) && (mb_strlen($this->container['constituentInactivityDetails']) < 0)) {
            $invalidProperties[] = "invalid value for 'constituentInactivityDetails', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['deleteSourceConstituent'] === null) {
            $invalidProperties[] = "'deleteSourceConstituent' can't be null";
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
     * Gets sourceId
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
     * Sets sourceId
     *
     * @param string $sourceId The the constituent whose data will be merged into the target constituent..
     *
     * @return self
     */
    public function setSourceId($sourceId)
    {
        if (is_null($sourceId)) {
            throw new \InvalidArgumentException('non-nullable sourceId cannot be null');
        }
        $this->container['sourceId'] = $sourceId;

        return $this;
    }

    /**
     * Gets targetid
     *
     * @return string
     */
    public function getTargetid()
    {
        return $this->container['targetid'];
    }

    /**
     * Sets targetid
     *
     * @param string $targetid The the constituent record that will represent the consolidated view of the constituent's data after the merge has completed..
     *
     * @return self
     */
    public function setTargetid($targetid)
    {
        if (is_null($targetid)) {
            throw new \InvalidArgumentException('non-nullable targetid cannot be null');
        }
        $this->container['targetid'] = $targetid;

        return $this;
    }

    /**
     * Gets config
     *
     * @return string
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param string $config The the merge configuration that will be used to merge the two constituents.. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/c18b465c-c012-4839-952b-4bb8aae7cb3f.
     *
     * @return self
     */
    public function setConfig($config)
    {
        if (is_null($config)) {
            throw new \InvalidArgumentException('non-nullable config cannot be null');
        }
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets deleteSource
     *
     * @return bool
     */
    public function getDeleteSource()
    {
        return $this->container['deleteSource'];
    }

    /**
     * Sets deleteSource
     *
     * @param bool $deleteSource Indicates whether if true then the source constituent will be deleted after the merge operation is complete..
     *
     * @return self
     */
    public function setDeleteSource($deleteSource)
    {
        if (is_null($deleteSource)) {
            throw new \InvalidArgumentException('non-nullable deleteSource cannot be null');
        }
        $this->container['deleteSource'] = $deleteSource;

        return $this;
    }

    /**
     * Gets constituentInactivityReasonCode
     *
     * @return string|null
     */
    public function getConstituentInactivityReasonCode()
    {
        return $this->container['constituentInactivityReasonCode'];
    }

    /**
     * Sets constituentInactivityReasonCode
     *
     * @param string|null $constituentInactivityReasonCode The inactive reason. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/71b29b04-d70f-4d38-bab1-e44a2528d0e8.
     *
     * @return self
     */
    public function setConstituentInactivityReasonCode($constituentInactivityReasonCode)
    {
        if (is_null($constituentInactivityReasonCode)) {
            throw new \InvalidArgumentException('non-nullable constituentInactivityReasonCode cannot be null');
        }
        $this->container['constituentInactivityReasonCode'] = $constituentInactivityReasonCode;

        return $this;
    }

    /**
     * Gets constituentInactivityDetails
     *
     * @return string|null
     */
    public function getConstituentInactivityDetails()
    {
        return $this->container['constituentInactivityDetails'];
    }

    /**
     * Sets constituentInactivityDetails
     *
     * @param string|null $constituentInactivityDetails The inactive details.
     *
     * @return self
     */
    public function setConstituentInactivityDetails($constituentInactivityDetails)
    {
        if (is_null($constituentInactivityDetails)) {
            throw new \InvalidArgumentException('non-nullable constituentInactivityDetails cannot be null');
        }
        if ((mb_strlen($constituentInactivityDetails) > 300)) {
            throw new \InvalidArgumentException('invalid length for $constituentInactivityDetails when calling NewConstituentMerge., must be smaller than or equal to 300.');
        }
        if ((mb_strlen($constituentInactivityDetails) < 0)) {
            throw new \InvalidArgumentException('invalid length for $constituentInactivityDetails when calling NewConstituentMerge., must be bigger than or equal to 0.');
        }

        $this->container['constituentInactivityDetails'] = $constituentInactivityDetails;

        return $this;
    }

    /**
     * Gets deleteSourceConstituent
     *
     * @return string
     */
    public function getDeleteSourceConstituent()
    {
        return $this->container['deleteSourceConstituent'];
    }

    /**
     * Sets deleteSourceConstituent
     *
     * @param string $deleteSourceConstituent The delete source constituent. Available values are <i>delete source constituent</i>, <i>mark source constituent inactive</i>
     *
     * @return self
     */
    public function setDeleteSourceConstituent($deleteSourceConstituent)
    {
        if (is_null($deleteSourceConstituent)) {
            throw new \InvalidArgumentException('non-nullable deleteSourceConstituent cannot be null');
        }
        $this->container['deleteSourceConstituent'] = $deleteSourceConstituent;

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
