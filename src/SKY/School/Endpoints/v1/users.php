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
 * @api
 */
class Users extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/users/{user_id}";

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Relationships
     *   $_relationships
     */
    public Relationships $_relationships;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Phonetypes $_phonetypes
     */
    public Phonetypes $_phonetypes;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Extended $_extended
     */
    public Extended $_extended;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Changed $_changed
     */
    public Changed $_changed;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Phones $_phones
     */
    public Phones $_phones;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Occupations $_occupations
     */
    public Occupations $_occupations;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts
     *   $_emergencycontacts
     */
    public Emergencycontacts $_emergencycontacts;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Addresses $_addresses
     */
    public Addresses $_addresses;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Addresstypes
     *   $_addresstypes
     */
    public Addresstypes $_addresstypes;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Education $_education
     */
    public Education $_education;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Audit $_audit
     */
    public Audit $_audit;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Enroll $_enroll
     */
    public Enroll $_enroll;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Employment $_employment
     */
    public Employment $_employment;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Gendertypes $_gendertypes
     */
    public Gendertypes $_gendertypes;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Bbidstatus $_bbidstatus
     */
    public Bbidstatus $_bbidstatus;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Students $_students
     */
    public Students $_students;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Me $_me
     */
    public Me $_me;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Customfields
     *   $_customfields
     */
    public Customfields $_customfields;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Users\Enrollments $_enrollments
     */
    public Enrollments $_enrollments;

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
     * @return \Blackbaud\SKY\School\Components\UserReadCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
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
     * @return int ID of the user just created.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
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
     * @return int ID of the user just updated.
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
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
     * @return \Blackbaud\SKY\School\Components\UserRead Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function get(int $user_id): UserRead
    {
        assert($user_id !== null, new ArgumentException("Parameter `user_id` is required"));

        return new UserRead($this->send("get", ["{user_id}" => $user_id], []));
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Relationships
     *
     * @api
     */
    public function relationships(): Relationships
    {
        if ($this->_relationships === null) {
            $this->_relationships = new Relationships($this->api);
        }
        return $this->_relationships;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Phonetypes
     *
     * @api
     */
    public function phonetypes(): Phonetypes
    {
        if ($this->_phonetypes === null) {
            $this->_phonetypes = new Phonetypes($this->api);
        }
        return $this->_phonetypes;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Extended
     *
     * @api
     */
    public function extended(): Extended
    {
        if ($this->_extended === null) {
            $this->_extended = new Extended($this->api);
        }
        return $this->_extended;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Changed
     *
     * @api
     */
    public function changed(): Changed
    {
        if ($this->_changed === null) {
            $this->_changed = new Changed($this->api);
        }
        return $this->_changed;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Phones
     *
     * @api
     */
    public function phones(): Phones
    {
        if ($this->_phones === null) {
            $this->_phones = new Phones($this->api);
        }
        return $this->_phones;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Occupations
     *
     * @api
     */
    public function occupations(): Occupations
    {
        if ($this->_occupations === null) {
            $this->_occupations = new Occupations($this->api);
        }
        return $this->_occupations;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Emergencycontacts
     *
     * @api
     */
    public function emergencycontacts(): Emergencycontacts
    {
        if ($this->_emergencycontacts === null) {
            $this->_emergencycontacts = new Emergencycontacts($this->api);
        }
        return $this->_emergencycontacts;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Addresses
     *
     * @api
     */
    public function addresses(): Addresses
    {
        if ($this->_addresses === null) {
            $this->_addresses = new Addresses($this->api);
        }
        return $this->_addresses;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Addresstypes
     *
     * @api
     */
    public function addresstypes(): Addresstypes
    {
        if ($this->_addresstypes === null) {
            $this->_addresstypes = new Addresstypes($this->api);
        }
        return $this->_addresstypes;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Education
     *
     * @api
     */
    public function education(): Education
    {
        if ($this->_education === null) {
            $this->_education = new Education($this->api);
        }
        return $this->_education;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Audit
     *
     * @api
     */
    public function audit(): Audit
    {
        if ($this->_audit === null) {
            $this->_audit = new Audit($this->api);
        }
        return $this->_audit;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Enroll
     *
     * @api
     */
    public function enroll(): Enroll
    {
        if ($this->_enroll === null) {
            $this->_enroll = new Enroll($this->api);
        }
        return $this->_enroll;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Employment
     *
     * @api
     */
    public function employment(): Employment
    {
        if ($this->_employment === null) {
            $this->_employment = new Employment($this->api);
        }
        return $this->_employment;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Gendertypes
     *
     * @api
     */
    public function gendertypes(): Gendertypes
    {
        if ($this->_gendertypes === null) {
            $this->_gendertypes = new Gendertypes($this->api);
        }
        return $this->_gendertypes;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Bbidstatus
     *
     * @api
     */
    public function bbidstatus(): Bbidstatus
    {
        if ($this->_bbidstatus === null) {
            $this->_bbidstatus = new Bbidstatus($this->api);
        }
        return $this->_bbidstatus;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Students
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
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Me
     *
     * @api
     */
    public function me(): Me
    {
        if ($this->_me === null) {
            $this->_me = new Me($this->api);
        }
        return $this->_me;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Customfields
     *
     * @api
     */
    public function customfields(): Customfields
    {
        if ($this->_customfields === null) {
            $this->_customfields = new Customfields($this->api);
        }
        return $this->_customfields;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Users\Enrollments
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
}
