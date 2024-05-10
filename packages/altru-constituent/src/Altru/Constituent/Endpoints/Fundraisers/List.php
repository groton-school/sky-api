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
     *   bool, show_inactive: bool, only_owned_interactions: bool, limit: int,
     *   session_key: string, infinity_session: string, more_rows_range_key:
     *   string, start_row_index: int} $params An associative array
     *     - org_positions_selection_id: show for
     *     - include_stewardship: include stewardship steps
     *     - show_inactive: show inactive
     *     - only_owned_interactions: only show steps owned by this fundraiser
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
    public function list_(array $params): ConstituentFundraiserListCollection
    {
        assert(isset($params['org_positions_selection_id']), new ArgumentException("Parameter `org_positions_selection_id` is required"));
        assert(isset($params['include_stewardship']), new ArgumentException("Parameter `include_stewardship` is required"));
        assert(isset($params['show_inactive']), new ArgumentException("Parameter `show_inactive` is required"));
        assert(isset($params['only_owned_interactions']), new ArgumentException("Parameter `only_owned_interactions` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['session_key']), new ArgumentException("Parameter `session_key` is required"));
        assert(isset($params['infinity_session']), new ArgumentException("Parameter `infinity_session` is required"));
        assert(isset($params['more_rows_range_key']), new ArgumentException("Parameter `more_rows_range_key` is required"));
        assert(isset($params['start_row_index']), new ArgumentException("Parameter `start_row_index` is required"));

        return new ConstituentFundraiserListCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['org_positions_selection_id','include_stewardship','show_inactive','only_owned_interactions','limit','session_key','infinity_session','more_rows_range_key','start_row_index']), ARRAY_FILTER_USE_KEY)));
    }
}
