<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?bool $send_notification Toggle to true to send a notification of
 *   this event
 * @property ?string $title Title of the practice
 * @property string $practice_start_date Date and time for practice to start
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $practice_end_date Date and time for practice to end
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?int $location_id ID of the location of the practice
 * @property ?int $room_id ID of the venue of the practice
 * @property ?int $transportation_id ID of the transportation method for the
 *   practice
 * @property ?string $dismissal_time Time that participants should be
 *   dismissed
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $departure_time Time that team will depart for practice
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $pickup_time Time that participants should be picked up
 * Uses [ISO-8601](https://tools.ietf.org/html/rfc3339) format:
 *   ```2022-01-20T16:30:00-05:00```
 * @property ?string $practice_note Free form notes about this practice
 * @property ?bool $skip_validation Set to true to skip validation of this
 *   event
 *
 * @api
 */
class PracticeCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "send_notification" => "bool",
        "title" => "string",
        "practice_start_date" => "string",
        "practice_end_date" => "string",
        "location_id" => "int",
        "room_id" => "int",
        "transportation_id" => "int",
        "dismissal_time" => "string",
        "departure_time" => "string",
        "pickup_time" => "string",
        "practice_note" => "string",
        "skip_validation" => "bool",
    ];
}
