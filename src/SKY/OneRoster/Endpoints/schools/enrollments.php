<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Endpoints\schools;

use Battis\OpenAPI\Client\BaseEndpoint;

class enrollments extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/enrollments";

    public function get(string $school_id): void
    {
        return $this->send("get", ["{school_id}" => $school_id]);
    }
}
