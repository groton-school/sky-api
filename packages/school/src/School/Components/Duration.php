<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object describing the term or season for the section
 *
 * @property int $id The ID of the duration
 * @property ?string $name The Name of the duration
 *
 * @api
 */
class Duration extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "name" => "string",
    ];
}
