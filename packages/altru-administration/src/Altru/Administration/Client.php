<?php

namespace Blackbaud\SKY\Altru\Administration;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetables;
use Blackbaud\SKY\Altru\Administration\Endpoints\Currencies;
use Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists;
use Blackbaud\SKY\Altru\Administration\Endpoints\Sites;

/**
 * Routing class for Administration
 *
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists
 *   $simplelists Routing class for the subnamespace `Simplelists`
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables
 *   $codetables Routing class for the subnamespace `Codetables`
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Sites $sites
 *   Routing class for the subnamespace `Sites`
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Currencies
 *   $currencies Routing class for the subnamespace `Currencies`
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
        "simplelists" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists",
        "codetables" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables",
        "sites" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Sites",
        "currencies" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Currencies",
    ];

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists
     *   $_simplelists Routing class for the subnamespace `Simplelists`
     */
    protected Simplelists $_simplelists = null;

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables
     *   $_codetables Routing class for the subnamespace `Codetables`
     */
    protected Codetables $_codetables = null;

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Sites $_sites
     *   Routing class for the subnamespace `Sites`
     */
    protected Sites $_sites = null;

    /**
     * @var \Blackbaud\SKY\Altru\Administration\Endpoints\Currencies
     *   $_currencies Routing class for the subnamespace `Currencies`
     */
    protected Currencies $_currencies = null;
}
