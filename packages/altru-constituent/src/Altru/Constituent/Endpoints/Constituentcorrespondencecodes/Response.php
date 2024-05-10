<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentcorrespondencecodes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentCorrespondenceCodeResponse;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentCorrespondenceCodeResponse;

/**
 * @api
 */
class Response extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentcorrespondencecodes/{constituent_correspondence_id}/response";

    /**
     * This operation is used to add and edit constituent correspondence
     * responses.
     *
     * @param array{constituent_correspondence_id: string} $params An
     *   associative array
     *     - constituent_correspondence_id: The constituent correspondence id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentCorrespondenceCodeResponse
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentCorrespondenceId(array $params): ConstituentCorrespondenceCodeResponse
    {
        assert(isset($params['constituent_correspondence_id']), new ArgumentException("Parameter `constituent_correspondence_id` is required"));

        return new ConstituentCorrespondenceCodeResponse($this->send("get", array_filter($params, fn($key) => in_array($key, ['constituent_correspondence_id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * This operation is used to add and edit constituent correspondence
     * responses.
     *
     * @param array{constituent_correspondence_id: string} $params An
     *   associative array
     *     - constituent_correspondence_id: The constituent correspondence id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentCorrespondenceCodeResponse
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnConstituentCorrespondenceId(array $params, EditConstituentCorrespondenceCodeResponse $requestBody): mixed
    {
        assert(isset($params['constituent_correspondence_id']), new ArgumentException("Parameter `constituent_correspondence_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['constituent_correspondence_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
