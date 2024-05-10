<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListCodeTables
 *
 * @property string $id The ID.
 * @property string $description The description.
 * @property bool $active Indicates whether active.
 * @property string $sites The sites.
 *
 * @api
 */
class CodeTableListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "description" => "string",
        "active" => "bool",
        "sites" => "string",
    ];
}
