<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Result Create Model
 *
 * @property int $schedule_id ID for the scheduled event (game)
 * @property int $schedule_type Set to 0 for Versus scoring results
 *  Set to 1 for Place/Points scoring results
 * @property bool $send_notification Toggle to true to send a notification of
 *   this event change
 * @property ?\Blackbaud\SKY\School\Components\ResultCreateOpponent[]
 *   $opponents List of opponents to record results for
 *
 * @api
 */
class ResultCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "schedule_id" => "int",
        "schedule_type" => "int",
        "send_notification" => "bool",
        "opponents" => "\Blackbaud\SKY\School\Components\ResultCreateOpponent[]",
    ];
}
