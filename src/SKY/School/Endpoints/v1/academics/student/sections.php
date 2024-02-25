<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Student;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AcademicsSectionStudentCollection;

/**
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/student/{student_id}/sections";

    /**
     * Returns a collection of sections for the specified ```student_id```.<br
     * />
     *
     * The user requesting the information must be the student, parent of the
     * student or faculty member associated with the student.<br />
     *
     * The ```cumulative_gade``` is shown if the user has the correct access
     * to view it.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Student</li><li>Parent</li><li>Faculty</li></ul>
     *
     * @param array{student_id: int} $params An associative array
     *     - student_id: Format - int32. The ID of the student to view
     *   sections and grades for.
     *
     * @return \Blackbaud\SKY\School\Components\AcademicsSectionStudentCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByStudent(array $params): AcademicsSectionStudentCollection
    {
        assert(isset($params['student_id']), new ArgumentException("Parameter `student_id` is required"));

        return new AcademicsSectionStudentCollection($this->send("get", ["{student_id}" => $params['student_id']], []));
    }
}
