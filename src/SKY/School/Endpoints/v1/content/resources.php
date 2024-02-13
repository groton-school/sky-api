<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\content;

use Battis\OpenAPI\Client\BaseEndpoint;

class resources extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/resources";

    public function get(): void
    {
        return $this->send("get");
    }
}
