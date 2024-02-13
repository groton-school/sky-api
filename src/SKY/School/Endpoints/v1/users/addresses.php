<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;

class addresses extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/addresses/{address_id}/{address_type_id}";

    public function delete(string $user_id, string $address_id, string $address_type_id): void
    {
        return $this->send("delete", ["{user_id}" => $user_id, "{address_id}" => $address_id, "{address_type_id}" => $address_type_id]);
    }
}
