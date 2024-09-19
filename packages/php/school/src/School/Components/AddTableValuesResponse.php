<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Response object on adding table values
 *
 * @property ?int[] $table_value_ids Array of table values IDs
 *
 * @api
 */
class AddTableValuesResponse extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "table_value_ids" => "int[]",
    ];
}
