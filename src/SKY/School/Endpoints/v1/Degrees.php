<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Degrees
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees
 *   $studentdegrees
 *
 * @api
 */
class Degrees extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "studentdegrees" => "\Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees
     *   $_studentdegrees
     */
    protected ?Studentdegrees $_studentdegrees = null;
}
