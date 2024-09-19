<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id ID for the transportation
 * @property ?string $name Name of the transportation and capacity where
 *   applicable
 *
 * @api
 */
class Transportation extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
    ];
}
