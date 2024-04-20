<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Gifts;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftNote;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftNoteCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftNoteCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\GiftNoteEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Notes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/gifts/{gift_id}/notes";

    /**
     * Creates a note for a gift.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\GiftNoteCreate
     *   $requestBody The gift note details.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new gift note ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(GiftNoteCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * Returns gift note details.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The gift note ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftNote
     *   Returned when the operation succeeds. The response body contains the
     *   gift note record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): GiftNote
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new GiftNote($this->send("get", ["{id}" => $params['id']], []));
    }

    /**
     * Deletes a note for a gift.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The gift note ID.
     *
     * @return mixed Returned when the operation successfully deletes the gift
     *   note.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", ["{id}" => $params['id']], []);
    }

    /**
     * Edits a note for a gift.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The gift note ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\GiftNoteEdit
     *   $requestBody The gift note details.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, GiftNoteEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{id}" => $params['id']], [], $requestBody);
    }

    /**
     * Returns a list of gift note details.
     *
     * @param array{gift_id: int, limit: int, offset: int} $params An
     *   associative array
     *     - gift_id: Format - int32. The gift ID.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\GiftNoteCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection and count of filtered gift notes.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByGiftId(array $params): GiftNoteCollection
    {
        assert(isset($params['gift_id']), new ArgumentException("Parameter `gift_id` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new GiftNoteCollection($this->send("get", ["{gift_id}" => $params['gift_id']], ["limit" => $params['limit'],
            "offset" => $params['offset']]));
    }
}
