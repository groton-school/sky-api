<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\EmergencyContactList;
use Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Changed;
use Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Nonuser;
use Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\User;

/**
 * Routing class for the subnamespace `Emergencycontacts`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Changed
 *   $changed
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\User
 *   $user
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Nonuser
 *   $nonuser
 *
 * @api
 */
class Emergencycontacts extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/emergencycontacts";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "changed" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Changed",
        "user" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\User",
        "nonuser" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Nonuser",
    ];

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Changed
     *   $_changed
     */
    protected Changed $_changed = null;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\User
     *   $_user
     */
    protected User $_user = null;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Nonuser
     *   $_nonuser
     */
    protected Nonuser $_nonuser = null;

    /**
     * Returns a collection of a emergency contacts for the specified
     * ```user\_id```. Requires at least one of the following roles in the
     * Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\EmergencyContactList Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): EmergencyContactList
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new EmergencyContactList($this->send("get", ["{user_id}" => $params['user_id']], []));
    }
}
