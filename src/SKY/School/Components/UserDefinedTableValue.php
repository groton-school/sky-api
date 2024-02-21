<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * User Defined Table Values
 *
 * @property ?int $table_id
 * @property ?int $table_value_id
 * @property ?string $value_name
 * @property ?string $value_abbreviation
 * @property ?bool $in_use
 * @property ?bool $active
 * @property ?int $sort
 * @property ?int $base_table_value_id
 * @property ?bool $base_value
 *
 * @api
 */
class UserDefinedTableValue extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "table_id",
        "table_value_id",
        "value_name",
        "value_abbreviation",
        "in_use",
        "active",
        "sort",
        "base_table_value_id",
        "base_value",
    ];
}
