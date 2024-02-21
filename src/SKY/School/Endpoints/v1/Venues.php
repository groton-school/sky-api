<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Venues
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings $buildings
 *
 * @api
 */
class Venues extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "buildings" => "\Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings $_buildings
     */
    protected ?Buildings $_buildings = null;
}
