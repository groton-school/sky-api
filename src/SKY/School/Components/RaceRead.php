<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * RaceRead Model
 *
 * @property int $race_type_id The ID of a race type
 * @property ?string $description The description of a race type
 * @property int $user_race_id The ID of user and race type association
 * @property int $user_id The ID of the user who is associated to race type
 *
 * @api
 */
class RaceRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "race_type_id" => "int",
        "description" => "string",
        "user_race_id" => "int",
        "user_id" => "int",
    ];
}
