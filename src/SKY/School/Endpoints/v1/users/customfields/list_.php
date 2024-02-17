<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users\customfields;

use Battis\OpenAPI\Client\BaseEndpoint;

/**
 * @api
 */
class list_ extends BaseEndpoint
{
    /**
     * @var string url
     */
protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/customfields/list";

    /**
     * Creates a list of admin custom field for a user.  
     *
     * Does not create any of the ten default custom fields, every user has
     * those fields created for them by default. To update those fields see
     * User Custom Field Values Update.  
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * ***This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.***
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user to create a custom
     *   field for
     * @param \Blackbaud\SKY\School\Objects\UserAdminCustomFieldCreate[]
     *   $requestBody Object that describes the list of custom fields that will
     *   be created for the user.
     *
     * @return \bool
     *
     * @api
     */
public function postByUser(array $params, UserAdminCustomFieldCreate[] $requestBody)
{
return $this->send("post", ["{user_id}" => $params["user_id"]], [], $requestBody);
}

    /**
     * Updates a list of admin custom field for a user.  
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user to update an existing
     *   custom field for.
     * @param \Blackbaud\SKY\School\Objects\UserAdminCustomFieldUpdate[]
     *   $requestBody Object that describes the custom field that should be
     *   updated.
     *
     * @return \bool
     *
     * @api
     */
public function patchByUser(array $params, UserAdminCustomFieldUpdate[] $requestBody)
{
return $this->send("patch", ["{user_id}" => $params["user_id"]], [], $requestBody);
}
}
