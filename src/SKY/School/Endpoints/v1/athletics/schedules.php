<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Components\ScheduleItemCollection;

/**
 * @api
 */
class Schedules extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/athletics/schedules";

    /**
     * Returns a collection of athletic games for the current school year.
     *
     * Use the ```start_date``` and/or ```end_date``` to filter to a specific
     * timeframe.
     *
     * Returns data for a specific team by setting the ```team_id``` using the
     * GET teams endpoint.
     *
     * Returns both games and practices by setting ```include_practice``` to
     * true.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Athletic Group Manager
     *
     * - Team Schedule Manager
     *
     * - Schedule Manager
     *
     * - Coach
     *
     * - Pending Coach
     *
     * @param ?string $start_date (Optional) Format - date-time (as date-time
     *   in RFC3339). Filter games/practices after this date
     * @param ?string $end_date (Optional) Format - date-time (as date-time in
     *   RFC3339). Filter games/practices before this date
     * @param ?string $school_year (Optional) Filter on a specific school
     *   year. Defaults to current school year.
     * @param ?bool $include_practice (Optional) Set to ```true``` to include
     *   practices with games. Defaults to false.
     * @param ?int $team_id (Optional) Format - int32. Filter games/practices
     *   for a specific team. Defaults to all teams.
     * @param ?string $last_modified (Optional) Format - date-time (as
     *   date-time in RFC3339). Set date to limit results to games with
     *   information changed on and after that date.
     *
     * @return \Blackbaud\SKY\School\Components\ScheduleItemCollection Success
     *
     * @api
     */
    public function filterBy(?string $start_date = null, ?string $end_date = null, ?string $school_year = null, ?bool $include_practice = null, ?int $team_id = null, ?string $last_modified = null): ScheduleItemCollection
    {
        return new ScheduleItemCollection($this->send("get", [], ["start_date" => $start_date,
        "end_date" => $end_date,
        "school_year" => $school_year,
        "include_practice" => $include_practice,
        "team_id" => $team_id,
        "last_modified" => $last_modified]));
    }
}
