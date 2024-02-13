<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users\customfields;

use Battis\OpenAPI\Client\BaseEndpoint;

class _list extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/customfields/list";

    public function post(string $user_id): void
    {
        return $this->send("post", ["{user_id}" => $user_id]);
    }

    public function patch(string $user_id): void
    {
        return $this->send("patch", ["{user_id}" => $user_id]);
    }
}
