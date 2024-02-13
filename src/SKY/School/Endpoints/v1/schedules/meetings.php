<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\schedules;

use Battis\OpenAPI\Client\BaseEndpoint;

class meetings extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/schedules/{student_id}/meetings";

    public function get(string $student_id): void
    {
        return $this->send("get", ["{student_id}" => $student_id]);
    }
}
