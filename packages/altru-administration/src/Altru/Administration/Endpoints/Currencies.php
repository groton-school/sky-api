<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\Currencyconfiguration;

/**
 * Routing class for the subnamespace `Currencies`
 *
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\Currencyconfiguration
 *   $currencyconfiguration
 *
 * @api
 */
class Currencies extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "currencyconfiguration" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\Currencyconfiguration",
    ];

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\Currencyconfiguration
     *   $_currencyconfiguration
     */
    protected Currencyconfiguration $_currencyconfiguration = null;
}
