<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\Fund;
use Blackbaud\SKY\NXT\Data\Integration\Components\FundCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\FundCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\FundEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;
use Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds\Constituent;

/**
 * Routing class for the subnamespace `Funds`
 *
 * @property \Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds\Constituent
 *   $constituent
 *
 * @api
 */
class Funds extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/funds/{id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "constituent" => "\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds\Constituent",
    ];

    /**
     * @var ?\Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re\Funds\Constituent
     *   $_constituent
     */
    protected ?Constituent $_constituent = null;

    /**
     * Returns details about a fund.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The fund system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\Fund Returned
     *   when the operation succeeds. The response body contains the fund
     *   record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): Fund
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new Fund($this->send("get", ["{id}" => $params['id']], []));
    }

    /**
     * Deletes a fund.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The fund system ID.
     *
     * @return mixed Returned when the operation successfully deletes the
     *   fund.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", ["{id}" => $params['id']], []);
    }

    /**
     * Edit the details about a fund.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The fund system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\FundEdit
     *   $requestBody Description of changes for the fund.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, FundEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{id}" => $params['id']], [], $requestBody);
    }

    /**
     * Returns a list of funds.
     *
     * @param array{fund_id: string, description: string, include_inactive:
     *   bool, limit: int, offset: int} $params An associative array
     *     - fund_id: The unique fund id.
     *     - description: The fund description.
     *     - include_inactive: Indicates whether to include inactive funds.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\FundCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection and count of filtered funds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): FundCollection
    {
        assert(isset($params['fund_id']), new ArgumentException("Parameter `fund_id` is required"));
        assert(isset($params['description']), new ArgumentException("Parameter `description` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new FundCollection($this->send("get", [], ["fund_id" => $params['fund_id'],
            "description" => $params['description'],
            "include_inactive" => $params['include_inactive'],
            "limit" => $params['limit'],
            "offset" => $params['offset']]));
    }

    /**
     * Creates a new fund.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\FundCreate
     *   $requestBody The fund to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new fund ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(FundCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
