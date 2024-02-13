<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics\teachers;

use Battis\OpenAPI\Client\BaseEndpoint;

class sections extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/teachers/{teacher_id}/sections";

    public function get(string $teacher_id): void
    {
        return $this->send("get", ["{teacher_id}" => $teacher_id]);
    }
}
