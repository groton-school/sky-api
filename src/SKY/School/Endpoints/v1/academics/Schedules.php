<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Master;
use Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Sets;

/**
 * Routing class for the namespace
 * Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Sets $sets
 * @property \Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Master
 *   $master
 *
 * @api
 */
class Schedules extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "sets" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Sets",
        "master" => "\Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Master",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Sets
     *   $_sets
     */
    protected ?Sets $_sets = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules\Master
     *   $_master
     */
    protected ?Master $_master = null;
}
