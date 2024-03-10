<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes;

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
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/teachers";

    /**
     * Returns a collection of teacher user data for the specified `class_id`.
     *
     *
     *  Roles returned include:
     *
     * - Teacher
     *
     * - Pending Teacher
     *
     * @param array{class_id: string} $params An associative array
     *     - class_id: sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\UsersOutputModel Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByClassId(array $params): UsersOutputModel
    {
        assert(isset($params['class_id']), new ArgumentException("Parameter `class_id` is required"));

        return new UsersOutputModel($this->send("get", ["{class_id}" => $params['class_id']], []));
    }
}
