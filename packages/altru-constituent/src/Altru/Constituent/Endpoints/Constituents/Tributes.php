<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\TributeListCollection;

/**
 * @api
 */
class Tributes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}/tributes";

    /**
     * Returns a list of tributes where the current constituent is the
     * tributee or the acknowledgee.
     *
     * @param array{constituent_id: string, limit: int} $params An associative
     *   array
     *     - constituent_id: The constituent id.
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\TributeListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByConstituentId(array $params): TributeListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new TributeListCollection($this->send("get", ["{constituent_id}" => $params['constituent_id']], ["limit" => $params['limit']]));
    }
}
