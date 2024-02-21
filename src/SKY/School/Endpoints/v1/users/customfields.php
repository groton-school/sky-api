<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserAdminCustomField;
use Blackbaud\SKY\School\Components\UserAdminCustomFieldCollection;
use Blackbaud\SKY\School\Components\UserAdminCustomFieldCreate;
use Blackbaud\SKY\School\Components\UserAdminCustomFieldUpdate;
use Blackbaud\SKY\School\Endpoints\V1\Users\Customfields\List_;

/**
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Customfields\List_
 *   $list_
 *
 * @api
 */
class Customfields extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/customfields";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "list_" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Customfields\List_",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Customfields\List_
     *   $_list_
     */
    protected ?List_ $_list_ = null;

    /**
     * Returns a paginated collection of users with custom admin fields,
     * limited to 100 users per page. This includes both user custom fields
     * and administration view only custom fields.
     *
     * Use the last user ```id``` number as the ```marker``` value to return
     * the next set of results. For example: ```marker=23232323``` will return
     * a second set of results beginning with the next user ID in the result
     * set.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param string $base_role_ids A comma delimited list of base role IDs to
     *   get users for. Example: ```base_role_ids=14,16``` for Students and
     *   Parents.
     * @param ?int $marker (Optional) Format - int32. The user's ```id``` to
     *   start at to return the next batch of data. Results will start with the
     *   next user in the result set.
     * @param ?string $field_ids (Optional) A comma delimited list of field
     *   IDs to filter the result set down to. Only matching custom fields will
     *   be returned from that result set for all users in that set even if they
     *   don't have any data for the given ```field_ids```.
     *
     * @return \Blackbaud\SKY\School\Components\UserAdminCustomFieldCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(string $base_role_ids, ?int $marker = null, ?string $field_ids = null): UserAdminCustomFieldCollection
    {
        assert($base_role_ids !== null, new ArgumentException("Parameter `base_role_ids` is required"));

        return new UserAdminCustomFieldCollection($this->send("get", [], ["base_role_ids" => $base_role_ids,
        "marker" => $marker,
        "field_ids" => $field_ids]));
    }

    /**
     * Returns a collection of custom fields for a single ```user_id```. This
     * includes both user custom fields and administration view only custom
     * fields.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param int $user_id Format - int32. The id of the user to get custom
     *   fields for.
     *
     * @return \Blackbaud\SKY\School\Components\UserAdminCustomField Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): UserAdminCustomField
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new UserAdminCustomField($this->send("get", ["{user_id}" => $user_id], []));
    }

    /**
     * Creates an admin custom field for a user.
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
     * @param int $user_id Format - int32. The Id of the user to create a
     *   custom field for
     * @param \Blackbaud\SKY\School\Components\UserAdminCustomFieldCreate
     *   $requestBody Object that describes the custom field that will be
     *   created.
     *
     * @return bool Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function postByUser(int $user_id, UserAdminCustomFieldCreate $requestBody): bool
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
    }

    /**
     * Updates an admin custom field for a user.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param int $user_id Format - int32. The Id of the user to update an
     *   existing custom field for.
     * @param \Blackbaud\SKY\School\Components\UserAdminCustomFieldUpdate
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
    public function patchByUser(int $user_id, UserAdminCustomFieldUpdate $requestBody): bool
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $user_id], [], $requestBody);
    }
}
