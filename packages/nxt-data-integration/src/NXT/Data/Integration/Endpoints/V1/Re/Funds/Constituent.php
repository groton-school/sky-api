<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\FundCollection;

/**
 * @api
 */
class Constituent extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/funds/constituent/{constituentId}";

    /**
     * Returns a list of funds associated with a given constituent.
     *
     * @param array{constituentId: string, limit: int, offset: int} $params An
     *   associative array
     *     - constituentId: The constituent identifier.
     *     - limit: Format - int32. Optional parameter for the maximum number
     *   of records to return.
     *     - offset: Format - int32. Optional query parameter to support
     *   paging.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\FundCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection and count of funds associated with the given constituent.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByConstituentId(array $params): FundCollection
    {
        assert(isset($params['constituentId']), new ArgumentException("Parameter `constituentId` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new FundCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['constituentId']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['limit','offset']), ARRAY_FILTER_USE_KEY)));
    }
}
