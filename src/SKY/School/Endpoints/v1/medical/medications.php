<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\medical;

use Battis\OpenAPI\Client\BaseEndpoint;

class medications extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/medications/{medication_id}";

    public function delete(string $medication_id): void
    {
        return $this->send("delete", ["{medication_id}" => $medication_id]);
    }

    public function patch(string $medication_id): void
    {
        return $this->send("patch", ["{medication_id}" => $medication_id]);
    }
}
