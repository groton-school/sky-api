<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Fundraisers;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiserListCollection;

/**
 * @api
 */
class Prospectplanlist extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/fundraisers/{constituent_id}/prospectplanlist";

    /**
     * A datalist of prospects and their plans for a given fundraiser.
     *
     * @param array{constituent_id: string, site_filter_mode: "All sites"|"My
     *   site"|"My site's branch"|"Selected sites", sites_selected: string,
     *   include_historical_plans: bool, limit: int} $params An associative
     *   array
     *     - constituent_id: The constituent id.
     *     - site_filter_mode: sites
     *     - sites_selected: Format - XML. sites selected
     *     - include_historical_plans: include historical plans
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiserListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentId(array $params): ConstituentFundraiserListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['site_filter_mode']), new ArgumentException("Parameter `site_filter_mode` is required"));
        assert(isset($params['sites_selected']), new ArgumentException("Parameter `sites_selected` is required"));
        assert(isset($params['include_historical_plans']), new ArgumentException("Parameter `include_historical_plans` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentFundraiserListCollection($this->send("get", ["{constituent_id}" => $params['constituent_id']], ["site_filter_mode" => $params['site_filter_mode'],
        "sites_selected" => $params['sites_selected'],
        "include_historical_plans" => $params['include_historical_plans'],
        "limit" => $params['limit']]));
    }
}
