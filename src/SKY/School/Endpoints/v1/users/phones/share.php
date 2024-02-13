<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users\phones;

use Battis\OpenAPI\Client\BaseEndpoint;

class share extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/phones/share";

    public function post(string $user_id): void
    {
        return $this->send("post", ["{user_id}" => $user_id]);
    }
}
