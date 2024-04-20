<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituent;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentMembershipsListCollection;

/**
 * @api
 */
class Constituentmemberships extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituent/{constituent_id}/constituentmemberships";

    /**
     * Displays a list of memberships for a given constituent.
     *
     * @param array{constituent_id: string, limit: int} $params An associative
     *   array
     *     - constituent_id: The constituent id.
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentMembershipsListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByConstituentId(array $params): ConstituentMembershipsListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentMembershipsListCollection($this->send("get", ["{constituent_id}" => $params['constituent_id']], ["limit" => $params['limit']]));
    }
}
