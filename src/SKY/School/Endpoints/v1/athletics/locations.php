<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;

class locations extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/locations";

    public function get(): void
    {
        return $this->send("get");
    }

    public function post(): void
    {
        return $this->send("post");
    }
}
