<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\StudentGradedAssignmentCollection;

/**
 * @api
 */
class gradedassignments extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/{student_id}/{section_id}/gradedassignments";

    /**
     * Returns the graded assignments for the specified ```student_id``` and
     * their ```section_id```.
     *
     * Requires at least one of the following roles in the Education
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
     * @return \Blackbaud\SKY\School\Objects\StudentGradedAssignmentCollection
     *
     * @api
     */
    public function getByStudentAndSection(array $params)
    {
        return new StudentGradedAssignmentCollection($this->send("get", ["{student_id}" => $params["student_id"],
        "{section_id}" => $params["section_id"]], ["marking_period_id" => $params["marking_period_id"]]));
    }
}
