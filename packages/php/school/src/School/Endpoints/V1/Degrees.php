<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees;

/**
 * Routing class for the subnamespace `Degrees`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Degrees\Studentdegrees
 *   $studentdegrees
 *
 * @api
 */
class Degrees extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
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
