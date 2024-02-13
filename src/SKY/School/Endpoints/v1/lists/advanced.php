<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\lists;

use Battis\OpenAPI\Client\BaseEndpoint;

class advanced extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/lists/advanced/{list_id}";

    public function get(string $list_id): void
    {
        return $this->send("get", ["{list_id}" => $list_id]);
    }
}
