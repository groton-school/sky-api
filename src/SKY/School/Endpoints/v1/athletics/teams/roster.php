<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\athletics\teams;

use Battis\OpenAPI\Client\BaseEndpoint;

class roster extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/roster";

    public function get(string $team_id): void
    {
        return $this->send("get", ["{team_id}" => $team_id]);
    }
}
