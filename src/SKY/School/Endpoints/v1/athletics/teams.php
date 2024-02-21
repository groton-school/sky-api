<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\TeamCollection;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster;
use Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule;

/**
 * @api
 */
class Teams extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/teams";

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster $_roster
     */
    public Roster $_roster;

    /**
     * @var \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule
     *   $_schedule
     */
    public Schedule $_schedule;

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

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Roster
     *
     * @api
     */
    public function roster(): Roster
    {
        if ($this->_roster === null) {
            $this->_roster = new Roster($this->api);
        }
        return $this->_roster;
    }

    /**
     * @return \Blackbaud\SKY\School\Endpoints\V1\Athletics\Teams\Schedule
     *
     * @api
     */
    public function schedule(): Schedule
    {
        if ($this->_schedule === null) {
            $this->_schedule = new Schedule($this->api);
        }
        return $this->_schedule;
    }
}
