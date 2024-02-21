<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Schools;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\UsersOutputModel;

/**
 * @api
 */
class Teachers extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/teachers";

    /**
     * Returns a collection of teacher user data for the specified
     * `school_id`.
     *
     * Roles returned include:
     *
     * - Teacher
     *
     * - Pending Teacher
     *
     * @param string $school_id sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModelSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function getBySchool(string $school_id): UsersOutputModel
    {
        assert($school_id !== null, new ArgumentException("Parameter `school_id` is required"));

        return new UsersOutputModel($this->send("get", ["{school_id}" => $school_id], []));
    }
}
