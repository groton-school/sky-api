<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;
use Blackbaud\SKY\NXT\Data\Integration\Components\TableEntry;
use Blackbaud\SKY\NXT\Data\Integration\Components\TableEntryCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\TableEntryCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\TableEntryEdit;

/**
 * @api
 */
class Tableentries extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/codetables/{code_table_id}/tableentries/{id}";

    /**
     * Returns details about a table entry.
     *
     * @param array{code_table_id: int, id: int} $params An associative array
     *     - code_table_id: Format - int32. The code table ID.
     *     - id: Format - int32. The table entry system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\TableEntry
     *   Returned when the operation succeeds. The response body contains the
     *   table entry.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByCodeTableIdAndId(array $params): TableEntry
    {
        assert(isset($params['code_table_id']), new ArgumentException("Parameter `code_table_id` is required"));
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new TableEntry($this->send("get", ["{code_table_id}" => $params['code_table_id'],
        "{id}" => $params['id']], []));
    }

    /**
     * Deletes a table entry.
     *
     * @param array{code_table_id: int, id: int} $params An associative array
     *     - code_table_id: Format - int32. The code table ID.
     *     - id: Format - int32. The table entry system ID.
     *
     * @return void Returned when the operation successfully deletes the table
     *   entry.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByCodeTableIdAndId(array $params): void
    {
        assert(isset($params['code_table_id']), new ArgumentException("Parameter `code_table_id` is required"));
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", ["{code_table_id}" => $params['code_table_id'],
        "{id}" => $params['id']], []);
    }

    /**
     * Edit the details about a table entry.
     *
     * @param array{code_table_id: int, id: int} $params An associative array
     *     - code_table_id: Format - int32. The code table ID.
     *     - id: Format - int32. The table entry system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\TableEntryEdit
     *   $requestBody Description of changes for the table entry.
     *
     * @return void Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByCodeTableIdAndId(array $params, TableEntryEdit $requestBody): void
    {
        assert(isset($params['code_table_id']), new ArgumentException("Parameter `code_table_id` is required"));
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{code_table_id}" => $params['code_table_id'],
        "{id}" => $params['id']], [], $requestBody);
    }

    /**
     * Returns a list of table entries.
     *
     * @param array{code_table_id: int, long_description: string,
     *   short_description: string, numeric_value: float, include_inactive:
     *   bool, limit: int, offset: int} $params An associative array
     *     - code_table_id: Format - int32. The code table ID.
     *     - long_description: The long description of the table entry.
     *     - short_description: The short description of the table entry.
     *     - numeric_value: Format - double. The numeric value of the table
     *   entry.
     *     - include_inactive: Indicates whether to include inactive table
     *   entries.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\TableEntryCollection
     *   Returned when the operation succeeds. The response body contains the
     *   table entry list.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByCodeTableId(array $params): TableEntryCollection
    {
        assert(isset($params['code_table_id']), new ArgumentException("Parameter `code_table_id` is required"));
        assert(isset($params['long_description']), new ArgumentException("Parameter `long_description` is required"));
        assert(isset($params['short_description']), new ArgumentException("Parameter `short_description` is required"));
        assert(isset($params['numeric_value']), new ArgumentException("Parameter `numeric_value` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new TableEntryCollection($this->send("get", ["{code_table_id}" => $params['code_table_id']], ["long_description" => $params['long_description'],
        "short_description" => $params['short_description'],
        "numeric_value" => $params['numeric_value'],
        "include_inactive" => $params['include_inactive'],
        "limit" => $params['limit'],
        "offset" => $params['offset']]));
    }

    /**
     * Creates a new table entry.
     *
     * @param array{code_table_id: int} $params An associative array
     *     - code_table_id: Format - int32. The code table ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\TableEntryCreate
     *   $requestBody The table entry to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new table entry ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postByCodeTableId(array $params, TableEntryCreate $requestBody): PostResponse
    {
        assert(isset($params['code_table_id']), new ArgumentException("Parameter `code_table_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", ["{code_table_id}" => $params['code_table_id']], [], $requestBody));
    }
}
