<?php

namespace Blackbaud\SKY\School\Endpoints\v1\schedules;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\MeetingCollection;
use Blackbaud\SKY\School\Objects\StudentScheduleCollection;

/**
 * @api
 */
class meetings extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/schedules/{student_id}/meetings";

    /**
     * Returns a list of section meetings for a given date. When
     * ```end_date``` is supplied a range of meetings between the given dates
     * is returned.
     *
     * ```offering_types``` can take a single or multiple values as a comma
     * delimited ```string``` of integers, defaults to 1
     *
     * ```end_date``` cannot be more than 30 days past the ```start_date```.
     * Default date range is 30 days.
     *
     * - Academics: 1
     *
     * - Activities: 2
     *
     * - Advisory: 3
     *
     * - Athletics: 9
     *
     * Requires at least one of the following roles in the Education
     * Management system: - Academics Group Manager
     *
     * - Advisory Group Manager
     *
     * - Platform Manager
     *
     * - Activity Group Manager
     *
     * - Athletic Group Manager
     *
     * - Scheduling Manager
     *
     * @param array{start_date: string, end_date?: string, offering_types?:
     *   string, section_ids?: string, last_modified?: string,
     *   show_time_for_current_date?: bool} $params An associative array -
     *   start_date: Format - date-time (as date-time in RFC3339). Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-01. - end_date: (Optional) Format - date-time (as date-time in
     *   RFC3339). Use [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date
     *   format: 2022-04-08. - offering_types: (Optional) Comma delimited list
     *   of integer values above. Defaults to 1. - section_ids: (Optional) Comma
     *   delimited list of integer values for the section identifiers to return.
     *   By default the route returns all sections. - last_modified: (Optional)
     *   Format - date-time (as date-time in RFC3339). Filters meetings to
     *   sections that were modified on or after the date provided.
     *  Use [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-01. - show_time_for_current_date: (Optional) Set to true to
     *   calculate the ```start_time``` and ```end_time``` or meetings based on
     *   the current day instead of the meeting day. Defaults to false.
     *
     * @return \Blackbaud\SKY\School\Objects\MeetingCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new MeetingCollection($this->send("get", [], ["start_date" => $params["start_date"],
        "end_date" => $params["end_date"],
        "offering_types" => $params["offering_types"],
        "section_ids" => $params["section_ids"],
        "last_modified" => $params["last_modified"],
        "show_time_for_current_date" => $params["show_time_for_current_date"]]));
    }

    /**
     * Returns a list of meetings for a given student for a specific date.
     * When ```end_date``` is supplied a range of meetings between the given
     * dates is returned.
     *
     * ```end_date``` cannot be more than 30 days past the ```start_date```.
     * Default date range is 30 days.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Student
     *
     * - Parent
     *
     * - Platform Manager
     *
     * - Attendance Manager
     *
     * - Schedule Manager
     *
     * @param array{student_id: int, start_date: string, end_date?: string}
     *   $params An associative array
     *     - student_id: Format - int32.
     *     - start_date: Format - date-time (as date-time in RFC3339).
     *     - end_date: (Optional) Format - date-time (as date-time in
     *   RFC3339).
     *
     * @return \Blackbaud\SKY\School\Objects\StudentScheduleCollection
     *
     * @api
     */
    public function getByStudent(array $params)
    {
        return new StudentScheduleCollection($this->send("get", ["{student_id}" => $params["student_id"]], ["start_date" => $params["start_date"],
        "end_date" => $params["end_date"]]));
    }
}
