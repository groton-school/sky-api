<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentAppealResponse;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAppealResponse;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentAppealResponse;

/**
 * @api
 */
class Constituentappealresponses extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentappealresponses/{constituent_appeal_id}";

    /**
     * This form is used to add and edit constituent appeal responses.
     *
     * @param array{constituent_appeal_id: string} $params An associative
     *   array
     *     - constituent_appeal_id: The constituent appeal id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAppealResponse
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentAppealId(array $params): ConstituentAppealResponse
    {
        assert(isset($params['constituent_appeal_id']), new ArgumentException("Parameter `constituent_appeal_id` is required"));

        return new ConstituentAppealResponse($this->send("get", ["{constituent_appeal_id}" => $params['constituent_appeal_id']], []));
    }

    /**
     * This form is used to add and edit constituent appeal responses.
     *
     * @param array{constituent_appeal_id: string} $params An associative
     *   array
     *     - constituent_appeal_id: The constituent appeal id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentAppealResponse
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return void Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByConstituentAppealId(array $params, UpdateConstituentAppealResponse $requestBody): void
    {
        assert(isset($params['constituent_appeal_id']), new ArgumentException("Parameter `constituent_appeal_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{constituent_appeal_id}" => $params['constituent_appeal_id']], [], $requestBody);
    }

    /**
     * Add a constituent appeal response to the system.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAppealResponse
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(NewConstituentAppealResponse $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
