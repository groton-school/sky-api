<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\SportsLevelCollection;

/**
 * @api
 */
class sportslevels extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/sportslevels";

    /**
     * Returns a collection of athletic sports levels.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Team Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Objects\SportsLevelCollection
     *
     * @api
     */
    public function getAll()
    {
        return new SportsLevelCollection($this->send("get", [], []));
    }
}
