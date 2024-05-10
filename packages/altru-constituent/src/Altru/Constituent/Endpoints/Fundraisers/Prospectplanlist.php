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
     * A operation of prospects and their plans for a given fundraiser.
     *
     * @param array{constituent_id: string, site_filter_mode: "All sites"|"My
     *   site"|"My site's branch"|"Selected sites", sites_selected: string,
     *   include_historical_plans: bool, limit: int, session_key: string,
     *   infinity_session: string, more_rows_range_key: string, start_row_index:
     *   int} $params An associative array
     *     - constituent_id: The constituent id.
     *     - site_filter_mode: sites
     *     - sites_selected: Format - XML. sites selected
     *     - include_historical_plans: include historical plans
     *     - limit: Limits the number of records to return.
     *     - session_key: A unique key provided by user for paging results.
     *   The same key will be returned in a successful response.
     *     - infinity_session: Values for cookies related to the Infinity load
     *   balancer session.
     *     - more_rows_range_key: Key for accessing cached results on
     *   subsequent calls to this data list.
     *     - start_row_index: Number of rows to skip,get result after these
     *   rows.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiserListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByConstituentId(array $params): ConstituentFundraiserListCollection
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['site_filter_mode']), new ArgumentException("Parameter `site_filter_mode` is required"));
        assert(isset($params['sites_selected']), new ArgumentException("Parameter `sites_selected` is required"));
        assert(isset($params['include_historical_plans']), new ArgumentException("Parameter `include_historical_plans` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['session_key']), new ArgumentException("Parameter `session_key` is required"));
        assert(isset($params['infinity_session']), new ArgumentException("Parameter `infinity_session` is required"));
        assert(isset($params['more_rows_range_key']), new ArgumentException("Parameter `more_rows_range_key` is required"));
        assert(isset($params['start_row_index']), new ArgumentException("Parameter `start_row_index` is required"));

        return new ConstituentFundraiserListCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['constituent_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['site_filter_mode','sites_selected','include_historical_plans','limit','session_key','infinity_session','more_rows_range_key','start_row_index']), ARRAY_FILTER_USE_KEY)));
    }
}
