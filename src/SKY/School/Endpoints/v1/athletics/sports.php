<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
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
     * @param ?int $season_id (Optional) Format - int32. Season ID
     *
     * @return \Blackbaud\SKY\School\Components\SportCollectionSuccess
     *
     * @api
     */
    public function filterBy(?int $season_id = null): SportCollection
    {
        return new SportCollection($this->send("get", [], ["season_id" => $season_id]));
    }
}
