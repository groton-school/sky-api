<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituents;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentDuplicateMatchListCollection;

/**
 * @api
 */
class Constituentduplicatematch extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituents/constituentduplicatematch";

    /**
     * List of constituents matching web forms automatch threshold.
     *
     * @param array{max_results: int, email_address: string, first_name:
     *   string, key_name: string, address_block: string, country: string,
     *   post_code: string, phone_number: string, title: string, limit: int}
     *   $params An associative array
     *     - max_results: max number of rows
     *     - email_address: email address
     *     - first_name: first name
     *     - key_name: last name
     *     - address_block: address block
     *     - country: country
     *   SimpleDataListID=c9649672-353d-42e8-8c25-4d34bbabfbba.
     *     - post_code: address zip code
     *     - phone_number: phone number
     *     - title: title This codetable can be queried at
     *   https://api.sky.blackbaud.com/alt-adnmg/codetables/TITLECODE/entries
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentDuplicateMatchListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): ConstituentDuplicateMatchListCollection
    {
        assert(isset($params['max_results']), new ArgumentException("Parameter `max_results` is required"));
        assert(isset($params['email_address']), new ArgumentException("Parameter `email_address` is required"));
        assert(isset($params['first_name']), new ArgumentException("Parameter `first_name` is required"));
        assert(isset($params['key_name']), new ArgumentException("Parameter `key_name` is required"));
        assert(isset($params['address_block']), new ArgumentException("Parameter `address_block` is required"));
        assert(isset($params['country']), new ArgumentException("Parameter `country` is required"));
        assert(isset($params['post_code']), new ArgumentException("Parameter `post_code` is required"));
        assert(isset($params['phone_number']), new ArgumentException("Parameter `phone_number` is required"));
        assert(isset($params['title']), new ArgumentException("Parameter `title` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new ConstituentDuplicateMatchListCollection($this->send("get", [], ["max_results" => $params['max_results'],
            "email_address" => $params['email_address'],
            "first_name" => $params['first_name'],
            "key_name" => $params['key_name'],
            "address_block" => $params['address_block'],
            "country" => $params['country'],
            "post_code" => $params['post_code'],
            "phone_number" => $params['phone_number'],
            "title" => $params['title'],
            "limit" => $params['limit']]));
    }
}
