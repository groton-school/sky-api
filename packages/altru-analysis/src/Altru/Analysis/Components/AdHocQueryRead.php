<?php

namespace Blackbaud\SKY\Altru\Analysis\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $count
 * @property string[] $fields
 * @property string[] $field_names
 * @property string $queryname
 * @property string $recordtypeid
 * @property \string[][] $rows
 *
 * @api
 */
class AdHocQueryRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "fields" => "string[]",
        "field_names" => "string[]",
        "queryname" => "string",
        "recordtypeid" => "string",
        "rows" => "\string[][]",
    ];
}
