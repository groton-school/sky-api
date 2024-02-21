<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\RelationshipCreate;
use Blackbaud\SKY\School\Components\RelationshipReadCollection;

/**
 * @api
 */
class Relationships extends BaseEndpoint
{
    /**
     * @var string $url
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
     * @param int $user_id Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\RelationshipReadCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): RelationshipReadCollection
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new RelationshipReadCollection($this->send("get", ["{user_id}" => $user_id], []));
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
     * @param int $user_id Format - int32. The ID of the user.
     * @param \Blackbaud\SKY\School\Components\RelationshipCreate $requestBody
     *   Defines the relationship to be created.
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function postByUser(int $user_id, RelationshipCreate $requestBody): void
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", ["{user_id}" => $user_id], [], $requestBody);
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
     * @param int $user_id Format - int32. The ID of the user for whom you are
     *   deleting the relationship.
     * @param int $left_user Format - int32. ID of the other user in the
     *   relationship.
     * @param string $relationship_type Defines the relationship between
     *   left_user and this user.
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function deleteByUser(int $user_id, int $left_user, string $relationship_type): void
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));
        assert($left_user !== null, new ArgumentException("Parameter `left_user` is required"));
        assert($relationship_type !== null, new ArgumentException("Parameter `relationship_type` is required"));

        return $this->send("delete", ["{user_id}" => $user_id], ["left_user" => $left_user,
        "relationship_type" => $relationship_type]);
    }
}
