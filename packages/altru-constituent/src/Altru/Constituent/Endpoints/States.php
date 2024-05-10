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
     * @param array{country_id: string, include_inactive: bool, limit: int,
     *   session_key: string, infinity_session: string, more_rows_range_key:
     *   string, start_row_index: int} $params An associative array
     *     - country_id: The country id.
     *     - include_inactive: include inactive
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
        assert(isset($params['session_key']), new ArgumentException("Parameter `session_key` is required"));
        assert(isset($params['infinity_session']), new ArgumentException("Parameter `infinity_session` is required"));
        assert(isset($params['more_rows_range_key']), new ArgumentException("Parameter `more_rows_range_key` is required"));
        assert(isset($params['start_row_index']), new ArgumentException("Parameter `start_row_index` is required"));

        return new StateListCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['country_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['include_inactive','limit','session_key','infinity_session','more_rows_range_key','start_row_index']), ARRAY_FILTER_USE_KEY)));
    }
}
