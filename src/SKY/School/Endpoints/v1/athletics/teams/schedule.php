<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics\teams;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class schedule extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/schedule/{game_id}";

    /**
     * Creates a new athletic game for the specified ```team_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. ID of the team for the game to be
     *   created
     *
     * @return \int
     *
     * @api
     */
    public function postByTeam(array $params)
    {
        return $this->send("post", ["{team_id}" => $params["team_id"]], []);
    }

    /**
     * Updates the game data for the specified ```team_id``` and athletic
     * ```game_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. ID of the team for the game to be
     *   updated
     *
     * @return \void
     *
     * @api
     */
    public function patchByTeam(array $params)
    {
        return $this->send("patch", ["{team_id}" => $params["team_id"]], []);
    }

    /**
     * Removes an athletic ```game_id``` for the specified ```team_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Team Schedule Manager
     *
     * - Page Manager
     *
     * @param array{team_id: int, game_id: int} $params An associative array
     *     - team_id: Format - int32. ID of the team for the game to be
     *   deleted
     *     - game_id: Format - int32. ID of the game to be deleted
     *
     * @return \void
     *
     * @api
     */
    public function deleteByTeam(array $params)
    {
        return $this->send("delete", ["{team_id}" => $params["team_id"],
        "{game_id}" => $params["game_id"]], []);
    }
}
