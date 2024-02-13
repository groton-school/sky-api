<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class enroll extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/enroll";

    public function post(): void
    {
        return $this->send("post");
    }
}
