<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\venues;

use Battis\OpenAPI\Client\BaseEndpoint;

class buildings extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/venues/buildings";

    public function get(): void
    {
        return $this->send("get");
    }
}
