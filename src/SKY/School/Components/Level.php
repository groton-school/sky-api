<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Level Model
 *
 * @property ?int $id The ID of a school level
 * @property ?string $abbreviation The abbreviation associated with a school
 *   level
 * @property ?string $name The label used to identify a school level
 *
 * @api
 */
class Level extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "abbreviation",
        "name",
    ];
}
