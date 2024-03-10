<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentMergeListCollection;

/**
 * @api
 */
class Constituentmergeconfiguration extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentmergeconfiguration";

    /**
     * List of available merge configurations that can be used with the
     * constituent merge process
     *
     * @param array{limit: int} $params An associative array
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentMergeListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterByBy(array $params): ConstituentMergeListCollection
    {
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentMergeListCollection($this->send("get", [], ["limit" => $params['limit']]));
    }
}
