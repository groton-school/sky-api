<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\NewTribute;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\Tribute as Components_Tribute;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateTribute;

/**
 * @api
 */
class Tribute extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/tribute/{revenue_tribute_id}";

    /**
     * This form is used for adding a new tribute to a revenue record.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewTribute
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewTribute $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * This form is used for editing a tribute for a given revenue record.
     *
     * @param array{revenue_tribute_id: string} $params An associative array
     *     - revenue_tribute_id: The revenue tribute id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\Tribute Returned
     *   when the operation succeeds. The response body contains the specified
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByRevenueTributeId(array $params): Components_Tribute
    {
        assert(isset($params['revenue_tribute_id']), new ArgumentException("Parameter `revenue_tribute_id` is required"));

        return new Components_Tribute($this->send("get", ["{revenue_tribute_id}" => $params['revenue_tribute_id']], []));
    }

    /**
     * This form is used for editing a tribute for a given revenue record.
     *
     * @param array{revenue_tribute_id: string} $params An associative array
     *     - revenue_tribute_id: The revenue tribute id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateTribute
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnRevenueTributeId(array $params, UpdateTribute $requestBody): mixed
    {
        assert(isset($params['revenue_tribute_id']), new ArgumentException("Parameter `revenue_tribute_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{revenue_tribute_id}" => $params['revenue_tribute_id']], [], $requestBody);
    }
}
