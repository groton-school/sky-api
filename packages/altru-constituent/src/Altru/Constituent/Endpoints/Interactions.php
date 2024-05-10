<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentInteraction;
use Blackbaud\SKY\Altru\Constituent\Components\EditConstituentInteraction;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentInteraction;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;

/**
 * @api
 */
class Interactions extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/interactions/{constituent_interaction_id}";

    /**
     * Add dataoperation for interaction records.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentInteraction
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(NewConstituentInteraction $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * Edit operation for a non-move interaction.
     *
     * @param array{constituent_interaction_id: string} $params An associative
     *   array
     *     - constituent_interaction_id: The constituent interaction id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentInteraction
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentInteractionId(array $params): ConstituentInteraction
    {
        assert(isset($params['constituent_interaction_id']), new ArgumentException("Parameter `constituent_interaction_id` is required"));

        return new ConstituentInteraction($this->send("get", array_filter($params, fn($key) => in_array($key, ['constituent_interaction_id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * This delete method handles the basic deletion rules for a constituent
     * interaction.
     *
     * @param array{constituent_interaction_id: string} $params An associative
     *   array
     *     - constituent_interaction_id: The constituent interaction id
     *
     * @return mixed Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConstituentInteractionId(array $params): mixed
    {
        assert(isset($params['constituent_interaction_id']), new ArgumentException("Parameter `constituent_interaction_id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['constituent_interaction_id']), ARRAY_FILTER_USE_KEY), []);
    }

    /**
     * Edit operation for a non-move interaction.
     *
     * @param array{constituent_interaction_id: string} $params An associative
     *   array
     *     - constituent_interaction_id: The constituent interaction id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\EditConstituentInteraction
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return mixed Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnConstituentInteractionId(array $params, EditConstituentInteraction $requestBody): mixed
    {
        assert(isset($params['constituent_interaction_id']), new ArgumentException("Parameter `constituent_interaction_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['constituent_interaction_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
