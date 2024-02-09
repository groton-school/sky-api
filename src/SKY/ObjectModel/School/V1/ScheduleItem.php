<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int|null $id
* @property bool|null $alumni
* @property bool|null $cancelled
* @property string|null $created
* @property string|null $departure_location
* @property string|null $departure_time
* @property string|null $description
* @property string|null $directions
* @property string|null $dismissal_time
* @property string|null $end_time
* @property string|null $end_time_span
* @property string|null $title
* @property bool|null $faculty
* @property string|null $game_date
* @property GameTime $game_time
* @property int|null $highlight_id
* @property string|null $home_or_away
* @property bool|null $invitational
* @property string|null $last_modified
* @property bool|null $league
* @property string|null $location
* @property string|null $map_url
* @property int|null $meet
* @property Opponent[]|null $opponents
* @property string|null $pickup_time
* @property bool|null $playoff
* @property bool|null $practice
* @property int|null $previous_schedule_id
* @property bool|null $published
* @property bool|null $require_dinner
* @property bool|null $require_lunch
* @property bool|null $rescheduled
* @property string|null $rescheduled_date
* @property string|null $rescheduled_note
* @property int|null $room_id
* @property int|null $schedule_type
* @property bool|null $scrimmage
* @property int|null $section_id
* @property bool|null $show_details
* @property bool|null $show_directions
* @property bool|null $show_versus
* @property string|null $start_time
* @property int $team_id
* @property string|null $time
* @property bool|null $tournament
* @property string|null $uniform_color
@api
*/
class ScheduleItem extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","alumni","cancelled","created","departure_location","departure_time","description","directions","dismissal_time","end_time","end_time_span","title","faculty","game_date","game_time","highlight_id","home_or_away","invitational","last_modified","league","location","map_url","meet","opponents","pickup_time","playoff","practice","previous_schedule_id","published","require_dinner","require_lunch","rescheduled","rescheduled_date","rescheduled_note","room_id","schedule_type","scrimmage","section_id","show_details","show_directions","show_versus","start_time","team_id","time","tournament","uniform_color"];
}
