<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A record from the dbo.SALUTATION table in Raiser's Edge.
 *
 * @property int $id The unique identifier for the name format configuration.
 * @property ?string $example The text example for the name format
 *   configuration field.
 *
 * @api
 */
class NameFormatConfigurationForList extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "example" => "string",
    ];
}
