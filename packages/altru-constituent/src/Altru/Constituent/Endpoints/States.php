<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\StateListCollection;

/**
 * @api
 */
class States extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/states/{country_id}";

    /**
     * Lists all states for a given country.
     *
     * @param array{country_id: string, include_inactive: bool, limit: int}
     *   $params An associative array
     *     - country_id: The country id.
     *     - include_inactive: include inactive
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\StateListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByCountryId(array $params): StateListCollection
    {
        assert(isset($params['country_id']), new ArgumentException("Parameter `country_id` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new StateListCollection($this->send("get", ["country_id" => $params['country_id']], ["include_inactive" => $params['include_inactive'],
            "limit" => $params['limit']]));
    }
}
