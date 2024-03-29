<?php
/**
 * OccupationUpdate
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
 * OccupationUpdate Class Doc Comment
 *
 * @category Class
 * @description
 * @package  SKY\School
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OccupationUpdate implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OccupationUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'businessName' => 'string',
        'jobTitle' => 'string',
        'businessUrl' => 'string',
        'industry' => 'string',
        'organization' => 'string',
        'occupation' => 'string',
        'matchingGift' => 'string',
        'beginDate' => 'string',
        'endDate' => 'string',
        'specialty' => 'string',
        'parentCompany' => 'string',
        'jobFunction' => 'string',
        'yearsEmployed' => 'string',
        'currentlyEmployed' => 'bool',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'businessName' => null,
        'jobTitle' => null,
        'businessUrl' => null,
        'industry' => null,
        'organization' => null,
        'occupation' => null,
        'matchingGift' => null,
        'beginDate' => null,
        'endDate' => null,
        'specialty' => null,
        'parentCompany' => null,
        'jobFunction' => null,
        'yearsEmployed' => null,
        'currentlyEmployed' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'businessName' => true,
        'jobTitle' => true,
        'businessUrl' => true,
        'industry' => true,
        'organization' => true,
        'occupation' => true,
        'matchingGift' => true,
        'beginDate' => true,
        'endDate' => true,
        'specialty' => true,
        'parentCompany' => true,
        'jobFunction' => true,
        'yearsEmployed' => true,
        'currentlyEmployed' => true,
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
        'businessName' => 'business_name',
        'jobTitle' => 'job_title',
        'businessUrl' => 'business_url',
        'industry' => 'industry',
        'organization' => 'organization',
        'occupation' => 'occupation',
        'matchingGift' => 'matching_gift',
        'beginDate' => 'begin_date',
        'endDate' => 'end_date',
        'specialty' => 'specialty',
        'parentCompany' => 'parent_company',
        'jobFunction' => 'job_function',
        'yearsEmployed' => 'years_employed',
        'currentlyEmployed' => 'currently_employed',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'businessName' => 'setBusinessName',
        'jobTitle' => 'setJobTitle',
        'businessUrl' => 'setBusinessUrl',
        'industry' => 'setIndustry',
        'organization' => 'setOrganization',
        'occupation' => 'setOccupation',
        'matchingGift' => 'setMatchingGift',
        'beginDate' => 'setBeginDate',
        'endDate' => 'setEndDate',
        'specialty' => 'setSpecialty',
        'parentCompany' => 'setParentCompany',
        'jobFunction' => 'setJobFunction',
        'yearsEmployed' => 'setYearsEmployed',
        'currentlyEmployed' => 'setCurrentlyEmployed',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'businessName' => 'getBusinessName',
        'jobTitle' => 'getJobTitle',
        'businessUrl' => 'getBusinessUrl',
        'industry' => 'getIndustry',
        'organization' => 'getOrganization',
        'occupation' => 'getOccupation',
        'matchingGift' => 'getMatchingGift',
        'beginDate' => 'getBeginDate',
        'endDate' => 'getEndDate',
        'specialty' => 'getSpecialty',
        'parentCompany' => 'getParentCompany',
        'jobFunction' => 'getJobFunction',
        'yearsEmployed' => 'getYearsEmployed',
        'currentlyEmployed' => 'getCurrentlyEmployed',
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
        $this->setIfExists('businessName', $data ?? [], null);
        $this->setIfExists('jobTitle', $data ?? [], null);
        $this->setIfExists('businessUrl', $data ?? [], null);
        $this->setIfExists('industry', $data ?? [], null);
        $this->setIfExists('organization', $data ?? [], null);
        $this->setIfExists('occupation', $data ?? [], null);
        $this->setIfExists('matchingGift', $data ?? [], null);
        $this->setIfExists('beginDate', $data ?? [], null);
        $this->setIfExists('endDate', $data ?? [], null);
        $this->setIfExists('specialty', $data ?? [], null);
        $this->setIfExists('parentCompany', $data ?? [], null);
        $this->setIfExists('jobFunction', $data ?? [], null);
        $this->setIfExists('yearsEmployed', $data ?? [], null);
        $this->setIfExists('currentlyEmployed', $data ?? [], null);
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
     * Gets businessName
     *
     * @return string|null
     */
    public function getBusinessName()
    {
        return $this->container['businessName'];
    }

    /**
     * Sets businessName
     *
     * @param string|null $businessName Name of the employing business
     *
     * @return self
     */
    public function setBusinessName($businessName)
    {
        if (is_null($businessName)) {
            array_push($this->openAPINullablesSetToNull, 'businessName');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('businessName', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['businessName'] = $businessName;

        return $this;
    }

    /**
     * Gets jobTitle
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['jobTitle'];
    }

    /**
     * Sets jobTitle
     *
     * @param string|null $jobTitle Employed individuals job title
     *
     * @return self
     */
    public function setJobTitle($jobTitle)
    {
        if (is_null($jobTitle)) {
            array_push($this->openAPINullablesSetToNull, 'jobTitle');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jobTitle', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['jobTitle'] = $jobTitle;

        return $this;
    }

    /**
     * Gets businessUrl
     *
     * @return string|null
     */
    public function getBusinessUrl()
    {
        return $this->container['businessUrl'];
    }

    /**
     * Sets businessUrl
     *
     * @param string|null $businessUrl Url of the employing business
     *
     * @return self
     */
    public function setBusinessUrl($businessUrl)
    {
        if (is_null($businessUrl)) {
            array_push($this->openAPINullablesSetToNull, 'businessUrl');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('businessUrl', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['businessUrl'] = $businessUrl;

        return $this;
    }

    /**
     * Gets industry
     *
     * @return string|null
     */
    public function getIndustry()
    {
        return $this->container['industry'];
    }

    /**
     * Sets industry
     *
     * @param string|null $industry Industry of the employing business
     *
     * @return self
     */
    public function setIndustry($industry)
    {
        if (is_null($industry)) {
            array_push($this->openAPINullablesSetToNull, 'industry');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('industry', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['industry'] = $industry;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string|null
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string|null $organization Maps to the employee's 'Organization' field
     *
     * @return self
     */
    public function setOrganization($organization)
    {
        if (is_null($organization)) {
            array_push($this->openAPINullablesSetToNull, 'organization');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('organization', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets occupation
     *
     * @return string|null
     */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
     * Sets occupation
     *
     * @param string|null $occupation Maps to the employee's 'Profession' field
     *
     * @return self
     */
    public function setOccupation($occupation)
    {
        if (is_null($occupation)) {
            array_push($this->openAPINullablesSetToNull, 'occupation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('occupation', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['occupation'] = $occupation;

        return $this;
    }

    /**
     * Gets matchingGift
     *
     * @return string|null
     */
    public function getMatchingGift()
    {
        return $this->container['matchingGift'];
    }

    /**
     * Sets matchingGift
     *
     * @param string|null $matchingGift Indicates if employer matches employee donations. Allowed values: Yes, No, No Answer
     *
     * @return self
     */
    public function setMatchingGift($matchingGift)
    {
        if (is_null($matchingGift)) {
            array_push($this->openAPINullablesSetToNull, 'matchingGift');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('matchingGift', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['matchingGift'] = $matchingGift;

        return $this;
    }

    /**
     * Gets beginDate
     *
     * @return string|null
     */
    public function getBeginDate()
    {
        return $this->container['beginDate'];
    }

    /**
     * Sets beginDate
     *
     * @param string|null $beginDate Employees start date at this business
     *
     * @return self
     */
    public function setBeginDate($beginDate)
    {
        if (is_null($beginDate)) {
            array_push($this->openAPINullablesSetToNull, 'beginDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('beginDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['beginDate'] = $beginDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return string|null
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param string|null $endDate Employees end date at this business
     *
     * @return self
     */
    public function setEndDate($endDate)
    {
        if (is_null($endDate)) {
            array_push($this->openAPINullablesSetToNull, 'endDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('endDate', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets specialty
     *
     * @return string|null
     */
    public function getSpecialty()
    {
        return $this->container['specialty'];
    }

    /**
     * Sets specialty
     *
     * @param string|null $specialty Maps to the employee's 'Specialty' field
     *
     * @return self
     */
    public function setSpecialty($specialty)
    {
        if (is_null($specialty)) {
            array_push($this->openAPINullablesSetToNull, 'specialty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('specialty', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['specialty'] = $specialty;

        return $this;
    }

    /**
     * Gets parentCompany
     *
     * @return string|null
     */
    public function getParentCompany()
    {
        return $this->container['parentCompany'];
    }

    /**
     * Sets parentCompany
     *
     * @param string|null $parentCompany Parent company of employing business
     *
     * @return self
     */
    public function setParentCompany($parentCompany)
    {
        if (is_null($parentCompany)) {
            array_push($this->openAPINullablesSetToNull, 'parentCompany');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('parentCompany', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['parentCompany'] = $parentCompany;

        return $this;
    }

    /**
     * Gets jobFunction
     *
     * @return string|null
     */
    public function getJobFunction()
    {
        return $this->container['jobFunction'];
    }

    /**
     * Sets jobFunction
     *
     * @param string|null $jobFunction Description of the work done by the employee
     *
     * @return self
     */
    public function setJobFunction($jobFunction)
    {
        if (is_null($jobFunction)) {
            array_push($this->openAPINullablesSetToNull, 'jobFunction');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('jobFunction', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['jobFunction'] = $jobFunction;

        return $this;
    }

    /**
     * Gets yearsEmployed
     *
     * @return string|null
     */
    public function getYearsEmployed()
    {
        return $this->container['yearsEmployed'];
    }

    /**
     * Sets yearsEmployed
     *
     * @param string|null $yearsEmployed Number of years employee has been at this business
     *
     * @return self
     */
    public function setYearsEmployed($yearsEmployed)
    {
        if (is_null($yearsEmployed)) {
            array_push($this->openAPINullablesSetToNull, 'yearsEmployed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('yearsEmployed', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['yearsEmployed'] = $yearsEmployed;

        return $this;
    }

    /**
     * Gets currentlyEmployed
     *
     * @return bool|null
     */
    public function getCurrentlyEmployed()
    {
        return $this->container['currentlyEmployed'];
    }

    /**
     * Sets currentlyEmployed
     *
     * @param bool|null $currentlyEmployed Indicates if this is the individuals current employer
     *
     * @return self
     */
    public function setCurrentlyEmployed($currentlyEmployed)
    {
        if (is_null($currentlyEmployed)) {
            array_push($this->openAPINullablesSetToNull, 'currentlyEmployed');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('currentlyEmployed', $nullablesSetToNull);
            if ($index !== false) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['currentlyEmployed'] = $currentlyEmployed;

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
