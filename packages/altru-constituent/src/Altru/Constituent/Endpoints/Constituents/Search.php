<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentSearchCollection;

/**
 * @api
 */
class Search extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/search";

    /**
     * This provides the ability to search for constituents.
     *
     * @param array{constituent_quick_find: string, full_name: string,
     *   key_name: string, first_name: string, lookup_id: string, address_block:
     *   string, city: string, state: string, post_code: string, country:
     *   string, include_inactive: bool, include_deceased: bool,
     *   only_primary_address: bool, exact_match_only: bool, check_nickname:
     *   bool, check_aliases: bool, classof: int, minimum_date: string,
     *   exclude_households: bool, email_address: string, include_individuals:
     *   bool, include_organizations: bool, include_groups: bool,
     *   check_alternate_lookup_ids: bool, fuzzy_search_on_name: bool,
     *   phone_number: string, middle_name: string, suffix: string,
     *   constituency: string, sourcecode: string, limit: int} $params An
     *   associative array
     *     - constituent_quick_find: represents a filter for searching for the
     *   constituent either by name or lookup id. character limit: 100.
     *     - full_name: represents a filter on the full constituent name.
     *     - key_name: represents a filter on the last name or organization
     *   name. character limit: 50.
     *     - first_name: represents a filter on the first name of constituent.
     *   character limit: 50.
     *     - lookup_id: represents a filter on the lookup id of constituent.
     *   character limit: 36.
     *     - address_block: represents a filter on the address of constituent.
     *   character limit: 100.
     *     - city: represents a filter on the city of constituent. character
     *   limit: 100.
     *     - state: represents a filter on the state of the constituents'
     *   addresses. SimpleDataListID=7fa91401-596c-4f7c-936d-6e41683121d7.
     *     - post_code: represents a filter on the zip/postal code. character
     *   limit: 20.
     *     - country: represents a filter on the country of the constituent.
     *   SimpleDataListID=c9649672-353d-42e8-8c25-4d34bbabfbba.
     *     - include_inactive: set this parameter to true to include
     *   constituents.
     *     - include_deceased: set this parameter to true to include deceased
     *   constituents in response.
     *     - only_primary_address: set this parameter to true to search
     *   address fields using only the constituent's primary address.
     *     - exact_match_only: set this parameter to true to match all
     *   criteria exactly.
     *     - check_nickname: set this parameter to true to check nickname of
     *   constituent when searching on first names.
     *     - check_aliases: set this parameter to true to check aliases.
     *     - classof: represents a filter on the primary class year of the
     *   constituent.
     *     - minimum_date: Format - date (as full-date in RFC3339). represents
     *   a filter on the minimum date of merged constituent records to be
     *   searched.
     *     - exclude_households: set this parameter to true to exclude
     *   households.
     *     - email_address: represents a filter on the email address of the
     *   constituent. character limit: 100.
     *     - include_individuals: set this parameter to true to include
     *   individuals.
     *     - include_organizations: set this parameter to true to include
     *   organizations.
     *     - include_groups: set this parameter to true to include groups or
     *   households.
     *     - check_alternate_lookup_ids: set this parameter to true to check
     *   alternate lookup ids of the constituent.
     *     - fuzzy_search_on_name: set this parameter to true to include fuzzy
     *   search on name.
     *     - phone_number: represents a filter on the phone number of the
     *   constituent.
     *     - middle_name: represents a filter on the middle name of the
     *   constituent.
     *     - suffix: represents a filter on the suffix code of the constituent
     *   name. This code table can be queried at
     *   https://api.sky.blackbaud.com/alt-adnmg/codetables/SUFFIXCODE/entries
     *     - constituency: represents a filter on the constituency of the
     *   constituent. SimpleDataListID=7821c1ab-3001-485b-aec7-f55749f959e6.
     *     - sourcecode: represents a filter on the constituent appeal source
     *   code of the constituent.
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentSearchCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): ConstituentSearchCollection
    {
        assert(isset($params['constituent_quick_find']), new ArgumentException("Parameter `constituent_quick_find` is required"));
        assert(isset($params['full_name']), new ArgumentException("Parameter `full_name` is required"));
        assert(isset($params['key_name']), new ArgumentException("Parameter `key_name` is required"));
        assert(isset($params['first_name']), new ArgumentException("Parameter `first_name` is required"));
        assert(isset($params['lookup_id']), new ArgumentException("Parameter `lookup_id` is required"));
        assert(isset($params['address_block']), new ArgumentException("Parameter `address_block` is required"));
        assert(isset($params['city']), new ArgumentException("Parameter `city` is required"));
        assert(isset($params['state']), new ArgumentException("Parameter `state` is required"));
        assert(isset($params['post_code']), new ArgumentException("Parameter `post_code` is required"));
        assert(isset($params['country']), new ArgumentException("Parameter `country` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['include_deceased']), new ArgumentException("Parameter `include_deceased` is required"));
        assert(isset($params['only_primary_address']), new ArgumentException("Parameter `only_primary_address` is required"));
        assert(isset($params['exact_match_only']), new ArgumentException("Parameter `exact_match_only` is required"));
        assert(isset($params['check_nickname']), new ArgumentException("Parameter `check_nickname` is required"));
        assert(isset($params['check_aliases']), new ArgumentException("Parameter `check_aliases` is required"));
        assert(isset($params['classof']), new ArgumentException("Parameter `classof` is required"));
        assert(isset($params['minimum_date']), new ArgumentException("Parameter `minimum_date` is required"));
        assert(isset($params['exclude_households']), new ArgumentException("Parameter `exclude_households` is required"));
        assert(isset($params['email_address']), new ArgumentException("Parameter `email_address` is required"));
        assert(isset($params['include_individuals']), new ArgumentException("Parameter `include_individuals` is required"));
        assert(isset($params['include_organizations']), new ArgumentException("Parameter `include_organizations` is required"));
        assert(isset($params['include_groups']), new ArgumentException("Parameter `include_groups` is required"));
        assert(isset($params['check_alternate_lookup_ids']), new ArgumentException("Parameter `check_alternate_lookup_ids` is required"));
        assert(isset($params['fuzzy_search_on_name']), new ArgumentException("Parameter `fuzzy_search_on_name` is required"));
        assert(isset($params['phone_number']), new ArgumentException("Parameter `phone_number` is required"));
        assert(isset($params['middle_name']), new ArgumentException("Parameter `middle_name` is required"));
        assert(isset($params['suffix']), new ArgumentException("Parameter `suffix` is required"));
        assert(isset($params['constituency']), new ArgumentException("Parameter `constituency` is required"));
        assert(isset($params['sourcecode']), new ArgumentException("Parameter `sourcecode` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentSearchCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['constituent_quick_find','full_name','key_name','first_name','lookup_id','address_block','city','state','post_code','country','include_inactive','include_deceased','only_primary_address','exact_match_only','check_nickname','check_aliases','classof','minimum_date','exclude_households','email_address','include_individuals','include_organizations','include_groups','check_alternate_lookup_ids','fuzzy_search_on_name','phone_number','middle_name','suffix','constituency','sourcecode','limit']), ARRAY_FILTER_USE_KEY)));
    }
}
