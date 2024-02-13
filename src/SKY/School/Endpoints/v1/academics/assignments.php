<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;

class assignments extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/{student_id}/assignments";

    public function get(string $student_id): void
    {
        return $this->send("get", ["{student_id}" => $student_id]);
    }
}
