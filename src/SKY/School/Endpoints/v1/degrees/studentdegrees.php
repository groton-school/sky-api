<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\degrees;

use Battis\OpenAPI\Client\BaseEndpoint;

class studentdegrees extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/degrees/studentdegrees/{student_id}";

    public function get(string $student_id): void
    {
        return $this->send("get", ["{student_id}" => $student_id]);
    }
}
