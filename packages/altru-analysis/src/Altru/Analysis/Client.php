<?php

namespace Blackbaud\SKY\Altru\Analysis;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries;

/**
 * Routing class for Analysis
 *
 * @property \Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries
 *   $adhocqueries Routing class for the subnamespace `Adhocqueries`
 *
 * @api
 */
class Client extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "adhocqueries" => "\Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries",
    ];

    /**
     * @var \Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries
     *   $_adhocqueries Routing class for the subnamespace `Adhocqueries`
     */
    protected Adhocqueries $_adhocqueries = null;
}
