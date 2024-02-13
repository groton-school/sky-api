<?php

namespace GrotonSchool\Blackbaud\SKY\School\Endpoints\v1\athletics\teams;

use Battis\OpenAPI\Client\BaseEndpoint;

class schedule extends BaseEndpoint
{
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/schedule/{game_id}";

    public function delete(string $team_id, string $game_id): void
    {
        return $this->send("delete", ["{team_id}" => $team_id, "{game_id}" => $game_id]);
    }
}
