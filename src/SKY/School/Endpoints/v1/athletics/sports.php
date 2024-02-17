<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\SportCollection;

/**
 * @api
 */
class sports extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/sports";

    /**
     * Returns a collection of athletic sports.
     *
     * Use the optional ```season_id``` to filter the results by season.
     *
     * Requires at least one of the following roles in the Education
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
     * @param array{season_id?: int} $params An associative array
     *     - season_id: (Optional) Format - int32. Season ID
     *
     * @return \Blackbaud\SKY\School\Objects\SportCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new SportCollection($this->send("get", [], ["season_id" => $params["season_id"]]));
    }
}
