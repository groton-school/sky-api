<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\admissions;

use Battis\OpenAPI\Client\BaseEndpoint;

class candidates extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/admissions/candidates";

    public function get(): void
    {
        return $this->send("get");
    }

    public function post(): void
    {
        return $this->send("post");
    }
}
