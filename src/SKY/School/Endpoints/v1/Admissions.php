<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Admissions\Candidates;
use Blackbaud\SKY\School\Endpoints\V1\Admissions\Checklists;
use Blackbaud\SKY\School\Endpoints\V1\Admissions\Checkliststatus;
use Blackbaud\SKY\School\Endpoints\V1\Admissions\Status;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Admissions
 *
 * @api
 */
class Admissions extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Admissions\Checklists
     *   $_checklists
     */
    public Checklists $_checklists;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Admissions\Candidates
     *   $_candidates
     */
    public Candidates $_candidates;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Admissions\Checkliststatus
     *   $_checkliststatus
     */
    public Checkliststatus $_checkliststatus;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Admissions\Status $_status
     */
    public Status $_status;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Admissions\Checklists
     *
     * @api
     */
    public function checklists(): Checklists
    {
        if ($this->_checklists === null) {
            $this->_checklists = new Checklists($this->api);
        }
        return $this->_checklists;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Admissions\Candidates
     *
     * @api
     */
    public function candidates(): Candidates
    {
        if ($this->_candidates === null) {
            $this->_candidates = new Candidates($this->api);
        }
        return $this->_candidates;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Admissions\Checkliststatus
     *
     * @api
     */
    public function checkliststatus(): Checkliststatus
    {
        if ($this->_checkliststatus === null) {
            $this->_checkliststatus = new Checkliststatus($this->api);
        }
        return $this->_checkliststatus;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Admissions\Status
     *
     * @api
     */
    public function status(): Status
    {
        if ($this->_status === null) {
            $this->_status = new Status($this->api);
        }
        return $this->_status;
    }
}
