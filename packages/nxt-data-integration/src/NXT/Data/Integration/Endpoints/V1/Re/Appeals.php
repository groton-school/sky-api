<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\Appeal;
use Blackbaud\SKY\NXT\Data\Integration\Components\AppealCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\AppealCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\AppealEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Appeals extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/appeals/{id}";

    /**
     * Returns details about an appeal.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The appeal system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\Appeal Returned
     *   when the operation succeeds. The response body contains the appeal
     *   record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): Appeal
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new Appeal($this->send("get", ["{id}" => $params['id']], []));
    }

    /**
     * Deletes an appeal.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The appeal system ID.
     *
     * @return void Returned when the operation successfully deletes the
     *   appeal.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): void
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", ["{id}" => $params['id']], []);
    }

    /**
     * Edit the details about an appeal.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The table entry system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\AppealEdit
     *   $requestBody Description of changes for the appeal.
     *
     * @return void Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchById(array $params, AppealEdit $requestBody): void
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{id}" => $params['id']], [], $requestBody);
    }

    /**
     * Returns a list of appeals.
     *
     * @param array{appeal_id: string, description: string, include_inactive:
     *   bool, limit: int, offset: int} $params An associative array
     *     - appeal_id: The unique appeal id.
     *     - description: The appeal description.
     *     - include_inactive: Indicates whether to include inactive appeals.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\AppealCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection and count of filtered appeals.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterByBy(array $params): AppealCollection
    {
        assert(isset($params['appeal_id']), new ArgumentException("Parameter `appeal_id` is required"));
        assert(isset($params['description']), new ArgumentException("Parameter `description` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new AppealCollection($this->send("get", [], ["appeal_id" => $params['appeal_id'],
        "description" => $params['description'],
        "include_inactive" => $params['include_inactive'],
        "limit" => $params['limit'],
        "offset" => $params['offset']]));
    }

    /**
     * Creates a new appeal.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\AppealCreate
     *   $requestBody The appeal to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new appeal ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(AppealCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
