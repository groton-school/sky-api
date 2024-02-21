<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule;

use Battis\OpenAPI\Client\BaseEndpoint;
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
     * @param int $team_id Format - int32. ID of the team for the practice to
     *   be created
     * @param \Blackbaud\SKY\School\Components\PracticeCreate $requestBody
     *   Information about the practice to be created
     *
     * @return intSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function postByTeam(int $team_id, PracticeCreate $requestBody): int
    {
        assert($team_id !== null, new ArgumentException("Parameter `team_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{team_id}" => $team_id], [], $requestBody);
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
     * @param int $team_id Format - int32. The ID of the team for the practice
     *   to be updated
     * @param \Blackbaud\SKY\School\Components\PracticeUpdate $requestBody
     *   Information about the practice to be updated
     *
     * @return voidSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function patchByTeam(int $team_id, PracticeUpdate $requestBody): void
    {
        assert($team_id !== null, new ArgumentException("Parameter `team_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{team_id}" => $team_id], [], $requestBody);
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
     * @param int $team_id Format - int32. ID of the team for the practice to
     *   be deleted
     * @param int $practice_id Format - int32. ID of the practice to be
     *   deleted
     *
     * @return voidSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function deleteByTeam(int $team_id, int $practice_id): void
    {
        assert($team_id !== null, new ArgumentException("Parameter `team_id` is required"));
        assert($practice_id !== null, new ArgumentException("Parameter `practice_id` is required"));

        return $this->send("delete", ["{team_id}" => $team_id,
        "{practice_id}" => $practice_id], []);
    }
}
