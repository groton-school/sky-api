<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\GameCreate;
use Blackbaud\SKY\School\Components\GameUpdate;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule\Practice;

/**
 * @api
 */
class Schedule extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/schedule/{game_id}";

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule\Practice
     *   $_practice
     */
    public Practice $_practice;

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
     * @param int $team_id Format - int32. ID of the team for the game to be
     *   created
     * @param \Blackbaud\SKY\School\Components\GameCreate $requestBody
     *   Information about the game to be created
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function postByTeam(int $team_id, GameCreate $requestBody): int
    {
        assert($team_id !== null, new ArgumentException("Parameter `team_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{team_id}" => $team_id], [], $requestBody);
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
     * @param int $team_id Format - int32. ID of the team for the game to be
     *   updated
     * @param \Blackbaud\SKY\School\Components\GameUpdate $requestBody
     *   Information for the game to be updated
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function patchByTeam(int $team_id, GameUpdate $requestBody): void
    {
        assert($team_id !== null, new ArgumentException("Parameter `team_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{team_id}" => $team_id], [], $requestBody);
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
     * @param int $team_id Format - int32. ID of the team for the game to be
     *   deleted
     * @param int $game_id Format - int32. ID of the game to be deleted
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function deleteByTeam(int $team_id, int $game_id): void
    {
        assert($team_id !== null, new ArgumentException("Parameter `team_id` is required"));
        assert($game_id !== null, new ArgumentException("Parameter `game_id` is required"));

        return $this->send("delete", ["{team_id}" => $team_id,
        "{game_id}" => $game_id], []);
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule\Practice

     *
     * @api
     */
    public function practice(): Practice
    {
        if ($this->_practice === null) {
            $this->_practice = new Practice($this->api);
        }
        return $this->_practice;
    }
}
