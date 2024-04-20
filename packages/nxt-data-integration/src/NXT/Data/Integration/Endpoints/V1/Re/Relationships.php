<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds;

/**
 * Routing class for the subnamespace `Relationships`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents
 *   $constituents Routing class for the subnamespace `Constituents`
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds
 *   $funds Routing class for the subnamespace `Funds`
 *
 * @api
 */
class Relationships extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "constituents" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents",
        "funds" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents
     *   $_constituents Routing class for the subnamespace `Constituents`
     */
    protected ?Constituents $_constituents = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds
     *   $_funds Routing class for the subnamespace `Funds`
     */
    protected ?Funds $_funds = null;
}
