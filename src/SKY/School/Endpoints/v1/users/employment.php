<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\FacultyEmploymentRead;

/**
 * @api
 */
class employment extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/employment";

    /**
     * Returns the employment details for the specified ```user_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Objects\FacultyEmploymentRead
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return new FacultyEmploymentRead($this->send("get", ["{user_id}" => $params["user_id"]], []));
    }
}
