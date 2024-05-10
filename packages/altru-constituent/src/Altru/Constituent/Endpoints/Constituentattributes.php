<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentAttribute;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentAttribute;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAttribute;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;

/**
 * @api
 */
class Constituentattributes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentattributes/{constituent_attribute_id}";

    /**
     * Adds an attribute to a constituent record.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAttribute
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentAttribute $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * Edits an attribute on a constituent record.
     *
     * @param array{constituent_attribute_id: string} $params An associative
     *   array
     *     - constituent_attribute_id: The constituent attribute id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAttribute
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentAttributeId(array $params): ConstituentAttribute
    {
        assert(isset($params['constituent_attribute_id']), new ArgumentException("Parameter `constituent_attribute_id` is required"));

        return new ConstituentAttribute($this->send("get", array_filter($params, fn($key) => in_array($key, ['constituent_attribute_id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Removes a constituent attribute from the system.
     *
     * @param array{constituent_attribute_id: string} $params An associative
     *   array
     *     - constituent_attribute_id: The constituent attribute id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConstituentAttributeId(array $params): mixed
    {
        assert(isset($params['constituent_attribute_id']), new ArgumentException("Parameter `constituent_attribute_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['constituent_attribute_id']), ARRAY_FILTER_USE_KEY), []);
    }

    /**
     * Edits an attribute on a constituent record.
     *
     * @param array{constituent_attribute_id: string} $params An associative
     *   array
     *     - constituent_attribute_id: The constituent attribute id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentAttribute
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnConstituentAttributeId(array $params, EditConstituentAttribute $requestBody): mixed
    {
        assert(isset($params['constituent_attribute_id']), new ArgumentException("Parameter `constituent_attribute_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['constituent_attribute_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
