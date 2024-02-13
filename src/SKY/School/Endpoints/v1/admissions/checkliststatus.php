<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\admissions;

use Battis\OpenAPI\Client\BaseEndpoint;

class checkliststatus extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/admissions/checkliststatus";

    public function get(): void
    {
        return $this->send("get");
    }
}
