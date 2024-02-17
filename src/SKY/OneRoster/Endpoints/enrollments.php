<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Objects\EnrollmentOutputModel;
use Blackbaud\SKY\OneRoster\Objects\EnrollmentsOutputModel;

/**
 * @api
 */
class enrollments extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/enrollments/{id}";

    /**
     * Returns a collection of enrollments.
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\EnrollmentsOutputModel
     *
     * @api
     */
    public function getAll()
    {
        return new EnrollmentsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific enrollment.
     *
     * @param array{id: string} $params An associative array
     *     - id: sourcedId for the enrollment
     *
     * @return \Blackbaud\SKY\OneRoster\Objects\EnrollmentOutputModel
     *
     * @api
     */
    public function get(array $params)
    {
        return new EnrollmentOutputModel($this->send("get", ["{id}" => $params["id"]], []));
    }
}
