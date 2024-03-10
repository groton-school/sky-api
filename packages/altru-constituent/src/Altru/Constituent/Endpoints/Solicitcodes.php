<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentSolicitCode;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentSolicitCode;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentSolicitCode;

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
    public function postBy(NewConstituentSolicitCode $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
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

        return new ConstituentSolicitCode($this->send("get", ["{constituent_solicit_code_id}" => $params['constituent_solicit_code_id']], []));
    }

    /**
     * This record operation is used to delete the constituent solicit code.
     *
     * @param array{constituent_solicit_code_id: string} $params An
     *   associative array
     *     - constituent_solicit_code_id: The constituent solicit code id
     *
     * @return void Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConstituentSolicitCodeId(array $params): void
    {
        assert(isset($params['constituent_solicit_code_id']), new ArgumentException("Parameter `constituent_solicit_code_id` is required"));

        return $this->send("delete", ["{constituent_solicit_code_id}" => $params['constituent_solicit_code_id']], []);
    }

    /**
     * Edit a constituent solicit code
     *
     * @param array{constituent_solicit_code_id: string} $params An
     *   associative array
     *     - constituent_solicit_code_id: The constituent solicit code id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentSolicitCode
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return void Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByConstituentSolicitCodeId(array $params, UpdateConstituentSolicitCode $requestBody): void
    {
        assert(isset($params['constituent_solicit_code_id']), new ArgumentException("Parameter `constituent_solicit_code_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{constituent_solicit_code_id}" => $params['constituent_solicit_code_id']], [], $requestBody);
    }
}
