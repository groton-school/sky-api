<?php
/**
 * UpdateEducation
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
 * UpdateEducation Class Doc Comment
 *
 * @category Class
 * @description UpdateEducation
 * @package  SKY\Altru\Constituent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateEducation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateEducation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'primaryRecord' => 'bool',
        'educationalInstitutionId' => 'string',
        'academicCatalogProgram' => 'string',
        'educationalProgram' => 'string',
        'constituencyStatus' => 'string',
        'dateGraduated' => '\SKY\Altru\Constituent\Model\FuzzyDate',
        'dateLeft' => '\SKY\Altru\Constituent\Model\FuzzyDate',
        'academicCatalogDegree' => 'string',
        'educationalDegree' => 'string',
        'educationalAward' => 'string',
        'startDate' => '\SKY\Altru\Constituent\Model\FuzzyDate',
        'classYear' => 'int',
        'preferredClassYear' => 'int',
        'educationalSource' => 'string',
        'educationalSourceDate' => '\SKY\Altru\Constituent\Model\FuzzyDate',
        'comment' => 'string',
        'affiliatedAdditionalInformation' => '\SKY\Altru\Constituent\Model\UpdateEducationAffiliatedadditionalinformation[]',
        'unaffiliatedAdditionalInformation' => '\SKY\Altru\Constituent\Model\UpdateEducationUnaffiliatedadditionalinformation[]',
        'affiliated' => 'bool',
        'educationalHistoryLevel' => 'string',
        'educationalHistoryReason' => 'string',
        'useAcademicCatalog' => 'bool',
        'educationalHistoryStatus' => 'string',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'primaryRecord' => null,
        'educationalInstitutionId' => null,
        'academicCatalogProgram' => null,
        'educationalProgram' => null,
        'constituencyStatus' => null,
        'dateGraduated' => null,
        'dateLeft' => null,
        'academicCatalogDegree' => null,
        'educationalDegree' => null,
        'educationalAward' => null,
        'startDate' => null,
        'classYear' => 'int32',
        'preferredClassYear' => 'int32',
        'educationalSource' => null,
        'educationalSourceDate' => null,
        'comment' => null,
        'affiliatedAdditionalInformation' => null,
        'unaffiliatedAdditionalInformation' => null,
        'affiliated' => null,
        'educationalHistoryLevel' => null,
        'educationalHistoryReason' => null,
        'useAcademicCatalog' => null,
        'educationalHistoryStatus' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'primaryRecord' => false,
        'educationalInstitutionId' => false,
        'academicCatalogProgram' => false,
        'educationalProgram' => false,
        'constituencyStatus' => false,
        'dateGraduated' => false,
        'dateLeft' => false,
        'academicCatalogDegree' => false,
        'educationalDegree' => false,
        'educationalAward' => false,
        'startDate' => false,
        'classYear' => false,
        'preferredClassYear' => false,
        'educationalSource' => false,
        'educationalSourceDate' => false,
        'comment' => false,
        'affiliatedAdditionalInformation' => false,
        'unaffiliatedAdditionalInformation' => false,
        'affiliated' => false,
        'educationalHistoryLevel' => false,
        'educationalHistoryReason' => false,
        'useAcademicCatalog' => false,
        'educationalHistoryStatus' => false,
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
        'primaryRecord' => 'primary_record',
        'educationalInstitutionId' => 'educational_institution_id',
        'academicCatalogProgram' => 'academic_catalog_program',
        'educationalProgram' => 'educational_program',
        'constituencyStatus' => 'constituency_status',
        'dateGraduated' => 'date_graduated',
        'dateLeft' => 'date_left',
        'academicCatalogDegree' => 'academic_catalog_degree',
        'educationalDegree' => 'educational_degree',
        'educationalAward' => 'educational_award',
        'startDate' => 'start_date',
        'classYear' => 'class_year',
        'preferredClassYear' => 'preferred_class_year',
        'educationalSource' => 'educational_source',
        'educationalSourceDate' => 'educational_source_date',
        'comment' => 'comment',
        'affiliatedAdditionalInformation' => 'affiliated_additional_information',
        'unaffiliatedAdditionalInformation' => 'unaffiliated_additional_information',
        'affiliated' => 'affiliated',
        'educationalHistoryLevel' => 'educational_history_level',
        'educationalHistoryReason' => 'educational_history_reason',
        'useAcademicCatalog' => 'use_academic_catalog',
        'educationalHistoryStatus' => 'educational_history_status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'primaryRecord' => 'setPrimaryRecord',
        'educationalInstitutionId' => 'setEducationalInstitutionId',
        'academicCatalogProgram' => 'setAcademicCatalogProgram',
        'educationalProgram' => 'setEducationalProgram',
        'constituencyStatus' => 'setConstituencyStatus',
        'dateGraduated' => 'setDateGraduated',
        'dateLeft' => 'setDateLeft',
        'academicCatalogDegree' => 'setAcademicCatalogDegree',
        'educationalDegree' => 'setEducationalDegree',
        'educationalAward' => 'setEducationalAward',
        'startDate' => 'setStartDate',
        'classYear' => 'setClassYear',
        'preferredClassYear' => 'setPreferredClassYear',
        'educationalSource' => 'setEducationalSource',
        'educationalSourceDate' => 'setEducationalSourceDate',
        'comment' => 'setComment',
        'affiliatedAdditionalInformation' => 'setAffiliatedAdditionalInformation',
        'unaffiliatedAdditionalInformation' => 'setUnaffiliatedAdditionalInformation',
        'affiliated' => 'setAffiliated',
        'educationalHistoryLevel' => 'setEducationalHistoryLevel',
        'educationalHistoryReason' => 'setEducationalHistoryReason',
        'useAcademicCatalog' => 'setUseAcademicCatalog',
        'educationalHistoryStatus' => 'setEducationalHistoryStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'primaryRecord' => 'getPrimaryRecord',
        'educationalInstitutionId' => 'getEducationalInstitutionId',
        'academicCatalogProgram' => 'getAcademicCatalogProgram',
        'educationalProgram' => 'getEducationalProgram',
        'constituencyStatus' => 'getConstituencyStatus',
        'dateGraduated' => 'getDateGraduated',
        'dateLeft' => 'getDateLeft',
        'academicCatalogDegree' => 'getAcademicCatalogDegree',
        'educationalDegree' => 'getEducationalDegree',
        'educationalAward' => 'getEducationalAward',
        'startDate' => 'getStartDate',
        'classYear' => 'getClassYear',
        'preferredClassYear' => 'getPreferredClassYear',
        'educationalSource' => 'getEducationalSource',
        'educationalSourceDate' => 'getEducationalSourceDate',
        'comment' => 'getComment',
        'affiliatedAdditionalInformation' => 'getAffiliatedAdditionalInformation',
        'unaffiliatedAdditionalInformation' => 'getUnaffiliatedAdditionalInformation',
        'affiliated' => 'getAffiliated',
        'educationalHistoryLevel' => 'getEducationalHistoryLevel',
        'educationalHistoryReason' => 'getEducationalHistoryReason',
        'useAcademicCatalog' => 'getUseAcademicCatalog',
        'educationalHistoryStatus' => 'getEducationalHistoryStatus',
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
        $this->setIfExists('primaryRecord', $data ?? [], null);
        $this->setIfExists('educationalInstitutionId', $data ?? [], null);
        $this->setIfExists('academicCatalogProgram', $data ?? [], null);
        $this->setIfExists('educationalProgram', $data ?? [], null);
        $this->setIfExists('constituencyStatus', $data ?? [], null);
        $this->setIfExists('dateGraduated', $data ?? [], null);
        $this->setIfExists('dateLeft', $data ?? [], null);
        $this->setIfExists('academicCatalogDegree', $data ?? [], null);
        $this->setIfExists('educationalDegree', $data ?? [], null);
        $this->setIfExists('educationalAward', $data ?? [], null);
        $this->setIfExists('startDate', $data ?? [], null);
        $this->setIfExists('classYear', $data ?? [], null);
        $this->setIfExists('preferredClassYear', $data ?? [], null);
        $this->setIfExists('educationalSource', $data ?? [], null);
        $this->setIfExists('educationalSourceDate', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('affiliatedAdditionalInformation', $data ?? [], null);
        $this->setIfExists('unaffiliatedAdditionalInformation', $data ?? [], null);
        $this->setIfExists('affiliated', $data ?? [], null);
        $this->setIfExists('educationalHistoryLevel', $data ?? [], null);
        $this->setIfExists('educationalHistoryReason', $data ?? [], null);
        $this->setIfExists('useAcademicCatalog', $data ?? [], null);
        $this->setIfExists('educationalHistoryStatus', $data ?? [], null);
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

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 500)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 500.";
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
     * Gets primaryRecord
     *
     * @return bool|null
     */
    public function getPrimaryRecord()
    {
        return $this->container['primaryRecord'];
    }

    /**
     * Sets primaryRecord
     *
     * @param bool|null $primaryRecord Indicates whether primary education information.
     *
     * @return self
     */
    public function setPrimaryRecord($primaryRecord)
    {
        if (is_null($primaryRecord)) {
            throw new \InvalidArgumentException('non-nullable primaryRecord cannot be null');
        }
        $this->container['primaryRecord'] = $primaryRecord;

        return $this;
    }

    /**
     * Gets educationalInstitutionId
     *
     * @return string|null
     */
    public function getEducationalInstitutionId()
    {
        return $this->container['educationalInstitutionId'];
    }

    /**
     * Sets educationalInstitutionId
     *
     * @param string|null $educationalInstitutionId The educational institution.
     *
     * @return self
     */
    public function setEducationalInstitutionId($educationalInstitutionId)
    {
        if (is_null($educationalInstitutionId)) {
            throw new \InvalidArgumentException('non-nullable educationalInstitutionId cannot be null');
        }
        $this->container['educationalInstitutionId'] = $educationalInstitutionId;

        return $this;
    }

    /**
     * Gets academicCatalogProgram
     *
     * @return string|null
     */
    public function getAcademicCatalogProgram()
    {
        return $this->container['academicCatalogProgram'];
    }

    /**
     * Sets academicCatalogProgram
     *
     * @param string|null $academicCatalogProgram The program. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/d411c16b-8bcf-4fc8-a747-754e1e89e9bc?parameters=educational_institution_id,{educational_institution_id}.
     *
     * @return self
     */
    public function setAcademicCatalogProgram($academicCatalogProgram)
    {
        if (is_null($academicCatalogProgram)) {
            throw new \InvalidArgumentException('non-nullable academicCatalogProgram cannot be null');
        }
        $this->container['academicCatalogProgram'] = $academicCatalogProgram;

        return $this;
    }

    /**
     * Gets educationalProgram
     *
     * @return string|null
     */
    public function getEducationalProgram()
    {
        return $this->container['educationalProgram'];
    }

    /**
     * Sets educationalProgram
     *
     * @param string|null $educationalProgram The program. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalprogramcode/entries
     *
     * @return self
     */
    public function setEducationalProgram($educationalProgram)
    {
        if (is_null($educationalProgram)) {
            throw new \InvalidArgumentException('non-nullable educationalProgram cannot be null');
        }
        $this->container['educationalProgram'] = $educationalProgram;

        return $this;
    }

    /**
     * Gets constituencyStatus
     *
     * @return string|null
     */
    public function getConstituencyStatus()
    {
        return $this->container['constituencyStatus'];
    }

    /**
     * Sets constituencyStatus
     *
     * @param string|null $constituencyStatus The status. Available values are <i>unknown</i>, <i>currently attending</i>, <i>incomplete</i>, <i>graduated</i>
     *
     * @return self
     */
    public function setConstituencyStatus($constituencyStatus)
    {
        if (is_null($constituencyStatus)) {
            throw new \InvalidArgumentException('non-nullable constituencyStatus cannot be null');
        }
        $this->container['constituencyStatus'] = $constituencyStatus;

        return $this;
    }

    /**
     * Gets dateGraduated
     *
     * @return \SKY\Altru\Constituent\Model\FuzzyDate|null
     */
    public function getDateGraduated()
    {
        return $this->container['dateGraduated'];
    }

    /**
     * Sets dateGraduated
     *
     * @param \SKY\Altru\Constituent\Model\FuzzyDate|null $dateGraduated dateGraduated
     *
     * @return self
     */
    public function setDateGraduated($dateGraduated)
    {
        if (is_null($dateGraduated)) {
            throw new \InvalidArgumentException('non-nullable dateGraduated cannot be null');
        }
        $this->container['dateGraduated'] = $dateGraduated;

        return $this;
    }

    /**
     * Gets dateLeft
     *
     * @return \SKY\Altru\Constituent\Model\FuzzyDate|null
     */
    public function getDateLeft()
    {
        return $this->container['dateLeft'];
    }

    /**
     * Sets dateLeft
     *
     * @param \SKY\Altru\Constituent\Model\FuzzyDate|null $dateLeft dateLeft
     *
     * @return self
     */
    public function setDateLeft($dateLeft)
    {
        if (is_null($dateLeft)) {
            throw new \InvalidArgumentException('non-nullable dateLeft cannot be null');
        }
        $this->container['dateLeft'] = $dateLeft;

        return $this;
    }

    /**
     * Gets academicCatalogDegree
     *
     * @return string|null
     */
    public function getAcademicCatalogDegree()
    {
        return $this->container['academicCatalogDegree'];
    }

    /**
     * Sets academicCatalogDegree
     *
     * @param string|null $academicCatalogDegree The degree. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/73c67942-07ad-412e-8596-a042e5e68002?parameters=academiccatalogprogramid,{academiccatalogprogramid}.
     *
     * @return self
     */
    public function setAcademicCatalogDegree($academicCatalogDegree)
    {
        if (is_null($academicCatalogDegree)) {
            throw new \InvalidArgumentException('non-nullable academicCatalogDegree cannot be null');
        }
        $this->container['academicCatalogDegree'] = $academicCatalogDegree;

        return $this;
    }

    /**
     * Gets educationalDegree
     *
     * @return string|null
     */
    public function getEducationalDegree()
    {
        return $this->container['educationalDegree'];
    }

    /**
     * Sets educationalDegree
     *
     * @param string|null $educationalDegree The degree. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationaldegreecode/entries
     *
     * @return self
     */
    public function setEducationalDegree($educationalDegree)
    {
        if (is_null($educationalDegree)) {
            throw new \InvalidArgumentException('non-nullable educationalDegree cannot be null');
        }
        $this->container['educationalDegree'] = $educationalDegree;

        return $this;
    }

    /**
     * Gets educationalAward
     *
     * @return string|null
     */
    public function getEducationalAward()
    {
        return $this->container['educationalAward'];
    }

    /**
     * Sets educationalAward
     *
     * @param string|null $educationalAward The honor awarded. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalawardcode/entries
     *
     * @return self
     */
    public function setEducationalAward($educationalAward)
    {
        if (is_null($educationalAward)) {
            throw new \InvalidArgumentException('non-nullable educationalAward cannot be null');
        }
        $this->container['educationalAward'] = $educationalAward;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \SKY\Altru\Constituent\Model\FuzzyDate|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \SKY\Altru\Constituent\Model\FuzzyDate|null $startDate startDate
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
     * Gets classYear
     *
     * @return int|null
     */
    public function getClassYear()
    {
        return $this->container['classYear'];
    }

    /**
     * Sets classYear
     *
     * @param int|null $classYear The class of.
     *
     * @return self
     */
    public function setClassYear($classYear)
    {
        if (is_null($classYear)) {
            throw new \InvalidArgumentException('non-nullable classYear cannot be null');
        }
        $this->container['classYear'] = $classYear;

        return $this;
    }

    /**
     * Gets preferredClassYear
     *
     * @return int|null
     */
    public function getPreferredClassYear()
    {
        return $this->container['preferredClassYear'];
    }

    /**
     * Sets preferredClassYear
     *
     * @param int|null $preferredClassYear The preferred class of.
     *
     * @return self
     */
    public function setPreferredClassYear($preferredClassYear)
    {
        if (is_null($preferredClassYear)) {
            throw new \InvalidArgumentException('non-nullable preferredClassYear cannot be null');
        }
        $this->container['preferredClassYear'] = $preferredClassYear;

        return $this;
    }

    /**
     * Gets educationalSource
     *
     * @return string|null
     */
    public function getEducationalSource()
    {
        return $this->container['educationalSource'];
    }

    /**
     * Sets educationalSource
     *
     * @param string|null $educationalSource The information source. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalsourcecode/entries
     *
     * @return self
     */
    public function setEducationalSource($educationalSource)
    {
        if (is_null($educationalSource)) {
            throw new \InvalidArgumentException('non-nullable educationalSource cannot be null');
        }
        $this->container['educationalSource'] = $educationalSource;

        return $this;
    }

    /**
     * Gets educationalSourceDate
     *
     * @return \SKY\Altru\Constituent\Model\FuzzyDate|null
     */
    public function getEducationalSourceDate()
    {
        return $this->container['educationalSourceDate'];
    }

    /**
     * Sets educationalSourceDate
     *
     * @param \SKY\Altru\Constituent\Model\FuzzyDate|null $educationalSourceDate educationalSourceDate
     *
     * @return self
     */
    public function setEducationalSourceDate($educationalSourceDate)
    {
        if (is_null($educationalSourceDate)) {
            throw new \InvalidArgumentException('non-nullable educationalSourceDate cannot be null');
        }
        $this->container['educationalSourceDate'] = $educationalSourceDate;

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
     * @param string|null $comment The comments.
     *
     * @return self
     */
    public function setComment($comment)
    {
        if (is_null($comment)) {
            throw new \InvalidArgumentException('non-nullable comment cannot be null');
        }
        if ((mb_strlen($comment) > 500)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling UpdateEducation., must be smaller than or equal to 500.');
        }
        if ((mb_strlen($comment) < 0)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling UpdateEducation., must be bigger than or equal to 0.');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets affiliatedAdditionalInformation
     *
     * @return \SKY\Altru\Constituent\Model\UpdateEducationAffiliatedadditionalinformation[]|null
     */
    public function getAffiliatedAdditionalInformation()
    {
        return $this->container['affiliatedAdditionalInformation'];
    }

    /**
     * Sets affiliatedAdditionalInformation
     *
     * @param \SKY\Altru\Constituent\Model\UpdateEducationAffiliatedadditionalinformation[]|null $affiliatedAdditionalInformation affiliated_additional_information
     *
     * @return self
     */
    public function setAffiliatedAdditionalInformation($affiliatedAdditionalInformation)
    {
        if (is_null($affiliatedAdditionalInformation)) {
            throw new \InvalidArgumentException('non-nullable affiliatedAdditionalInformation cannot be null');
        }
        $this->container['affiliatedAdditionalInformation'] = $affiliatedAdditionalInformation;

        return $this;
    }

    /**
     * Gets unaffiliatedAdditionalInformation
     *
     * @return \SKY\Altru\Constituent\Model\UpdateEducationUnaffiliatedadditionalinformation[]|null
     */
    public function getUnaffiliatedAdditionalInformation()
    {
        return $this->container['unaffiliatedAdditionalInformation'];
    }

    /**
     * Sets unaffiliatedAdditionalInformation
     *
     * @param \SKY\Altru\Constituent\Model\UpdateEducationUnaffiliatedadditionalinformation[]|null $unaffiliatedAdditionalInformation unaffiliated_additional_information
     *
     * @return self
     */
    public function setUnaffiliatedAdditionalInformation($unaffiliatedAdditionalInformation)
    {
        if (is_null($unaffiliatedAdditionalInformation)) {
            throw new \InvalidArgumentException('non-nullable unaffiliatedAdditionalInformation cannot be null');
        }
        $this->container['unaffiliatedAdditionalInformation'] = $unaffiliatedAdditionalInformation;

        return $this;
    }

    /**
     * Gets affiliated
     *
     * @return bool|null
     */
    public function getAffiliated()
    {
        return $this->container['affiliated'];
    }

    /**
     * Sets affiliated
     *
     * @param bool|null $affiliated Indicates whether affiliated.
     *
     * @return self
     */
    public function setAffiliated($affiliated)
    {
        if (is_null($affiliated)) {
            throw new \InvalidArgumentException('non-nullable affiliated cannot be null');
        }
        $this->container['affiliated'] = $affiliated;

        return $this;
    }

    /**
     * Gets educationalHistoryLevel
     *
     * @return string|null
     */
    public function getEducationalHistoryLevel()
    {
        return $this->container['educationalHistoryLevel'];
    }

    /**
     * Sets educationalHistoryLevel
     *
     * @param string|null $educationalHistoryLevel The level. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalhistorylevelcode/entries
     *
     * @return self
     */
    public function setEducationalHistoryLevel($educationalHistoryLevel)
    {
        if (is_null($educationalHistoryLevel)) {
            throw new \InvalidArgumentException('non-nullable educationalHistoryLevel cannot be null');
        }
        $this->container['educationalHistoryLevel'] = $educationalHistoryLevel;

        return $this;
    }

    /**
     * Gets educationalHistoryReason
     *
     * @return string|null
     */
    public function getEducationalHistoryReason()
    {
        return $this->container['educationalHistoryReason'];
    }

    /**
     * Sets educationalHistoryReason
     *
     * @param string|null $educationalHistoryReason The reason. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/educationalhistoryreasoncode/entries
     *
     * @return self
     */
    public function setEducationalHistoryReason($educationalHistoryReason)
    {
        if (is_null($educationalHistoryReason)) {
            throw new \InvalidArgumentException('non-nullable educationalHistoryReason cannot be null');
        }
        $this->container['educationalHistoryReason'] = $educationalHistoryReason;

        return $this;
    }

    /**
     * Gets useAcademicCatalog
     *
     * @return bool|null
     */
    public function getUseAcademicCatalog()
    {
        return $this->container['useAcademicCatalog'];
    }

    /**
     * Sets useAcademicCatalog
     *
     * @param bool|null $useAcademicCatalog Indicates whether use academic catalog. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setUseAcademicCatalog($useAcademicCatalog)
    {
        if (is_null($useAcademicCatalog)) {
            throw new \InvalidArgumentException('non-nullable useAcademicCatalog cannot be null');
        }
        $this->container['useAcademicCatalog'] = $useAcademicCatalog;

        return $this;
    }

    /**
     * Gets educationalHistoryStatus
     *
     * @return string|null
     */
    public function getEducationalHistoryStatus()
    {
        return $this->container['educationalHistoryStatus'];
    }

    /**
     * Sets educationalHistoryStatus
     *
     * @param string|null $educationalHistoryStatus The status. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/086c5bfb-1a80-46cf-a2f5-05ef51120891.
     *
     * @return self
     */
    public function setEducationalHistoryStatus($educationalHistoryStatus)
    {
        if (is_null($educationalHistoryStatus)) {
            throw new \InvalidArgumentException('non-nullable educationalHistoryStatus cannot be null');
        }
        $this->container['educationalHistoryStatus'] = $educationalHistoryStatus;

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
