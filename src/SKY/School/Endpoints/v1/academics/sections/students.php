<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics\sections;

use Battis\OpenAPI\Client\BaseEndpoint;

class students extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/students";

    public function post(): void
    {
        return $this->send("post");
    }
}
