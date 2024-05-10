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
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/customfields/list";

    /**
     * Creates a list of admin custom field for a user.
     *
     *  Does not create any of the ten default custom fields, every user has
     * those fields created for them by default. To update those fields see
     * User Custom Field Values Update.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user to create a custom
     *   field for
     * @param \Blackbaud\SKY\School\Components\UserAdminCustomFieldCreate[]
     *   $requestBody Object that describes the list of custom fields that will
     *   be created for the user.
     *
     * @return bool Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToUserId(array $params, array $requestBody): bool
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }

    /**
     * Updates a list of admin custom field for a user.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user to update an existing
     *   custom field for.
     * @param \Blackbaud\SKY\School\Components\UserAdminCustomFieldUpdate[]
     *   $requestBody Object that describes the custom field that should be
     *   updated.
     *
     * @return bool Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnUserId(array $params, array $requestBody): bool
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), $requestBody);
    }
}
