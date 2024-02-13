<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $transportation_id ID of the transportation item to be used
 * @property bool | null $full_day Toggle if transportation should be booked
 *   for the full day
 * @property string | null $begin_use Start date/time for transportation use
 *   <br />
 * @property string | null $end_use End date/time for transportation use <br
 *   />
 *
 * @api
 */
class GameTransportation extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["transportation_id","full_day","begin_use","end_use"];
}
