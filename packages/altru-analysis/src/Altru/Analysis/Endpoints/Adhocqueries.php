<?php

namespace Blackbaud\SKY\Altru\Analysis\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Analysis\Components\ApiCollection\AdHocQueryRead;
use Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries\Id;

/**
 * Routing class for the subnamespace `Adhocqueries`
 *
 * @property \Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries\Id $id
 *
 * @api
 */
class Adhocqueries extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-anamg/adhocqueries/{query_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "id" => "\Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries\Id",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries\Id $_id
     */
    protected ?Id $_id = null;

    /**
     * Gets the results for the given query ID.
     *
     * @param array{query_id: string, limit: int} $params An associative array
     *     - query_id: The ID of the query.
     *     - limit: The maximum number of rows returned.
     *
     * @return \Blackbaud\SKY\Altru\Analysis\Components\ApiCollection\AdHocQueryRead
     *   Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByQueryId(array $params): AdHocQueryRead
    {
        assert(isset($params['query_id']), new ArgumentException("Parameter `query_id` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new AdHocQueryRead($this->send("get", array_filter($params, fn($key) => in_array($key, ['query_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['limit']), ARRAY_FILTER_USE_KEY)));
    }
}
