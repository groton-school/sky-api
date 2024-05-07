<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\PhoneType;
use Blackbaud\SKY\NXT\Data\Integration\Components\PhoneTypeCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\PhoneTypeCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\PhoneTypeEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Phonetypes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/phonetypes/{id}";

    /**
     * Returns details about a phone type.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The phone type system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PhoneType
     *   Returned when the operation succeeds. The response body contains the
     *   phone type.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): PhoneType
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new PhoneType($this->send("get", ["id" => $params['id']], []));
    }

    /**
     * Deletes a phone type.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The phone type system ID.
     *
     * @return mixed Returned when the operation successfully deletes the
     *   phone type.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", ["id" => $params['id']], []);
    }

    /**
     * Edit the details about a phone type.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The phone type system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\PhoneTypeEdit
     *   $requestBody Description of changes for the phone type.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, PhoneTypeEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["id" => $params['id']], [], $requestBody);
    }

    /**
     * Returns a list of phone types.
     *
     * @param array{description: string, type:
     *   "TelephoneNumber"|"FaxNumber"|"EmailAddress"|"WebAddressUrl"|"Other",
     *   format:
     *   "None"|"Mask1"|"Mask2"|"Mask3"|"Mask4"|"Mask5"|"Mask6"|"Mask7"|"Mask8"|"Mask9"|"Mask10"|"Mask11", include_inactive: bool, limit: int, offset: int} $params An associative array
     *     - description: The description of the phone type.
     *     - type: The phone number type.
     *     - format: The phone number format.
     *     - include_inactive: Indicates whether to include inactive phone
     *   types.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PhoneTypeCollection
     *   Returned when the operation succeeds. The response body contains the
     *   phone types list.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): PhoneTypeCollection
    {
        assert(isset($params['description']), new ArgumentException("Parameter `description` is required"));
        assert(isset($params['type']), new ArgumentException("Parameter `type` is required"));
        assert(isset($params['format']), new ArgumentException("Parameter `format` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new PhoneTypeCollection($this->send("get", [], ["description" => $params['description'],
            "type" => $params['type'],
            "format" => $params['format'],
            "include_inactive" => $params['include_inactive'],
            "limit" => $params['limit'],
            "offset" => $params['offset']]));
    }

    /**
     * Creates a new phone type.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\PhoneTypeCreate
     *   $requestBody The phone type to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new phone type.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(PhoneTypeCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
