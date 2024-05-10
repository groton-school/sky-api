<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentSolicitCode;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentSolicitCode;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentSolicitCode;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;

/**
 * @api
 */
class Solicitcodes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/solicitcodes/{constituent_solicit_code_id}";

    /**
     * Assign a solicit code to a constituent
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentSolicitCode
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentSolicitCode $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody));
    }

    /**
     * Edit a constituent solicit code
     *
     * @param array{constituent_solicit_code_id: string} $params An
     *   associative array
     *     - constituent_solicit_code_id: The constituent solicit code id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentSolicitCode
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentSolicitCodeId(array $params): ConstituentSolicitCode
    {
        assert(isset($params['constituent_solicit_code_id']), new ArgumentException("Parameter `constituent_solicit_code_id` is required"));

        return new ConstituentSolicitCode($this->send("get", array_filter($params, fn($key) => in_array($key, ['constituent_solicit_code_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * This record operation is used to delete the constituent solicit code.
     *
     * @param array{constituent_solicit_code_id: string} $params An
     *   associative array
     *     - constituent_solicit_code_id: The constituent solicit code id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConstituentSolicitCodeId(array $params): mixed
    {
        assert(isset($params['constituent_solicit_code_id']), new ArgumentException("Parameter `constituent_solicit_code_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['constituent_solicit_code_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY));
    }

    /**
     * Edit a constituent solicit code
     *
     * @param array{constituent_solicit_code_id: string} $params An
     *   associative array
     *     - constituent_solicit_code_id: The constituent solicit code id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentSolicitCode
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnConstituentSolicitCodeId(array $params, EditConstituentSolicitCode $requestBody): mixed
    {
        assert(isset($params['constituent_solicit_code_id']), new ArgumentException("Parameter `constituent_solicit_code_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['constituent_solicit_code_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
