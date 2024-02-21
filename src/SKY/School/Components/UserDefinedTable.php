<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * User Defined Table
 *
 * @property ?int $table_id
 * @property ?string $table_name
 * @property ?bool $use_abbreviations
 * @property ?bool $in_use
 * @property ?bool $base_table
 * @property ?bool $system_table
 * @property ?bool $require_abbreviation
 * @property ?string $modify_user
 * @property ?int $vendor_id
 * @property ?\Blackbaud\SKY\School\Components\UserDefinedTableValue[] $values
 *
 * @api
 */
class UserDefinedTable extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "table_id",
        "table_name",
        "use_abbreviations",
        "in_use",
        "base_table",
        "system_table",
        "require_abbreviation",
        "modify_user",
        "vendor_id",
        "values",
    ];
}
