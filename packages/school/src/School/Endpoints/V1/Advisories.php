<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Advisories\Rosters;
use Blackbaud\SKY\School\Endpoints\V1\Advisories\Sections;

/**
 * Routing class for the subnamespace `Advisories`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Advisories\Sections $sections
 * @property \Blackbaud\SKY\School\Endpoints\V1\Advisories\Rosters $rosters
 *
 * @api
 */
class Advisories extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "sections" => "\Blackbaud\SKY\School\Endpoints\V1\Advisories\Sections",
        "rosters" => "\Blackbaud\SKY\School\Endpoints\V1\Advisories\Rosters",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Advisories\Sections $_sections
     */
    protected ?Sections $_sections = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Advisories\Rosters $_rosters
     */
    protected ?Rosters $_rosters = null;
}
