<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes\Search;

/**
 * Routing class for the subnamespace `Tributes`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes\Search
 *   $search
 *
 * @api
 */
class Tributes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/tributes/{revenue_tribute_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "search" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes\Search",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes\Search
     *   $_search
     */
    protected ?Search $_search = null;

    /**
     * Deletes a revenue tribute record from the system.
     *
     * @param array{revenue_tribute_id: string} $params An associative array
     *     - revenue_tribute_id: The revenue tribute id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByRevenueTributeId(array $params): mixed
    {
        assert(isset($params['revenue_tribute_id']), new ArgumentException("Parameter `revenue_tribute_id` is required"));

        return $this->send("delete", ["revenue_tribute_id" => $params['revenue_tribute_id']], []);
    }
}
