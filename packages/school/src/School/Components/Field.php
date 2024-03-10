<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * List Field
 *
 * @property ?string $name The name of the field
 * @property ?string $value The value of the field
 *
 * @api
 */
class Field extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "name" => "string",
        "value" => "string",
    ];
}
