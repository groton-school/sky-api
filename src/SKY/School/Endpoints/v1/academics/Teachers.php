<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections;

/**
 * Routing class for the subnamespace `Teachers`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections
 *   $sections
 *
 * @api
 */
class Teachers extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "sections" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections",
    ];

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections
     *   $_sections
     */
    protected Sections $_sections = null;
}
