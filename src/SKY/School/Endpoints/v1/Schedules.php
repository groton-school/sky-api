<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Schedules\Meetings;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Schedules
 *
 * @api
 */
class Schedules extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Schedules\Meetings $_meetings
     */
    public Meetings $_meetings;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Schedules\Meetings
     *
     * @api
     */
    public function meetings(): Meetings
    {
        if ($this->_meetings === null) {
            $this->_meetings = new Meetings($this->api);
        }
        return $this->_meetings;
    }
}
