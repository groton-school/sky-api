<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\TransportationCollection;

/**
 * @api
 */
class transportationtypes extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/transportationtypes";

    /**
     * Returns a collection of athletic transportation types.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * - Any Manager Role
     *
     * @return \Blackbaud\SKY\School\Objects\TransportationCollection
     *
     * @api
     */
    public function getAll()
    {
        return new TransportationCollection($this->send("get", [], []));
    }
}
