<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentAppealCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentAppealEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Constitappeals extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/constitappeals/{id}";

    /**
     * Creates a new constituent appeal.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentAppealCreate
     *   $requestBody The constituent appeal to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new constituent appeal ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(ConstituentAppealCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * Deletes a constituent appeal.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The ID for the constituent appeal to delete.
     *
     * @return void Returned when the operation successfully deletes the
     *   constituent appeal.
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
     * Edits a constituent appeal.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The ID for the constituent appeal to update.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\ConstituentAppealEdit
     *   $requestBody The changes made to the constituent appeal.
     *
     * @return void Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchById(array $params, ConstituentAppealEdit $requestBody): void
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{id}" => $params['id']], [], $requestBody);
    }
}
