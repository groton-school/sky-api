<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Request object for adding table values
 *
 * @property string $table The ID or description of the table type
 * @property \Blackbaud\SKY\School\Components\TableValueAdd[] $table_values An
 *   array of table values to add to the table
 *
 * @api
 */
class AddTableValuesRequest extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "table" => "string",
        "table_values" => "\Blackbaud\SKY\School\Components\TableValueAdd[]",
    ];
}
