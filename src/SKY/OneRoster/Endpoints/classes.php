<?php

namespace Blackbaud\SKY\OneRoster\Endpoints;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\OneRoster\Components\ClassOutputModel;
use Blackbaud\SKY\OneRoster\Components\ClassesOutputModel;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Categories;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Results;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Students;
use Blackbaud\SKY\OneRoster\Endpoints\Classes\Teachers;

/**
 * @api
 */
class Classes extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/classes/{id}";

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems $_lineItems
     */
    public LineItems $_lineItems;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Results $_results
     */
    public Results $_results;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Teachers $_teachers
     */
    public Teachers $_teachers;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Students $_students
     */
    public Students $_students;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes\Categories $_categories
     */
    public Categories $_categories;

    /**
     * Returns a collection of classes.
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ClassesOutputModel OK - It
     *   was possible to read the collection.
     *
     * @api
     */
    public function getAll(): ClassesOutputModel
    {
        return new ClassesOutputModel($this->send("get", [], []));
    }

    /**
     * Returns a specific class.
     *
     * @param string $id sourcedId for the class
     *
     * @return \Blackbaud\SKY\OneRoster\Components\ClassOutputModel OK - It
     *   was possible to read the resource.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(string $id): ClassOutputModel
    {
        assert($id !== null, new ArgumentException("Parameter `id` is required"));

        return new ClassOutputModel($this->send("get", ["{id}" => $id], []));
    }

    /**
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Classes\LineItems
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Classes\Results
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Classes\Teachers
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Classes\Students
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
     * @return \Blackbaud\SKY\OneRoster\Endpoints\Classes\Categories
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
}
