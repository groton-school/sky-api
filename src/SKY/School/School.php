<?php

namespace Blackbaud\SKY\School;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints
 *
 * @api
 */
class School extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1 $_v1 Routing class for the
     *   namespace Blackbaud\SKY\School\Endpoints\V1
     */
    public V1 $_v1;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1
     *
     * @api
     */
    public function v1(): V1
    {
        if ($this->_v1 === null) {
            $this->_v1 = new V1($this->api);
        }
        return $this->_v1;
    }
}
