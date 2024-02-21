<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AcademicsSectionCollection;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students;

/**
 * @api
 */
class Sections extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/sections";

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments
     *   $_assignments
     */
    public Assignments $_assignments;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students
     *   $_students
     */
    public Students $_students;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles
     *   $_cycles
     */
    public Cycles $_cycles;

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
     * @return \Blackbaud\SKY\School\Components\AcademicsSectionCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
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

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Assignments

     *
     * @api
     */
    public function assignments(): Assignments
    {
        if ($this->_assignments === null) {
            $this->_assignments = new Assignments($this->api);
        }
        return $this->_assignments;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Students
     *
     * @api
     */
    public function students(): Students
    {
        if ($this->_students === null) {
            $this->_students = new Students($this->api);
        }
        return $this->_students;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections\Cycles
     *
     * @api
     */
    public function cycles(): Cycles
    {
        if ($this->_cycles === null) {
            $this->_cycles = new Cycles($this->api);
        }
        return $this->_cycles;
    }
}
