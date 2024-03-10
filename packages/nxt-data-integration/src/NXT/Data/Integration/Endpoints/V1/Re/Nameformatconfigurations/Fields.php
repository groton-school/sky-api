<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationField;
use Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Fields extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/nameformatconfigurations/fields/{id}";

    /**
     * Returns details about a name format configuration field.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The name format configuration field system
     *   ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationField
     *   Returned when the operation succeeds. The response body contains the
     *   name format configuration field option.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): NameFormatConfigurationField
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new NameFormatConfigurationField($this->send("get", ["{id}" => $params['id']], []));
    }

    /**
     * Deletes a name format configuration field.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The name format configuration field option
     *   system ID.
     *
     * @return void Returned when the operation successfully deletes the name
     *   format configuration field.
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
     * Edit the details about a name format configuration field.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The name format configuration field option
     *   system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldEdit
     *   $requestBody Description of changes for the name format configuration
     *   field option.
     *
     * @return void Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchById(array $params, NameFormatConfigurationFieldEdit $requestBody): void
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{id}" => $params['id']], [], $requestBody);
    }

    /**
     * Returns a list of name format configuration fields.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldCollection
     *   Returned when the operation succeeds. The response body contains the
     *   name format configuration field options list.
     */
    public function getAllBy(): NameFormatConfigurationFieldCollection
    {
        return new NameFormatConfigurationFieldCollection($this->send("get", [], []));
    }

    /**
     * Creates a new name format configuration field.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationFieldCreate
     *   $requestBody The name format configuration field to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new name format configuration field id.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(NameFormatConfigurationFieldCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
