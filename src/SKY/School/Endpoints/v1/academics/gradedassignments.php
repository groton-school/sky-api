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
     * @param int $student_id Format - int32. The ID of the student to view
     *   graded assignments for.
     * @param int $section_id Format - int32. The ID of the lead section for
     *   the student.
     * @param int $marking_period_id Format - int32. The ID of the marking
     *   period to return grades for.
     *
     * @return \Blackbaud\SKY\School\Components\StudentGradedAssignmentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByStudentAndSection(int $student_id, int $section_id, int $marking_period_id): StudentGradedAssignmentCollection
    {
        assert($student_id !== null, new ArgumentException("Parameter `student_id` is required"));
        assert($section_id !== null, new ArgumentException("Parameter `section_id` is required"));
        assert($marking_period_id !== null, new ArgumentException("Parameter `marking_period_id` is required"));

        return new StudentGradedAssignmentCollection($this->send("get", ["{student_id}" => $student_id,
        "{section_id}" => $section_id], ["marking_period_id" => $marking_period_id]));
    }
}
