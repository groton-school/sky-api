<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;

class opponents extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/opponents";

    public function get(): void
    {
        return $this->send("get");
    }

    public function post(): void
    {
        return $this->send("post");
    }
}
