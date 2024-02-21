<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Dorms\All;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Dorms
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Dorms\All $all
 *
 * @api
 */
class Dorms extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "all" => "\Blackbaud\SKY\School\Endpoints\V1\Dorms\All",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Dorms\All $_all
     */
    protected ?All $_all = null;
}
