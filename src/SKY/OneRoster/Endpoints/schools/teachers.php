<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Endpoints\schools;

use Battis\OpenAPI\Client\BaseEndpoint;

class teachers extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/teachers";

    public function get(string $school_id): void
    {
        return $this->send("get", ["{school_id}" => $school_id]);
    }
}
