<?php

namespace Blackbaud\SKY\School\Endpoints\v1\users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\RelationshipReadCollection;

/**
 * @api
 */
class relationships extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/relationships";

    /**
     * Returns a collection of a relationships for the specified
     * ```user_id```. Requires at least one of the following roles in the
     * Education Management system:
     *
     * - Payment Services Manager
     *
     * - Integration Manager
     *
     * - Contact Card Manager
     *
     * - Platform Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Objects\RelationshipReadCollection
     *
     * @api
     */
    public function getByUser(array $params)
    {
        return new RelationshipReadCollection($this->send("get", ["{user_id}" => $params["user_id"]], []));
    }

    /**
     * Creates a relationship record for the specified ```user_id```.
     *
     * This doesn't create a user profile for the related individual.
     *
     * Returns 200 OK Requires at least one of the following roles in the
     * Education Management system:
     *
     * - Payment Services Manager
     *
     * - Integration Manager
     *
     * - Contact Card Manager
     *
     * - Platform Manager
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \void
     *
     * @api
     */
    public function postByUser(array $params)
    {
        return $this->send("post", ["{user_id}" => $params["user_id"]], []);
    }

    /**
     * Removes a relationship record from the specified ```user_id```.
     *
     * If the related individual is also a user, the user profile of that user
     * is preserved. Individuals may need to review or update their emergency
     * contacts. Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Payment Services Manager
     *
     * - Integration Manager
     *
     * - Contact Card Manager
     *
     * - Platform Manager
     *
     * @param array{user_id: int, left_user: int, relationship_type: string}
     *   $params An associative array
     *     - user_id: Format - int32. The ID of the user for whom you are
     *   deleting the relationship.
     *     - left_user: Format - int32. ID of the other user in the
     *   relationship.
     *     - relationship_type: Defines the relationship between left_user and
     *   this user.
     *
     * @return \void
     *
     * @api
     */
    public function deleteByUser(array $params)
    {
        return $this->send("delete", ["{user_id}" => $params["user_id"]], ["left_user" => $params["left_user"],
        "relationship_type" => $params["relationship_type"]]);
    }
}
