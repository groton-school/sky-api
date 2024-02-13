<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\types;

use Battis\OpenAPI\Client\BaseEndpoint;

class attendancetypes extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/types/attendancetypes";

    public function get(): void
    {
        return $this->send("get");
    }
}
