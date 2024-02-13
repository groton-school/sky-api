<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class relationships extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/relationships";

    public function get(string $user_id): void
    {
        return $this->send("get", ["{user_id}" => $user_id]);
    }

    public function post(string $user_id): void
    {
        return $this->send("post", ["{user_id}" => $user_id]);
    }

    public function delete(string $user_id): void
    {
        return $this->send("delete", ["{user_id}" => $user_id]);
    }
}
