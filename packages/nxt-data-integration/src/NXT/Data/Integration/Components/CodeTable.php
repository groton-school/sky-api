<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A Code Table record from the dbo.CodeTables table in Raiser's Edge.
 *
 * @property int $code_tables_id The unique identifier for the code table.
 * @property ?string $name The name of the code table.
 * @property bool $user_defined Indicates whether the code table is user
 *   defined.
 * @property bool $has_short_description The value indicating whether the code
 *   table has a short description.
 * @property int $short_description_length The length of the short
 *   description.
 * @property bool $hidden_system_table The value indicating whether the code
 *   table is a hidden system table.
 *
 * @api
 */
class CodeTable extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "code_tables_id" => "int",
        "name" => "string",
        "user_defined" => "bool",
        "has_short_description" => "bool",
        "short_description_length" => "int",
        "hidden_system_table" => "bool",
    ];
}
