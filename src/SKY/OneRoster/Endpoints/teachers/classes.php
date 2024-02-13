<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Endpoints\teachers;

use Battis\OpenAPI\Client\BaseEndpoint;

class classes extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/teachers/{teacher_id}/classes";

    public function get(string $teacher_id): void
    {
        return $this->send("get", ["{teacher_id}" => $teacher_id]);
    }
}
