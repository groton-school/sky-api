<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\FacultyEmploymentRead;

/**
 * @api
 */
class Employment extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/employment";

    /**
     * Returns the employment details for the specified ```user\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param int $user_id Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\FacultyEmploymentRead Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUser(int $user_id): FacultyEmploymentRead
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new FacultyEmploymentRead($this->send("get", ["{user_id}" => $user_id], []));
    }
}
