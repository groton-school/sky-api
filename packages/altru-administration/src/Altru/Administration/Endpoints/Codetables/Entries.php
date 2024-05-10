<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Codetables;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\CodeTableEntryCollection;

/**
 * @api
 */
class Entries extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/codetables/{code_table_name}/entries";

    /**
     * Returns table entries for the specified code table.
     *
     * @param array{code_table_name: string} $params An associative array
     *     - code_table_name: The name of the code table.
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\CodeTableEntryCollection
     *   Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByCodeTableName(array $params): CodeTableEntryCollection
    {
        assert(isset($params['code_table_name']), new ArgumentException("Parameter `code_table_name` is required"));

        return new CodeTableEntryCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['code_table_name']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }
}
