<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;

class testscores extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/testscores/{user_id}";

    public function post(string $user_id): void
    {
        return $this->send("post", ["{user_id}" => $user_id]);
    }
}
