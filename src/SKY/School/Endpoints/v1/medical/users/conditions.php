<?php

namespace Blackbaud\SKY\School\Endpoints\v1\medical\users;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class conditions extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/medical/users/{user_id}/conditions";

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
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. ID of the student
     *
     * @return \Blackbaud\SKY\School\Objects\StudentConditionView[]
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return $this->send("get", ["{user_id}" => $params["user_id"]], []);
    }
}
