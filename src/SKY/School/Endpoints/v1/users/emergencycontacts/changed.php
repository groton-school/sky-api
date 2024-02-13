<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users\emergencycontacts;

use Battis\OpenAPI\Client\BaseEndpoint;

class changed extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/emergencycontacts/changed";

    public function get(): void
    {
        return $this->send("get");
    }
}
