<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Assignments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Courses;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Departments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Gradedassignments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Rosters;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Specialdays;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Student;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers;

/**
 * Routing class for the subnamespace `Academics`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections $sections
 *   Routing class for the subnamespace `Sections`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Departments
 *   $departments
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Specialdays
 *   $specialdays
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Courses $courses
 *   Routing class for the subnamespace `Courses`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments
 *   $enrollments Routing class for the subnamespace `Enrollments`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Assignments
 *   $assignments
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Gradedassignments
 *   $gradedassignments
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Rosters $rosters
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers $teachers
 *   Routing class for the subnamespace `Teachers`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules $schedules
 *   Routing class for the subnamespace `Schedules`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Student $student
 *   Routing class for the subnamespace `Student`
 *
 * @api
 */
class Academics extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "sections" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections",
        "departments" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Departments",
        "specialdays" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Specialdays",
        "courses" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Courses",
        "enrollments" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments",
        "assignments" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Assignments",
        "gradedassignments" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Gradedassignments",
        "rosters" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Rosters",
        "teachers" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers",
        "schedules" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules",
        "student" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Student",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Sections $_sections
     *   Routing class for the subnamespace `Sections`
     */
    protected ?Sections $_sections = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Departments
     *   $_departments
     */
    protected ?Departments $_departments = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Specialdays
     *   $_specialdays
     */
    protected ?Specialdays $_specialdays = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Courses $_courses
     *   Routing class for the subnamespace `Courses`
     */
    protected ?Courses $_courses = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments
     *   $_enrollments Routing class for the subnamespace `Enrollments`
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Assignments
     *   $_assignments
     */
    protected ?Assignments $_assignments = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Gradedassignments
     *   $_gradedassignments
     */
    protected ?Gradedassignments $_gradedassignments = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Rosters $_rosters
     */
    protected ?Rosters $_rosters = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers $_teachers
     *   Routing class for the subnamespace `Teachers`
     */
    protected ?Teachers $_teachers = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules
     *   $_schedules Routing class for the subnamespace `Schedules`
     */
    protected ?Schedules $_schedules = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Student $_student
     *   Routing class for the subnamespace `Student`
     */
    protected ?Student $_student = null;
}
