<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\RelationshipCollection;

/**
 * @api
 */
class Fund extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/relationships/constituents/fund/{fundId}";

    /**
     * Returns constituent relationships for the given fund identifier.
     *
     * @param array{fundId: int, limit: int, offset: int} $params An
     *   associative array
     *     - fundId: Format - int32. The fund identifier.
     *     - limit: Format - int32. Optional parameter for the maximum number
     *   of records to return.
     *     - offset: Format - int32. Optional query parameter to support
     *   paging.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\RelationshipCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of constituent relationships.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByFundId(array $params): RelationshipCollection
    {
        assert(isset($params['fundId']), new ArgumentException("Parameter `fundId` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new RelationshipCollection($this->send("get", ["{fundId}" => $params['fundId']], ["limit" => $params['limit'],
        "offset" => $params['offset']]));
    }
}
