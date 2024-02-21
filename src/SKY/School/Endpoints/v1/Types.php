<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Types\Attendancetypes;
use Blackbaud\SKY\School\Endpoints\V1\Types\Excusedtypes;
use Blackbaud\SKY\School\Endpoints\V1\Types\Excusedurationtypes;
use Blackbaud\SKY\School\Endpoints\V1\Types\Tables;
use Blackbaud\SKY\School\Endpoints\V1\Types\Tablevalues;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Types
 *
 * @api
 */
class Types extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Attendancetypes
     *   $_attendancetypes
     */
    public Attendancetypes $_attendancetypes;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Excusedurationtypes
     *   $_excusedurationtypes
     */
    public Excusedurationtypes $_excusedurationtypes;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Excusedtypes
     *   $_excusedtypes
     */
    public Excusedtypes $_excusedtypes;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Tables $_tables
     */
    public Tables $_tables;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Types\Tablevalues $_tablevalues
     */
    public Tablevalues $_tablevalues;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Types\Attendancetypes
     *
     * @api
     */
    public function attendancetypes(): Attendancetypes
    {
        if ($this->_attendancetypes === null) {
            $this->_attendancetypes = new Attendancetypes($this->api);
        }
        return $this->_attendancetypes;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Types\Excusedurationtypes
     *
     * @api
     */
    public function excusedurationtypes(): Excusedurationtypes
    {
        if ($this->_excusedurationtypes === null) {
            $this->_excusedurationtypes = new Excusedurationtypes($this->api);
        }
        return $this->_excusedurationtypes;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Types\Excusedtypes
     *
     * @api
     */
    public function excusedtypes(): Excusedtypes
    {
        if ($this->_excusedtypes === null) {
            $this->_excusedtypes = new Excusedtypes($this->api);
        }
        return $this->_excusedtypes;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Types\Tables
     *
     * @api
     */
    public function tables(): Tables
    {
        if ($this->_tables === null) {
            $this->_tables = new Tables($this->api);
        }
        return $this->_tables;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Types\Tablevalues
     *
     * @api
     */
    public function tablevalues(): Tablevalues
    {
        if ($this->_tablevalues === null) {
            $this->_tablevalues = new Tablevalues($this->api);
        }
        return $this->_tablevalues;
    }
}
