<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $ScheduleSetId
 * @property ?string $ScheduleSetDescription
 * @property ?string $ShortDescription
 * @property null|"_0"|"_1"|"_2"|"_3"|"_4"|"_5"|"_6"|"_8"|"_9"|"_10"|"_11"|"_12"|"_13"
 *   $OfferingType
 * @property ?string $SchoolYearLabel
 * @property ?int $LevelNum
 * @property ?string $Effdate
 * @property ?string $Enddate
 * @property ?int $StartDay
 * @property ?int $StartWeek
 * @property ?int $MaxDay
 * @property ?int $MaxWeek
 * @property ?\Blackbaud\SKY\School\Components\ScheduleSetMettingPattern[]
 *   $MeetingList
 * @property ?\Blackbaud\SKY\School\Components\ScheduleSetAccess[] $AccessList
 * @property ?\Blackbaud\SKY\School\Components\ScheduleSetRotation[]
 *   $RotationList
 * @property ?bool $DefinedRotationPattern
 * @property ?bool $MeetingTimeCreated
 * @property ?bool $BlockRotationCreated
 * @property ?bool $Sun
 * @property ?bool $Mon
 * @property ?bool $Tue
 * @property ?bool $Wed
 * @property ?bool $Thu
 * @property ?bool $Fri
 * @property ?bool $Sat
 * @property ?bool $SunInUse
 * @property ?bool $MonInUse
 * @property ?bool $TueInUse
 * @property ?bool $WedInUse
 * @property ?bool $ThuInUse
 * @property ?bool $FriInUse
 * @property ?bool $SatInUse
 * @property ?int $BlockGroupId
 * @property ?int $MeetingTimeId
 * @property ?string $InsertDate
 * @property ?string $LastModifyDate
 * @property ?int $LastModifyUserId
 * @property ?string[] $FieldsToNull
 * @property ?string $vendor_external_id
 *
 * @api
 */
class ScheduleSetDetails extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "ScheduleSetId" => "int",
        "ScheduleSetDescription" => "string",
        "ShortDescription" => "string",
        "OfferingType" => "string",
        "SchoolYearLabel" => "string",
        "LevelNum" => "int",
        "Effdate" => "string",
        "Enddate" => "string",
        "StartDay" => "int",
        "StartWeek" => "int",
        "MaxDay" => "int",
        "MaxWeek" => "int",
        "MeetingList" => "\Blackbaud\SKY\School\Components\ScheduleSetMettingPattern[]",
        "AccessList" => "\Blackbaud\SKY\School\Components\ScheduleSetAccess[]",
        "RotationList" => "\Blackbaud\SKY\School\Components\ScheduleSetRotation[]",
        "DefinedRotationPattern" => "bool",
        "MeetingTimeCreated" => "bool",
        "BlockRotationCreated" => "bool",
        "Sun" => "bool",
        "Mon" => "bool",
        "Tue" => "bool",
        "Wed" => "bool",
        "Thu" => "bool",
        "Fri" => "bool",
        "Sat" => "bool",
        "SunInUse" => "bool",
        "MonInUse" => "bool",
        "TueInUse" => "bool",
        "WedInUse" => "bool",
        "ThuInUse" => "bool",
        "FriInUse" => "bool",
        "SatInUse" => "bool",
        "BlockGroupId" => "int",
        "MeetingTimeId" => "int",
        "InsertDate" => "string",
        "LastModifyDate" => "string",
        "LastModifyUserId" => "int",
        "FieldsToNull" => "string[]",
        "vendor_external_id" => "string",
    ];
}
