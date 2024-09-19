<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings;

/**
 * Routing class for the subnamespace `Venues`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings $buildings
 *
 * @api
 */
class Venues extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "buildings" => "\Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings $_buildings
     */
    protected ?Buildings $_buildings = null;
}
