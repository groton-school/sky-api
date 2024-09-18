<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Communitygroups\Rosters;

/**
 * Routing class for the subnamespace `Communitygroups`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Communitygroups\Rosters
 *   $rosters
 *
 * @api
 */
class Communitygroups extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "rosters" => "\Blackbaud\SKY\School\Endpoints\V1\Communitygroups\Rosters",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Communitygroups\Rosters
     *   $_rosters
     */
    protected ?Rosters $_rosters = null;
}
