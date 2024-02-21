<?php

namespace Blackbaud\SKY\OneRoster\Endpoints\Classes\Students;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc;

/**
 * @api
 */
class Results extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/students/{student_id}/results";

    /**
     * Returns a collection of results for a specified `class_id` and
     * `student_id`.
     *
     * @param string $class_id sourcedId for the class
     * @param string $student_id sourcedId for the student
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByClassAndStudent(string $class_id, string $student_id): ResultsOutputModelSvc
    {
        assert($class_id !== null, new ArgumentException("Parameter `class_id` is required"));
        assert($student_id !== null, new ArgumentException("Parameter `student_id` is required"));

        return new ResultsOutputModelSvc($this->send("get", ["{class_id}" => $class_id,
        "{student_id}" => $student_id], []));
    }
}
