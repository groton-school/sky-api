<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $game_id
* @property int|null $schedule_type
* @property string|null $title
* @property string|null $game_date
* @property string|null $game_date_end
* @property int|null $cancel_type
* @property int|null $home_away_type
* @property int|null $location_id
* @property int|null $location_ind
* @property string|null $dismissal_time
* @property string|null $departure_time
* @property string|null $departure_note
* @property string|null $pickup_time
* @property string|null $pickup_note
* @property bool|null $league_ind
* @property bool|null $scrimmage_ind
* @property bool|null $tournament_ind
* @property bool|null $invitational_ind
* @property bool|null $playoff_ind
* @property string|null $additional_notes
* @property int|null $news_id
* @property bool|null $send_notifications
* @property bool|null $clear_reschedule
* @property bool|null $skip_validation
* @property GameTransportation[]|null $transportation
* @property GameOpponent[]|null $opponents
@api
*/
class GameUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["game_id","schedule_type","title","game_date","game_date_end","cancel_type","home_away_type","location_id","location_ind","dismissal_time","departure_time","departure_note","pickup_time","pickup_note","league_ind","scrimmage_ind","tournament_ind","invitational_ind","playoff_ind","additional_notes","news_id","send_notifications","clear_reschedule","skip_validation","transportation","opponents"];
}
