<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Administration\Endpoints\Sites\Search;

/**
 * Routing class for the subnamespace `Sites`
 *
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Sites\Search
 *   $search
 *
 * @api
 */
class Sites extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "search" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Sites\Search",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Sites\Search
     *   $_search
     */
    protected ?Search $_search = null;
}
