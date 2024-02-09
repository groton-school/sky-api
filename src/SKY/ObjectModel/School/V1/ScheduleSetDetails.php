<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $ScheduleSetId
* @property string|null $ScheduleSetDescription
* @property string|null $ShortDescription
* @property string|null $OfferingType
* @property string|null $SchoolYearLabel
* @property int|null $LevelNum
* @property string|null $Effdate
* @property string|null $Enddate
* @property int|null $StartDay
* @property int|null $StartWeek
* @property int|null $MaxDay
* @property int|null $MaxWeek
* @property ScheduleSetMettingPattern[]|null $MeetingList
* @property ScheduleSetAccess[]|null $AccessList
* @property ScheduleSetRotation[]|null $RotationList
* @property bool|null $DefinedRotationPattern
* @property bool|null $MeetingTimeCreated
* @property bool|null $BlockRotationCreated
* @property bool|null $Sun
* @property bool|null $Mon
* @property bool|null $Tue
* @property bool|null $Wed
* @property bool|null $Thu
* @property bool|null $Fri
* @property bool|null $Sat
* @property bool|null $SunInUse
* @property bool|null $MonInUse
* @property bool|null $TueInUse
* @property bool|null $WedInUse
* @property bool|null $ThuInUse
* @property bool|null $FriInUse
* @property bool|null $SatInUse
* @property int|null $BlockGroupId
* @property int|null $MeetingTimeId
* @property string|null $InsertDate
* @property string|null $LastModifyDate
* @property int|null $LastModifyUserId
* @property string[]|null $FieldsToNull
* @property string|null $vendor_external_id
@api
*/
class ScheduleSetDetails extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["ScheduleSetId","ScheduleSetDescription","ShortDescription","OfferingType","SchoolYearLabel","LevelNum","Effdate","Enddate","StartDay","StartWeek","MaxDay","MaxWeek","MeetingList","AccessList","RotationList","DefinedRotationPattern","MeetingTimeCreated","BlockRotationCreated","Sun","Mon","Tue","Wed","Thu","Fri","Sat","SunInUse","MonInUse","TueInUse","WedInUse","ThuInUse","FriInUse","SatInUse","BlockGroupId","MeetingTimeId","InsertDate","LastModifyDate","LastModifyUserId","FieldsToNull","vendor_external_id"];
}
