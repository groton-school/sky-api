<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics\sections;

use Battis\OpenAPI\Client\BaseEndpoint;

class cycles extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections/{section_id}/cycles";

    public function get(string $section_id): void
    {
        return $this->send("get", ["{section_id}" => $section_id]);
    }
}
