<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Endpoints\terms;

use Battis\OpenAPI\Client\BaseEndpoint;

class gradingPeriods extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/terms/{term_id}/gradingPeriods";

    public function get(string $term_id): void
    {
        return $this->send("get", ["{term_id}" => $term_id]);
    }
}
