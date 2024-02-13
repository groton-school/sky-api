<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\content\events;

use Battis\OpenAPI\Client\BaseEndpoint;

class categories extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/events/categories";

    public function get(): void
    {
        return $this->send("get");
    }
}
