<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * An object with offering type information
 *
 * @property int $id The ID of an offering type
 * @property ?string $description The description of an offering type
 *
 * @api
 */
class OfferingType extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "description" => "string",
    ];
}
