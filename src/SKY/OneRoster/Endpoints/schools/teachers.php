<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\schools;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\UsersOutputModel;

/**
 * @api
 */
class teachers extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/teachers";

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
     * @param array{school_id: string} $params An associative array
     *     - school_id: sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\UsersOutputModel
     *
     * @api
     */
    public function getBySchool(array $params)
    {
        return new UsersOutputModel($this->send("get", ["{school_id}" => $params["school_id"]], []));
    }
}
