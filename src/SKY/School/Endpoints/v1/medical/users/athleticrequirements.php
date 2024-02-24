<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentAthleticRequirementRead;

/**
 * @api
 */
class Athleticrequirements extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/athleticrequirements";

    /**
     * Returns a collection of medical athletic requirements for a student.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Nurse
     *
     * - Coach
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param int $user_id Format - int32. The ID of the student
     * @param ?string $schoolYear The description of the school year
     * @param ?string $season The description of the season
     * @param ?string $include_ Show all athletic requirements or only those
     *   completed or missing. School year and season are required if not set to
     *   completed. Allowed values: all, completed, missing
     *
     * @return \Blackbaud\SKY\School\Components\StudentAthleticRequirementRead[]
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUser(int $user_id, ?string $schoolYear, ?string $season, ?string $include_): array
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($schoolYear !== null, new ArgumentException("Parameter `schoolYear` is required"));
        assert($season !== null, new ArgumentException("Parameter `season` is required"));
        assert($include_ !== null, new ArgumentException("Parameter `include_` is required"));

        return array_map(fn($a) => new StudentAthleticRequirementRead($a), $this->send("get", ["{user_id}" => $user_id], ["schoolYear" => $schoolYear,
        "season" => $season,
        "include_" => $include_]));
    }
}
