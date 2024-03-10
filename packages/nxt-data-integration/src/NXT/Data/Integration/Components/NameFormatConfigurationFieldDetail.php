<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Contains the fields needed to configure a field in a constituent name
 * format.
 *
 * @property int $field_id The unique identifier for the field.
 * @property bool $initial The value used to indicate whether the field is the
 *   initial field in a name format.
 * @property bool $comma The value used to indicate whether a comma is
 *   included in the field.
 * @property bool $conditional_break The value used to indicate whether a
 *   conditional break is included in the field.
 * @property bool $hard_break The value used to indicate whether a hard break
 *   is included in the field.
 * @property bool $concatenate The value used to indicate whether the field
 *   can be concatenated.
 * @property bool $smart The value used to indicate whether the field is a
 *   smart concatenate field; it can be true only when preceded by a
 *   user-defined field.
 * @property int $sequence The numeric sequence associated with the field.
 *
 * @api
 */
class NameFormatConfigurationFieldDetail extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "field_id" => "int",
        "initial" => "bool",
        "comma" => "bool",
        "conditional_break" => "bool",
        "hard_break" => "bool",
        "concatenate" => "bool",
        "smart" => "bool",
        "sequence" => "int",
    ];
}
