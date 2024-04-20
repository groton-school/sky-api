<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\CustomFieldCategory;
use Blackbaud\SKY\NXT\Data\Integration\Components\CustomFieldCategoryCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\CustomFieldCategoryCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\CustomFieldCategoryEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Customfieldcategories extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/customfieldcategories/{id}";

    /**
     * Returns details about a custom field category.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The custom field category system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\CustomFieldCategory
     *   Returned when the operation succeeds. The response body contains the
     *   custom field category.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): CustomFieldCategory
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new CustomFieldCategory($this->send("get", ["{id}" => $params['id']], []));
    }

    /**
     * Deletes a custom field category.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The custom field category system ID.
     *
     * @return mixed Returned when the operation successfully deletes the
     *   custom field category.
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
     * Edit the details about a custom field category.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The custom field category system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\CustomFieldCategoryEdit
     *   $requestBody Description of changes for the custom field category.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, CustomFieldCategoryEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{id}" => $params['id']], [], $requestBody);
    }

    /**
     * Returns a list of custom field categories.
     *
     * @param array{record_type:
     *   "Constituent"|"Gift"|"Action"|"Education"|"Event"|"Participant"|"Campaign"|"Appeal"|"Fund"|"Package"|"Address"|"Job"|"Membership"|"IndividualRelationship"|"OrganizationRelationship"|"Account"|"Proposal", include_inactive: bool, limit: int, offset: int} $params An associative array
     *     - record_type: The record type used for filtering custom field
     *   categories.
     *     - include_inactive: Indicates whether to include inactive custom
     *   field categories.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\CustomFieldCategoryCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection and count of filtered custom field categories.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): CustomFieldCategoryCollection
    {
        assert(isset($params['record_type']), new ArgumentException("Parameter `record_type` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new CustomFieldCategoryCollection($this->send("get", [], ["record_type" => $params['record_type'],
            "include_inactive" => $params['include_inactive'],
            "limit" => $params['limit'],
            "offset" => $params['offset']]));
    }

    /**
     * Creates a new custom field category.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\CustomFieldCategoryCreate
     *   $requestBody The custom field category to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new custom field category ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(CustomFieldCategoryCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
