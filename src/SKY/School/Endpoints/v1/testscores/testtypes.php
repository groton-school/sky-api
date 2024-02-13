<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\testscores;

use Battis\OpenAPI\Client\BaseEndpoint;

class testtypes extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/testscores/testtypes";

    public function get(): void
    {
        return $this->send("get");
    }
}
