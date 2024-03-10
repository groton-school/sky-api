<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListTribute
 *
 * @property string $id The id.
 * @property string $tribute_text The tribute text.
 * @property string $tribute_type The tribute type.
 * @property bool $active Indicates whether is active.
 * @property string $date_created The date created.Uses the format YYYY-MM-DD.
 *   An example date: *2019-11-21*.
 * @property bool $tributee Indicates whether is tributee.
 * @property bool $acknowledgee Indicates whether is acknowledgee.
 * @property string $sites The sites.
 *
 * @api
 */
class TributeListSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "tribute_text" => "string",
        "tribute_type" => "string",
        "active" => "bool",
        "date_created" => "string",
        "tributee" => "bool",
        "acknowledgee" => "bool",
        "sites" => "string",
    ];
}
