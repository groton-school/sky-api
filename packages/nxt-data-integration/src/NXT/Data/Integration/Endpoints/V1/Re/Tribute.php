<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;
use Blackbaud\SKY\NXT\Data\Integration\Components\Tribute as Components_Tribute;
use Blackbaud\SKY\NXT\Data\Integration\Components\TributeCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\TributeCreate;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Acknowledgee;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Acknowledgees;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Constituent;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Importid;

/**
 * Routing class for the subnamespace `Tribute`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Importid
 *   $importid
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Acknowledgee
 *   $acknowledgee
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Constituent
 *   $constituent
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Acknowledgees
 *   $acknowledgees
 *
 * @api
 */
class Tribute extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/tribute/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "importid" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Importid",
        "acknowledgee" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Acknowledgee",
        "constituent" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Constituent",
        "acknowledgees" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Acknowledgees",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Importid
     *   $_importid
     */
    protected ?Importid $_importid = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Acknowledgee
     *   $_acknowledgee
     */
    protected ?Acknowledgee $_acknowledgee = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Constituent
     *   $_constituent
     */
    protected ?Constituent $_constituent = null;

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Tribute\Acknowledgees
     *   $_acknowledgees
     */
    protected ?Acknowledgees $_acknowledgees = null;

    /**
     * Returns details about a tribute.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The tribute system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\Tribute Returned
     *   when the operation succeeds. The response body contains the tribute
     *   record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): Components_Tribute
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new Components_Tribute($this->send("get", ["id" => $params['id']], []));
    }

    /**
     * Deletes a tribute.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The tribute system ID.
     *
     * @return mixed Returned when the operation successfully deletes the
     *   tribute.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", ["id" => $params['id']], []);
    }

    /**
     * Returns a list of tribute.
     *
     * @param array{limit: int, offset: int} $params An associative array
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\TributeCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection of tributes.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): TributeCollection
    {
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new TributeCollection($this->send("get", [], ["limit" => $params['limit'],
            "offset" => $params['offset']]));
    }

    /**
     * Creates a new tribute.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\TributeCreate
     *   $requestBody The tribute to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the ID
     *   of the newly created record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(TributeCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
