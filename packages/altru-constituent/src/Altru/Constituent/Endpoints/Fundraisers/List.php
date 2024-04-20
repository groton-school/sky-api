<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiserListCollection;

/**
 * @api
 */
class List_ extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/fundraisers/List";

    /**
     * Returns a list of all fundraisers
     *
     * @param array{org_positions_selection_id: string, include_stewardship:
     *   bool, show_inactive: bool, only_owned_interactions: bool, limit: int}
     *   $params An associative array
     *     - org_positions_selection_id: show for
     *     - include_stewardship: include stewardship steps
     *     - show_inactive: show inactive
     *     - only_owned_interactions: only show steps owned by this fundraiser
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiserListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): ConstituentFundraiserListCollection
    {
        assert(isset($params['org_positions_selection_id']), new ArgumentException("Parameter `org_positions_selection_id` is required"));
        assert(isset($params['include_stewardship']), new ArgumentException("Parameter `include_stewardship` is required"));
        assert(isset($params['show_inactive']), new ArgumentException("Parameter `show_inactive` is required"));
        assert(isset($params['only_owned_interactions']), new ArgumentException("Parameter `only_owned_interactions` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentFundraiserListCollection($this->send("get", [], ["org_positions_selection_id" => $params['org_positions_selection_id'],
            "include_stewardship" => $params['include_stewardship'],
            "show_inactive" => $params['show_inactive'],
            "only_owned_interactions" => $params['only_owned_interactions'],
            "limit" => $params['limit']]));
    }
}
