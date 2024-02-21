<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Events Category Model
 *
 * @property int $category_id The ID for the category
 * @property ?string $category_name The name for the category
 * @property int $association_id The ID for the association
 * @property ?string $association_name The name of the association
 * @property bool $rss_ind RSS indicator
 * @property ?string $rss_feed RSS feed URL
 *
 * @api
 */
class EventsCategory extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "category_id" => "int",
        "category_name" => "string",
        "association_id" => "int",
        "association_name" => "string",
        "rss_ind" => "bool",
        "rss_feed" => "string",
    ];
}
