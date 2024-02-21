<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Users;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\EmergencyContactList;
use Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Changed;
use Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Nonuser;
use Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\User;

/**
 * @api
 */
class Emergencycontacts extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}/emergencycontacts";

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Changed
     *   $_changed
     */
    public Changed $_changed;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\User
     *   $_user
     */
    public User $_user;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Nonuser
     *   $_nonuser
     */
    public Nonuser $_nonuser;

    /**
     * Returns a collection of a emergency contacts for the specified
     * ```user_id```. Requires at least one of the following roles in the
     * Education Management system:
     *
     * - SKY API Data Sync
     *
     * @param int $user_id Format - int32. The ID of the user.
     *
     * @return \Blackbaud\SKY\School\Components\EmergencyContactList Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByUser(int $user_id): EmergencyContactList
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new EmergencyContactList($this->send("get", ["{user_id}" => $user_id], []));
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Changed

     *
     * @api
     */
    public function changed(): Changed
    {
        if ($this->_changed === null) {
            $this->_changed = new Changed($this->api);
        }
        return $this->_changed;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\User
     *
     * @api
     */
    public function user(): User
    {
        if ($this->_user === null) {
            $this->_user = new User($this->api);
        }
        return $this->_user;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts\Nonuser

     *
     * @api
     */
    public function nonuser(): Nonuser
    {
        if ($this->_nonuser === null) {
            $this->_nonuser = new Nonuser($this->api);
        }
        return $this->_nonuser;
    }
}
