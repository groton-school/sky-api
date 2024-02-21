<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Activities\Sections;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Activities
 *
 * @api
 */
class Activities extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Activities\Sections $_sections
     */
    public Sections $_sections;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Activities\Sections
     *
     * @api
     */
    public function sections(): Sections
    {
        if ($this->_sections === null) {
            $this->_sections = new Sections($this->api);
        }
        return $this->_sections;
    }
}
