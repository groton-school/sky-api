<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Content\Events
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories
 *   $categories
 *
 * @api
 */
class Events extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "categories" => "\Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories
     *   $_categories
     */
    protected ?Categories $_categories = null;
}
