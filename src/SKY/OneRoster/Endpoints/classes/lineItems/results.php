<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Endpoints\classes\lineItems;

use Battis\OpenAPI\Client\BaseEndpoint;

class results extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/lineItems/{li_id}/results";

    public function get(string $class_id, string $li_id): void
    {
        return $this->send("get", ["{class_id}" => $class_id, "{li_id}" => $li_id]);
    }
}
