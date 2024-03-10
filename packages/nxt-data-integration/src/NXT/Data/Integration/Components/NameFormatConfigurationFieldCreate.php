<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A name format configuration represents the layout to display a
 * constituent's name.
 *
 * @property string $field_name The field name.
 *
 * @api
 */
class NameFormatConfigurationFieldCreate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "field_name" => "string",
    ];
}
