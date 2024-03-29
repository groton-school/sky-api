<?php
/**
 * ConstituentAttribute
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
 * ConstituentAttribute Class Doc Comment
 *
 * @category Class
 * @description GetConstituentAttribute
 * @package  SKY\Altru\Constituent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConstituentAttribute implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConstituentAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'headerCaption' => 'string',
        'attributeCategoryDescription' => 'string',
        'attributeCategoryId' => 'string',
        'dataTypeCode' => 'int',
        'stringValue' => 'string',
        'numberValue' => 'int',
        'moneyValue' => 'float',
        'dateValue' => '\DateTime',
        'booleanvalue' => 'string',
        'codeTableValue' => 'string',
        'fuzzyDateValue' => '\SKY\Altru\Constituent\Model\FuzzyDate',
        'constituentIdValue' => 'string',
        'hourMinuteValue' => '\SKY\Altru\Constituent\Model\HourMinute',
        'memoValue' => 'string',
        'comment' => 'string',
        'constituentSearchListCatalogId' => 'string',
        'codeTableName' => 'string',
        'startDate' => '\DateTime',
        'endDate' => '\DateTime',
        'currency' => 'string',
        'transactionCurrencyId' => 'string',
        'baseCurrencyId' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'headerCaption' => null,
        'attributeCategoryDescription' => null,
        'attributeCategoryId' => null,
        'dataTypeCode' => 'int32',
        'stringValue' => null,
        'numberValue' => 'int32',
        'moneyValue' => 'double',
        'dateValue' => 'date',
        'booleanvalue' => null,
        'codeTableValue' => null,
        'fuzzyDateValue' => null,
        'constituentIdValue' => null,
        'hourMinuteValue' => null,
        'memoValue' => null,
        'comment' => null,
        'constituentSearchListCatalogId' => null,
        'codeTableName' => null,
        'startDate' => 'date',
        'endDate' => 'date',
        'currency' => null,
        'transactionCurrencyId' => null,
        'baseCurrencyId' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'headerCaption' => false,
        'attributeCategoryDescription' => false,
        'attributeCategoryId' => false,
        'dataTypeCode' => false,
        'stringValue' => false,
        'numberValue' => false,
        'moneyValue' => false,
        'dateValue' => false,
        'booleanvalue' => false,
        'codeTableValue' => false,
        'fuzzyDateValue' => false,
        'constituentIdValue' => false,
        'hourMinuteValue' => false,
        'memoValue' => false,
        'comment' => false,
        'constituentSearchListCatalogId' => false,
        'codeTableName' => false,
        'startDate' => false,
        'endDate' => false,
        'currency' => false,
        'transactionCurrencyId' => false,
        'baseCurrencyId' => false,
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
        'headerCaption' => 'header_caption',
        'attributeCategoryDescription' => 'attribute_category_description',
        'attributeCategoryId' => 'attribute_category_id',
        'dataTypeCode' => 'data_type_code',
        'stringValue' => 'string_value',
        'numberValue' => 'number_value',
        'moneyValue' => 'money_value',
        'dateValue' => 'date_value',
        'booleanvalue' => 'booleanvalue',
        'codeTableValue' => 'code_table_value',
        'fuzzyDateValue' => 'fuzzy_date_value',
        'constituentIdValue' => 'constituent_id_value',
        'hourMinuteValue' => 'hour_minute_value',
        'memoValue' => 'memo_value',
        'comment' => 'comment',
        'constituentSearchListCatalogId' => 'constituent_search_list_catalog_id',
        'codeTableName' => 'code_table_name',
        'startDate' => 'start_date',
        'endDate' => 'end_date',
        'currency' => 'currency',
        'transactionCurrencyId' => 'transaction_currency_id',
        'baseCurrencyId' => 'base_currency_id',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headerCaption' => 'setHeaderCaption',
        'attributeCategoryDescription' => 'setAttributeCategoryDescription',
        'attributeCategoryId' => 'setAttributeCategoryId',
        'dataTypeCode' => 'setDataTypeCode',
        'stringValue' => 'setStringValue',
        'numberValue' => 'setNumberValue',
        'moneyValue' => 'setMoneyValue',
        'dateValue' => 'setDateValue',
        'booleanvalue' => 'setBooleanvalue',
        'codeTableValue' => 'setCodeTableValue',
        'fuzzyDateValue' => 'setFuzzyDateValue',
        'constituentIdValue' => 'setConstituentIdValue',
        'hourMinuteValue' => 'setHourMinuteValue',
        'memoValue' => 'setMemoValue',
        'comment' => 'setComment',
        'constituentSearchListCatalogId' => 'setConstituentSearchListCatalogId',
        'codeTableName' => 'setCodeTableName',
        'startDate' => 'setStartDate',
        'endDate' => 'setEndDate',
        'currency' => 'setCurrency',
        'transactionCurrencyId' => 'setTransactionCurrencyId',
        'baseCurrencyId' => 'setBaseCurrencyId',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headerCaption' => 'getHeaderCaption',
        'attributeCategoryDescription' => 'getAttributeCategoryDescription',
        'attributeCategoryId' => 'getAttributeCategoryId',
        'dataTypeCode' => 'getDataTypeCode',
        'stringValue' => 'getStringValue',
        'numberValue' => 'getNumberValue',
        'moneyValue' => 'getMoneyValue',
        'dateValue' => 'getDateValue',
        'booleanvalue' => 'getBooleanvalue',
        'codeTableValue' => 'getCodeTableValue',
        'fuzzyDateValue' => 'getFuzzyDateValue',
        'constituentIdValue' => 'getConstituentIdValue',
        'hourMinuteValue' => 'getHourMinuteValue',
        'memoValue' => 'getMemoValue',
        'comment' => 'getComment',
        'constituentSearchListCatalogId' => 'getConstituentSearchListCatalogId',
        'codeTableName' => 'getCodeTableName',
        'startDate' => 'getStartDate',
        'endDate' => 'getEndDate',
        'currency' => 'getCurrency',
        'transactionCurrencyId' => 'getTransactionCurrencyId',
        'baseCurrencyId' => 'getBaseCurrencyId',
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
        $this->setIfExists('headerCaption', $data ?? [], null);
        $this->setIfExists('attributeCategoryDescription', $data ?? [], null);
        $this->setIfExists('attributeCategoryId', $data ?? [], null);
        $this->setIfExists('dataTypeCode', $data ?? [], null);
        $this->setIfExists('stringValue', $data ?? [], null);
        $this->setIfExists('numberValue', $data ?? [], null);
        $this->setIfExists('moneyValue', $data ?? [], null);
        $this->setIfExists('dateValue', $data ?? [], null);
        $this->setIfExists('booleanvalue', $data ?? [], null);
        $this->setIfExists('codeTableValue', $data ?? [], null);
        $this->setIfExists('fuzzyDateValue', $data ?? [], null);
        $this->setIfExists('constituentIdValue', $data ?? [], null);
        $this->setIfExists('hourMinuteValue', $data ?? [], null);
        $this->setIfExists('memoValue', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('constituentSearchListCatalogId', $data ?? [], null);
        $this->setIfExists('codeTableName', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('currency', $data ?? [], null);
        $this->setIfExists('transactionCurrencyId', $data ?? [], null);
        $this->setIfExists('baseCurrencyId', $data ?? [], null);
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

        if (!is_null($this->container['stringValue']) && (mb_strlen($this->container['stringValue']) > 250)) {
            $invalidProperties[] = "invalid value for 'stringValue', the character length must be smaller than or equal to 250.";
        }

        if (!is_null($this->container['stringValue']) && (mb_strlen($this->container['stringValue']) < 0)) {
            $invalidProperties[] = "invalid value for 'stringValue', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 255)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 0)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 0.";
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
     * Gets headerCaption
     *
     * @return string|null
     */
    public function getHeaderCaption()
    {
        return $this->container['headerCaption'];
    }

    /**
     * Sets headerCaption
     *
     * @param string|null $headerCaption The headercaption. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setHeaderCaption($headerCaption)
    {
        if (is_null($headerCaption)) {
            throw new \InvalidArgumentException('non-nullable headerCaption cannot be null');
        }
        $this->container['headerCaption'] = $headerCaption;

        return $this;
    }

    /**
     * Gets attributeCategoryDescription
     *
     * @return string|null
     */
    public function getAttributeCategoryDescription()
    {
        return $this->container['attributeCategoryDescription'];
    }

    /**
     * Sets attributeCategoryDescription
     *
     * @param string|null $attributeCategoryDescription The category. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setAttributeCategoryDescription($attributeCategoryDescription)
    {
        if (is_null($attributeCategoryDescription)) {
            throw new \InvalidArgumentException('non-nullable attributeCategoryDescription cannot be null');
        }
        $this->container['attributeCategoryDescription'] = $attributeCategoryDescription;

        return $this;
    }

    /**
     * Gets attributeCategoryId
     *
     * @return string|null
     */
    public function getAttributeCategoryId()
    {
        return $this->container['attributeCategoryId'];
    }

    /**
     * Sets attributeCategoryId
     *
     * @param string|null $attributeCategoryId The attributecategoryid. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setAttributeCategoryId($attributeCategoryId)
    {
        if (is_null($attributeCategoryId)) {
            throw new \InvalidArgumentException('non-nullable attributeCategoryId cannot be null');
        }
        $this->container['attributeCategoryId'] = $attributeCategoryId;

        return $this;
    }

    /**
     * Gets dataTypeCode
     *
     * @return int|null
     */
    public function getDataTypeCode()
    {
        return $this->container['dataTypeCode'];
    }

    /**
     * Sets dataTypeCode
     *
     * @param int|null $dataTypeCode The datatypecode. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setDataTypeCode($dataTypeCode)
    {
        if (is_null($dataTypeCode)) {
            throw new \InvalidArgumentException('non-nullable dataTypeCode cannot be null');
        }
        $this->container['dataTypeCode'] = $dataTypeCode;

        return $this;
    }

    /**
     * Gets stringValue
     *
     * @return string|null
     */
    public function getStringValue()
    {
        return $this->container['stringValue'];
    }

    /**
     * Sets stringValue
     *
     * @param string|null $stringValue The value.
     *
     * @return self
     */
    public function setStringValue($stringValue)
    {
        if (is_null($stringValue)) {
            throw new \InvalidArgumentException('non-nullable stringValue cannot be null');
        }
        if ((mb_strlen($stringValue) > 250)) {
            throw new \InvalidArgumentException('invalid length for $stringValue when calling ConstituentAttribute., must be smaller than or equal to 250.');
        }
        if ((mb_strlen($stringValue) < 0)) {
            throw new \InvalidArgumentException('invalid length for $stringValue when calling ConstituentAttribute., must be bigger than or equal to 0.');
        }

        $this->container['stringValue'] = $stringValue;

        return $this;
    }

    /**
     * Gets numberValue
     *
     * @return int|null
     */
    public function getNumberValue()
    {
        return $this->container['numberValue'];
    }

    /**
     * Sets numberValue
     *
     * @param int|null $numberValue The value.
     *
     * @return self
     */
    public function setNumberValue($numberValue)
    {
        if (is_null($numberValue)) {
            throw new \InvalidArgumentException('non-nullable numberValue cannot be null');
        }
        $this->container['numberValue'] = $numberValue;

        return $this;
    }

    /**
     * Gets moneyValue
     *
     * @return float|null
     */
    public function getMoneyValue()
    {
        return $this->container['moneyValue'];
    }

    /**
     * Sets moneyValue
     *
     * @param float|null $moneyValue The value.
     *
     * @return self
     */
    public function setMoneyValue($moneyValue)
    {
        if (is_null($moneyValue)) {
            throw new \InvalidArgumentException('non-nullable moneyValue cannot be null');
        }
        $this->container['moneyValue'] = $moneyValue;

        return $this;
    }

    /**
     * Gets dateValue
     *
     * @return \DateTime|null
     */
    public function getDateValue()
    {
        return $this->container['dateValue'];
    }

    /**
     * Sets dateValue
     *
     * @param \DateTime|null $dateValue The value.Uses the format YYYY-MM-DD. An example date: <i>2019-11-21</i>.
     *
     * @return self
     */
    public function setDateValue($dateValue)
    {
        if (is_null($dateValue)) {
            throw new \InvalidArgumentException('non-nullable dateValue cannot be null');
        }
        $this->container['dateValue'] = $dateValue;

        return $this;
    }

    /**
     * Gets booleanvalue
     *
     * @return string|null
     */
    public function getBooleanvalue()
    {
        return $this->container['booleanvalue'];
    }

    /**
     * Sets booleanvalue
     *
     * @param string|null $booleanvalue The value. Available values are <i>no</i>, <i>yes</i>
     *
     * @return self
     */
    public function setBooleanvalue($booleanvalue)
    {
        if (is_null($booleanvalue)) {
            throw new \InvalidArgumentException('non-nullable booleanvalue cannot be null');
        }
        $this->container['booleanvalue'] = $booleanvalue;

        return $this;
    }

    /**
     * Gets codeTableValue
     *
     * @return string|null
     */
    public function getCodeTableValue()
    {
        return $this->container['codeTableValue'];
    }

    /**
     * Sets codeTableValue
     *
     * @param string|null $codeTableValue The value. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/addresstypecode/entries
     *
     * @return self
     */
    public function setCodeTableValue($codeTableValue)
    {
        if (is_null($codeTableValue)) {
            throw new \InvalidArgumentException('non-nullable codeTableValue cannot be null');
        }
        $this->container['codeTableValue'] = $codeTableValue;

        return $this;
    }

    /**
     * Gets fuzzyDateValue
     *
     * @return \SKY\Altru\Constituent\Model\FuzzyDate|null
     */
    public function getFuzzyDateValue()
    {
        return $this->container['fuzzyDateValue'];
    }

    /**
     * Sets fuzzyDateValue
     *
     * @param \SKY\Altru\Constituent\Model\FuzzyDate|null $fuzzyDateValue fuzzyDateValue
     *
     * @return self
     */
    public function setFuzzyDateValue($fuzzyDateValue)
    {
        if (is_null($fuzzyDateValue)) {
            throw new \InvalidArgumentException('non-nullable fuzzyDateValue cannot be null');
        }
        $this->container['fuzzyDateValue'] = $fuzzyDateValue;

        return $this;
    }

    /**
     * Gets constituentIdValue
     *
     * @return string|null
     */
    public function getConstituentIdValue()
    {
        return $this->container['constituentIdValue'];
    }

    /**
     * Sets constituentIdValue
     *
     * @param string|null $constituentIdValue The value.
     *
     * @return self
     */
    public function setConstituentIdValue($constituentIdValue)
    {
        if (is_null($constituentIdValue)) {
            throw new \InvalidArgumentException('non-nullable constituentIdValue cannot be null');
        }
        $this->container['constituentIdValue'] = $constituentIdValue;

        return $this;
    }

    /**
     * Gets hourMinuteValue
     *
     * @return \SKY\Altru\Constituent\Model\HourMinute|null
     */
    public function getHourMinuteValue()
    {
        return $this->container['hourMinuteValue'];
    }

    /**
     * Sets hourMinuteValue
     *
     * @param \SKY\Altru\Constituent\Model\HourMinute|null $hourMinuteValue hourMinuteValue
     *
     * @return self
     */
    public function setHourMinuteValue($hourMinuteValue)
    {
        if (is_null($hourMinuteValue)) {
            throw new \InvalidArgumentException('non-nullable hourMinuteValue cannot be null');
        }
        $this->container['hourMinuteValue'] = $hourMinuteValue;

        return $this;
    }

    /**
     * Gets memoValue
     *
     * @return string|null
     */
    public function getMemoValue()
    {
        return $this->container['memoValue'];
    }

    /**
     * Sets memoValue
     *
     * @param string|null $memoValue The value.
     *
     * @return self
     */
    public function setMemoValue($memoValue)
    {
        if (is_null($memoValue)) {
            throw new \InvalidArgumentException('non-nullable memoValue cannot be null');
        }
        $this->container['memoValue'] = $memoValue;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string|null
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string|null $comment The comment.
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        if ((mb_strlen($comment) > 255)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling ConstituentAttribute., must be smaller than or equal to 255.');
        }
        if ((mb_strlen($comment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling ConstituentAttribute., must be bigger than or equal to 0.');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets constituentSearchListCatalogId
     *
     * @return string|null
     */
    public function getConstituentSearchListCatalogId()
    {
        return $this->container['constituentSearchListCatalogId'];
    }

    /**
     * Sets constituentSearchListCatalogId
     *
     * @param string|null $constituentSearchListCatalogId The constituent search list catalog id. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setConstituentSearchListCatalogId($constituentSearchListCatalogId)
    {
        if (is_null($constituentSearchListCatalogId)) {
            throw new \InvalidArgumentException('non-nullable constituentSearchListCatalogId cannot be null');
        }
        $this->container['constituentSearchListCatalogId'] = $constituentSearchListCatalogId;

        return $this;
    }

    /**
     * Gets codeTableName
     *
     * @return string|null
     */
    public function getCodeTableName()
    {
        return $this->container['codeTableName'];
    }

    /**
     * Sets codeTableName
     *
     * @param string|null $codeTableName The code table name. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setCodeTableName($codeTableName)
    {
        if (is_null($codeTableName)) {
            throw new \InvalidArgumentException('non-nullable codeTableName cannot be null');
        }
        $this->container['codeTableName'] = $codeTableName;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate The start date.Uses the format YYYY-MM-DD. An example date: <i>2019-11-21</i>.
     *
     * @return self
     */
    public function setStartDate($startDate)
    {
        if (is_null($startDate)) {
            throw new \InvalidArgumentException('non-nullable startDate cannot be null');
        }
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime|null $endDate The end date.Uses the format YYYY-MM-DD. An example date: <i>2019-11-21</i>.
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            throw new \InvalidArgumentException('non-nullable endDate cannot be null');
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency The currency. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/13612288-b37e-409d-ba52-6ab31637ddd6?parameters=transaction_currency_id,{transaction_currency_id}&parameters=base_currency_id,{base_currency_id}&parameters=current_currency_id,{currency_id}.
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (is_null($currency)) {
            throw new \InvalidArgumentException('non-nullable currency cannot be null');
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets transactionCurrencyId
     *
     * @return string|null
     */
    public function getTransactionCurrencyId()
    {
        return $this->container['transactionCurrencyId'];
    }

    /**
     * Sets transactionCurrencyId
     *
     * @param string|null $transactionCurrencyId The transaction currency. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setTransactionCurrencyId($transactionCurrencyId)
    {
        if (is_null($transactionCurrencyId)) {
            throw new \InvalidArgumentException('non-nullable transactionCurrencyId cannot be null');
        }
        $this->container['transactionCurrencyId'] = $transactionCurrencyId;

        return $this;
    }

    /**
     * Gets baseCurrencyId
     *
     * @return string|null
     */
    public function getBaseCurrencyId()
    {
        return $this->container['baseCurrencyId'];
    }

    /**
     * Sets baseCurrencyId
     *
     * @param string|null $baseCurrencyId The base currency. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setBaseCurrencyId($baseCurrencyId)
    {
        if (is_null($baseCurrencyId)) {
            throw new \InvalidArgumentException('non-nullable baseCurrencyId cannot be null');
        }
        $this->container['baseCurrencyId'] = $baseCurrencyId;

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
