<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\UserAdd;
use Blackbaud\SKY\School\Components\UserEdit;
use Blackbaud\SKY\School\Components\UserRead;
use Blackbaud\SKY\School\Components\UserReadCollection;
use Blackbaud\SKY\School\Endpoints\V1\Users\Addresses;
use Blackbaud\SKY\School\Endpoints\V1\Users\Addresstypes;
use Blackbaud\SKY\School\Endpoints\V1\Users\Audit;
use Blackbaud\SKY\School\Endpoints\V1\Users\Bbidstatus;
use Blackbaud\SKY\School\Endpoints\V1\Users\Changed;
use Blackbaud\SKY\School\Endpoints\V1\Users\Customfields;
use Blackbaud\SKY\School\Endpoints\V1\Users\Education;
use Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts;
use Blackbaud\SKY\School\Endpoints\V1\Users\Employment;
use Blackbaud\SKY\School\Endpoints\V1\Users\Enroll;
use Blackbaud\SKY\School\Endpoints\V1\Users\Enrollments;
use Blackbaud\SKY\School\Endpoints\V1\Users\Extended;
use Blackbaud\SKY\School\Endpoints\V1\Users\Gendertypes;
use Blackbaud\SKY\School\Endpoints\V1\Users\Me;
use Blackbaud\SKY\School\Endpoints\V1\Users\Occupations;
use Blackbaud\SKY\School\Endpoints\V1\Users\Phones;
use Blackbaud\SKY\School\Endpoints\V1\Users\Phonetypes;
use Blackbaud\SKY\School\Endpoints\V1\Users\Relationships;
use Blackbaud\SKY\School\Endpoints\V1\Users\Students;

/**
 * Routing class for the subnamespace `Users`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Relationships
 *   $relationships
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Phonetypes $phonetypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Extended $extended
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Changed $changed
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Phones $phones Routing
 *   class for the subnamespace `Phones`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Occupations $occupations
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts
 *   $emergencycontacts Routing class for the subnamespace `Emergencycontacts`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Addresses $addresses
 *   Routing class for the subnamespace `Addresses`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Addresstypes
 *   $addresstypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Education $education
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Audit $audit
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Enroll $enroll
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Employment $employment
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Gendertypes $gendertypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Bbidstatus $bbidstatus
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Students $students
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Me $me
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Customfields
 *   $customfields Routing class for the subnamespace `Customfields`
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Enrollments $enrollments
 *
 * @api
 */
