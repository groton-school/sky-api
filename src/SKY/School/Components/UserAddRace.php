<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * RaceAdd Model
 *
 * @property string $race_type The ID or description of the race to be added
 *   to the user
 *
 * @api
 */
class UserAddRace extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "race_type",
    ];
}
