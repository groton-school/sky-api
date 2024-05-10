<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\CodeTable;
use Blackbaud\SKY\NXT\Data\Integration\Components\CodeTableCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\CodeTableCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\CodeTableEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables\Tableentries;

/**
 * Routing class for the subnamespace `Codetables`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables\Tableentries
 *   $tableentries
 *
 * @api
 */
class Codetables extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/codetables/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "tableentries" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables\Tableentries",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Codetables\Tableentries
     *   $_tableentries
     */
    protected ?Tableentries $_tableentries = null;

    /**
     * Returns a list of code tables.
     *
     * @param array{name: string, include_hidden_system: bool, limit: int,
     *   offset: int} $params An associative array
     *     - name: The name of the code table used for filtering.
     *     - include_hidden_system: Indicates whether to include hidden system
     *   code tables.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\CodeTableCollection
     *   Returned when the operation succeeds. The response body contains the
     *   code table list.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): CodeTableCollection
    {
        assert(isset($params['name']), new ArgumentException("Parameter `name` is required"));
        assert(isset($params['include_hidden_system']), new ArgumentException("Parameter `include_hidden_system` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new CodeTableCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['name','include_hidden_system','limit','offset']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Creates a new code table.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\CodeTableCreate
     *   $requestBody The code table to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new code table ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(CodeTableCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * Returns details about a code table.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The code table system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\CodeTable
     *   Returned when the operation succeeds. The response body contains the
     *   code table.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): CodeTable
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new CodeTable($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Delete a user defined code table.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The code table system IDs.
     *
     * @return mixed Returned when the operation successfully deletes the code
     *   table.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []);
    }

    /**
     * Edit the details about a code table.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The code table system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\CodeTableEdit
     *   $requestBody Description of changes for the code table.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, CodeTableEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
