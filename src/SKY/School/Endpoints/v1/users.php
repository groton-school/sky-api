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
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Relationships
 *   $relationships
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Phonetypes $phonetypes
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Extended $extended
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Changed $changed
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Phones $phones
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Occupations $occupations
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts
 *   $emergencycontacts
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Addresses $addresses
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
 *   $customfields
 * @property \Blackbaud\SKY\School\Endpoints\V1\Users\Enrollments $enrollments
 *
 * @api
 */
class Users extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
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
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Phones $_phones
     */
    protected ?Phones $_phones = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Occupations
     *   $_occupations
     */
    protected ?Occupations $_occupations = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts
     *   $_emergencycontacts
     */
    protected ?Emergencycontacts $_emergencycontacts = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Users\Addresses $_addresses
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
     *   $_customfields
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
     * Use the record number as the ```marker``` value to return the next set
     * of results. For example: ```marker=101``` will return the second set of
     * results.
     *
     * Results dependant on the directory settings of each user.
     *
     * Requires at least one of the following roles in the Education
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
     * @param string $roles Comma delimited list of role IDs to get users for.
     * @param ?string $first_name (Optional) Filter results by first name.
     * @param ?string $last_name (Optional) Filter results by last name.
     * @param ?string $email (Optional) Filter results by e-mail.
     * @param ?string $maiden_name (Optional) Filter results by maiden name.
     * @param ?string $grad_year (Optional) The beginning date in a school
     *   year (ex. 2017).
     * @param ?string $end_grad_year (Optional) The end date in a school year
     *   (ex. 2018). Enter a grad_year and end_grad_year to find matching
     *   results in the date range.
     * @param ?int $marker (Optional) Format - int32. The record number start
     *   at to return the next batch of data.
     *
     * @return \Blackbaud\SKY\School\Components\UserReadCollectionSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(string $roles, ?string $first_name = null, ?string $last_name = null, ?string $email = null, ?string $maiden_name = null, ?string $grad_year = null, ?string $end_grad_year = null, ?int $marker = null): UserReadCollection
    {
        assert($roles !== null, new ArgumentException("Parameter `roles` is required"));

        return new UserReadCollection($this->send("get", [], ["roles" => $roles,
        "first_name" => $first_name,
        "last_name" => $last_name,
        "email" => $email,
        "maiden_name" => $maiden_name,
        "grad_year" => $grad_year,
        "end_grad_year" => $end_grad_year,
        "marker" => $marker]));
    }

    /**
     * Creates a new user record.
     *
     * Returns the newly created ID.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param \Blackbaud\SKY\School\Components\UserAdd $requestBody The user
     *   to be created
     *
     * @return intID of the user just created.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function post(UserAdd $requestBody): int
    {
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }

    /**
     * Updates the record of a single user.
     *
     * Returns the ID of the user just updated upon success.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Platform Manager
     *
     * - Contact Card Manager
     *
     * @param \Blackbaud\SKY\School\Components\UserEdit $requestBody User
     *   information to be updated
     *
     * @return intID of the user just updated.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function patch(UserEdit $requestBody): int
    {
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("patch", [], [], $requestBody);
    }

    /**
     * Returns data for the specified ```user_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - SKY API Data Sync
     *
     * @param int $user_id Format - int32. ID of the user to be returned.
     *
     * @return \Blackbaud\SKY\School\Components\UserReadSuccess
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentExceptionif required
     *   parameters are not defined
     *
     * @api
     */
    public function get(int $user_id): UserRead
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new UserRead($this->send("get", ["{user_id}" => $user_id], []));
    }
}
