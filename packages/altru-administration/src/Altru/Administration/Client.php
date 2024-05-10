<?php

namespace Blackbaud\SKY\Altru\Administration;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\Altru\Administration\Endpoints\Batches;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetables;
use Blackbaud\SKY\Altru\Administration\Endpoints\Codetablesortmethods;
use Blackbaud\SKY\Altru\Administration\Endpoints\Currencies;
use Blackbaud\SKY\Altru\Administration\Endpoints\Information;
use Blackbaud\SKY\Altru\Administration\Endpoints\Notifications;
use Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists;
use Blackbaud\SKY\Altru\Administration\Endpoints\Sites;

/**
 * Routing class for Administration
 *
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists
 *   $simplelists Routing class for the subnamespace `Simplelists`
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Batches $batches
 *   Routing class for the subnamespace `Batches`
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Notifications
 *   $notifications
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetablesortmethods
 *   $codetablesortmethods
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Information
 *   $information
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Codetables
 *   $codetables Routing class for the subnamespace `Codetables`
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Currencies
 *   $currencies Routing class for the subnamespace `Currencies`
 * @property \Blackbaud\SKY\Altru\Administration\Endpoints\Sites $sites
 *   Routing class for the subnamespace `Sites`
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
        "batches" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Batches",
        "notifications" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Notifications",
        "codetablesortmethods" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetablesortmethods",
        "information" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Information",
        "codetables" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables",
        "currencies" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Currencies",
        "sites" => "\Blackbaud\SKY\Altru\Administration\Endpoints\Sites",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Simplelists
     *   $_simplelists Routing class for the subnamespace `Simplelists`
     */
    protected ?Simplelists $_simplelists = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Batches $_batches
     *   Routing class for the subnamespace `Batches`
     */
    protected ?Batches $_batches = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Notifications
     *   $_notifications
     */
    protected ?Notifications $_notifications = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Codetablesortmethods
     *   $_codetablesortmethods
     */
    protected ?Codetablesortmethods $_codetablesortmethods = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Information
     *   $_information
     */
    protected ?Information $_information = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Codetables
     *   $_codetables Routing class for the subnamespace `Codetables`
     */
    protected ?Codetables $_codetables = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Currencies
     *   $_currencies Routing class for the subnamespace `Currencies`
     */
    protected ?Currencies $_currencies = null;

    /**
     * @var ?\Blackbaud\SKY\Altru\Administration\Endpoints\Sites $_sites
     *   Routing class for the subnamespace `Sites`
     */
    protected ?Sites $_sites = null;
}
