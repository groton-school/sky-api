<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Activities\Rosters;
use Blackbaud\SKY\School\Endpoints\V1\Activities\Sections;

/**
 * Routing class for the subnamespace `Activities`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Activities\Sections $sections
 * @property \Blackbaud\SKY\School\Endpoints\V1\Activities\Rosters $rosters
 *
 * @api
 */
class Activities extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "sections" => "\Blackbaud\SKY\School\Endpoints\V1\Activities\Sections",
        "rosters" => "\Blackbaud\SKY\School\Endpoints\V1\Activities\Rosters",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Activities\Sections $_sections
     */
    protected ?Sections $_sections = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Activities\Rosters $_rosters
     */
    protected ?Rosters $_rosters = null;
}
