<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $id ID of the field
 * @property ?string $description Description of the field
 *
 * @api
 */
class SourceModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "description" => "string",
    ];
}
