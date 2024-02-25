<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\GameCreate;
use Blackbaud\SKY\School\Components\GameUpdate;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule\Practice;

/**
 * Routing class for the subnamespace `Schedule`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule\Practice
 *   $practice
 *
 * @api
 */
class Schedule extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/schedule/{game_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "practice" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule\Practice",
    ];

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule\Practice
     *   $_practice
     */
    protected Practice $_practice = null;

    /**
     * Creates a new athletic game for the specified ```team_id```. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending
     * Coach</li></ul>
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. ID of the team for the game to be
     *   created
     * @param \Blackbaud\SKY\School\Components\GameCreate $requestBody
     *   Information about the game to be created
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postByTeam(array $params, GameCreate $requestBody): int
    {
        assert(isset($params['team_id']), new ArgumentException("Parameter `team_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{team_id}" => $params['team_id']], [], $requestBody);
    }

    /**
     * Updates the game data for the specified ```team_id``` and athletic
     * ```game_id```. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending
     * Coach</li></ul>
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. ID of the team for the game to be
     *   updated
     * @param \Blackbaud\SKY\School\Components\GameUpdate $requestBody
     *   Information for the game to be updated
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByTeam(array $params, GameUpdate $requestBody): void
    {
        assert(isset($params['team_id']), new ArgumentException("Parameter `team_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{team_id}" => $params['team_id']], [], $requestBody);
    }

    /**
     * Removes an athletic ```game_id``` for the specified ```team_id```. <br
     * />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Team Schedule Manager</li><li>Page Manager</li></ul>
     *
     * @param array{team_id: int, game_id: int} $params An associative array
     *     - team_id: Format - int32. ID of the team for the game to be
     *   deleted
     *     - game_id: Format - int32. ID of the game to be deleted
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByTeam(array $params): void
    {
        assert(isset($params['team_id']), new ArgumentException("Parameter `team_id` is required"));
        assert(isset($params['game_id']), new ArgumentException("Parameter `game_id` is required"));

        return $this->send("delete", ["{team_id}" => $params['team_id'],
        "{game_id}" => $params['game_id']], []);
    }
}
