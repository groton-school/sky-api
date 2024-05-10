<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * ListTributes
 *
 * @property string $id The ID.
 * @property string $tribute_text The tribute text.
 * @property string $tribute_type The tribute type.
 * @property bool $active Indicates whether is active.
 * @property string $date_created The date created. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
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
