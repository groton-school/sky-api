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
 * Routing class for the subnamespace `Customfields`
 *
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
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/customfields";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
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
     *  Use the last user ```id``` number as the ```marker``` value to return
     * the next set of results. For example: ```marker=23232323``` will return
     * a second set of results beginning with the next user ID in the result
     * set.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param array{base_role_ids: string, marker: int, field_ids: string}
     *   $params An associative array
     *     - base_role_ids: A comma delimited list of base role IDs to get
     *   users for. Example: ```base\_role\_ids=14,16``` for Students and
     *   Parents.
     *     - marker: Format - int32. The user's ```id``` to start at to return
     *   the next batch of data. Results will start with the next user in the
     *   result set.
     *     - field_ids: A comma delimited list of field IDs to filter the
     *   result set down to. Only matching custom fields will be returned from
     *   that result set for all users in that set even if they don't have any
     *   data for the given ```field\_ids```.
     *
     * @return \Blackbaud\SKY\School\Components\UserAdminCustomFieldCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): UserAdminCustomFieldCollection
    {
        assert(isset($params['base_role_ids']), new ArgumentException("Parameter `base_role_ids` is required"));
        assert(isset($params['marker']), new ArgumentException("Parameter `marker` is required"));
        assert(isset($params['field_ids']), new ArgumentException("Parameter `field_ids` is required"));

        return new UserAdminCustomFieldCollection($this->send("get", [], ["base_role_ids" => $params['base_role_ids'],
            "marker" => $params['marker'],
            "field_ids" => $params['field_ids']]));
    }

    /**
     * Returns a collection of custom fields for a single ```user\_id```. This
     * includes both user custom fields and administration view only custom
     * fields.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The id of the user to get custom fields
     *   for.
     *
     * @return \Blackbaud\SKY\School\Components\UserAdminCustomField Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): UserAdminCustomField
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new UserAdminCustomField($this->send("get", ["{user_id}" => $params['user_id']], []));
    }

    /**
     * Creates an admin custom field for a user.
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
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user to create a custom
     *   field for
     * @param \Blackbaud\SKY\School\Components\UserAdminCustomFieldCreate
     *   $requestBody Object that describes the custom field that will be
     *   created.
     *
     * @return bool Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToUserId(array $params, UserAdminCustomFieldCreate $requestBody): bool
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $params['user_id']], [], $requestBody);
    }

    /**
     * Updates an admin custom field for a user.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user to update an existing
     *   custom field for.
     * @param \Blackbaud\SKY\School\Components\UserAdminCustomFieldUpdate
     *   $requestBody Object that describes the custom field that should be
     *   updated.
     *
     * @return bool Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnUserId(array $params, UserAdminCustomFieldUpdate $requestBody): bool
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", ["{user_id}" => $params['user_id']], [], $requestBody);
    }
}
