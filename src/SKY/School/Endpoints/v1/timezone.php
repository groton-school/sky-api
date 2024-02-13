<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;

class timezone extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/timezone";

    public function get(): void
    {
        return $this->send("get");
    }
}
