<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\academics\schedules;

use Battis\OpenAPI\Client\BaseEndpoint;

class sets extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/schedules/sets/{schedule_set_id}";

    public function get(string $schedule_set_id): void
    {
        return $this->send("get", ["{schedule_set_id}" => $schedule_set_id]);
    }
}
