<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\content\news;

use Battis\OpenAPI\Client\BaseEndpoint;

class categories extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/news/categories";

    public function get(): void
    {
        return $this->send("get");
    }
}
