<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Athletic requirement type
 *
 * @property ?int $id The ID of athletic requirement type
 * @property ?string $description The description of athletic requirement type
 * @property ?string $frequency The requirement frequency code: year, season
 *
 * @api
 */
class AthleticRequirementType extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "description" => "string",
        "frequency" => "string",
    ];
}
