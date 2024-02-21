<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AcademicsSectionCollection;

/**
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url
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
     * @param int $teacher_id Format - int32. The ID of the teacher to get
     *   sections for.
     * @param ?string $school_year (Optional) The school year. Corresponds to
     *   ```school_year_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget).
     *
     * @return \Blackbaud\SKY\School\Components\AcademicsSectionCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByTeacher(int $teacher_id, ?string $school_year = null): AcademicsSectionCollection
    {
        assert($teacher_id !== null, new ArgumentException("Parameter `teacher_id` is required"));

        return new AcademicsSectionCollection($this->send("get", ["{teacher_id}" => $teacher_id], ["school_year" => $school_year]));
    }
}
