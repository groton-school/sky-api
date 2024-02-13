<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\content\news;

use Battis\OpenAPI\Client\BaseEndpoint;

class items extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/content/news/items";

    public function get(): void
    {
        return $this->send("get");
    }
}
