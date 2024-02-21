<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Team Model
 *
 * @property int $id The ID of the team
 * @property ?string $name The name of the team
 * @property \Blackbaud\SKY\School\Components\Sport $sport Sports Model
 *
 * @api
 */
class Team extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
        "sport",
    ];
}
