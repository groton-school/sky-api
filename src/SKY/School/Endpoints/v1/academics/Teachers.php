<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers
 *
 * @api
 */
class Teachers extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections
     *   $_sections
     */
    public Sections $_sections;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections
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
