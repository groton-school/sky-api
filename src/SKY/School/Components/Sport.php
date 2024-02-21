<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Sports Model
 *
 * @property int $id The ID of the sport
 * @property \Blackbaud\SKY\School\Components\Level $level Level Model
 * @property string $name The name of the sport
 * @property \Blackbaud\SKY\School\Components\Season $season Season Model
 *
 * @api
 */
class Sport extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "level",
        "name",
        "season",
    ];
}
