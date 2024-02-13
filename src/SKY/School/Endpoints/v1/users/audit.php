<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class audit extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/audit";

    public function get(): void
    {
        return $this->send("get");
    }
}
