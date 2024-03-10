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
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{class_id}/students/{student_id}/results";

    /**
     * Returns a collection of results for a specified `class_id` and
     * `student_id`.
     *
     * @param array{class_id: string, student_id: string} $params An
     *   associative array
     *     - class_id: sourcedId for the class
     *     - student_id: sourcedId for the student
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ResultsOutputModelSvc OK -
     *   It was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByClassIdAndStudentId(array $params): ResultsOutputModelSvc
    {
        assert(isset($params['class_id']), new ArgumentException("Parameter `class_id` is required"));
        assert(isset($params['student_id']), new ArgumentException("Parameter `student_id` is required"));

        return new ResultsOutputModelSvc($this->send("get", ["{class_id}" => $params['class_id'],
        "{student_id}" => $params['student_id']], []));
    }
}
