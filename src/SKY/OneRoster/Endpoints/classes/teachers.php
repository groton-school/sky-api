<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\classes;

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
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/teachers";

    /**
     * Returns a collection of teacher user data for the specified `class_id`.
     *
     *
     * Roles returned include:
     *
     * - Teacher
     *
     * - Pending Teacher
     *
     * @param array{class_id: string} $params An associative array
     *     - class_id: sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\UsersOutputModel
     *
     * @api
     */
    public function getByClass(array $params)
    {
        return new UsersOutputModel($this->send("get", ["{class_id}" => $params["class_id"]], []));
    }
}
