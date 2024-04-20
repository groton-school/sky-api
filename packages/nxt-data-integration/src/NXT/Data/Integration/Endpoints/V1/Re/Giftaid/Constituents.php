<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents\Taxdeclarations;

/**
 * Routing class for the subnamespace `Constituents`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents\Taxdeclarations
 *   $taxdeclarations
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
        "taxdeclarations" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents\Taxdeclarations",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents\Taxdeclarations
     *   $_taxdeclarations
     */
    protected ?Taxdeclarations $_taxdeclarations = null;
}
