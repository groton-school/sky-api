<?php

namespace Blackbaud\SKY\School\Endpoints\v1\athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ScheduleItemCollection;

/**
 * @api
 */
class schedules extends BaseEndpoint
{
    /**
     * @var string url
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
     * @param array{start_date?: string, end_date?: string, school_year?:
     *   string, include_practice?: bool, team_id?: int, last_modified?: string}
     *   $params An associative array
     *     - start_date: (Optional) Format - date-time (as date-time in
     *   RFC3339). Filter games/practices after this date
     *     - end_date: (Optional) Format - date-time (as date-time in
     *   RFC3339). Filter games/practices before this date
     *     - school_year: (Optional) Filter on a specific school year.
     *   Defaults to current school year.
     *     - include_practice: (Optional) Set to ```true``` to include
     *   practices with games. Defaults to false.
     *     - team_id: (Optional) Format - int32. Filter games/practices for a
     *   specific team. Defaults to all teams.
     *     - last_modified: (Optional) Format - date-time (as date-time in
     *   RFC3339). Set date to limit results to games with information changed
     *   on and after that date.
     *
     * @return \Blackbaud\SKY\School\Objects\ScheduleItemCollection
     *
     * @api
     */
    public function filterBy(array $params = [])
    {
        return new ScheduleItemCollection($this->send("get", [], ["start_date" => $params["start_date"],
        "end_date" => $params["end_date"],
        "school_year" => $params["school_year"],
        "include_practice" => $params["include_practice"],
        "team_id" => $params["team_id"],
        "last_modified" => $params["last_modified"]]));
    }
}
