<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\TeamCollection;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule;

/**
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster $roster
 * @property \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule
 *   $schedule
 *
 * @api
 */
class Teams extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams";

    /**
     * @var \array<string class-string=""> $endpoints Routing
     *   subpaths</string>
     */
    protected array $endpoints = [
        "roster" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster",
        "schedule" => "\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule",
    ];

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster
     *   $_roster
     */
    protected ?Roster $_roster = null;

    /**
     * @var ?\Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule
     *   $_schedule
     */
    protected ?Schedule $_schedule = null;

    /**
     * Returns a collection of athletic teams for the current school year.
     *
     * Use the optional ```school_year``` parameter to specify a different
     * year.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param ?string $school_year (Optional) School year
     *
     * @return \Blackbaud\SKY\School\Components\TeamCollection Success
     *
     * @api
     */
    public function filterBy(?string $school_year = null): TeamCollection
    {
        return new TeamCollection($this->send("get", [], ["school_year" => $school_year]));
    }
}
