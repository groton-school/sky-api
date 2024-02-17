<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics\teams;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\Roster;

/**
 * @api
 */
class roster extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/roster";

    /**
     * Returns a collection of players and coaches for the specified athletic
     * team's ID.
     *
     * The ```team_id``` can be retrieved using the GET athletics teams
     * endpoint.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. The ID for the team to get the roster
     *   for.
     *
     * @return \Blackbaud\SKY\School\Objects\Roster
     *
     * @api
     */
    public function getByTeam(array $params)
    {
        return new Roster($this->send("get", ["{team_id}" => $params["team_id"]], []));
    }
}
