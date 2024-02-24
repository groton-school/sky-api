<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Venues;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\BuildingReadCollection;

/**
 * @api
 */
class Buildings extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/venues/buildings";

    /**
     * Returns a collection of buildings.
     *
     * **Requires the 'Team Schedule Manager', 'Coach', 'Athletic Group
     * Manager' or 'Pending Coach' role in the K12 system.**
     *
     * @return \Blackbaud\SKY\School\Components\BuildingReadCollection Success
     */
    public function getAll(): BuildingReadCollection
    {
        return new BuildingReadCollection($this->send("get", [], []));
    }
}
