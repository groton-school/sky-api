<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Degrees
 *
 * @api
 */
class Degrees extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees
     *   $_studentdegrees
     */
    public Studentdegrees $_studentdegrees;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees
     *
     * @api
     */
    public function studentdegrees(): Studentdegrees
    {
        if ($this->_studentdegrees === null) {
            $this->_studentdegrees = new Studentdegrees($this->api);
        }
        return $this->_studentdegrees;
    }
}
