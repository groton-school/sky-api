<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Codetables;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\CodeTableEntryId;

/**
 * @api
 */
class Entrydescription extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/codetables/{code_table_name}/entrydescription/{entry_description}";

    /**
     * Gets a code table entry Id by description.
     *
     * @param array{code_table_name: string, entry_description: string}
     *   $params An associative array
     *     - code_table_name: The name of the code table.
     *     - entry_description: The code table entry description.
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\CodeTableEntryId
     *   Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByCodeTableNameAndEntryDescription(array $params): CodeTableEntryId
    {
        assert(isset($params['code_table_name']), new ArgumentException("Parameter `code_table_name` is required"));
        assert(isset($params['entry_description']), new ArgumentException("Parameter `entry_description` is required"));

        return new CodeTableEntryId($this->send("get", array_filter($params, fn($key) => in_array($key, ['code_table_name','entry_description']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }
}
