<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Calendar item
 *
 * @property int | null $association_id The association id for the event
 * @property string | null $brief_description The brief description of the
 *   event
 * @property string | null $building_name The name of the building where the
 *   event is being held
 * @property bool | null $cancelled If the event is an athletic game, returns
 *   true if it is canceled
 * @property string | null $contact_email The email of the event contact
 * @property string | null $contact_name The name of the event contact
 * @property string | null $end_date The date the event ends
 * @property int | null $event_id The id of the event
 * @property string | null $event_type The type of the event
 * @property int | null $category_id The id of the category the event belongs
 *   to
 * @property string | null $category_name The name of the category the event
 *   belongs to
 * @property string | null $home_away If the event is an athletic game,
 *   returns the home or away status of the game
 * @property bool | null $invitational If the event is an athletic game,
 *   returns true if the game is an invitational
 * @property bool | null $league If the event is an athletic game, returns
 *   true if the game is a league game
 * @property string | null $location The location of the event
 * @property string | null $long_description The long description of the event
 * @property string | null $opponent If the event is an athletic game, returns
 *   the name of the opponent
 * @property bool | null $playoff If the event is an athletic game, returns
 *   true if the game is a playoff game
 * @property int | null $preset_id The event preset id
 * @property int | null $recurrence_id The recurrence id of the event
 * @property int | null $registration_id the registration id of the event
 * @property bool | null $rescheduled If the event is an athletic game,
 *   returns true if the game was rescheduled
 * @property string | null $reschedule_note If the event is an athletic game,
 *   the rescheduled note (usually the reason for the reschedule)
 * @property string | null $room_name The name of the room where the event is
 *   being held
 * @property bool | null $scrimmage If the event is an athletic game, returns
 *   true if the game is a scrimmage
 * @property string | null $start_date The date the event starts
 * @property string | null $title The title of the event
 * @property bool | null $tournament If the event is an athletic game, returns
 *   true if the game is part of a tournament
 * @property bool | null $all_day Returns true if the event happens all day
 * @property int | null $total_days Shows the total number of days the event
 *   spans
 *
 * @api
 */
class CalendarItem extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["association_id","brief_description","building_name","cancelled","contact_email","contact_name","end_date","event_id","event_type","category_id","category_name","home_away","invitational","league","location","long_description","opponent","playoff","preset_id","recurrence_id","registration_id","rescheduled","reschedule_note","room_name","scrimmage","start_date","title","tournament","all_day","total_days"];
}
