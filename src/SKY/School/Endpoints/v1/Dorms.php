<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Dorms\All;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Dorms
 *
 * @api
 */
class Dorms extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Dorms\All $_all
     */
    public All $_all;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Dorms\All
     *
     * @api
     */
    public function all(): All
    {
        if ($this->_all === null) {
            $this->_all = new All($this->api);
        }
        return $this->_all;
    }
}
