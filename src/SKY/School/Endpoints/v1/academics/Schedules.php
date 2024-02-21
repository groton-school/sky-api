<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Master;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Sets;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules
 *
 * @api
 */
class Schedules extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Sets $_sets
     */
    public Sets $_sets;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Master
     *   $_master
     */
    public Master $_master;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Sets
     *
     * @api
     */
    public function sets(): Sets
    {
        if ($this->_sets === null) {
            $this->_sets = new Sets($this->api);
        }
        return $this->_sets;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Master
     *
     * @api
     */
    public function master(): Master
    {
        if ($this->_master === null) {
            $this->_master = new Master($this->api);
        }
        return $this->_master;
    }
}
