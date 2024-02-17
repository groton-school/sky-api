<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\schools\classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\EnrollmentsOutputModel;

/**
 * @api
 */
class enrollments extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/classes/{class_id}/enrollments";

    /**
     * Returns a collection of enrollments for the specified `class_id` in the
     * `school_id`.
     *
     * @param array{school_id: string, class_id: string} $params An
     *   associative array
     *     - school_id: sourcedId for the school
     *     - class_id: sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\EnrollmentsOutputModel
     *
     * @api
     */
    public function getBySchoolAndClass(array $params)
    {
        return new EnrollmentsOutputModel($this->send("get", ["{school_id}" => $params["school_id"],
        "{class_id}" => $params["class_id"]], []));
    }
}
