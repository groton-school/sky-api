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
     * Returns a collection of athletic games for the current school year. <br
     * />
     *
     * Use the ```start_date``` and/or ```end_date``` to filter to a specific
     * timeframe. <br />
     *
     * Returns data for a specific team by setting the ```team_id``` using the
     * GET teams endpoint. <br />
     *
     * Returns both games and practices by setting ```include_practice``` to
     * true. <br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Athletic Group Manager</li><li>Team Schedule
     * Manager</li><li>Schedule Manager</li><li>Coach</li><li>Pending
     * Coach</li></ul>
     *
     * @param array{start_date: string, end_date: string, school_year: string,
     *   include_practice: bool, team_id: int, last_modified: string} $params An
     *   associative array
     *     - start_date: Format - date-time (as date-time in RFC3339). Filter
     *   games/practices after this date
     *     - end_date: Format - date-time (as date-time in RFC3339). Filter
     *   games/practices before this date
     *     - school_year: Filter on a specific school year. Defaults to
     *   current school year.
     *     - include_practice: Set to ```true``` to include practices with
     *   games. Defaults to false.
     *     - team_id: Format - int32. Filter games/practices for a specific
     *   team. Defaults to all teams.
     *     - last_modified: Format - date-time (as date-time in RFC3339). Set
     *   date to limit results to games with information changed on and after
     *   that date.
     *
     * @return \Blackbaud\SKY\School\Components\ScheduleItemCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(array $params): ScheduleItemCollection
    {
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));
        assert(isset($params['include_practice']), new ArgumentException("Parameter `include_practice` is required"));
        assert(isset($params['team_id']), new ArgumentException("Parameter `team_id` is required"));
        assert(isset($params['last_modified']), new ArgumentException("Parameter `last_modified` is required"));

        return new ScheduleItemCollection($this->send("get", [], ["start_date" => $start_date,
        "end_date" => $end_date,
        "school_year" => $school_year,
        "include_practice" => $include_practice,
        "team_id" => $team_id,
        "last_modified" => $last_modified]));
    }
}
