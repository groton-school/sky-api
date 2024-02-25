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
     * Returns a collection of athletic transportation types. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending
     * Coach</li><li>Any Manager Role</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\TransportationCollection
     *   Success
     */
    public function getAll(): TransportationCollection
    {
        return new TransportationCollection($this->send("get", [], []));
    }
}
