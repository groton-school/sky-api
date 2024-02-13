<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\athletics\teams\schedule;

use Battis\OpenAPI\Client\BaseEndpoint;

class practice extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/schedule/practice/{practice_id}";

    public function delete(string $team_id, string $practice_id): void
    {
        return $this->send("delete", ["{team_id}" => $team_id, "{practice_id}" => $practice_id]);
    }
}
