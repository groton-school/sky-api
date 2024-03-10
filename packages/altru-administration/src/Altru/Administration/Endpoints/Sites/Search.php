<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Sites;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\SiteSearchCollection;

/**
 * @api
 */
class Search extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/sites/search";

    /**
     * Search screen for finding a site.
     *
     * @param array{id: string, site_id: string, name: string, short_name:
     *   string, acronym: string, sitetype: string, limit: int} $params An
     *   associative array
     *     - id: id
     *     - site_id: site id
     *     - name: name
     *     - short_name: short name
     *     - acronym: acronym
     *     - sitetype: site type This codetable can be queried at
     *   https://api.sky.blackbaud.com/alt-adnmg/codetables/SITETYPECODE/entries

     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\SiteSearchCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterByBy(array $params): SiteSearchCollection
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['site_id']), new ArgumentException("Parameter `site_id` is required"));
        assert(isset($params['name']), new ArgumentException("Parameter `name` is required"));
        assert(isset($params['short_name']), new ArgumentException("Parameter `short_name` is required"));
        assert(isset($params['acronym']), new ArgumentException("Parameter `acronym` is required"));
        assert(isset($params['sitetype']), new ArgumentException("Parameter `sitetype` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new SiteSearchCollection($this->send("get", [], ["id" => $params['id'],
        "site_id" => $params['site_id'],
        "name" => $params['name'],
        "short_name" => $params['short_name'],
        "acronym" => $params['acronym'],
        "sitetype" => $params['sitetype'],
        "limit" => $params['limit']]));
    }
}
