<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * SearchTribute
 *
 * @property string $id The id.
 * @property string $tribute_text The tribute text.
 * @property string $tributee_name The tributee.
 * @property string $tribute_type The tribute type.
 * @property string $date_created The date created.Uses the format YYYY-MM-DD.
 *   An example date: *2019-11-21*.
 * @property bool $active Indicates whether is active.
 * @property string $designation_id The default designation id.
 * @property string $designation The default designation.
 * @property string $site_id The site.
 *
 * @api
 */
class TributeSearchSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "tribute_text" => "string",
        "tributee_name" => "string",
        "tribute_type" => "string",
        "date_created" => "string",
        "active" => "bool",
        "designation_id" => "string",
        "designation" => "string",
        "site_id" => "string",
    ];
}
