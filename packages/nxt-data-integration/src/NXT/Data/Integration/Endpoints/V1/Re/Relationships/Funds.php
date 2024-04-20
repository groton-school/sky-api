<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds\Constituent;

/**
 * Routing class for the subnamespace `Funds`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds\Constituent
 *   $constituent
 *
 * @api
 */
class Funds extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "constituent" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds\Constituent",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds\Constituent
     *   $_constituent
     */
    protected ?Constituent $_constituent = null;
}
