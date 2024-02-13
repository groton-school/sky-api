<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Endpoints\classes;

use Battis\OpenAPI\Client\BaseEndpoint;

class students extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/students";

    public function get(string $class_id): void
    {
        return $this->send("get", ["{class_id}" => $class_id]);
    }
}
