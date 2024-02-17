<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * NewsCategory Model
 *
 * @property int $category_id
 * @property string $category_name
 * @property int $association_id
 * @property string $association_name
 * @property bool $rss_ind
 * @property string $rss_feed
 *
 * @api
 */
class NewsCategory extends BaseObject
{
    /**
     * @var string[] fields
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
