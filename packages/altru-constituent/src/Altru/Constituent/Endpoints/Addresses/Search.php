<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Addresses;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentAddressSearchCollection;

/**
 * @api
 */
class Search extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/addresses/search";

    /**
     * This provides the ability to search for a constituent's addresses.
     *
     * @param array{key_name: string, first_name: string, lookup_id: string,
     *   address_block: string, city: string, state: string, post_code: string,
     *   country: string, only_primary_address: bool, exact_match_only: bool,
     *   limit: int} $params An associative array
     *     - key_name: last/org name
     *     - first_name: first name
     *     - lookup_id: lookup id
     *     - address_block: address
     *     - city: city
     *     - state: state
     *   SimpleDataListID=7fa91401-596c-4f7c-936d-6e41683121d7.
     *     - post_code: post code
     *     - country: country
     *   SimpleDataListID=c9649672-353d-42e8-8c25-4d34bbabfbba.
     *     - only_primary_address: only search primary addresses
     *     - exact_match_only: match all criteria exactly
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAddressSearchCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): ConstituentAddressSearchCollection
    {
        assert(isset($params['key_name']), new ArgumentException("Parameter `key_name` is required"));
        assert(isset($params['first_name']), new ArgumentException("Parameter `first_name` is required"));
        assert(isset($params['lookup_id']), new ArgumentException("Parameter `lookup_id` is required"));
        assert(isset($params['address_block']), new ArgumentException("Parameter `address_block` is required"));
        assert(isset($params['city']), new ArgumentException("Parameter `city` is required"));
        assert(isset($params['state']), new ArgumentException("Parameter `state` is required"));
        assert(isset($params['post_code']), new ArgumentException("Parameter `post_code` is required"));
        assert(isset($params['country']), new ArgumentException("Parameter `country` is required"));
        assert(isset($params['only_primary_address']), new ArgumentException("Parameter `only_primary_address` is required"));
        assert(isset($params['exact_match_only']), new ArgumentException("Parameter `exact_match_only` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentAddressSearchCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['key_name','first_name','lookup_id','address_block','city','state','post_code','country','only_primary_address','exact_match_only','limit']), ARRAY_FILTER_USE_KEY)));
    }
}
