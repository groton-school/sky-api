<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property ?int $id ID for the transportation
 * @property ?string $name Name of the transportation and capacity where
 *   applicable
 *
 * @api
 */
class Transportation extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "id",
        "name",
    ];
}
