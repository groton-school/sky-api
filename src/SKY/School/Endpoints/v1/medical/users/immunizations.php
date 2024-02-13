<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\medical\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class immunizations extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/immunizations";

    public function get(string $user_id): void
    {
        return $this->send("get", ["{user_id}" => $user_id]);
    }
}
