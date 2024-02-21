<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
class EventsCategory extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "category_id",
        "category_name",
        "association_id",
        "association_name",
        "rss_ind",
        "rss_feed",
    ];
}
