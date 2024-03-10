<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Defines a collection of table entries.
 *
 * @property int $count
 * @property ?\Blackbaud\SKY\NXT\Data\Integration\Components\TableEntry[]
 *   $value
 *
 * @api
 */
class TableEntryCollection extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "count" => "int",
        "value" => "\Blackbaud\SKY\NXT\Data\Integration\Components\TableEntry[]",
    ];
}
