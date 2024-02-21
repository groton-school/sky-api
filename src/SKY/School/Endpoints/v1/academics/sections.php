<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AcademicsSectionCollection;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students;

/**
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments
 *   $assignments
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students
 *   $students
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles
 *   $cycles
 *
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "assignments" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments",
        "students" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students",
        "cycles" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments
     *   $_assignments
     */
    protected ?Assignments $_assignments = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students
     *   $_students
     */
    protected ?Students $_students = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles
     *   $_cycles
     */
    protected ?Cycles $_cycles = null;

    /**
     * Returns a collection of academic sections for the specified school
     * level.
     *
     * Requires the following role in the Education Management system:
     *
     * - Academic Group Manager
     *
     * @param int $level_num Format - int32. Level number.
     * @param ?string $school_year (Optional) The school year to get sections
     *   for. Corresponds to ```school_year_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Defaults to the current school year.
     *
     * @return \Blackbaud\SKY\School\Components\AcademicsSectionCollectionSuccess

     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(int $level_num, ?string $school_year = null): AcademicsSectionCollection
    {
        assert($level_num !== null, new ArgumentException("Parameter `level_num` is required"));

        return new AcademicsSectionCollection($this->send("get", [], ["level_num" => $level_num,
        "school_year" => $school_year]));
    }
}
