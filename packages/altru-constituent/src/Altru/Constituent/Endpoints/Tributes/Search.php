<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Tributes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\TributeSearchCollection;

/**
 * @api
 */
class Search extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/tributes/search";

    /**
     * Search for tributes.
     *
     * @param array{tribute_text: string, tributee_key_name: string,
     *   tributee_first_name: string, tributee_lookup_id: string, tribute_type:
     *   string, acknowledgee_key_name: string, acknowledgee_first_name: string,
     *   date_filter: "This week"|"This month"|"This quarter"|"This year",
     *   designation: string, site_id: string, include_inactive: bool,
     *   exact__matchonly: bool, limit: int} $params An associative array
     *     - tribute_text: tribute text
     *     - tributee_key_name: tributee last/org name
     *     - tributee_first_name: tributee first name
     *     - tributee_lookup_id: tributee lookup id
     *     - tribute_type: tribute type This codetable can be queried at
     *   https://api.sky.blackbaud.com/alt-adnmg/codetables/TRIBUTETYPECODE/entries
     *     - acknowledgee_key_name: acknowledgee last/org name
     *     - acknowledgee_first_name: acknowledgee first name
     *     - date_filter: date created
     *     - designation: default designation
     *     - site_id: site
     *     - include_inactive: include inactive tributes
     *     - exact__matchonly: match all criteria exactly
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\TributeSearchCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterByBy(array $params): TributeSearchCollection
    {
        assert(isset($params['tribute_text']), new ArgumentException("Parameter `tribute_text` is required"));
        assert(isset($params['tributee_key_name']), new ArgumentException("Parameter `tributee_key_name` is required"));
        assert(isset($params['tributee_first_name']), new ArgumentException("Parameter `tributee_first_name` is required"));
        assert(isset($params['tributee_lookup_id']), new ArgumentException("Parameter `tributee_lookup_id` is required"));
        assert(isset($params['tribute_type']), new ArgumentException("Parameter `tribute_type` is required"));
        assert(isset($params['acknowledgee_key_name']), new ArgumentException("Parameter `acknowledgee_key_name` is required"));
        assert(isset($params['acknowledgee_first_name']), new ArgumentException("Parameter `acknowledgee_first_name` is required"));
        assert(isset($params['date_filter']), new ArgumentException("Parameter `date_filter` is required"));
        assert(isset($params['designation']), new ArgumentException("Parameter `designation` is required"));
        assert(isset($params['site_id']), new ArgumentException("Parameter `site_id` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['exact__matchonly']), new ArgumentException("Parameter `exact__matchonly` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new TributeSearchCollection($this->send("get", [], ["tribute_text" => $params['tribute_text'],
        "tributee_key_name" => $params['tributee_key_name'],
        "tributee_first_name" => $params['tributee_first_name'],
        "tributee_lookup_id" => $params['tributee_lookup_id'],
        "tribute_type" => $params['tribute_type'],
        "acknowledgee_key_name" => $params['acknowledgee_key_name'],
        "acknowledgee_first_name" => $params['acknowledgee_first_name'],
        "date_filter" => $params['date_filter'],
        "designation" => $params['designation'],
        "site_id" => $params['site_id'],
        "include_inactive" => $params['include_inactive'],
        "exact__matchonly" => $params['exact__matchonly'],
        "limit" => $params['limit']]));
    }
}
