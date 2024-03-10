<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * RE7 Table entry record edit class from the dbo.TableEntries table in
 * Raiser's Edge.
 *
 * @property bool $is_active The active status of the entry.
 * @property string $long_description The long description of the entry.
 * @property ?string $short_description The short description of the entry.
 * @property ?float $numeric_value The numeric value of the entry.
 *
 * @api
 */
class TableEntryEdit extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "is_active" => "bool",
        "long_description" => "string",
        "short_description" => "string",
        "numeric_value" => "float",
    ];
}
