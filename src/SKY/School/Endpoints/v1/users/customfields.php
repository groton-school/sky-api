<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class customfields extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/customfields";

    public function get(string $user_id): void
    {
        return $this->send("get", ["{user_id}" => $user_id]);
    }

    public function post(string $user_id): void
    {
        return $this->send("post", ["{user_id}" => $user_id]);
    }

    public function patch(string $user_id): void
    {
        return $this->send("patch", ["{user_id}" => $user_id]);
    }
}
