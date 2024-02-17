<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $ScheduleSetId
 * @property string $ScheduleSetDescription
 * @property string $ShortDescription
 * @property string $OfferingType
 * @property string $SchoolYearLabel
 * @property int $LevelNum
 * @property string $Effdate
 * @property string $Enddate
 * @property int $StartDay
 * @property int $StartWeek
 * @property int $MaxDay
 * @property int $MaxWeek
 * @property \Blackbaud\SKY\School\Objects\ScheduleSetMettingPattern[]
 *   $MeetingList
 * @property \Blackbaud\SKY\School\Objects\ScheduleSetAccess[] $AccessList
 * @property \Blackbaud\SKY\School\Objects\ScheduleSetRotation[] $RotationList
 * @property bool $DefinedRotationPattern
 * @property bool $MeetingTimeCreated
 * @property bool $BlockRotationCreated
 * @property bool $Sun
 * @property bool $Mon
 * @property bool $Tue
 * @property bool $Wed
 * @property bool $Thu
 * @property bool $Fri
 * @property bool $Sat
 * @property bool $SunInUse
 * @property bool $MonInUse
 * @property bool $TueInUse
 * @property bool $WedInUse
 * @property bool $ThuInUse
 * @property bool $FriInUse
 * @property bool $SatInUse
 * @property int $BlockGroupId
 * @property int $MeetingTimeId
 * @property string $InsertDate
 * @property string $LastModifyDate
 * @property int $LastModifyUserId
 * @property string[] $FieldsToNull
 * @property string $vendor_external_id
 *
 * @api
 */
class ScheduleSetDetails extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "ScheduleSetId",
        "ScheduleSetDescription",
        "ShortDescription",
        "OfferingType",
        "SchoolYearLabel",
        "LevelNum",
        "Effdate",
        "Enddate",
        "StartDay",
        "StartWeek",
        "MaxDay",
        "MaxWeek",
        "MeetingList",
        "AccessList",
        "RotationList",
        "DefinedRotationPattern",
        "MeetingTimeCreated",
        "BlockRotationCreated",
        "Sun",
        "Mon",
        "Tue",
        "Wed",
        "Thu",
        "Fri",
        "Sat",
        "SunInUse",
        "MonInUse",
        "TueInUse",
        "WedInUse",
        "ThuInUse",
        "FriInUse",
        "SatInUse",
        "BlockGroupId",
        "MeetingTimeId",
        "InsertDate",
        "LastModifyDate",
        "LastModifyUserId",
        "FieldsToNull",
        "vendor_external_id",
    ];
}
