<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent\Constituentmemberships;

/**
 * Routing class for the subnamespace `Constituent`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent\Constituentmemberships
 *   $constituentmemberships
 *
 * @api
 */
class Constituent extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "constituentmemberships" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent\Constituentmemberships",
    ];

    /**
     * @var \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent\Constituentmemberships
     *   $_constituentmemberships
     */
    protected Constituentmemberships $_constituentmemberships = null;
}
