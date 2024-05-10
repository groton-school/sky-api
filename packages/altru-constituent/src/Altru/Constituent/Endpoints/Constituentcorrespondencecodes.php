<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentCorrespondenceCode;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentCorrespondenceCode;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentCorrespondenceCode;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes\Response;

/**
 * Routing class for the subnamespace `Constituentcorrespondencecodes`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes\Response
 *   $response
 *
 * @api
 */
class Constituentcorrespondencecodes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentcorrespondencecodes/{constituent_correspondence_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "response" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes\Response",
    ];

    /**
     * @var ?\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes\Response
     *   $_response
     */
    protected ?Response $_response = null;

    /**
     * This operation is used to add correspondence record for a constituent.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentCorrespondenceCode
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentCorrespondenceCode $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * This operation is for editing constituent correspondence.
     *
     * @param array{constituent_correspondence_id: string} $params An
     *   associative array
     *     - constituent_correspondence_id: The constituent correspondence id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentCorrespondenceCode
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentCorrespondenceId(array $params): ConstituentCorrespondenceCode
    {
        assert(isset($params['constituent_correspondence_id']), new ArgumentException("Parameter `constituent_correspondence_id` is required"));

        return new ConstituentCorrespondenceCode($this->send("get", array_filter($params, fn($key) => in_array($key, ['constituent_correspondence_id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Delete the specified constituent correspondence record.
     *
     * @param array{constituent_correspondence_id: string} $params An
     *   associative array
     *     - constituent_correspondence_id: The constituent correspondence id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConstituentCorrespondenceId(array $params): mixed
    {
        assert(isset($params['constituent_correspondence_id']), new ArgumentException("Parameter `constituent_correspondence_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['constituent_correspondence_id']), ARRAY_FILTER_USE_KEY), []);
    }

    /**
     * This operation is for editing constituent correspondence.
     *
     * @param array{constituent_correspondence_id: string} $params An
     *   associative array
     *     - constituent_correspondence_id: The constituent correspondence id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentCorrespondenceCode
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnConstituentCorrespondenceId(array $params, EditConstituentCorrespondenceCode $requestBody): mixed
    {
        assert(isset($params['constituent_correspondence_id']), new ArgumentException("Parameter `constituent_correspondence_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['constituent_correspondence_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
