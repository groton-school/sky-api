<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Result Create Model
 *
 * @property int $schedule_id ID for the scheduled event (game)
 * @property int $schedule_type Set to 0 for Versus scoring results
 * Set to 1 for Place/Points scoring results
 * @property bool $send_notification Toggle to true to send a notification of
 *   this event change
 * @property \Blackbaud\SKY\School\Components\ResultCreateOpponent[]
 *   $opponents List of opponents to record results for
 *
 * @api
 */
class ResultCreate extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "schedule_id",
        "schedule_type",
        "send_notification",
        "opponents",
    ];
}
