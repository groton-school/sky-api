<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property string $table_entry_description The description of the table
 *   entry.
 * @property string $table_entry_id The ID of the table entry.
 * @property bool $inactive Indicates whether the table entry is active.
 * @property int $sequence The sequence of the table entry.
 *
 * @api
 */
class NewCodeTableEntry extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "table_entry_description" => "string",
        "table_entry_id" => "string",
        "inactive" => "bool",
        "sequence" => "int",
    ];
}
