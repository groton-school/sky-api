<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int | null $id ID of the schedule item
 * @property bool | null $alumni Returns True if the game or practice is
 *   marked as alumni
 * @property bool | null $cancelled Returns True if the game or practice was
 *   cancelled
 * @property string | null $created Created date of the game or practice. Uses
 *   <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $departure_location Departure location of the game
 *   or practice
 * @property string | null $departure_time The time of departure before the
 *   game or practice
 * @property string | null $description The game or practice description
 * @property string | null $directions Directions to the game or practice
 * @property string | null $dismissal_time The time of dismissal before the
 *   game or practice
 * @property string | null $end_time The time a game or practice ends
 * @property string | null $end_time_span The end time of the game or practice
 * @property string | null $title The title of the game or practice
 * @property bool | null $faculty Returns True if the game or practice is
 *   marked as faculty
 * @property string | null $game_date Date of the game or practice. Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\GameTime $game_time 
 * @property int | null $highlight_id The ID of the game highlight
 * @property string | null $home_or_away Indicates whether the game is a home
 *   game or an away game
 * @property bool | null $invitational Returns True if the game or practice is
 *   an invitational
 * @property string | null $last_modified Modified date of the game or
 *   practice. Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property bool | null $league Returns True if the game is a league event
 * @property string | null $location Location of the game or practice
 * @property string | null $map_url Directions url to the game or practice
 * @property int | null $meet Returns 1 if the game is a meet, otherwise
 *   returns 0
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\Opponent[] | null
 *   $opponents Opponents for the gsame or practice
 * @property string | null $pickup_time The pickup time after the game or
 *   practice
 * @property bool | null $playoff Returns True if the game or practice is a
 *   playoff
 * @property bool | null $practice Returns True if the event is a practice
 * @property int | null $previous_schedule_id The id of the game or practice
 *   where this event was previously scheduled
 * @property bool | null $published Returns True if the game schedule is
 *   published
 * @property bool | null $require_dinner Returns True if the game or practice
 *   requires dinner
 * @property bool | null $require_lunch Returns True if the game or practice
 *   requires a lunch
 * @property bool | null $rescheduled Returns True if the game or practice was
 *   rescheduled
 * @property string | null $rescheduled_date The date and time a game or
 *   practice has been rescheduled. Uses <a
 *   href="https://tools.ietf.org/html/rfc3339" target="_blank">ISO-8601</a>
 *   (24H) format: 2003-04-21T10:29:43
 * @property string | null $rescheduled_note The resaon a game or practice was
 *   rescheduled
 * @property int | null $room_id The ID of the room a game or practice is
 *   being held
 * @property int | null $schedule_type The schedule type
 * @property bool | null $scrimmage Returns True if the game or practice is a
 *   scrimmage
 * @property int | null $section_id The section ID
 * @property bool | null $show_details Returns True if details for a game or
 *   practice are avalible
 * @property bool | null $show_directions Returns true if the game or practice
 *   should display "the directions on the school website
 * @property bool | null $show_versus Returns true if the game or practice
 *   should display "vs" on the school website
 * @property string | null $start_time The start time of the game or practice
 * @property int $team_id ID of the team
 * @property string | null $time Time of the game or practice
 * @property bool | null $tournament Returns True if the game or practice is a
 *   tournament
 * @property string | null $uniform_color The color of the uniforms for the
 *   game or practice
 *
 * @api
 */
class ScheduleItem extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","alumni","cancelled","created","departure_location","departure_time","description","directions","dismissal_time","end_time","end_time_span","title","faculty","game_date","game_time","highlight_id","home_or_away","invitational","last_modified","league","location","map_url","meet","opponents","pickup_time","playoff","practice","previous_schedule_id","published","require_dinner","require_lunch","rescheduled","rescheduled_date","rescheduled_note","room_id","schedule_type","scrimmage","section_id","show_details","show_directions","show_versus","start_time","team_id","time","tournament","uniform_color"];
}
