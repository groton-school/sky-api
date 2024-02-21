<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Content\News\Categories;
use Blackbaud\SKY\School\Endpoints\V1\Content\News\Items;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Content\News
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content\News\Categories
 *   $categories
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content\News\Items $items
 *
 * @api
 */
class News extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "categories" => "\Blackbaud\SKY\School\Endpoints\V1\Content\News\Categories",
        "items" => "\Blackbaud\SKY\School\Endpoints\V1\Content\News\Items",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Content\News\Categories
     *   $_categories
     */
    protected ?Categories $_categories = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Content\News\Items $_items
     */
    protected ?Items $_items = null;
}
