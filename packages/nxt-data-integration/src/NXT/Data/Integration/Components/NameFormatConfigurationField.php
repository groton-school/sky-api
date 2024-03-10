<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A record from the dbo.SALUTATION\_FIELDS table in Raiser's Edge.
 *
 * @property int $id The immutable system record ID of the name format
 *   configuration field.
 * @property string $field_name The field name.
 * @property bool $is_system The value indicating whether the field is a
 *   system field.
 *
 * @api
 */
class NameFormatConfigurationField extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "field_name" => "string",
        "is_system" => "bool",
    ];
}
