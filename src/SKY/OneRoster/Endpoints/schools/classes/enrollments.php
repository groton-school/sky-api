<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\EnrollmentsOutputModel;

/**
 * @api
 */
class Enrollments extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{school_id}/classes/{class_id}/enrollments";

    /**
     * Returns a collection of enrollments for the specified `class_id` in the
     * `school_id`.
     *
     * @param string $school_id sourcedId for the school
     * @param string $class_id sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\EnrollmentsOutputModel OK -
     *   It was possible to read the collection.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getBySchoolAndClass(string $school_id, string $class_id): EnrollmentsOutputModel
    {
        assert($school_id !== null, new ArgumentException("Parameter `school_id` is required"));
        assert($class_id !== null, new ArgumentException("Parameter `class_id` is required"));

        return new EnrollmentsOutputModel($this->send("get", ["{school_id}" => $school_id,
        "{class_id}" => $class_id], []));
    }
}
