<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class students extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{parent_id}/students";

    public function get(string $parent_id): void
    {
        return $this->send("get", ["{parent_id}" => $parent_id]);
    }
}
