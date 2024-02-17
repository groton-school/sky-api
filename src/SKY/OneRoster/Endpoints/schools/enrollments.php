<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\schools;

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
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/enrollments";

    /**
     * Returns a collection of enrollments for the specified `school_id`.
     *
     * @param array{school_id: string} $params An associative array
     *     - school_id: sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\EnrollmentsOutputModel
     *
     * @api
     */
    public function getBySchool(array $params)
    {
        return new EnrollmentsOutputModel($this->send("get", ["{school_id}" => $params["school_id"]], []));
    }
}
