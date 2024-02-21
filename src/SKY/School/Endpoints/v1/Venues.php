<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Venues
 *
 * @api
 */
class Venues extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings $_buildings
     */
    public Buildings $_buildings;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Venues\Buildings
     *
     * @api
     */
    public function buildings(): Buildings
    {
        if ($this->_buildings === null) {
            $this->_buildings = new Buildings($this->api);
        }
        return $this->_buildings;
    }
}
