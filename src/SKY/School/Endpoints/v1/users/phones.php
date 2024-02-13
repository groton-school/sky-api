<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class phones extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/phones/{phone_id}";

    public function patch(string $user_id, string $phone_id): void
    {
        return $this->send("patch", ["{user_id}" => $user_id, "{phone_id}" => $phone_id]);
    }
}
