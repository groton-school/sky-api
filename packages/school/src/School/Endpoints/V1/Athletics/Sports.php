<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\SportCollection;

/**
 * @api
 */
class Sports extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/sports";

    /**
     * Returns a collection of athletic sports.
     *
     *  Use the optional ```season\_id``` to filter the results by season.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Schedule Manager
     *
     * - Page Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param array{season_id: int} $params An associative array
     *     - season_id: Format - int32. Season ID
     *
     * @return \Blackbaud\SKY\School\Components\SportCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): SportCollection
    {
        assert(isset($params['season_id']), new ArgumentException("Parameter `season_id` is required"));

        return new SportCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['season_id']), ARRAY_FILTER_USE_KEY)));
    }
}
