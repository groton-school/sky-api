<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\TransportationCollection;

/**
 * @api
 */
class Transportationtypes extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/transportationtypes";

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
     * @return \Blackbaud\SKY\School\Components\TransportationCollectionSuccess

     *
     * @api
     */
    public function getAll(): TransportationCollection
    {
        return new TransportationCollection($this->send("get", [], []));
    }
}
