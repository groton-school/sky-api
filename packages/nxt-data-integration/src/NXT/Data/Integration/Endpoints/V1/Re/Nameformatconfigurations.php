<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfiguration;
use Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations\Fields;

/**
 * Routing class for the subnamespace `Nameformatconfigurations`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations\Fields
 *   $fields
 *
 * @api
 */
class Nameformatconfigurations extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/nameformatconfigurations/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "fields" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations\Fields",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Nameformatconfigurations\Fields
     *   $_fields
     */
    protected ?Fields $_fields = null;

    /**
     * Returns details about a name format configuration.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The name format configuration field option
     *   system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfiguration
     *   Returned when the operation succeeds. The response body contains the
     *   name format configuration field option.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): NameFormatConfiguration
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new NameFormatConfiguration($this->send("get", ["id" => $params['id']], []));
    }

    /**
     * Deletes a name format configuration.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The name format configuration system ID.
     *
     * @return mixed Returned when the operation successfully deletes the name
     *   format configuration.
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
     * Edit the details about a name format configuration.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The name format configuration system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationEdit
     *   $requestBody Description of changes for the name format configuration
     *   field.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, NameFormatConfigurationEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["id" => $params['id']], [], $requestBody);
    }

    /**
     * Returns a list of name format configurations.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationCollection
     *   Returned when the operation succeeds. The response body contains the
     *   name format configuration field options list.
     */
    public function list_(): NameFormatConfigurationCollection
    {
        return new NameFormatConfigurationCollection($this->send("get", [], []));
    }

    /**
     * Creates a new name format configuration.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\NameFormatConfigurationCreate
     *   $requestBody The name format configuration to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new name format configuration ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NameFormatConfigurationCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
