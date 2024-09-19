<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentAllergiesView;

/**
 * @api
 */
class Allergies extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/allergies";

    /**
     * Returns the medical allergies for a student.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Nurse
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. ID of the student
     *
     * @return \Blackbaud\SKY\School\Components\StudentAllergiesView[] Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): array
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return array_map(fn($a) => new StudentAllergiesView($a), $this->send("get", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
