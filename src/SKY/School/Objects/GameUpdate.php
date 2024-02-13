<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $game_id ID of the game to be updated
 * @property int | null $schedule_type The Type of the event
 * @property string | null $title Title of the game
 * @property string | null $game_date Date and time of the game <br />
 *   Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> format: ```2022-01-20T16:30:00-05:00```
 * @property string | null $game_date_end Date and time the game is set to end
 *   <br />
 * @property int | null $cancel_type Set to 0 to Uncancel a game <br />
 *   Set to 1 to Cancel a game <br />
 * @property int | null $home_away_type Set to 0 for Home <br />
 *   Set to 1 for Away <br />
 * @property int | null $location_id ID of the location/venue of the game
 * @property int | null $location_ind Set to 0 when using a venue for
 *   ```location_id```<br />
 * @property string | null $dismissal_time Time for dismissal using 24-hour
 *   format: ```HH:mm```
 * @property string | null $departure_time Time for departure using 24-hour
 *   format: ```HH:mm```
 * @property string | null $departure_note Notes related to departure
 * @property string | null $pickup_time Time for pickup using 24-hour format:
 *   ```HH:mm```
 * @property string | null $pickup_note Notes related to pickup
 * @property bool | null $league_ind Set to true to indicate a league event
 * @property bool | null $scrimmage_ind Set to true to indicate a scrimmage
 *   event
 * @property bool | null $tournament_ind Set to true to indicate a tournament
 *   event
 * @property bool | null $invitational_ind Set to true to indicate an
 *   invitational event
 * @property bool | null $playoff_ind Set to true to indicate a playoff event
 * @property string | null $additional_notes Additional notes for the event
 * @property int | null $news_id News ID
 * @property bool | null $send_notifications Toggles 'Send Notification'
 *   option
 * @property bool | null $clear_reschedule Set to true to remove the original
 *   scheduled game
 * @property bool | null $skip_validation Set to true to skip validation of
 *   this event
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\GameTransportation[] |
 *   null $transportation List of the transportation to be used for this game
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\GameOpponent[] | null
 *   $opponents List of Opponent ID's involved in this game
 *
 * @api
 */
class GameUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["game_id","schedule_type","title","game_date","game_date_end","cancel_type","home_away_type","location_id","location_ind","dismissal_time","departure_time","departure_note","pickup_time","pickup_note","league_ind","scrimmage_ind","tournament_ind","invitational_ind","playoff_ind","additional_notes","news_id","send_notifications","clear_reschedule","skip_validation","transportation","opponents"];
}
