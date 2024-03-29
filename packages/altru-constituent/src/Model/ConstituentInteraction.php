<?php
/**
 * ConstituentInteraction
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
 * ConstituentInteraction Class Doc Comment
 *
 * @category Class
 * @description GetConstituentInteraction
 * @package  SKY\Altru\Constituent
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConstituentInteraction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConstituentInteraction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'interactionType' => 'string',
        'objective' => 'string',
        'fundraiserId' => 'string',
        'expectedDate' => '\DateTime',
        'actualDate' => '\DateTime',
        'status' => 'string',
        'comment' => 'string',
        'step' => 'bool',
        'eventId' => 'string',
        'participants' => '\SKY\Altru\Constituent\Model\ConstituentInteractionParticipants[]',
        'constituentId' => 'string',
        'constituentName' => 'string',
        'interactionCategory' => 'string',
        'interactionSubcategory' => 'string',
        'sites' => '\SKY\Altru\Constituent\Model\ConstituentInteractionSites[]',
        'expectedStartTime' => '\SKY\Altru\Constituent\Model\HourMinute',
        'expectedEndTime' => '\SKY\Altru\Constituent\Model\HourMinute',
        'allDayEvent' => 'bool',
        'timeZoneEntry' => 'string',
        'actualStartTime' => '\SKY\Altru\Constituent\Model\HourMinute',
        'actualEndTime' => '\SKY\Altru\Constituent\Model\HourMinute',
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'interactionType' => null,
        'objective' => null,
        'fundraiserId' => null,
        'expectedDate' => 'date',
        'actualDate' => 'date',
        'status' => null,
        'comment' => null,
        'step' => null,
        'eventId' => null,
        'participants' => null,
        'constituentId' => null,
        'constituentName' => null,
        'interactionCategory' => null,
        'interactionSubcategory' => null,
        'sites' => null,
        'expectedStartTime' => null,
        'expectedEndTime' => null,
        'allDayEvent' => null,
        'timeZoneEntry' => null,
        'actualStartTime' => null,
        'actualEndTime' => null,
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'interactionType' => false,
        'objective' => false,
        'fundraiserId' => false,
        'expectedDate' => false,
        'actualDate' => false,
        'status' => false,
        'comment' => false,
        'step' => false,
        'eventId' => false,
        'participants' => false,
        'constituentId' => false,
        'constituentName' => false,
        'interactionCategory' => false,
        'interactionSubcategory' => false,
        'sites' => false,
        'expectedStartTime' => false,
        'expectedEndTime' => false,
        'allDayEvent' => false,
        'timeZoneEntry' => false,
        'actualStartTime' => false,
        'actualEndTime' => false,
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
        'interactionType' => 'interaction_type',
        'objective' => 'objective',
        'fundraiserId' => 'fundraiser_id',
        'expectedDate' => 'expected_date',
        'actualDate' => 'actual_date',
        'status' => 'status',
        'comment' => 'comment',
        'step' => 'step',
        'eventId' => 'event_id',
        'participants' => 'participants',
        'constituentId' => 'constituent_id',
        'constituentName' => 'constituent_name',
        'interactionCategory' => 'interaction_category',
        'interactionSubcategory' => 'interaction_subcategory',
        'sites' => 'sites',
        'expectedStartTime' => 'expected_start_time',
        'expectedEndTime' => 'expected_end_time',
        'allDayEvent' => 'all_day_event',
        'timeZoneEntry' => 'time_zone_entry',
        'actualStartTime' => 'actual_start_time',
        'actualEndTime' => 'actual_end_time',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'interactionType' => 'setInteractionType',
        'objective' => 'setObjective',
        'fundraiserId' => 'setFundraiserId',
        'expectedDate' => 'setExpectedDate',
        'actualDate' => 'setActualDate',
        'status' => 'setStatus',
        'comment' => 'setComment',
        'step' => 'setStep',
        'eventId' => 'setEventId',
        'participants' => 'setParticipants',
        'constituentId' => 'setConstituentId',
        'constituentName' => 'setConstituentName',
        'interactionCategory' => 'setInteractionCategory',
        'interactionSubcategory' => 'setInteractionSubcategory',
        'sites' => 'setSites',
        'expectedStartTime' => 'setExpectedStartTime',
        'expectedEndTime' => 'setExpectedEndTime',
        'allDayEvent' => 'setAllDayEvent',
        'timeZoneEntry' => 'setTimeZoneEntry',
        'actualStartTime' => 'setActualStartTime',
        'actualEndTime' => 'setActualEndTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'interactionType' => 'getInteractionType',
        'objective' => 'getObjective',
        'fundraiserId' => 'getFundraiserId',
        'expectedDate' => 'getExpectedDate',
        'actualDate' => 'getActualDate',
        'status' => 'getStatus',
        'comment' => 'getComment',
        'step' => 'getStep',
        'eventId' => 'getEventId',
        'participants' => 'getParticipants',
        'constituentId' => 'getConstituentId',
        'constituentName' => 'getConstituentName',
        'interactionCategory' => 'getInteractionCategory',
        'interactionSubcategory' => 'getInteractionSubcategory',
        'sites' => 'getSites',
        'expectedStartTime' => 'getExpectedStartTime',
        'expectedEndTime' => 'getExpectedEndTime',
        'allDayEvent' => 'getAllDayEvent',
        'timeZoneEntry' => 'getTimeZoneEntry',
        'actualStartTime' => 'getActualStartTime',
        'actualEndTime' => 'getActualEndTime',
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
        $this->setIfExists('interactionType', $data ?? [], null);
        $this->setIfExists('objective', $data ?? [], null);
        $this->setIfExists('fundraiserId', $data ?? [], null);
        $this->setIfExists('expectedDate', $data ?? [], null);
        $this->setIfExists('actualDate', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('comment', $data ?? [], null);
        $this->setIfExists('step', $data ?? [], null);
        $this->setIfExists('eventId', $data ?? [], null);
        $this->setIfExists('participants', $data ?? [], null);
        $this->setIfExists('constituentId', $data ?? [], null);
        $this->setIfExists('constituentName', $data ?? [], null);
        $this->setIfExists('interactionCategory', $data ?? [], null);
        $this->setIfExists('interactionSubcategory', $data ?? [], null);
        $this->setIfExists('sites', $data ?? [], null);
        $this->setIfExists('expectedStartTime', $data ?? [], null);
        $this->setIfExists('expectedEndTime', $data ?? [], null);
        $this->setIfExists('allDayEvent', $data ?? [], null);
        $this->setIfExists('timeZoneEntry', $data ?? [], null);
        $this->setIfExists('actualStartTime', $data ?? [], null);
        $this->setIfExists('actualEndTime', $data ?? [], null);
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

        if ($this->container['objective'] === null) {
            $invalidProperties[] = "'objective' can't be null";
        }
        if ((mb_strlen($this->container['objective']) > 100)) {
            $invalidProperties[] = "invalid value for 'objective', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['objective']) < 0)) {
            $invalidProperties[] = "invalid value for 'objective', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['expectedDate'] === null) {
            $invalidProperties[] = "'expectedDate' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (!is_null($this->container['constituentName']) && (mb_strlen($this->container['constituentName']) > 700)) {
            $invalidProperties[] = "invalid value for 'constituentName', the character length must be smaller than or equal to 700.";
        }

        if (!is_null($this->container['constituentName']) && (mb_strlen($this->container['constituentName']) < 0)) {
            $invalidProperties[] = "invalid value for 'constituentName', the character length must be bigger than or equal to 0.";
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
     * Gets interactionType
     *
     * @return string|null
     */
    public function getInteractionType()
    {
        return $this->container['interactionType'];
    }

    /**
     * Sets interactionType
     *
     * @param string|null $interactionType The contact method. This codetable can be queried at https://api.sky.blackbaud.com/alt-adnmg/codetables/interactiontypecode/entries
     *
     * @return self
     */
    public function setInteractionType($interactionType)
    {
        if (is_null($interactionType)) {
            throw new \InvalidArgumentException('non-nullable interactionType cannot be null');
        }
        $this->container['interactionType'] = $interactionType;

        return $this;
    }

    /**
     * Gets objective
     *
     * @return string
     */
    public function getObjective()
    {
        return $this->container['objective'];
    }

    /**
     * Sets objective
     *
     * @param string $objective The summary.
     *
     * @return self
     */
    public function setObjective($objective)
    {
        if (is_null($objective)) {
            throw new \InvalidArgumentException('non-nullable objective cannot be null');
        }
        if ((mb_strlen($objective) > 100)) {
            throw new \InvalidArgumentException('invalid length for $objective when calling ConstituentInteraction., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($objective) < 0)) {
            throw new \InvalidArgumentException('invalid length for $objective when calling ConstituentInteraction., must be bigger than or equal to 0.');
        }

        $this->container['objective'] = $objective;

        return $this;
    }

    /**
     * Gets fundraiserId
     *
     * @return string|null
     */
    public function getFundraiserId()
    {
        return $this->container['fundraiserId'];
    }

    /**
     * Sets fundraiserId
     *
     * @param string|null $fundraiserId The owner.
     *
     * @return self
     */
    public function setFundraiserId($fundraiserId)
    {
        if (is_null($fundraiserId)) {
            throw new \InvalidArgumentException('non-nullable fundraiserId cannot be null');
        }
        $this->container['fundraiserId'] = $fundraiserId;

        return $this;
    }

    /**
     * Gets expectedDate
     *
     * @return \DateTime
     */
    public function getExpectedDate()
    {
        return $this->container['expectedDate'];
    }

    /**
     * Sets expectedDate
     *
     * @param \DateTime $expectedDate The expected date.Uses the format YYYY-MM-DD. An example date: <i>2019-11-21</i>.
     *
     * @return self
     */
    public function setExpectedDate($expectedDate)
    {
        if (is_null($expectedDate)) {
            throw new \InvalidArgumentException('non-nullable expectedDate cannot be null');
        }
        $this->container['expectedDate'] = $expectedDate;

        return $this;
    }

    /**
     * Gets actualDate
     *
     * @return \DateTime|null
     */
    public function getActualDate()
    {
        return $this->container['actualDate'];
    }

    /**
     * Sets actualDate
     *
     * @param \DateTime|null $actualDate The actual date.Uses the format YYYY-MM-DD. An example date: <i>2019-11-21</i>.
     *
     * @return self
     */
    public function setActualDate($actualDate)
    {
        if (is_null($actualDate)) {
            throw new \InvalidArgumentException('non-nullable actualDate cannot be null');
        }
        $this->container['actualDate'] = $actualDate;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status. Available values are <i>pending</i>, <i>completed</i>, <i>canceled</i>, <i>declined</i>
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

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
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets step
     *
     * @return bool|null
     */
    public function getStep()
    {
        return $this->container['step'];
    }

    /**
     * Sets step
     *
     * @param bool|null $step Indicates whether is step. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setStep($step)
    {
        if (is_null($step)) {
            throw new \InvalidArgumentException('non-nullable step cannot be null');
        }
        $this->container['step'] = $step;

        return $this;
    }

    /**
     * Gets eventId
     *
     * @return string|null
     */
    public function getEventId()
    {
        return $this->container['eventId'];
    }

    /**
     * Sets eventId
     *
     * @param string|null $eventId The event.
     *
     * @return self
     */
    public function setEventId($eventId)
    {
        if (is_null($eventId)) {
            throw new \InvalidArgumentException('non-nullable eventId cannot be null');
        }
        $this->container['eventId'] = $eventId;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \SKY\Altru\Constituent\Model\ConstituentInteractionParticipants[]|null
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \SKY\Altru\Constituent\Model\ConstituentInteractionParticipants[]|null $participants participants
     *
     * @return self
     */
    public function setParticipants($participants)
    {
        if (is_null($participants)) {
            throw new \InvalidArgumentException('non-nullable participants cannot be null');
        }
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets constituentId
     *
     * @return string|null
     */
    public function getConstituentId()
    {
        return $this->container['constituentId'];
    }

    /**
     * Sets constituentId
     *
     * @param string|null $constituentId The constituent id. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setConstituentId($constituentId)
    {
        if (is_null($constituentId)) {
            throw new \InvalidArgumentException('non-nullable constituentId cannot be null');
        }
        $this->container['constituentId'] = $constituentId;

        return $this;
    }

    /**
     * Gets constituentName
     *
     * @return string|null
     */
    public function getConstituentName()
    {
        return $this->container['constituentName'];
    }

    /**
     * Sets constituentName
     *
     * @param string|null $constituentName The constituent name. Read-only in the SOAP API.
     *
     * @return self
     */
    public function setConstituentName($constituentName)
    {
        if (is_null($constituentName)) {
            throw new \InvalidArgumentException('non-nullable constituentName cannot be null');
        }
        if ((mb_strlen($constituentName) > 700)) {
            throw new \InvalidArgumentException('invalid length for $constituentName when calling ConstituentInteraction., must be smaller than or equal to 700.');
        }
        if ((mb_strlen($constituentName) < 0)) {
            throw new \InvalidArgumentException('invalid length for $constituentName when calling ConstituentInteraction., must be bigger than or equal to 0.');
        }

        $this->container['constituentName'] = $constituentName;

        return $this;
    }

    /**
     * Gets interactionCategory
     *
     * @return string|null
     */
    public function getInteractionCategory()
    {
        return $this->container['interactionCategory'];
    }

    /**
     * Sets interactionCategory
     *
     * @param string|null $interactionCategory The category. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/cbba7545-b66f-44ac-aa24-d9c2f8cbc4ec.
     *
     * @return self
     */
    public function setInteractionCategory($interactionCategory)
    {
        if (is_null($interactionCategory)) {
            throw new \InvalidArgumentException('non-nullable interactionCategory cannot be null');
        }
        $this->container['interactionCategory'] = $interactionCategory;

        return $this;
    }

    /**
     * Gets interactionSubcategory
     *
     * @return string|null
     */
    public function getInteractionSubcategory()
    {
        return $this->container['interactionSubcategory'];
    }

    /**
     * Sets interactionSubcategory
     *
     * @param string|null $interactionSubcategory The subcategory. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/0eacc39b-07d1-4641-8774-e319559535a7?parameters=interaction_category_id,{interaction_category_id}.
     *
     * @return self
     */
    public function setInteractionSubcategory($interactionSubcategory)
    {
        if (is_null($interactionSubcategory)) {
            throw new \InvalidArgumentException('non-nullable interactionSubcategory cannot be null');
        }
        $this->container['interactionSubcategory'] = $interactionSubcategory;

        return $this;
    }

    /**
     * Gets sites
     *
     * @return \SKY\Altru\Constituent\Model\ConstituentInteractionSites[]|null
     */
    public function getSites()
    {
        return $this->container['sites'];
    }

    /**
     * Sets sites
     *
     * @param \SKY\Altru\Constituent\Model\ConstituentInteractionSites[]|null $sites sites
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
     * Gets expectedStartTime
     *
     * @return \SKY\Altru\Constituent\Model\HourMinute|null
     */
    public function getExpectedStartTime()
    {
        return $this->container['expectedStartTime'];
    }

    /**
     * Sets expectedStartTime
     *
     * @param \SKY\Altru\Constituent\Model\HourMinute|null $expectedStartTime expectedStartTime
     *
     * @return self
     */
    public function setExpectedStartTime($expectedStartTime)
    {
        if (is_null($expectedStartTime)) {
            throw new \InvalidArgumentException('non-nullable expectedStartTime cannot be null');
        }
        $this->container['expectedStartTime'] = $expectedStartTime;

        return $this;
    }

    /**
     * Gets expectedEndTime
     *
     * @return \SKY\Altru\Constituent\Model\HourMinute|null
     */
    public function getExpectedEndTime()
    {
        return $this->container['expectedEndTime'];
    }

    /**
     * Sets expectedEndTime
     *
     * @param \SKY\Altru\Constituent\Model\HourMinute|null $expectedEndTime expectedEndTime
     *
     * @return self
     */
    public function setExpectedEndTime($expectedEndTime)
    {
        if (is_null($expectedEndTime)) {
            throw new \InvalidArgumentException('non-nullable expectedEndTime cannot be null');
        }
        $this->container['expectedEndTime'] = $expectedEndTime;

        return $this;
    }

    /**
     * Gets allDayEvent
     *
     * @return bool|null
     */
    public function getAllDayEvent()
    {
        return $this->container['allDayEvent'];
    }

    /**
     * Sets allDayEvent
     *
     * @param bool|null $allDayEvent Indicates whether all day event.
     *
     * @return self
     */
    public function setAllDayEvent($allDayEvent)
    {
        if (is_null($allDayEvent)) {
            throw new \InvalidArgumentException('non-nullable allDayEvent cannot be null');
        }
        $this->container['allDayEvent'] = $allDayEvent;

        return $this;
    }

    /**
     * Gets timeZoneEntry
     *
     * @return string|null
     */
    public function getTimeZoneEntry()
    {
        return $this->container['timeZoneEntry'];
    }

    /**
     * Sets timeZoneEntry
     *
     * @param string|null $timeZoneEntry The time zone. This simple list can be queried at https://api.sky.blackbaud.com/alt-adnmg/simplelists/7fba76fa-b1ea-4c01-b841-edb18f03fe8c.
     *
     * @return self
     */
    public function setTimeZoneEntry($timeZoneEntry)
    {
        if (is_null($timeZoneEntry)) {
            throw new \InvalidArgumentException('non-nullable timeZoneEntry cannot be null');
        }
        $this->container['timeZoneEntry'] = $timeZoneEntry;

        return $this;
    }

    /**
     * Gets actualStartTime
     *
     * @return \SKY\Altru\Constituent\Model\HourMinute|null
     */
    public function getActualStartTime()
    {
        return $this->container['actualStartTime'];
    }

    /**
     * Sets actualStartTime
     *
     * @param \SKY\Altru\Constituent\Model\HourMinute|null $actualStartTime actualStartTime
     *
     * @return self
     */
    public function setActualStartTime($actualStartTime)
    {
        if (is_null($actualStartTime)) {
            throw new \InvalidArgumentException('non-nullable actualStartTime cannot be null');
        }
        $this->container['actualStartTime'] = $actualStartTime;

        return $this;
    }

    /**
     * Gets actualEndTime
     *
     * @return \SKY\Altru\Constituent\Model\HourMinute|null
     */
    public function getActualEndTime()
    {
        return $this->container['actualEndTime'];
    }

    /**
     * Sets actualEndTime
     *
     * @param \SKY\Altru\Constituent\Model\HourMinute|null $actualEndTime actualEndTime
     *
     * @return self
     */
    public function setActualEndTime($actualEndTime)
    {
        if (is_null($actualEndTime)) {
            throw new \InvalidArgumentException('non-nullable actualEndTime cannot be null');
        }
        $this->container['actualEndTime'] = $actualEndTime;

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
