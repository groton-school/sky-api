<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Dorms\All;
use Blackbaud\SKY\School\Endpoints\V1\Dorms\Rosters;

/**
 * Routing class for the subnamespace `Dorms`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Dorms\All $all
 * @property \Blackbaud\SKY\School\Endpoints\V1\Dorms\Rosters $rosters
 *
 * @api
 */
class Dorms extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "all" => "\Blackbaud\SKY\School\Endpoints\V1\Dorms\All",
        "rosters" => "\Blackbaud\SKY\School\Endpoints\V1\Dorms\Rosters",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Dorms\All $_all
     */
    protected ?All $_all = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Dorms\Rosters $_rosters
     */
    protected ?Rosters $_rosters = null;
}
