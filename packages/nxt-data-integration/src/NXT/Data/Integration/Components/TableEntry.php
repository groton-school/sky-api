<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * A Code Table record from the dbo.CodeTables table in Raiser's Edge.
 *
 * @property int $table_entries_id The ID for the entry in the
 *   dbo.TableEntries table.
 * @property bool $is_active The active status of the entry.
 * @property ?string $long_description The long description of the entry.
 * @property ?string $short_description The short description of the entry.
 * @property ?float $numeric_value The numeric value of the entry.
 * @property ?int $sequence The sequence of the table entry.
 * @property bool $is_system_entry The value indicating whether the entry is a
 *   system entry.
 * @property int $code_tables_id The ID associated with the record's code
 *   table.
 * @property ?string $date_added The date on which the record was added.
 * @property ?string $date_changed The date on which the record was last
 *   changed.
 * @property ?int $added_by_id The ID of the user who added the record.
 * @property ?int $last_changed_by_id The ID of the user who last changed the
 *   record.
 * @property ?string $code_tables_name The name of the code table.
 *
 * @api
 */
class TableEntry extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "table_entries_id" => "int",
        "is_active" => "bool",
        "long_description" => "string",
        "short_description" => "string",
        "numeric_value" => "float",
        "sequence" => "int",
        "is_system_entry" => "bool",
        "code_tables_id" => "int",
        "date_added" => "string",
        "date_changed" => "string",
        "added_by_id" => "int",
        "last_changed_by_id" => "int",
        "code_tables_name" => "string",
    ];
}
