<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\RelationshipCreate;
use Blackbaud\SKY\School\Components\RelationshipReadCollection;
use Blackbaud\SKY\School\Components\RelationshipUpdate;

/**
 * @api
 */
class Relationships extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/relationships/{left_user_id}";

    /**
     * Returns a collection of a relationships for the specified
     * ```user\_id```. Requires at least one of the following roles in the
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
     * @return \Blackbaud\SKY\School\Components\RelationshipReadCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByUserId(array $params): RelationshipReadCollection
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new RelationshipReadCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), []));
    }

    /**
     * Creates a relationship record for the specified ```user\_id```.
     *
     *  This doesn't create a user profile for the related individual.
     *
     *  Returns 200 OK Requires at least one of the following roles in the
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
     * @param \Blackbaud\SKY\School\Components\RelationshipCreate $requestBody
     *   Defines the relationship to be created.
     *
     * @return mixed Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function postToUserId(array $params, RelationshipCreate $requestBody): mixed
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }

    /**
     * Removes a relationship record from the specified ```user\_id```.
     *
     *  If the related individual is also a user, the user profile of that
     * user is preserved. Individuals may need to review or update their
     * emergency contacts. Requires at least one of the following roles in the
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
     * @param array{user_id: int, left_user: int, relationship_type:
     *   "NOT_SET"|"StepParent_StepChild"|"GrGrandParent_GrGrandChild"|"Guardian_Ward"|"AuntUncle_NieceNephew"|"Grandparent_Grandchild"|"Parent_Child"|"Custodian_Student"|"Consultant_Student"|"Caretaker_Charge"|"SpousePartner_SpousePartner"|"StepSibling_StepSibling"|"ExHusband_ExWife"|"Associate_Associate"|"HalfSibling_HalfSibling"|"Husband_Wife"|"Spouse_Spouse"|"Sibling_Sibling"|"Cousin_Cousin"|"Friend_Friend"} $params An associative array
     *     - user_id: Format - int32. The ID of the user for whom you are
     *   deleting the relationship.
     *     - left_user: Format - int32. ID of the other user in the
     *   relationship.
     *     - relationship_type: Defines the relationship between left\_user
     *   and this user.
     *
     * @return mixed Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function deleteByUserId(array $params): mixed
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['left_user']), new ArgumentException("Parameter `left_user` is required"));
        assert(isset($params['relationship_type']), new ArgumentException("Parameter `relationship_type` is required"));

        return $this->send("delete", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['left_user','relationship_type']), ARRAY_FILTER_USE_KEY));
    }

    /**
     * Updates a relationship record for the specified ```user\_id```.
     *
     *  Returns 200 OK Requires at least one of the following roles in the
     * Education Management system:
     *
     * - Contact Card Manager
     *
     * - Platform Manager
     *
     * \*\*\*This endpoint is in BETA. It may be removed or replaced with a 90
     * day deprecation period.\*\*\*
     *
     * @param array{user_id: int, left_user_id: int} $params An associative
     *   array
     *     - user_id: Format - int32. The ID of the user.
     *     - left_user_id: Format - int32. The user ID of the relationship to
     *   the user
     * @param \Blackbaud\SKY\School\Components\RelationshipUpdate $requestBody
     *   Defines the relationship to be updated.
     *
     * @return mixed Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patchOnUserIdAndLeftUserId(array $params, RelationshipUpdate $requestBody): mixed
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));
        assert(isset($params['left_user_id']), new ArgumentException("Parameter `left_user_id` is required"));
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", array_filter($params, fn($key) => in_array($key, ['user_id','left_user_id']), ARRAY_FILTER_USE_KEY), [], $requestBody);
    }
}
