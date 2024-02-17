<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical\users;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class athleticrequirements extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/athleticrequirements";

    /**
     * Returns a collection of medical athletic requirements for a student.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Nurse
     *
     * - Coach
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{user_id: int, schoolYear?: string, season?: string,
     *   include?: string} $params An associative array
     *     - user_id: Format - int32. The ID of the student
     *     - schoolYear: (Optional) The description of the school year
     *     - season: (Optional) The description of the season
     *     - include: (Optional) Show all athletic requirements or only those
     *   completed or missing. School year and season are required if not set to
     *   completed. Allowed values: all, completed, missing
     *
     * @return \Blackbaud\SKY\School\Objects\StudentAthleticRequirementRead[]
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return $this->send("get", ["{user_id}" => $params["user_id"]], ["schoolYear" => $params["schoolYear"],
        "season" => $params["season"],
        "include" => $params["include"]]);
    }
}
