<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics\teams\schedule;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class practice extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/schedule/practice/{practice_id}";

    /**
     * Creates a new athletic practice for the specified ```team_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Team Schedule Manager
     *
     * - Page Manager
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. ID of the team for the practice to be
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
     * Updates the practice data for the specified athletic practice ```id```.
     *
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. The ID of the team for the practice to
     *   be updated
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
     * Removes the athletic ```practice_id``` for the specified ```team_id```.
     *
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Team Schedule Manager
     *
     * - Page Manager
     *
     * @param array{team_id: int, practice_id: int} $params An associative
     *   array
     *     - team_id: Format - int32. ID of the team for the practice to be
     *   deleted
     *     - practice_id: Format - int32. ID of the practice to be deleted
     *
     * @return \void
     *
     * @api
     */
    public function deleteByTeam(array $params)
    {
        return $this->send("delete", ["{team_id}" => $params["team_id"],
        "{practice_id}" => $params["practice_id"]], []);
    }
}
