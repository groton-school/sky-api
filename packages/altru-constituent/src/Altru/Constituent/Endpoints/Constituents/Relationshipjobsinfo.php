<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\RelationshipJobInfoListCollection;

/**
 * @api
 */
class Relationshipjobsinfo extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}/relationshipjobsinfo";

    /**
     * This datalist returns a list of all employment history for a
     * constituent.
     *
     * @param array{constituent_id: string, include_inactive: bool, limit:
     *   int} $params An associative array
     *     - constituent_id: The constituent id.
     *     - include_inactive: include inactive
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\RelationshipJobInfoListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByConstituentId(array $params): RelationshipJobInfoListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new RelationshipJobInfoListCollection($this->send("get", ["constituent_id" => $params['constituent_id']], ["include_inactive" => $params['include_inactive'],
            "limit" => $params['limit']]));
    }
}
