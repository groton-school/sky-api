<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;

class directories extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/directories/{directory_id}";

    public function get(string $directory_id): void
    {
        return $this->send("get", ["{directory_id}" => $directory_id]);
    }
}
