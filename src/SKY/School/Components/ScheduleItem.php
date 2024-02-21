<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id ID of the schedule item
 * @property bool $alumni Returns True if the game or practice is marked as
 *   alumni
 * @property bool $cancelled Returns True if the game or practice was
 *   cancelled
 * @property string $created Created date of the game or practice. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property string $departure_location Departure location of the game or
 *   practice
 * @property string $departure_time The time of departure before the game or
 *   practice
 * @property string $description The game or practice description
 * @property string $directions Directions to the game or practice
 * @property string $dismissal_time The time of dismissal before the game or
 *   practice
 * @property string $end_time The time a game or practice ends
 * @property string $end_time_span The end time of the game or practice
 * @property string $title The title of the game or practice
 * @property bool $faculty Returns True if the game or practice is marked as
 *   faculty
 * @property string $game_date Date of the game or practice. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property \Blackbaud\SKY\School\Components\GameTime $game_time
 * @property int $highlight_id The ID of the game highlight
 * @property string $home_or_away Indicates whether the game is a home game or
 *   an away game
 * @property bool $invitational Returns True if the game or practice is an
 *   invitational
 * @property string $last_modified Modified date of the game or practice. Uses
 *   [ISO-8601](https://tools.ietf.org/html/rfc3339) (24H) format:
 *   2003-04-21T10:29:43
 * @property bool $league Returns True if the game is a league event
 * @property string $location Location of the game or practice
 * @property string $map_url Directions url to the game or practice
 * @property int $meet Returns 1 if the game is a meet, otherwise returns 0
 * @property \Blackbaud\SKY\School\Components\Opponent[] $opponents Opponents
 *   for the gsame or practice
 * @property string $pickup_time The pickup time after the game or practice
 * @property bool $playoff Returns True if the game or practice is a playoff
 * @property bool $practice Returns True if the event is a practice
 * @property int $previous_schedule_id The id of the game or practice where
 *   this event was previously scheduled
 * @property bool $published Returns True if the game schedule is published
 * @property bool $require_dinner Returns True if the game or practice
 *   requires dinner
 * @property bool $require_lunch Returns True if the game or practice requires
 *   a lunch
 * @property bool $rescheduled Returns True if the game or practice was
 *   rescheduled
 * @property string $rescheduled_date The date and time a game or practice has
 *   been rescheduled. Uses [ISO-8601](https://tools.ietf.org/html/rfc3339)
 *   (24H) format: 2003-04-21T10:29:43
 * @property string $rescheduled_note The resaon a game or practice was
 *   rescheduled
 * @property int $room_id The ID of the room a game or practice is being held
 * @property int $schedule_type The schedule type
 * @property bool $scrimmage Returns True if the game or practice is a
 *   scrimmage
 * @property int $section_id The section ID
 * @property bool $show_details Returns True if details for a game or practice
 *   are avalible
 * @property bool $show_directions Returns true if the game or practice should
 *   display "the directions on the school website
 * @property bool $show_versus Returns true if the game or practice should
 *   display "vs" on the school website
 * @property string $start_time The start time of the game or practice
 * @property int $team_id ID of the team
 * @property string $time Time of the game or practice
 * @property bool $tournament Returns True if the game or practice is a
 *   tournament
 * @property string $uniform_color The color of the uniforms for the game or
 *   practice
 *
 * @api
 */
class ScheduleItem extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "alumni",
        "cancelled",
        "created",
        "departure_location",
        "departure_time",
        "description",
        "directions",
        "dismissal_time",
        "end_time",
        "end_time_span",
        "title",
        "faculty",
        "game_date",
        "game_time",
        "highlight_id",
        "home_or_away",
        "invitational",
        "last_modified",
        "league",
        "location",
        "map_url",
        "meet",
        "opponents",
        "pickup_time",
        "playoff",
        "practice",
        "previous_schedule_id",
        "published",
        "require_dinner",
        "require_lunch",
        "rescheduled",
        "rescheduled_date",
        "rescheduled_note",
        "room_id",
        "schedule_type",
        "scrimmage",
        "section_id",
        "show_details",
        "show_directions",
        "show_versus",
        "start_time",
        "team_id",
        "time",
        "tournament",
        "uniform_color",
    ];
}
