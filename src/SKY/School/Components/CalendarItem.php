<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Calendar item
 *
 * @property int $association_id The association id for the event
 * @property string $brief_description The brief description of the event
 * @property string $building_name The name of the building where the event is
 *   being held
 * @property bool $cancelled If the event is an athletic game, returns true if
 *   it is canceled
 * @property string $contact_email The email of the event contact
 * @property string $contact_name The name of the event contact
 * @property string $end_date The date the event ends
 * @property int $event_id The id of the event
 * @property string $event_type The type of the event
 * @property int $category_id The id of the category the event belongs to
 * @property string $category_name The name of the category the event belongs
 *   to
 * @property string $home_away If the event is an athletic game, returns the
 *   home or away status of the game
 * @property bool $invitational If the event is an athletic game, returns true
 *   if the game is an invitational
 * @property bool $league If the event is an athletic game, returns true if
 *   the game is a league game
 * @property string $location The location of the event
 * @property string $long_description The long description of the event
 * @property string $opponent If the event is an athletic game, returns the
 *   name of the opponent
 * @property bool $playoff If the event is an athletic game, returns true if
 *   the game is a playoff game
 * @property int $preset_id The event preset id
 * @property int $recurrence_id The recurrence id of the event
 * @property int $registration_id the registration id of the event
 * @property bool $rescheduled If the event is an athletic game, returns true
 *   if the game was rescheduled
 * @property string $reschedule_note If the event is an athletic game, the
 *   rescheduled note (usually the reason for the reschedule)
 * @property string $room_name The name of the room where the event is being
 *   held
 * @property bool $scrimmage If the event is an athletic game, returns true if
 *   the game is a scrimmage
 * @property string $start_date The date the event starts
 * @property string $title The title of the event
 * @property bool $tournament If the event is an athletic game, returns true
 *   if the game is part of a tournament
 * @property bool $all_day Returns true if the event happens all day
 * @property int $total_days Shows the total number of days the event spans
 *
 * @api
 */
class CalendarItem extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "association_id",
        "brief_description",
        "building_name",
        "cancelled",
        "contact_email",
        "contact_name",
        "end_date",
        "event_id",
        "event_type",
        "category_id",
        "category_name",
        "home_away",
        "invitational",
        "league",
        "location",
        "long_description",
        "opponent",
        "playoff",
        "preset_id",
        "recurrence_id",
        "registration_id",
        "rescheduled",
        "reschedule_note",
        "room_name",
        "scrimmage",
        "start_date",
        "title",
        "tournament",
        "all_day",
        "total_days",
    ];
}
