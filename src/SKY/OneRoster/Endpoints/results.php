<?php

namespace GrotonSchool\Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;

class results extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/results/{id}";

    public function get(string $id): void
    {
        return $this->send("get", ["{id}" => $id]);
    }

    public function put(string $id): void
    {
        return $this->send("put", ["{id}" => $id]);
    }

    public function delete(string $id): void
    {
        return $this->send("delete", ["{id}" => $id]);
    }
}
