<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Student\Sections;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Academics\Student
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Student\Sections
 *   $sections
 *
 * @api
 */
class Student extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "sections" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Student\Sections",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Student\Sections
     *   $_sections
     */
    protected ?Sections $_sections = null;
}
