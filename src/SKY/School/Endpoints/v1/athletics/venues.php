<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\AthleticVenueCollection;

/**
 * @api
 */
class Venues extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/venues";

    /**
     * Returns a collection of athletic venues. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Coach</li><li>Pending Coach</li></ul>
     *
     * @return \Blackbaud\SKY\School\Components\AthleticVenueCollection
     *   Success
     */
    public function getAll(): AthleticVenueCollection
    {
        return new AthleticVenueCollection($this->send("get", [], []));
    }
}
