<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Relationships\Funds;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\RelationshipCollection;

/**
 * @api
 */
class Constituent extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/relationships/funds/constituent/{constituentId}";

    /**
     * Returns fund relationships for the given constituent identifier.
     *
     * @param array{constituentId: int, limit: int, offset: int} $params An
     *   associative array
     *     - constituentId: Format - int32. The constituent identifier.
     *     - limit: Format - int32. Optional parameter for the maximum number
     *   of records to return.
     *     - offset: Format - int32. Optional query parameter to support
     *   paging.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\RelationshipCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of fund relationships.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentId(array $params): RelationshipCollection
    {
        assert(isset($params['constituentId']), new ArgumentException("Parameter `constituentId` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new RelationshipCollection($this->send("get", ["{constituentId}" => $params['constituentId']], ["limit" => $params['limit'],
        "offset" => $params['offset']]));
    }
}
