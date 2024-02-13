<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $id The ID of the practice
 * @property bool | null $send_notification Toggle to true to send a
 *   notification of this event
 * @property string | null $title The title of the practice
 * @property string $practice_start_date Date and time for practice to start
 *   <br />
 * @property string | null $practice_end_date Date and time for practice to
 *   end <br />
 * @property int | null $location_id ID of the location of the practice
 * @property int | null $room_id ID of the venue of the practice
 * @property int | null $transportation_id ID of the transportation method for
 *   the practice
 * @property string | null $dismissal_time Time that participants should be
 *   dismissed <br />
 * @property string | null $departure_time Time that team will depart for
 *   practice <br />
 * @property string | null $pickup_time Time that participants should be
 *   picked up <br />
 * @property string | null $practice_note Free form notes about this practice
 * @property bool | null $skip_validation Set to true to skip validation of
 *   this event
 *
 * @api
 */
class PracticeUpdate extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","send_notification","title","practice_start_date","practice_end_date","location_id","room_id","transportation_id","dismissal_time","departure_time","pickup_time","practice_note","skip_validation"];
}
