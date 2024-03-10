<?php

namespace Blackbaud\SKY\School;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1;

/**
 * Routing class for School
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1 $v1 Routing class for the
 *   subnamespace `V1`
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
        "v1" => "\Blackbaud\SKY\School\Endpoints\V1",
    ];

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1 $_v1 Routing class for the
     *   subnamespace `V1`
     */
    protected V1 $_v1 = null;
}
