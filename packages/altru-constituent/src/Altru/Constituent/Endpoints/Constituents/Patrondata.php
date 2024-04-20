<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentListCollection;

/**
 * @api
 */
class Patrondata extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/{constituent_id}/patrondata";

    /**
     * Returns all refunds for a patron.
     *
     * @param array{constituent_id: string, show_date_range: "All"|"Last 30
     *   days"|"Last 90 days"|"Last 12 months", limit: int} $params An
     *   associative array
     *     - constituent_id: The constituent id.
     *     - show_date_range: show
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByConstituentId(array $params): ConstituentListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['show_date_range']), new ArgumentException("Parameter `show_date_range` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentListCollection($this->send("get", ["{constituent_id}" => $params['constituent_id']], ["show_date_range" => $params['show_date_range'],
            "limit" => $params['limit']]));
    }
}
