<?php

namespace Blackbaud\SKY\School\Endpoints\v1\venues;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\BuildingReadCollection;

/**
 * @api
 */
class buildings extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/venues/buildings";

    /**
     * Returns a collection of buildings.
     *
     * **Requires the 'Team Schedule Manager', 'Coach', 'Athletic Group
     * Manager' or 'Pending Coach' role in the K12 system.**
     *
     * @return \Blackbaud\SKY\School\Objects\BuildingReadCollection
     *
     * @api
     */
    public function getAll()
    {
        return new BuildingReadCollection($this->send("get", [], []));
    }
}
