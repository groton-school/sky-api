<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Endpoints\V1\Events\Calendar;
use Blackbaud\SKY\School\Endpoints\V1\Events\Categories;

/**
 * Routing class for the namespace Blackbaud\SKY\School\Endpoints\V1\Events
 *
 * @property \Blackbaud\SKY\School\Endpoints\V1\Events\Categories $categories
 * @property \Blackbaud\SKY\School\Endpoints\V1\Events\Calendar $calendar
 *
 * @api
 */
class Events extends BaseEndpoint
{
    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "categories" => "\Blackbaud\SKY\School\Endpoints\V1\Events\Categories",
        "calendar" => "\Blackbaud\SKY\School\Endpoints\V1\Events\Calendar",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Events\Categories $_categories
     */
    protected ?Categories $_categories = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Events\Calendar $_calendar
     */
    protected ?Calendar $_calendar = null;
}
