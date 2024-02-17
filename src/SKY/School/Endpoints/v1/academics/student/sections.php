<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics\student;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AcademicsSectionStudentCollection;

/**
 * @api
 */
class sections extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/student/{student_id}/sections";

    /**
     * Returns a collection of sections for the specified ```student_id```.
     *
     * The user requesting the information must be the student, parent of the
     * student or faculty member associated with the student.
     *
     * The ```cumulative_gade``` is shown if the user has the correct access
     * to view it.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Student
     *
     * - Parent
     *
     * - Faculty
     *
     * @param array{student_id: int} $params An associative array
     *     - student_id: Format - int32. The ID of the student to view
     *   sections and grades for.
     *
     * @return \Blackbaud\SKY\School\Objects\AcademicsSectionStudentCollection
     *
     * @api
     */
    public function getByStudent(array $params)
    {
        return new AcademicsSectionStudentCollection($this->send("get", ["{student_id}" => $params["student_id"]], []));
    }
}
