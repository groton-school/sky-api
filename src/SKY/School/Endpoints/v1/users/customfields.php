<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\UserAdminCustomField;
use Blackbaud\SKY\School\Objects\UserAdminCustomFieldCollection;

/**
 * @api
 */
class customfields extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/customfields";

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
     * @param array{base_role_ids: string, marker?: int, field_ids?: string}
     *   $params An associative array
     *     - base_role_ids: A comma delimited list of base role IDs to get
     *   users for. Example: ```base_role_ids=14,16``` for Students and Parents.

     *     - marker: (Optional) Format - int32. The user's ```id``` to start
     *   at to return the next batch of data. Results will start with the next
     *   user in the result set.
     *     - field_ids: (Optional) A comma delimited list of field IDs to
     *   filter the result set down to. Only matching custom fields will be
     *   returned from that result set for all users in that set even if they
     *   don't have any data for the given ```field_ids```.
     *
     * @return \Blackbaud\SKY\School\Objects\UserAdminCustomFieldCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new UserAdminCustomFieldCollection($this->send("get", [], ["base_role_ids" => $params["base_role_ids"],
        "marker" => $params["marker"],
        "field_ids" => $params["field_ids"]]));
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
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The id of the user to get custom fields
     *   for.
     *
     * @return \Blackbaud\SKY\School\Objects\UserAdminCustomField
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return new UserAdminCustomField($this->send("get", ["{user_id}" => $params["user_id"]], []));
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
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user to create a custom
     *   field for
     *
     * @return \bool
     *
     * @api
     */
    public function postByUser(array $params)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], []);
    }

    /**
     * Updates an admin custom field for a user.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The Id of the user to update an existing
     *   custom field for.
     *
     * @return \bool
     *
     * @api
     */
    public function patchByUser(array $params)
    {
        return $this->send("patch", ["{user_id}" => $params["user_id"]], []);
    }
}
