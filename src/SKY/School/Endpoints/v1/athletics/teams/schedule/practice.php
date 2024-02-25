<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\PracticeCreate;
use Blackbaud\SKY\School\Components\PracticeUpdate;

/**
 * @api
 */
class Practice extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams/{team_id}/schedule/practice/{practice_id}";

    /**
     * Creates a new athletic practice for the specified ```team_id```. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Team Schedule Manager</li><li>Page Manager</li></ul>
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. ID of the team for the practice to be
     *   created
     * @param \Blackbaud\SKY\School\Components\PracticeCreate $requestBody
     *   Information about the practice to be created
     *
     * @return int Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postByTeam(array $params, PracticeCreate $requestBody): int
    {
        assert(isset($params['team_id']), new ArgumentException("Parameter `team_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{team_id}" => $params['team_id']], [], $requestBody);
    }

    /**
     * Updates the practice data for the specified athletic practice ```id```.
     * <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li></ul>
     *
     * @param array{team_id: int} $params An associative array
     *     - team_id: Format - int32. The ID of the team for the practice to
     *   be updated
     * @param \Blackbaud\SKY\School\Components\PracticeUpdate $requestBody
     *   Information about the practice to be updated
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchByTeam(array $params, PracticeUpdate $requestBody): void
    {
        assert(isset($params['team_id']), new ArgumentException("Parameter `team_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{team_id}" => $params['team_id']], [], $requestBody);
    }

    /**
     * Removes the athletic ```practice_id``` for the specified ```team_id```.
     * <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Team Schedule Manager</li><li>Page Manager</li></ul>
     *
     * @param array{team_id: int, practice_id: int} $params An associative
     *   array
     *     - team_id: Format - int32. ID of the team for the practice to be
     *   deleted
     *     - practice_id: Format - int32. ID of the practice to be deleted
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByTeam(array $params): void
    {
        assert(isset($params['team_id']), new ArgumentException("Parameter `team_id` is required"));
        assert(isset($params['practice_id']), new ArgumentException("Parameter `practice_id` is required"));

        return $this->send("delete", ["{team_id}" => $params['team_id'],
        "{practice_id}" => $params['practice_id']], []);
    }
}
