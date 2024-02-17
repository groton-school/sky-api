<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics\teachers;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AcademicsSectionCollection;

/**
 * @api
 */
class sections extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/teachers/{teacher_id}/sections";

    /**
     * Returns a collection of sections for the specified ```teacher_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Teacher
     *
     * @param array{teacher_id: int, school_year?: string} $params An
     *   associative array - teacher_id: Format - int32. The ID of the teacher
     *   to get sections for. - school_year: (Optional) The school year.
     *   Corresponds to ```school_year_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget).
     *
     * @return \Blackbaud\SKY\School\Objects\AcademicsSectionCollection
     *
     * @api
     */
    public function getByTeacher(array $params)
    {
        return new AcademicsSectionCollection($this->send("get", ["{teacher_id}" => $params["teacher_id"]], ["school_year" => $params["school_year"]]));
    }
}
