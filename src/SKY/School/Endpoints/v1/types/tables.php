<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\types;

use Battis\OpenAPI\Client\BaseEndpoint;

class tables extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/types/tables";

    public function get(): void
    {
        return $this->send("get");
    }
}
