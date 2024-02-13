<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;

class levels extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/levels";

    public function get(): void
    {
        return $this->send("get");
    }
}
