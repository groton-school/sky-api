<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users\emergencycontacts;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\EmergencyContactNonUserCreate;

/**
 * @api
 */
class nonuser extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/emergencycontacts/nonuser";

    /**
     * Creates a non-user emergency contact for the given user.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     * @param Blackbaud\SKY\School\Objects\EmergencyContactNonUserCreate
     *   $requestBody
     *
     * @return \void
     *
     * @api
     */
    public function postByUser(array $params, EmergencyContactNonUserCreate $requestBody)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], [], $requestBody);
    }
}
