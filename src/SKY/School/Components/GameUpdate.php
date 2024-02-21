<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $game_id ID of the game to be updated
 * @property int $schedule_type The Type of the event
 * @property string $title Title of the game
 * @property string $game_date Date and time of the game
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property string $game_date_end Date and time the game is set to end
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property int $cancel_type Set to 0 to Uncancel a game
 * Set to 1 to Cancel a game
 * Set to 2 to Reschedule a game
 * @property int $home_away_type Set to 0 for Home
 * Set to 1 for Away
 * Set to 2 for Neutral
 * Set to 3 for TBD
 * @property int $location_id ID of the location/venue of the game
 * @property int $location_ind Set to 0 when using a venue for
 *   ```location_id```
 * Set to 1 when using a location for ```location_id```
 * @property string $dismissal_time Time for dismissal using 24-hour format:
 *   ```HH:mm```
 * @property string $departure_time Time for departure using 24-hour format:
 *   ```HH:mm```
 * @property string $departure_note Notes related to departure
 * @property string $pickup_time Time for pickup using 24-hour format:
 *   ```HH:mm```
 * @property string $pickup_note Notes related to pickup
 * @property bool $league_ind Set to true to indicate a league event
 * @property bool $scrimmage_ind Set to true to indicate a scrimmage event
 * @property bool $tournament_ind Set to true to indicate a tournament event
 * @property bool $invitational_ind Set to true to indicate an invitational
 *   event
 * @property bool $playoff_ind Set to true to indicate a playoff event
 * @property string $additional_notes Additional notes for the event
 * @property int $news_id News ID
 * @property bool $send_notifications Toggles 'Send Notification' option
 * @property bool $clear_reschedule Set to true to remove the original
 *   scheduled game
 * @property bool $skip_validation Set to true to skip validation of this
 *   event
 * @property \Blackbaud\SKY\School\Components\GameTransportation[]
 *   $transportation List of the transportation to be used for this game
 * @property \Blackbaud\SKY\School\Components\GameOpponent[] $opponents List
 *   of Opponent ID's involved in this game
 *
 * @api
 */
class GameUpdate extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "game_id",
        "schedule_type",
        "title",
        "game_date",
        "game_date_end",
        "cancel_type",
        "home_away_type",
        "location_id",
        "location_ind",
        "dismissal_time",
        "departure_time",
        "departure_note",
        "pickup_time",
        "pickup_note",
        "league_ind",
        "scrimmage_ind",
        "tournament_ind",
        "invitational_ind",
        "playoff_ind",
        "additional_notes",
        "news_id",
        "send_notifications",
        "clear_reschedule",
        "skip_validation",
        "transportation",
        "opponents",
    ];
}
