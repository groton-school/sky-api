<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics\schedules;

use Battis\OpenAPI\Client\BaseEndpoint;

class master extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/schedules/master";

    public function get(): void
    {
        return $this->send("get");
    }
}
