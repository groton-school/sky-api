<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents\Fund;

/**
 * Routing class for the subnamespace `Constituents`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents\Fund
 *   $fund
 *
 * @api
 */
class Constituents extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "fund" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents\Fund",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents\Fund
     *   $_fund
     */
    protected ?Fund $_fund = null;
}
