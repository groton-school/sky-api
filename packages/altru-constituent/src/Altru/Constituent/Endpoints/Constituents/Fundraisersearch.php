<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiserSearchCollection;

/**
 * @api
 */
class Fundraisersearch extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/fundraisersearch";

    /**
     * Search for Fundraisers.
     *
     * @param array{constituent_type: int, full_name: string, key_name:
     *   string, first_name: string, lookup_id: string, address_block: string,
     *   city: string, state: string, post_code: string, country: string,
     *   include_inactive: bool, include_deceased: bool, only_primary_address:
     *   bool, exact_match_only: bool, only_prospects: bool, only_fundraisers:
     *   bool, only_staff: bool, only_volunteers: bool, ssn: string,
     *   check_nick_name: bool, check_aliases: bool, check_merged_constituents:
     *   bool, minimum_date: string, include_individuals: bool,
     *   include_organizations: bool, include_groups: bool,
     *   check_alternate_lookup_ids: bool, fuzzy_search_on_name: bool,
     *   site_filter_mode: "All sites"|"My site"|"My site's branch"|"Selected
     *   sites", sites_selected: string, limit: int} $params An associative
     *   array
     *     - constituent_type: constituent type
     *     - full_name: full name
     *     - key_name: last name
     *     - first_name: first name
     *     - lookup_id: lookup id
     *     - address_block: address
     *     - city: city
     *     - state: state
     *   SimpleDataListID=7fa91401-596c-4f7c-936d-6e41683121d7.
     *     - post_code: zip/postal code
     *     - country: country
     *   SimpleDataListID=c9649672-353d-42e8-8c25-4d34bbabfbba.
     *     - include_inactive: include inactive
     *     - include_deceased: include deceased
     *     - only_primary_address: only search primary addresses
     *     - exact_match_only: match all criteria exactly
     *     - only_prospects: only prospects
     *     - only_fundraisers: only fundraisers
     *     - only_staff: only staff
     *     - only_volunteers: only volunteers
     *     - ssn: ssn
     *     - check_nick_name: check nickname
     *     - check_aliases: check aliases
     *     - check_merged_constituents: check merged constituents
     *     - minimum_date: Format - date (as full-date in RFC3339). minimum
     *   date
     *     - include_individuals: individuals
     *     - include_organizations: organizations
     *     - include_groups: groups/households
     *     - check_alternate_lookup_ids: check alternate lookup ids
     *     - fuzzy_search_on_name: include fuzzy search on name
     *     - site_filter_mode: sites
     *     - sites_selected: Format - XML. sites selected
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentFundraiserSearchCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterByBy(array $params): ConstituentFundraiserSearchCollection
    {
        assert(isset($params['constituent_type']), new ArgumentException("Parameter `constituent_type` is required"));
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
        assert(isset($params['only_prospects']), new ArgumentException("Parameter `only_prospects` is required"));
        assert(isset($params['only_fundraisers']), new ArgumentException("Parameter `only_fundraisers` is required"));
        assert(isset($params['only_staff']), new ArgumentException("Parameter `only_staff` is required"));
        assert(isset($params['only_volunteers']), new ArgumentException("Parameter `only_volunteers` is required"));
        assert(isset($params['ssn']), new ArgumentException("Parameter `ssn` is required"));
        assert(isset($params['check_nick_name']), new ArgumentException("Parameter `check_nick_name` is required"));
        assert(isset($params['check_aliases']), new ArgumentException("Parameter `check_aliases` is required"));
        assert(isset($params['check_merged_constituents']), new ArgumentException("Parameter `check_merged_constituents` is required"));
        assert(isset($params['minimum_date']), new ArgumentException("Parameter `minimum_date` is required"));
        assert(isset($params['include_individuals']), new ArgumentException("Parameter `include_individuals` is required"));
        assert(isset($params['include_organizations']), new ArgumentException("Parameter `include_organizations` is required"));
        assert(isset($params['include_groups']), new ArgumentException("Parameter `include_groups` is required"));
        assert(isset($params['check_alternate_lookup_ids']), new ArgumentException("Parameter `check_alternate_lookup_ids` is required"));
        assert(isset($params['fuzzy_search_on_name']), new ArgumentException("Parameter `fuzzy_search_on_name` is required"));
        assert(isset($params['site_filter_mode']), new ArgumentException("Parameter `site_filter_mode` is required"));
        assert(isset($params['sites_selected']), new ArgumentException("Parameter `sites_selected` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentFundraiserSearchCollection($this->send("get", [], ["constituent_type" => $params['constituent_type'],
        "full_name" => $params['full_name'],
        "key_name" => $params['key_name'],
        "first_name" => $params['first_name'],
        "lookup_id" => $params['lookup_id'],
        "address_block" => $params['address_block'],
        "city" => $params['city'],
        "state" => $params['state'],
        "post_code" => $params['post_code'],
        "country" => $params['country'],
        "include_inactive" => $params['include_inactive'],
        "include_deceased" => $params['include_deceased'],
        "only_primary_address" => $params['only_primary_address'],
        "exact_match_only" => $params['exact_match_only'],
        "only_prospects" => $params['only_prospects'],
        "only_fundraisers" => $params['only_fundraisers'],
        "only_staff" => $params['only_staff'],
        "only_volunteers" => $params['only_volunteers'],
        "ssn" => $params['ssn'],
        "check_nick_name" => $params['check_nick_name'],
        "check_aliases" => $params['check_aliases'],
        "check_merged_constituents" => $params['check_merged_constituents'],
        "minimum_date" => $params['minimum_date'],
        "include_individuals" => $params['include_individuals'],
        "include_organizations" => $params['include_organizations'],
        "include_groups" => $params['include_groups'],
        "check_alternate_lookup_ids" => $params['check_alternate_lookup_ids'],
        "fuzzy_search_on_name" => $params['fuzzy_search_on_name'],
        "site_filter_mode" => $params['site_filter_mode'],
        "sites_selected" => $params['sites_selected'],
        "limit" => $params['limit']]));
    }
}
