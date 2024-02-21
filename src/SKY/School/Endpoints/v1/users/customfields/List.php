<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users\Customfields;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;

/**
 * @api
 */
class List_ extends BaseEndpoint
{
    /**
     * @var string $url
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
     * @param int $user_id Format - int32. The Id of the user to create a
     *   custom field for
     * @param \\Blackbaud\SKY\School\Components\UserAdminCustomFieldCreate[]
     *   $requestBody Object that describes the list of custom fields that will
     *   be created for the user.
     *
     * @return bool Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function postByUser(int $user_id, array $requestBody): bool
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
    }

    /**
     * Updates a list of admin custom field for a user.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param int $user_id Format - int32. The Id of the user to update an
     *   existing custom field for.
     * @param \\Blackbaud\SKY\School\Components\UserAdminCustomFieldUpdate[]
     *   $requestBody Object that describes the custom field that should be
     *   updated.
     *
     * @return bool Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function patchByUser(int $user_id, array $requestBody): bool
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $user_id], [], $requestBody);
    }
}
