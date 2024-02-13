<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;

class categories extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/categories/{id}";

    public function get(string $id): void
    {
        return $this->send("get", ["{id}" => $id]);
    }

    public function put(string $id): void
    {
        return $this->send("put", ["{id}" => $id]);
    }
}
