<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Student immunization type
 *
 * @property ?int $id The ID of immunization type
 * @property ?string $description The description of immunization type
 * @property ?bool $required Returns true if immunization type is required
 *   else false
 *
 * @api
 */
class StudentImmunizationType extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "description" => "string",
        "required" => "bool",
    ];
}
