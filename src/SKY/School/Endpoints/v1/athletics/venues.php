<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AthleticVenueCollection;

/**
 * @api
 */
class venues extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/venues";

    /**
     * Returns a collection of athletic venues.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @return \Blackbaud\SKY\School\Objects\AthleticVenueCollection
     *
     * @api
     */
    public function getAll()
    {
        return new AthleticVenueCollection($this->send("get", [], []));
    }
}
