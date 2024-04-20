<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentInactivityReasonCodesListCollection;

/**
 * @api
 */
class Constituentinactivityreasoncodes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentinactivityreasoncodes";

    /**
     * Returns a list of reason codes.
     *
     * @param array{include_inactive: bool, limit: int} $params An associative
     *   array
     *     - include_inactive: include inactive
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentInactivityReasonCodesListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): ConstituentInactivityReasonCodesListCollection
    {
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentInactivityReasonCodesListCollection($this->send("get", [], ["include_inactive" => $params['include_inactive'],
            "limit" => $params['limit']]));
    }
}
