<?php

namespace Blackbaud\SKY\Altru\Constituent\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\Altru\Constituent\Components\ConstituentAppeal;
use Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAppeal;
use Blackbaud\SKY\Altru\Constituent\Components\PostResponse;
use Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentAppeal;
use Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappeals\Appeals;

/**
 * Routing class for the subnamespace `Constituentappeals`
 *
 * @property \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappeals\Appeals
 *   $appeals
 *
 * @api
 */
class Constituentappeals extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/alt-conmg/constituentappeals/{constituent_appeal_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "appeals" => "\Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappeals\Appeals",
    ];

    /**
     * @var \Blackbaud\SKY\Altru\Constituent\Endpoints\Constituentappeals\Appeals
     *   $_appeals
     */
    protected Appeals $_appeals = null;

    /**
     * Data form for adding a Constituent Appeal record.
     *
     * @param \Blackbaud\SKY\Altru\Constituent\Components\NewConstituentAppeal
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\PostResponse
     *   Returned when the operation successfully creates the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postBy(NewConstituentAppeal $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }

    /**
     * Data form for editing a Constituent Appeal record.
     *
     * @param array{constituent_appeal_id: string} $params An associative
     *   array
     *     - constituent_appeal_id: The constituent appeal id.
     *
     * @return \Blackbaud\SKY\Altru\Constituent\Components\ConstituentAppeal
     *   Returned when the operation succeeds. The response body contains the
     *   specified resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByConstituentAppealId(array $params): ConstituentAppeal
    {
        assert(isset($params['constituent_appeal_id']), new ArgumentException("Parameter `constituent_appeal_id` is required"));

        return new ConstituentAppeal($this->send("get", ["{constituent_appeal_id}" => $params['constituent_appeal_id']], []));
    }

    /**
     * This delete method handles the basic deletion rules for a Constituent
     * Appeal.
     *
     * @param array{constituent_appeal_id: string} $params An associative
     *   array
     *     - constituent_appeal_id: The constituent appeal id
     *
     * @return void Returned when the operation successfully deletes the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByConstituentAppealId(array $params): void
    {
        assert(isset($params['constituent_appeal_id']), new ArgumentException("Parameter `constituent_appeal_id` is required"));

        return $this->send("delete", ["{constituent_appeal_id}" => $params['constituent_appeal_id']], []);
    }

    /**
     * Data form for editing a Constituent Appeal record.
     *
     * @param array{constituent_appeal_id: string} $params An associative
     *   array
     *     - constituent_appeal_id: The constituent appeal id.
     * @param \Blackbaud\SKY\Altru\Constituent\Components\UpdateConstituentAppeal
     *   $requestBody ConfigurationMessage object representing operation
     *   intended to be created
     *
     * @return void Returned when the operation successfully edits the
     *   resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByConstituentAppealId(array $params, UpdateConstituentAppeal $requestBody): void
    {
        assert(isset($params['constituent_appeal_id']), new ArgumentException("Parameter `constituent_appeal_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{constituent_appeal_id}" => $params['constituent_appeal_id']], [], $requestBody);
    }
}
