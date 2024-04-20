<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Taxdeclarations;

/**
 * Routing class for the subnamespace `Giftaid`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Taxdeclarations
 *   $taxdeclarations
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents
 *   $constituents Routing class for the subnamespace `Constituents`
 *
 * @api
 */
class Giftaid extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "taxdeclarations" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Taxdeclarations",
        "constituents" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Taxdeclarations
     *   $_taxdeclarations
     */
    protected ?Taxdeclarations $_taxdeclarations = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Giftaid\Constituents
     *   $_constituents Routing class for the subnamespace `Constituents`
     */
    protected ?Constituents $_constituents = null;
}
