<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\Roster as RosterDisambiguate;

/**
 * @api
 */
class Roster extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/roster";

    /**
     * Returns a collection of players and coaches for the specified athletic
     * team's ID.
     *
     *  The ```team\_id``` can be retrieved using the GET athletics teams
     * endpoint.
     *
     *  Requires at least one of the following roles in the Education
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
     * @param int $team_id Format - int32. The ID for the team to get the
     *   roster for.
     *
     * @return \Blackbaud\SKY\School\Components\Roster Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByTeam(int $team_id): RosterDisambiguate
    {
        assert($team_id !== null, new ArgumentException("Parameter `team_id` is required"));

        return new RosterDisambiguate($this->send("get", ["{team_id}" => $team_id], []));
    }
}
