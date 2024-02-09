<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Calendar item
 *
 * @property int|null $association_id
 * @property string|null $brief_description
 * @property string|null $building_name
 * @property bool|null $cancelled
 * @property string|null $contact_email
 * @property string|null $contact_name
 * @property string|null $end_date
 * @property int|null $event_id
 * @property string|null $event_type
 * @property int|null $category_id
 * @property string|null $category_name
 * @property string|null $home_away
 * @property bool|null $invitational
 * @property bool|null $league
 * @property string|null $location
 * @property string|null $long_description
 * @property string|null $opponent
 * @property bool|null $playoff
 * @property int|null $preset_id
 * @property int|null $recurrence_id
 * @property int|null $registration_id
 * @property bool|null $rescheduled
 * @property string|null $reschedule_note
 * @property string|null $room_name
 * @property bool|null $scrimmage
 * @property string|null $start_date
 * @property string|null $title
 * @property bool|null $tournament
 * @property bool|null $all_day
 * @property int|null $total_days
 * @api
 */
class CalendarItem extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["association_id","brief_description","building_name","cancelled","contact_email","contact_name","end_date","event_id","event_type","category_id","category_name","home_away","invitational","league","location","long_description","opponent","playoff","preset_id","recurrence_id","registration_id","rescheduled","reschedule_note","room_name","scrimmage","start_date","title","tournament","all_day","total_days"];
}
