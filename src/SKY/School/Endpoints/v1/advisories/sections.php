<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\advisories;

use Battis\OpenAPI\Client\BaseEndpoint;

class sections extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/advisories/sections";

    public function get(): void
    {
        return $this->send("get");
    }
}
