<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Content;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories;

/**
 * Routing class for the subnamespace `Events`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Content\Events\Categories
 *   $categories
 *
 * @api
 */
class Events extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
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
