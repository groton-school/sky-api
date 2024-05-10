<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentCollection;

/**
 * @api
 */
class Customsearch extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/constituents/customsearch";

    /**
     * Searches for constituent records using the given filter criteria.
     *
     * @param array{limit: int, first_name: string, last_name: string,
     *   alias_type: string, lookup_id: string, address_lines: string, city:
     *   string, state: string, post_code: string, email: string, phone_number:
     *   string, include_maiden_name: bool, include_alias: bool, record_ids:
     *   string[]} $params An associative array
     *     - limit: Format - int32. Represents the number of records to
     *   return. The default is 500. The maximum is 1000.
     *     - first_name: First name.
     *     - last_name: Last name.
     *     - alias_type: Alias type.
     *     - lookup_id: Lookup ID.
     *     - address_lines: Address lines.
     *     - city: Address city.
     *     - state: Address state.
     *     - post_code: Address postal code.
     *     - email: Email address.
     *     - phone_number: Phone number.
     *     - include_maiden_name: Include maiden name when searching for last
     *   name.
     *     - include_alias: Include alias when searching for last name.
     *     - record_ids: Only return results with following record ids.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of filtered constituents.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): ConstituentCollection
    {
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['first_name']), new ArgumentException("Parameter `first_name` is required"));
        assert(isset($params['last_name']), new ArgumentException("Parameter `last_name` is required"));
        assert(isset($params['alias_type']), new ArgumentException("Parameter `alias_type` is required"));
        assert(isset($params['lookup_id']), new ArgumentException("Parameter `lookup_id` is required"));
        assert(isset($params['address_lines']), new ArgumentException("Parameter `address_lines` is required"));
        assert(isset($params['city']), new ArgumentException("Parameter `city` is required"));
        assert(isset($params['state']), new ArgumentException("Parameter `state` is required"));
        assert(isset($params['post_code']), new ArgumentException("Parameter `post_code` is required"));
        assert(isset($params['email']), new ArgumentException("Parameter `email` is required"));
        assert(isset($params['phone_number']), new ArgumentException("Parameter `phone_number` is required"));
        assert(isset($params['include_maiden_name']), new ArgumentException("Parameter `include_maiden_name` is required"));
        assert(isset($params['include_alias']), new ArgumentException("Parameter `include_alias` is required"));
        assert(isset($params['record_ids']), new ArgumentException("Parameter `record_ids` is required"));

        return new ConstituentCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['limit','first_name','last_name','alias_type','lookup_id','address_lines','city','state','post_code','email','phone_number','include_maiden_name','include_alias','record_ids']), ARRAY_FILTER_USE_KEY)));
    }
}
