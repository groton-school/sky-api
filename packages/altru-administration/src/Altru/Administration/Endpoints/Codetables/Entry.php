<?php

namespace Blackbaud\SKY\Altru\Administration\Endpoints\Codetables;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Administration\Components\EditCodeTable;
use Blackbaud\SKY\Altru\Administration\Components\NewCodeTableEntry;
use Blackbaud\SKY\Altru\Administration\Components\PostResponse;

/**
 * @api
 */
class Entry extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-adnmg/codetables/entry/{code_table_name}";

    /**
     * Creates a code table entry.
     *
     * @param array{code_table_name: string} $params An associative array
     *     - code_table_name: The name of the code table.
     * @param \Blackbaud\SKY\Altru\Administration\Components\NewCodeTableEntry
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Administration\Components\PostResponse
     *   Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToCodeTableName(array $params, NewCodeTableEntry $requestBody): PostResponse
    {
        assert(isset($params['code_table_name']), new ArgumentException("Parameter `code_table_name` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", array_filter($params, fn($key) => in_array($key, ['code_table_name']), ARRAY_FILTER_USE_KEY), [], $requestBody));
    }

    /**
     * Edit a code table entry.
     *
     * @param array{code_table_name: string} $params An associative array
     *     - code_table_name: The name of the code table.
     * @param \Blackbaud\SKY\Altru\Administration\Components\EditCodeTable
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be updated
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnCodeTableName(array $params, EditCodeTable $requestBody): mixed
    {
        assert(isset($params['code_table_name']), new ArgumentException("Parameter `code_table_name` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['code_table_name']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
