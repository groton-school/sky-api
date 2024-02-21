<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Student\Sections;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Academics\Student
 *
 * @api
 */
class Student extends BaseEndpoint
{
    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Student\Sections
     *   $_sections
     */
    public Sections $_sections;

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Academics\Student\Sections
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
