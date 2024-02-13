<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\activities;

use Battis\OpenAPI\Client\BaseEndpoint;

class sections extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/activities/sections";

    public function get(): void
    {
        return $this->send("get");
    }
}
