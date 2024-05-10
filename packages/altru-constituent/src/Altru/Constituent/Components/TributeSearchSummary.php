<?php

namespace Blackbaud\SKY\Altru\Constituent\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * SearchTributes
 *
 * @property string $id The ID.
 * @property string $tribute_text The tribute text.
 * @property string $tributee_name The tributee.
 * @property string $tribute_type The tribute type.
 * @property string $date_created The date created. Uses the format
 *   YYYY-MM-DDThh:mm:ss. An example date: *1955-11-05T22:04:00*.
 * @property bool $active Indicates whether is active.
 * @property string $designation_id The default designation ID.
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
