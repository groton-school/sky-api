<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Medical;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergies;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergiesconditions;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Athleticrequirements;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Conditions;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Immunizations;
use Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Medications;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Medical\Users
 *
 * @api
 */
class Users extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergiesconditions
     *   $_allergiesconditions
     */
    public Allergiesconditions $_allergiesconditions;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Medications
     *   $_medications
     */
    public Medications $_medications;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Immunizations
     *   $_immunizations
     */
    public Immunizations $_immunizations;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Athleticrequirements
     *   $_athleticrequirements
     */
    public Athleticrequirements $_athleticrequirements;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergies
     *   $_allergies
     */
    public Allergies $_allergies;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Conditions
     *   $_conditions
     */
    public Conditions $_conditions;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergiesconditions

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
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Medications
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
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Immunizations
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
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Athleticrequirements

     *
     * @api
     */
    public function athleticrequirements(): Athleticrequirements
    {
        if ($this->_athleticrequirements === null) {
            $this->_athleticrequirements = new Athleticrequirements($this->api);
        }
        return $this->_athleticrequirements;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Allergies
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
     * @return \Blackbaud\SKY\School\Endpoints\V1\Medical\Users\Conditions
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
}
