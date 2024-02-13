<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\admissions;

use Battis\OpenAPI\Client\BaseEndpoint;

class status extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/admissions/status";

    public function get(): void
    {
        return $this->send("get");
    }
}
