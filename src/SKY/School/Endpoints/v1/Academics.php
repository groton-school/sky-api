<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Assignments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Courses;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Departments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Gradedassignments;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Sections;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Specialdays;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Student;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Academics
 *
 * @api
 */
class Academics extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections $_sections
     */
    public Sections $_sections;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Departments
     *   $_departments
     */
    public Departments $_departments;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Specialdays
     *   $_specialdays
     */
    public Specialdays $_specialdays;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Courses $_courses
     */
    public Courses $_courses;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments
     *   $_enrollments
     */
    public Enrollments $_enrollments;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Assignments
     *   $_assignments
     */
    public Assignments $_assignments;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Gradedassignments
     *   $_gradedassignments
     */
    public Gradedassignments $_gradedassignments;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers $_teachers
     *   Routing class for the namespace
     *   Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers
     */
    public Teachers $_teachers;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules $_schedules
     *   Routing class for the namespace
     *   Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules
     */
    public Schedules $_schedules;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Student $_student
     *   Routing class for the namespace
     *   Blackbaud\SKY\School\Endpoints\V1\Academics\Student
     */
    public Student $_student;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Sections
     *
     * @api
     */
    public function sections(): Sections
    {
        if ($this->_sections === null) {
            $this->_sections = new Sections($this->api);
        }
        return $this->_sections;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Departments
     *
     * @api
     */
    public function departments(): Departments
    {
        if ($this->_departments === null) {
            $this->_departments = new Departments($this->api);
        }
        return $this->_departments;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Specialdays
     *
     * @api
     */
    public function specialdays(): Specialdays
    {
        if ($this->_specialdays === null) {
            $this->_specialdays = new Specialdays($this->api);
        }
        return $this->_specialdays;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Courses
     *
     * @api
     */
    public function courses(): Courses
    {
        if ($this->_courses === null) {
            $this->_courses = new Courses($this->api);
        }
        return $this->_courses;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Enrollments
     *
     * @api
     */
    public function enrollments(): Enrollments
    {
        if ($this->_enrollments === null) {
            $this->_enrollments = new Enrollments($this->api);
        }
        return $this->_enrollments;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Assignments
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
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Gradedassignments
     *
     * @api
     */
    public function gradedassignments(): Gradedassignments
    {
        if ($this->_gradedassignments === null) {
            $this->_gradedassignments = new Gradedassignments($this->api);
        }
        return $this->_gradedassignments;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers
     *
     * @api
     */
    public function teachers(): Teachers
    {
        if ($this->_teachers === null) {
            $this->_teachers = new Teachers($this->api);
        }
        return $this->_teachers;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules
     *
     * @api
     */
    public function schedules(): Schedules
    {
        if ($this->_schedules === null) {
            $this->_schedules = new Schedules($this->api);
        }
        return $this->_schedules;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Student
     *
     * @api
     */
    public function student(): Student
    {
        if ($this->_student === null) {
            $this->_student = new Student($this->api);
        }
        return $this->_student;
    }
}
