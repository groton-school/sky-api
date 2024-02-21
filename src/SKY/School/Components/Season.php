<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Season Model
 *
 * @property int $id The ID of the season
 * @property ?string $name The name of the season
 *
 * @api
 */
class Season extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
    ];
}
