<?php

namespace Blackbaud\SKY\NXT\Data\Integration\Endpoints\V1\Re;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\NXT\Data\Integration\Components\Campaign;
use Blackbaud\SKY\NXT\Data\Integration\Components\CampaignCollection;
use Blackbaud\SKY\NXT\Data\Integration\Components\CampaignCreate;
use Blackbaud\SKY\NXT\Data\Integration\Components\CampaignEdit;
use Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse;

/**
 * @api
 */
class Campaigns extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/nxt-data-integration/v1/re/campaigns/{id}";

    /**
     * Returns details about a campaign.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The campaign system ID.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\Campaign
     *   Returned when the operation succeeds. The response body contains the
     *   campaign record.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getById(array $params): Campaign
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return new Campaign($this->send("get", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Deletes a campaign.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The campaign system ID.
     *
     * @return mixed Returned when the operation successfully deletes the
     *   campaign.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteById(array $params): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), []);
    }

    /**
     * Edit the details about a campaign.
     *
     * @param array{id: int} $params An associative array
     *     - id: Format - int32. The campaign system ID.
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\CampaignEdit
     *   $requestBody Description of changes for the campaign.
     *
     * @return mixed Returned when the operation succeeds.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnId(array $params, CampaignEdit $requestBody): mixed
    {
        assert(isset($params['id']), new ArgumentException("Parameter `id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }

    /**
     * Returns a list of campaigns.
     *
     * @param array{campaign_id: string, description: string,
     *   include_inactive: bool, limit: int, offset: int} $params An associative
     *   array
     *     - campaign_id: The unique campaign id.
     *     - description: The campaign description.
     *     - include_inactive: Indicates whether to include inactive
     *   campaigns.
     *     - limit: Format - int32.
     *     - offset: Format - int32.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\CampaignCollection
     *   Returned when the operation succeeds. The response body contains a
     *   collection and count of filtered campaigns.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): CampaignCollection
    {
        assert(isset($params['campaign_id']), new ArgumentException("Parameter `campaign_id` is required"));
        assert(isset($params['description']), new ArgumentException("Parameter `description` is required"));
        assert(isset($params['include_inactive']), new ArgumentException("Parameter `include_inactive` is required"));
        assert(isset($params['limit']), new ArgumentException("Parameter `limit` is required"));
        assert(isset($params['offset']), new ArgumentException("Parameter `offset` is required"));

        return new CampaignCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['campaign_id','description','include_inactive','limit','offset']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Creates a new campaign.
     *
     * @param \Blackbaud\SKY\NXT\Data\Integration\Components\CampaignCreate
     *   $requestBody The campaign to add.
     *
     * @return \Blackbaud\SKY\NXT\Data\Integration\Components\PostResponse
     *   Returned when the operation succeeds. The response body contains the
     *   new campaign ID.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(CampaignCreate $requestBody): PostResponse
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return new PostResponse($this->send("post", [], [], $requestBody));
    }
}
