<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Schedules\Meetings;

/**
 * Routing class for the subnamespace `Schedules`
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Schedules\Meetings $meetings
 *
 * @api
 */
class Schedules extends BaseEndpoint
{
    /**
     * @var array<string, class-string<\Battis\OpenAPI\Client\BaseEndpoint>>
     *   $endpoints Routing subpaths
     */
    protected array $endpoints = [
        "meetings" => "\Blackbaud\SKY\School\Endpoints\V1\Schedules\Meetings",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Schedules\Meetings $_meetings
     */
    protected ?Meetings $_meetings = null;
}
