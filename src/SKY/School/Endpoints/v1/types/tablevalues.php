<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\types;

use Battis\OpenAPI\Client\BaseEndpoint;

class tablevalues extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/types/tablevalues";

    public function get(): void
    {
        return $this->send("get");
    }
}
