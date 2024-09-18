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
     * @param array{user_id: int, schoolYear: string, season: string,
     *   include_: string} $params An associative array
     *     - user_id: Format - int32. The ID of the student
     *     - schoolYear: The description of the school year
     *     - season: The description of the season
     *     - include_: Show all athletic requirements or only those completed
     *   or missing. School year and season are required if not set to
     *   completed. Allowed values: all, completed, missing
     *
     * @return \Blackbaud\SKY\School\Components\StudentAthleticRequirementRead[]
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): array
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['schoolYear']), new ArgumentException("Parameter `schoolYear` is required"));
        assert(isset($params['season']), new ArgumentException("Parameter `season` is required"));
        assert(isset($params['include_']), new ArgumentException("Parameter `include_` is required"));

        return array_map(fn($a) => new StudentAthleticRequirementRead($a), $this->send("get", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['schoolYear','season','include_']), ARRAY_FILTER_USE_KEY)));
    }
}
