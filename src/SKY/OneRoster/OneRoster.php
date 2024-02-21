<?php

namespace Blackbaud\SKY\OneRoster;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\OneRoster\Endpoints\AcademicSessions;
use Blackbaud\SKY\OneRoster\Endpoints\Categories;
use Blackbaud\SKY\OneRoster\Endpoints\Classes;
use Blackbaud\SKY\OneRoster\Endpoints\Courses;
use Blackbaud\SKY\OneRoster\Endpoints\Demographics;
use Blackbaud\SKY\OneRoster\Endpoints\Enrollments;
use Blackbaud\SKY\OneRoster\Endpoints\GradingPeriods;
use Blackbaud\SKY\OneRoster\Endpoints\LineItems;
use Blackbaud\SKY\OneRoster\Endpoints\Orgs;
use Blackbaud\SKY\OneRoster\Endpoints\Results;
use Blackbaud\SKY\OneRoster\Endpoints\Schools;
use Blackbaud\SKY\OneRoster\Endpoints\Students;
use Blackbaud\SKY\OneRoster\Endpoints\Teachers;
use Blackbaud\SKY\OneRoster\Endpoints\Terms;
use Blackbaud\SKY\OneRoster\Endpoints\Users;

/**
 * Routing class for the namespace Blackbaud\SKY\OneRoster\Endpoints
 *
 * @api
 */
class OneRoster extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\AcademicSessions
     *   $_academicSessions
     */
    public AcademicSessions $_academicSessions;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Terms $_terms
     */
    public Terms $_terms;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\GradingPeriods $_gradingPeriods
     */
    public GradingPeriods $_gradingPeriods;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Categories $_categories
     */
    public Categories $_categories;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes $_classes
     */
    public Classes $_classes;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Courses $_courses
     */
    public Courses $_courses;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Enrollments $_enrollments
     */
    public Enrollments $_enrollments;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\LineItems $_lineItems
     */
    public LineItems $_lineItems;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Orgs $_orgs
     */
    public Orgs $_orgs;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Results $_results
     */
    public Results $_results;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools $_schools
     */
    public Schools $_schools;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Users $_users
     */
    public Users $_users;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Teachers $_teachers
     */
    public Teachers $_teachers;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Students $_students
     */
    public Students $_students;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Demographics $_demographics
     */
    public Demographics $_demographics;

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\AcademicSessions
     *
     * @api
     */
    public function academicSessions(): AcademicSessions
    {
        if ($this->_academicSessions === null) {
            $this->_academicSessions = new AcademicSessions($this->api);
        }
        return $this->_academicSessions;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Terms
     *
     * @api
     */
    public function terms(): Terms
    {
        if ($this->_terms === null) {
            $this->_terms = new Terms($this->api);
        }
        return $this->_terms;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\GradingPeriods
     *
     * @api
     */
    public function gradingPeriods(): GradingPeriods
    {
        if ($this->_gradingPeriods === null) {
            $this->_gradingPeriods = new GradingPeriods($this->api);
        }
        return $this->_gradingPeriods;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Categories
     *
     * @api
     */
    public function categories(): Categories
    {
        if ($this->_categories === null) {
            $this->_categories = new Categories($this->api);
        }
        return $this->_categories;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Classes
     *
     * @api
     */
    public function classes(): Classes
    {
        if ($this->_classes === null) {
            $this->_classes = new Classes($this->api);
        }
        return $this->_classes;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Courses
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Enrollments
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\LineItems
     *
     * @api
     */
    public function lineItems(): LineItems
    {
        if ($this->_lineItems === null) {
            $this->_lineItems = new LineItems($this->api);
        }
        return $this->_lineItems;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Orgs
     *
     * @api
     */
    public function orgs(): Orgs
    {
        if ($this->_orgs === null) {
            $this->_orgs = new Orgs($this->api);
        }
        return $this->_orgs;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Results
     *
     * @api
     */
    public function results(): Results
    {
        if ($this->_results === null) {
            $this->_results = new Results($this->api);
        }
        return $this->_results;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Schools
     *
     * @api
     */
    public function schools(): Schools
    {
        if ($this->_schools === null) {
            $this->_schools = new Schools($this->api);
        }
        return $this->_schools;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Users
     *
     * @api
     */
    public function users(): Users
    {
        if ($this->_users === null) {
            $this->_users = new Users($this->api);
        }
        return $this->_users;
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Teachers
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Students
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Demographics
     *
     * @api
     */
    public function demographics(): Demographics
    {
        if ($this->_demographics === null) {
            $this->_demographics = new Demographics($this->api);
        }
        return $this->_demographics;
    }
}
