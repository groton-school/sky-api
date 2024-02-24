<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Athletics;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\ScheduleItemCollection;

/**
 * @api
 */
class Schedules extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/athletics/schedules";

    /**
     * Returns a collection of athletic games for the current school year.
     *
     *  Use the ```start\_date``` and/or ```end\_date``` to filter to a
     * specific timeframe.
     *
     *  Returns data for a specific team by setting the ```team\_id``` using
     * the GET teams endpoint.
     *
     *  Returns both games and practices by setting ```include\_practice``` to
     * true.
     *
     *  Requires at least one of the following roles in the Education
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
     * @param ?string $start_date Format - date-time (as date-time in
     *   RFC3339). Filter games/practices after this date
     * @param ?string $end_date Format - date-time (as date-time in RFC3339).
     *   Filter games/practices before this date
     * @param ?string $school_year Filter on a specific school year. Defaults
     *   to current school year.
     * @param ?bool $include_practice Set to ```true``` to include practices
     *   with games. Defaults to false.
     * @param ?int $team_id Format - int32. Filter games/practices for a
     *   specific team. Defaults to all teams.
     * @param ?string $last_modified Format - date-time (as date-time in
     *   RFC3339). Set date to limit results to games with information changed
     *   on and after that date.
     *
     * @return \Blackbaud\SKY\School\Components\ScheduleItemCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(?string $start_date, ?string $end_date, ?string $school_year, ?bool $include_practice, ?int $team_id, ?string $last_modified): ScheduleItemCollection
    {
        assert($start_date !== null, new ArgumentException("Parameter `start_date` is required"));
        assert($end_date !== null, new ArgumentException("Parameter `end_date` is required"));
        assert($school_year !== null, new ArgumentException("Parameter `school_year` is required"));
        assert($include_practice !== null, new ArgumentException("Parameter `include_practice` is required"));
        assert($team_id !== null, new ArgumentException("Parameter `team_id` is required"));
        assert($last_modified !== null, new ArgumentException("Parameter `last_modified` is required"));

        return new ScheduleItemCollection($this->send("get", [], ["start_date" => $start_date,
        "end_date" => $end_date,
        "school_year" => $school_year,
        "include_practice" => $include_practice,
        "team_id" => $team_id,
        "last_modified" => $last_modified]));
    }
}
