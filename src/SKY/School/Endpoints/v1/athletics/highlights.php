<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;

class highlights extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/highlights/{highlight_id}";

    public function get(string $highlight_id): void
    {
        return $this->send("get", ["{highlight_id}" => $highlight_id]);
    }
}
