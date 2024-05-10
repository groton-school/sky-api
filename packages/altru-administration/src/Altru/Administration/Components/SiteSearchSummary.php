<?php

namespace Blackbaud\SKY\Altru\Administration\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * SearchSites
 *
 * @property string $id The ID.
 * @property string $site_id The site ID.
 * @property string $name The name.
 * @property string $short_name The short name.
 * @property string $acronym The acronym.
 * @property string $site_type_code The site type.
 * @property string $site_path The site path.
 *
 * @api
 */
class SiteSearchSummary extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "string",
        "site_id" => "string",
        "name" => "string",
        "short_name" => "string",
        "acronym" => "string",
        "site_type_code" => "string",
        "site_path" => "string",
    ];
}
