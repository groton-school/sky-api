<?php

namespace Blackbaud\SKY\School;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1 $v1 Routing class for the
 *   namespace Blackbaud\SKY\School\Endpoints\V1
 *
 * @api
 */
class Client extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "v1" => "\Blackbaud\SKY\School\Endpoints\V1",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1 $_v1 Routing class for the
     *   namespace Blackbaud\SKY\School\Endpoints\V1
     */
    protected ?V1 $_v1 = null;
}
