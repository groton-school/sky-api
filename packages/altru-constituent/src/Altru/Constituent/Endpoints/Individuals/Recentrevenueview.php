<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\IndividualRecentRevenueView;

/**
 * @api
 */
class Recentrevenueview extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/individuals/{constituent_id}/recentrevenueview";

    /**
     * Displays recent revenue information for an individual.
     *
     * @param array{constituent_id: string} $params An associative array
     *     - constituent_id: The constituent id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\IndividualRecentRevenueView
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentId(array $params): IndividualRecentRevenueView
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));

        return new IndividualRecentRevenueView($this->send("get", ["constituent_id" => $params['constituent_id']], []));
    }
}
