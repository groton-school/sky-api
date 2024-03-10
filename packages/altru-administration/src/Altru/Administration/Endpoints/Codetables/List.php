<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Codetables;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\CodeTableListCollection;

/**
 * @api
 */
class List_ extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/codetables/{code_table_id}/list";

    /**
     * List of entries defined for a given code table
     *
     * @param array{code_table_id: string, include_inactive: bool, limit: int}
     *   $params An associative array
     *     - code_table_id: The code table id.
     *     - include_inactive: include inactive?
     *     - limit: Limits the number of records to return.
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\CodeTableListCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of result entities.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByCodeTableId(array $params): CodeTableListCollection
    {
        assert(isset($params['code_table_id']), new ArgumentException("Parameter `code_table_id` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));

        return new CodeTableListCollection($this->send("get", ["{code_table_id}" => $params['code_table_id']], ["include_inactive" => $params['include_inactive'],
        "limit" => $params['limit']]));
    }
}
