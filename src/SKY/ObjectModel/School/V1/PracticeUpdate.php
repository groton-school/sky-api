<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* @property int $id
* @property bool|null $send_notification
* @property string|null $title
* @property string $practice_start_date
* @property string|null $practice_end_date
* @property int|null $location_id
* @property int|null $room_id
* @property int|null $transportation_id
* @property string|null $dismissal_time
* @property string|null $departure_time
* @property string|null $pickup_time
* @property string|null $practice_note
* @property bool|null $skip_validation
@api
*/
class PracticeUpdate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","send_notification","title","practice_start_date","practice_end_date","location_id","room_id","transportation_id","dismissal_time","departure_time","pickup_time","practice_note","skip_validation"];
}
