<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics\enrollments;

use Battis\OpenAPI\Client\BaseEndpoint;

class changes extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/enrollments/changes";

    public function get(): void
    {
        return $this->send("get");
    }
}
