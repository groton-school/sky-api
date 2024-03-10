<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\NewRelationshipJobInfo;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\RelationshipJobInfo;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateRelationshipJobInfo;

/**
 * @api
 */
class Relationshipjobsinfo extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/relationshipjobsinfo/{relationship_job_information_id}";

    /**
     * This form is used to add relationship job information.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewRelationshipJobInfo
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(NewRelationshipJobInfo $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * This form is used to edit relationship job information.
     *
     * @param array{relationship_job_information_id: string} $params An
     *   associative array
     *     - relationship_job_information_id: The relationship job information
     *   id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\RelationshipJobInfo
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByRelationshipJobInformationId(array $params): RelationshipJobInfo
    {
        assert(isset($params['relationship_job_information_id']), new ArgumentException("Parameter `relationship_job_information_id` is required"));

        return new RelationshipJobInfo($this->send("get", ["{relationship_job_information_id}" => $params['relationship_job_information_id']], []));
    }

    /**
     * Delete relationship job information
     *
     * @param array{relationship_job_information_id: string} $params An
     *   associative array
     *     - relationship_job_information_id: The relationship job information
     *   id
     *
     * @return void Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByRelationshipJobInformationId(array $params): void
    {
        assert(isset($params['relationship_job_information_id']), new ArgumentException("Parameter `relationship_job_information_id` is required"));

        return $this->send("delete", ["{relationship_job_information_id}" => $params['relationship_job_information_id']], []);
    }

    /**
     * This form is used to edit relationship job information.
     *
     * @param array{relationship_job_information_id: string} $params An
     *   associative array
     *     - relationship_job_information_id: The relationship job information
     *   id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateRelationshipJobInfo
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return void Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByRelationshipJobInformationId(array $params, UpdateRelationshipJobInfo $requestBody): void
    {
        assert(isset($params['relationship_job_information_id']), new ArgumentException("Parameter `relationship_job_information_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{relationship_job_information_id}" => $params['relationship_job_information_id']], [], $requestBody);
    }
}
