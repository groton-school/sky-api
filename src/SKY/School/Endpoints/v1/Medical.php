<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Allergies;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Allergiesconditions;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Athleticclearance;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Conditions;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Immunizations;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Medications;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Securityroles;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Medical
 *
 * @api
 */
class Medical extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Securityroles
     *   $_securityroles
     */
    public Securityroles $_securityroles;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Allergiesconditions
     *   $_allergiesconditions
     */
    public Allergiesconditions $_allergiesconditions;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Medications
     *   $_medications
     */
    public Medications $_medications;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Immunizations
     *   $_immunizations
     */
    public Immunizations $_immunizations;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Allergies $_allergies
     */
    public Allergies $_allergies;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Conditions $_conditions
     */
    public Conditions $_conditions;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Athleticclearance
     *   $_athleticclearance
     */
    public Athleticclearance $_athleticclearance;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Users $_users Routing
     *   class for the namespace Blackbaud\SKY\School\Endpoints\V1\Medical\Users

     */
    public Users $_users;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Securityroles
     *
     * @api
     */
    public function securityroles(): Securityroles
    {
        if ($this->_securityroles === null) {
            $this->_securityroles = new Securityroles($this->api);
        }
        return $this->_securityroles;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Allergiesconditions
     *
     * @api
     */
    public function allergiesconditions(): Allergiesconditions
    {
        if ($this->_allergiesconditions === null) {
            $this->_allergiesconditions = new Allergiesconditions($this->api);
        }
        return $this->_allergiesconditions;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Medications
     *
     * @api
     */
    public function medications(): Medications
    {
        if ($this->_medications === null) {
            $this->_medications = new Medications($this->api);
        }
        return $this->_medications;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Immunizations
     *
     * @api
     */
    public function immunizations(): Immunizations
    {
        if ($this->_immunizations === null) {
            $this->_immunizations = new Immunizations($this->api);
        }
        return $this->_immunizations;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Allergies
     *
     * @api
     */
    public function allergies(): Allergies
    {
        if ($this->_allergies === null) {
            $this->_allergies = new Allergies($this->api);
        }
        return $this->_allergies;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Conditions
     *
     * @api
     */
    public function conditions(): Conditions
    {
        if ($this->_conditions === null) {
            $this->_conditions = new Conditions($this->api);
        }
        return $this->_conditions;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Athleticclearance
     *
     * @api
     */
    public function athleticclearance(): Athleticclearance
    {
        if ($this->_athleticclearance === null) {
            $this->_athleticclearance = new Athleticclearance($this->api);
        }
        return $this->_athleticclearance;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Users
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
}
