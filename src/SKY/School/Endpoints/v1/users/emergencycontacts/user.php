<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users\emergencycontacts;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\EmergencyContactUserCreate;

/**
 * @api
 */
class user extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/emergencycontacts/user";

    /**
     * Activates an existing inactive or suggested emergency contact for a
     * user. To add a new user emergency contact, add the correct relationship
     * between users first.
     *
     * To add a non-user emergency contact please see the Emergency Contact
     * Non-User Create route.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param Blackbaud\SKY\School\Objects\EmergencyContactUserCreate
     *   $requestBody
     *
     * @return \void
     *
     * @api
     */
    public function postByUser(array $params, EmergencyContactUserCreate $requestBody)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], [], $requestBody);
    }
}
