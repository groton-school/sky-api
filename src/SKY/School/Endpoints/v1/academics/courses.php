<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;

class courses extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/courses";

    public function get(): void
    {
        return $this->send("get");
    }
}
