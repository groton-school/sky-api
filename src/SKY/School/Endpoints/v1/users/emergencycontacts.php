<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class emergencycontacts extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/emergencycontacts";

    public function get(string $user_id): void
    {
        return $this->send("get", ["{user_id}" => $user_id]);
    }
}
