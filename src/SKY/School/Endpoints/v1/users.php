<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;

class users extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}";

    public function get(string $user_id): void
    {
        return $this->send("get", ["{user_id}" => $user_id]);
    }
}
