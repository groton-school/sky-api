<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;

class securityroles extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/securityroles";

    public function get(): void
    {
        return $this->send("get");
    }
}
