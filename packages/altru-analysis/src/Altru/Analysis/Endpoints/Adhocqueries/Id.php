<?php

namespace Blackbaud\SKY\Altru\Analysis\Endpoints\Adhocqueries;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Analysis\Components\GetAdHocQueryId;

/**
 * @api
 */
class Id extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-anamg/adhocqueries/id/{query_name}";

    /**
     * Gets the query ID for the given query name.
     *
     * @param array{query_name: string} $params An associative array
     *     - query_name: The name of the query.
     *
     * @return \Blackbaud\SKY\Altru\Analysis\Components\GetAdHocQueryId
     *   Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByQueryName(array $params): GetAdHocQueryId
    {
        assert(isset($params['query_name']), new ArgumentException("Parameter `query_name` is required"));

        return new GetAdHocQueryId($this->send("get", array_filter($params, fn($key) => in_array($key, ['query_name']), ARRAY_FILTER_USE_KEY), []));
    }
}
