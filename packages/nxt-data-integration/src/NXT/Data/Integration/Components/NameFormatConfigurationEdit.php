<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Name format configurations provide a preset layout to display a
 * constituent's name.
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldDetail[]
 *   $fields The collection of configurations for name format fields.
 *
 * @api
 */
class NameFormatConfigurationEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "fields" => "\Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldDetail[]",
    ];
}
