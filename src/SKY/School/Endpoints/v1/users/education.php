<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class education extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/education/{education_id}";

    public function delete(string $user_id, string $education_id): void
    {
        return $this->send("delete", ["{user_id}" => $user_id, "{education_id}" => $education_id]);
    }

    public function patch(string $user_id, string $education_id): void
    {
        return $this->send("patch", ["{user_id}" => $user_id, "{education_id}" => $education_id]);
    }
}
