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
 * Routing class for OneRoster
 *
 * @property \Blackbaud\SKY\OneRoster\Endpoints\AcademicSessions
 *   $academicSessions
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Terms $terms Routing class for
 *   the subnamespace `Terms`
 * @property \Blackbaud\SKY\OneRoster\Endpoints\GradingPeriods $gradingPeriods
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Categories $categories
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Classes $classes Routing class
 *   for the subnamespace `Classes`
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Courses $courses
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Enrollments $enrollments
 * @property \Blackbaud\SKY\OneRoster\Endpoints\LineItems $lineItems
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Orgs $orgs
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Results $results
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Schools $schools Routing class
 *   for the subnamespace `Schools`
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Users $users
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Teachers $teachers Routing
 *   class for the subnamespace `Teachers`
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Students $students
 * @property \Blackbaud\SKY\OneRoster\Endpoints\Demographics $demographics
 *
 * @api
 */
class Client extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "academicSessions" => "\Blackbaud\SKY\OneRoster\Endpoints\AcademicSessions",
        "terms" => "\Blackbaud\SKY\OneRoster\Endpoints\Terms",
        "gradingPeriods" => "\Blackbaud\SKY\OneRoster\Endpoints\GradingPeriods",
        "categories" => "\Blackbaud\SKY\OneRoster\Endpoints\Categories",
        "classes" => "\Blackbaud\SKY\OneRoster\Endpoints\Classes",
        "courses" => "\Blackbaud\SKY\OneRoster\Endpoints\Courses",
        "enrollments" => "\Blackbaud\SKY\OneRoster\Endpoints\Enrollments",
        "lineItems" => "\Blackbaud\SKY\OneRoster\Endpoints\LineItems",
        "orgs" => "\Blackbaud\SKY\OneRoster\Endpoints\Orgs",
        "results" => "\Blackbaud\SKY\OneRoster\Endpoints\Results",
        "schools" => "\Blackbaud\SKY\OneRoster\Endpoints\Schools",
        "users" => "\Blackbaud\SKY\OneRoster\Endpoints\Users",
        "teachers" => "\Blackbaud\SKY\OneRoster\Endpoints\Teachers",
        "students" => "\Blackbaud\SKY\OneRoster\Endpoints\Students",
        "demographics" => "\Blackbaud\SKY\OneRoster\Endpoints\Demographics",
    ];

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\AcademicSessions
     *   $_academicSessions
     */
    protected AcademicSessions $_academicSessions = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Terms $_terms Routing class for
     *   the subnamespace `Terms`
     */
    protected Terms $_terms = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\GradingPeriods $_gradingPeriods
     */
    protected GradingPeriods $_gradingPeriods = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Categories $_categories
     */
    protected Categories $_categories = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Classes $_classes Routing class
     *   for the subnamespace `Classes`
     */
    protected Classes $_classes = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Courses $_courses
     */
    protected Courses $_courses = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Enrollments $_enrollments
     */
    protected Enrollments $_enrollments = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\LineItems $_lineItems
     */
    protected LineItems $_lineItems = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Orgs $_orgs
     */
    protected Orgs $_orgs = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Results $_results
     */
    protected Results $_results = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Schools $_schools Routing class
     *   for the subnamespace `Schools`
     */
    protected Schools $_schools = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Users $_users
     */
    protected Users $_users = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Teachers $_teachers Routing
     *   class for the subnamespace `Teachers`
     */
    protected Teachers $_teachers = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Students $_students
     */
    protected Students $_students = null;

    /**
     * @var \Blackbaud\SKY\OneRoster\Endpoints\Demographics $_demographics
     */
    protected Demographics $_demographics = null;
}
