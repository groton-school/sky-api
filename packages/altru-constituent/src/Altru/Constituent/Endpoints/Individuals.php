<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\Individual;
use Blackbaud\SKY\Altru\Constituent\Components\NewIndividual;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateIndividual;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals\Recentrevenueview;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals\Revenuesummaryview;

/**
 * Routing class for the subnamespace `Individuals`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals\Recentrevenueview
 *   $recentrevenueview
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals\Revenuesummaryview
 *   $revenuesummaryview
 *
 * @api
 */
class Individuals extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/individuals/{constituent_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "recentrevenueview" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals\Recentrevenueview",
        "revenuesummaryview" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals\Revenuesummaryview",
    ];

    /**
     * @var \Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals\Recentrevenueview
     *   $_recentrevenueview
     */
    protected Recentrevenueview $_recentrevenueview = null;

    /**
     * @var \Blackbaud\SKY\Altru\Constituent\Endpoints\Individuals\Revenuesummaryview
     *   $_revenuesummaryview
     */
    protected Revenuesummaryview $_revenuesummaryview = null;

    /**
     * This dataform template is used to add individuals, including
     * biographical and contact information.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewIndividual
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(NewIndividual $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * This dataform template is used to edit biographical information for an
     * individual.
     *
     * @param array{constituent_id: string} $params An associative array
     *     - constituent_id: The constituent id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\Individual Returned
     *   when the operation succeeds. The response body contains the specified
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentId(array $params): Individual
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));

        return new Individual($this->send("get", ["{constituent_id}" => $params['constituent_id']], []));
    }

    /**
     * This dataform template is used to edit biographical information for an
     * individual.
     *
     * @param array{constituent_id: string} $params An associative array
     *     - constituent_id: The constituent id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateIndividual
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return void Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByConstituentId(array $params, UpdateIndividual $requestBody): void
    {
        assert(isset($params['constituent_id']), new ArgumentException("Parameter `constituent_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{constituent_id}" => $params['constituent_id']], [], $requestBody);
    }
}
