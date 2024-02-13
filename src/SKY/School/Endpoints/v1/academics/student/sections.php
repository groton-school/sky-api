<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics\student;

use Battis\OpenAPI\Client\BaseEndpoint;

class sections extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/student/{student_id}/sections";

    public function get(string $student_id): void
    {
        return $this->send("get", ["{student_id}" => $student_id]);
    }
}
