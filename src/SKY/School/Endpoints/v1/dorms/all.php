<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\dorms;

use Battis\OpenAPI\Client\BaseEndpoint;

class all extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/dorms/all";

    public function get(): void
    {
        return $this->send("get");
    }
}
