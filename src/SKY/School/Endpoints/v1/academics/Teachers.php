<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections
 *   $sections
 *
 * @api
 */
class Teachers extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "sections" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Teachers\Sections
     *   $_sections
     */
    protected ?Sections $_sections = null;
}
