<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentByFundCollection;

/**
 * @api
 */
class Fund extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/constituents/fund/{fundId}";

    /**
     * Gets constituent records that have given a gift to a specific fund.
     *
     * @param array{fundId: string, limit: int, offset: int} $params An
     *   associative array
     *     - fundId: The fund identifier.
     *     - limit: Format - int32. Optional parameter for the maximum number
     *   of records to return.
     *     - offset: Format - int32. Optional query parameter to support
     *   paging.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentByFundCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection and count of constituents that have given to the fund.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByFundId(array $params): ConstituentByFundCollection
    {
        assert(isset($params['fundId']), new ArgumentException("Parameter `fundId` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new ConstituentByFundCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['fundId']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['limit','offset']), ARRAY_FILTER_USE_KEY)));
    }
}
