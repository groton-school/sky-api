<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Advisories\Sections;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Advisories
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Advisories\Sections $sections
 *
 * @api
 */
class Advisories extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "sections" => "\Blackbaud\SKY\School\Endpoints\V1\Advisories\Sections",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Advisories\Sections $_sections
     */
    protected ?Sections $_sections = null;
}
