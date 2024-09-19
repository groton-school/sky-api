<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\StudentGradedAssignmentCollection;

/**
 * @api
 */
class Gradedassignments extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/{student_id}/{section_id}/gradedassignments";

    /**
     * Returns the graded assignments for the specified ```student\_id``` and
     * their ```section\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Student
     *
     * - Parent
     *
     * @param array{student_id: int, section_id: int, marking_period_id: int}
     *   $params An associative array
     *     - student_id: Format - int32. The ID of the student to view graded
     *   assignments for.
     *     - section_id: Format - int32. The ID of the lead section for the
     *   student.
     *     - marking_period_id: Format - int32. The ID of the marking period
     *   to return grades for.
     *
     * @return \Blackbaud\SKY\School\Components\StudentGradedAssignmentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByStudentIdAndSectionId(array $params): StudentGradedAssignmentCollection
    {
        assert(isset($params['student_id']), new ArgumentException("Parameter `student_id` is required"));
        assert(isset($params['section_id']), new ArgumentException("Parameter `section_id` is required"));
        assert(isset($params['marking_period_id']), new ArgumentException("Parameter `marking_period_id` is required"));

        return new StudentGradedAssignmentCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['student_id','section_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['marking_period_id']), ARRAY_FILTER_USE_KEY)));
    }
}
