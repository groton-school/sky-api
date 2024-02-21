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
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes $classes
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Schools\Teachers $teachers
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Schools\Students $students
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Schools\Enrollments
 *   $enrollments
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Schools\Terms $terms
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Schools\Courses $courses
 *
 * @api
 */
class Schools extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/afe-rostr/ims/oneroster/v1p1/schools/{id}";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "classes" => "\Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes",
        "teachers" => "\Blackbaud\SKY\OneRoster\Endpoints\Schools\Teachers",
        "students" => "\Blackbaud\SKY\OneRoster\Endpoints\Schools\Students",
        "enrollments" => "\Blackbaud\SKY\OneRoster\Endpoints\Schools\Enrollments",
        "terms" => "\Blackbaud\SKY\OneRoster\Endpoints\Schools\Terms",
        "courses" => "\Blackbaud\SKY\OneRoster\Endpoints\Schools\Courses",
    ];

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Schools\Classes $_classes
     */
    protected ?Classes $_classes = null;

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Schools\Teachers $_teachers
     */
    protected ?Teachers $_teachers = null;

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Schools\Students $_students
     */
    protected ?Students $_students = null;

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Schools\Enrollments
     *   $_enrollments
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Schools\Terms $_terms
     */
    protected ?Terms $_terms = null;

    /**
     * @var ?\Blackbaud\SKY\OneRoster\Endpoints\Schools\Courses $_courses
     */
    protected ?Courses $_courses = null;

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
}
