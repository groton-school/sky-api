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
     * Returns the graded assignments for the specified ```student_id``` and
     * their ```section_id```.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Student</li><li>Parent</li></ul>
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
    public function getByStudentAndSection(array $params): StudentGradedAssignmentCollection
    {
        assert(isset($params['student_id']), new ArgumentException("Parameter `student_id` is required"));
        assert(isset($params['section_id']), new ArgumentException("Parameter `section_id` is required"));
        assert(isset($params['marking_period_id']), new ArgumentException("Parameter `marking_period_id` is required"));

        return new StudentGradedAssignmentCollection($this->send("get", ["{student_id}" => $params['student_id'],
        "{section_id}" => $params['section_id']], ["marking_period_id" => $marking_period_id]));
    }
}
