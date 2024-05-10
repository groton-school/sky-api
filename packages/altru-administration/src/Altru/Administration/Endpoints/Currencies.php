<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\Currencyconfiguration;
use Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\List_;

/**
 * Routing class for the subnamespace `Currencies`
 *
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\Currencyconfiguration
 *   $currencyconfiguration
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\List_
 *   $list_
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
        "list_" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\List_",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\Currencyconfiguration
     *   $_currencyconfiguration
     */
    protected ?Currencyconfiguration $_currencyconfiguration = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Currencies\List_
     *   $_list_
     */
    protected ?List_ $_list_ = null;
}
