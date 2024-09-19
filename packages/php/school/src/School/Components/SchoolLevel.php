<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with school level information
 *
 * @property ?int $id Id
 * @property ?string $description description
 * @property ?string $abbreviation Abbreviation
 *
 * @api
 */
class SchoolLevel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "description" => "string",
        "abbreviation" => "string",
    ];
}
