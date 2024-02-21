<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentConditionView;

/**
 * @api
 */
class Conditions extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/conditions";

    /**
     * Returns the medical conditions for a student.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Nurse
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param int $user_id Format - int32. ID of the student
     *
     * @return \Blackbaud\SKY\School\Components\StudentConditionView[]Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): array
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return array_map(fn($a) => new StudentConditionView($a), $this->send("get", ["{user_id}" => $user_id], []));
    }
}
