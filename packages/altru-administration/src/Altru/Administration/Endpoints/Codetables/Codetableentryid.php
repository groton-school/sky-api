<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Codetables;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;

/**
 * @api
 */
class Codetableentryid extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/codetables/{code_table_name}/codetableentryid/{entry_id}";

    /**
     * Deletes a code table entry.
     *
     * @param array{code_table_name: string, entry_id: string} $params An
     *   associative array
     *     - code_table_name: The name of the code table.
     *     - entry_id: The code table entry ID.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByCodeTableNameAndEntryId(array $params): mixed
    {
        assert(isset($params['code_table_name']), new ArgumentException("Parameter `code_table_name` is required"));
        assert(isset($params['entry_id']), new ArgumentException("Parameter `entry_id` is required"));

        return $this->send("delete", ["{code_table_name}" => $params['code_table_name'],
            "{entry_id}" => $params['entry_id']], []);
    }
}
