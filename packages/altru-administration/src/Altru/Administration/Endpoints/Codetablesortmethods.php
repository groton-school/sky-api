<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\CodeTableSortMethod;

/**
 * @api
 */
class Codetablesortmethods extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/codetablesortmethods/{code_table_id}";

    /**
     * Allows changing the sort method for a code table (alpha or
     * user-defined).
     *
     * @param array{code_table_id: string} $params An associative array
     *     - code_table_id: The code table id.
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\CodeTableSortMethod
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByCodeTableId(array $params): CodeTableSortMethod
    {
        assert(isset($params['code_table_id']), new ArgumentException("Parameter `code_table_id` is required"));

        return new CodeTableSortMethod($this->send("get", array_filter($params, fn($key) => in_array($key, ['code_table_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
