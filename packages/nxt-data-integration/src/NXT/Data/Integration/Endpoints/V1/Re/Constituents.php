<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents\Customsearch;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents\Fund;

/**
 * Routing class for the subnamespace `Constituents`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents\Customsearch
 *   $customsearch
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents\Fund
 *   $fund
 *
 * @api
 */
class Constituents extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/constituents/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "customsearch" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents\Customsearch",
        "fund" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents\Fund",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents\Customsearch
     *   $_customsearch
     */
    protected ?Customsearch $_customsearch = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents\Fund
     *   $_fund
     */
    protected ?Fund $_fund = null;

    /**
     * Deletes a constituent. The constituent cannot have any gifts or
     * actions.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The constituent system ID.
     *
     * @return mixed Returned when the operation successfully deletes the
     *   constituent.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", ["{id}" => $params['id']], []);
    }
}
