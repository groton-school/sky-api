<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\events;

use Battis\OpenAPI\Client\BaseEndpoint;

class calendar extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/events/calendar";

    public function get(): void
    {
        return $this->send("get");
    }
}
