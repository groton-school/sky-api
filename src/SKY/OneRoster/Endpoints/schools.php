<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\OrgOutputModel;
use Blackbaud\SKY\OneRoster\Components\OrgsOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes;
use Blackbaud\SKY\OneRoster\Endpoints\Schools\Courses;
use Blackbaud\SKY\OneRoster\Endpoints\Schools\Enrollments;
use Blackbaud\SKY\OneRoster\Endpoints\Schools\Students;
use Blackbaud\SKY\OneRoster\Endpoints\Schools\Teachers;
use Blackbaud\SKY\OneRoster\Endpoints\Schools\Terms;

/**
 * @api
 */
class Schools extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{id}";

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes $_classes
     */
    public Classes $_classes;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools\Teachers $_teachers
     */
    public Teachers $_teachers;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools\Students $_students
     */
    public Students $_students;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools\Enrollments
     *   $_enrollments
     */
    public Enrollments $_enrollments;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools\Terms $_terms
     */
    public Terms $_terms;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools\Courses $_courses
     */
    public Courses $_courses;

    /**
     * Returns a collection of schools.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\OrgsOutputModel OK - It was
     *   possible to read the collection.
     *
     * @api
     */
    public function getAll(): OrgsOutputModel
    {
        return new OrgsOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific school.
     *
     * @param string $id sourcedId for the school
     *
     * @return \Blackbaud\SKY\OneRoster\Components\OrgOutputModel OK - It was
     *   possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): OrgOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new OrgOutputModel($this->send("get", ["{id}" => $id], []));
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Schools\Teachers
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Schools\Students
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Schools\Enrollments
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Schools\Terms
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Schools\Courses
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
}
