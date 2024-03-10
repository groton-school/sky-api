<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A record from the dbo.SALUTATIONS table in Raiser's Edge.
 *
 * @property int $id The unique identifier for the name format configuration.
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldDetail[]
 *   $fields The collection of configurations for name format fields.
 *
 * @api
 */
class NameFormatConfiguration extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "fields" => "\Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldDetail[]",
    ];
}
