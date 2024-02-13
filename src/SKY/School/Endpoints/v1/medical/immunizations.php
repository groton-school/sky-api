<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;

class immunizations extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/immunizations";

    public function post(): void
    {
        return $this->send("post");
    }
}