class Users extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}";

    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "relationships" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Relationships",
        "phonetypes" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Phonetypes",
        "extended" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Extended",
        "changed" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Changed",
        "phones" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Phones",
        "occupations" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Occupations",
        "emergencycontacts" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts",
        "addresses" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Addresses",
        "addresstypes" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Addresstypes",
        "education" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Education",
        "audit" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Audit",
        "enroll" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Enroll",
        "employment" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Employment",
        "gendertypes" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Gendertypes",
        "bbidstatus" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Bbidstatus",
        "students" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Students",
        "me" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Me",
        "customfields" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Customfields",
        "enrollments" => "\Blackbaud\SKY\School\Endpoints\V1\Users\Enrollments",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Relationships
     *   $_relationships
     */
    protected ?Relationships $_relationships = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Phonetypes $_phonetypes
     */
    protected ?Phonetypes $_phonetypes = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Extended $_extended
     */
    protected ?Extended $_extended = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Changed $_changed
     */
    protected ?Changed $_changed = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Phones $_phones Routing
     *   class for the subnamespace `Phones`
     */
    protected ?Phones $_phones = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Occupations
     *   $_occupations
     */
    protected ?Occupations $_occupations = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts
     *   $_emergencycontacts Routing class for the subnamespace
     *   `Emergencycontacts`
     */
    protected ?Emergencycontacts $_emergencycontacts = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Addresses $_addresses
     *   Routing class for the subnamespace `Addresses`
     */
    protected ?Addresses $_addresses = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Addresstypes
     *   $_addresstypes
     */
    protected ?Addresstypes $_addresstypes = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Education $_education
     */
    protected ?Education $_education = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Audit $_audit
     */
    protected ?Audit $_audit = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Enroll $_enroll
     */
    protected ?Enroll $_enroll = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Employment $_employment
     */
    protected ?Employment $_employment = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Gendertypes
     *   $_gendertypes
     */
    protected ?Gendertypes $_gendertypes = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Bbidstatus $_bbidstatus
     */
    protected ?Bbidstatus $_bbidstatus = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Students $_students
     */
    protected ?Students $_students = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Me $_me
     */
    protected ?Me $_me = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Customfields
     *   $_customfields Routing class for the subnamespace `Customfields`
     */
    protected ?Customfields $_customfields = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Enrollments
     *   $_enrollments
     */
    protected ?Enrollments $_enrollments = null;

    /**
     * Returns a paginated collection of users, limited to 100 users per page.
     *
     *
     *  Use the record number as the ```marker``` value to return the next set
     * of results. For example: ```marker=101``` will return the second set of
     * results.
     *
     *  Results are dependent on the directory settings of each user.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Billing Clerk
     *
     * - Password Manager
     *
     * - Contact Card Manager
     *
     * - Platform Manager
     *
     * @param array{roles: string, first_name: string, last_name: string,
     *   email: string, maiden_name: string, grad_year: string, end_grad_year:
     *   string, marker: int} $params An associative array
     *     - roles: Comma delimited list of role IDs to get users for.
     *     - first_name: Filter results by first name.
     *     - last_name: Filter results by last name.
     *     - email: Filter results by e-mail.
     *     - maiden_name: Filter results by maiden name.
     *     - grad_year: The beginning date in a school year (ex. 2017).
     *     - end_grad_year: The end date in a school year (ex. 2018). Enter a
     *   grad\_year and end\_grad\_year to find matching results in the date
     *   range.
     *     - marker: Format - int32. The record number start at to return the
     *   next batch of data.
     *
     * @return \Blackbaud\SKY\School\Components\UserReadCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): UserReadCollection
    {
        assert(isset($params['roles']), new ArgumentException("Parameter `roles` is required"));
        assert(isset($params['first_name']), new ArgumentException("Parameter `first_name` is required"));
        assert(isset($params['last_name']), new ArgumentException("Parameter `last_name` is required"));
        assert(isset($params['email']), new ArgumentException("Parameter `email` is required"));
        assert(isset($params['maiden_name']), new ArgumentException("Parameter `maiden_name` is required"));
        assert(isset($params['grad_year']), new ArgumentException("Parameter `grad_year` is required"));
        assert(isset($params['end_grad_year']), new ArgumentException("Parameter `end_grad_year` is required"));
        assert(isset($params['marker']), new ArgumentException("Parameter `marker` is required"));

        return new UserReadCollection($this->send("get", [], array_filter($params, fn($key) => in_array($key, ['roles','first_name','last_name','email','maiden_name','grad_year','end_grad_year','marker']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Creates a new user record.
     *
     *  Returns the newly created ID.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param \Blackbaud\SKY\School\Components\UserAdd $requestBody The user
     *   to be created
     *
     * @return int ID of the user just created.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function post(UserAdd $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }

    /**
     * Updates the record of a single user.
     *
     *  Returns the ID of the user just updated upon success.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param \Blackbaud\SKY\School\Components\UserEdit $requestBody User
     *   information to be updated
     *
     * @return int ID of the user just updated.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function patch(UserEdit $requestBody): int
    {
        assert(isset($params['requestBody']), new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", [], [], $requestBody);
    }

    /**
     * Returns data for the specified ```user\_id```.
     *
     *  Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param array{user_id: int} $params An associative array
     *     - user_id: Format - int32. ID of the user to be returned.
     *
     * @return \Blackbaud\SKY\School\Components\UserRead Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function getByUserId(array $params): UserRead
    {
        assert(isset($params['user_id']), new ArgumentException("Parameter `user_id` is required"));

        return new UserRead($this->send("get", array_filter($params, fn($key) => in_array($key, ['user_id']), ARRAY_FILTER_USE_KEY), []));
    }
}
