<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

/**
 * Routing class for the subnamespace `V1`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re $re Routing
 *   class for the subnamespace `Re`
 *
 * @api
 */
class V1 extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "re" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re $_re Routing
     *   class for the subnamespace `Re`
     */
    protected ?Re $_re = null;
}
