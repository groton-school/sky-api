<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Schedules;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\MeetingCollection;
use Blackbaud\SKY\School\Components\StudentScheduleCollection;

/**
 * @api
 */
class Meetings extends BaseEndpoint
{
    /**
     * @var string $url
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
     * @param string $start_date Format - date-time (as date-time in RFC3339).
     *   Use [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-01.
     * @param ?string $end_date (Optional) Format - date-time (as date-time in
     *   RFC3339). Use [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date
     *   format: 2022-04-08.
     * @param ?string $offering_types (Optional) Comma delimited list of
     *   integer values above. Defaults to 1.
     * @param ?string $section_ids (Optional) Comma delimited list of integer
     *   values for the section identifiers to return. By default the route
     *   returns all sections.
     * @param ?string $last_modified (Optional) Format - date-time (as
     *   date-time in RFC3339). Filters meetings to sections that were modified
     *   on or after the date provided.
     *  Use [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-01.
     * @param ?bool $show_time_for_current_date (Optional) Set to true to
     *   calculate the ```start_time``` and ```end_time``` or meetings based on
     *   the current day instead of the meeting day. Defaults to false.
     *
     * @return \Blackbaud\SKY\School\Components\MeetingCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(string $start_date, ?string $end_date = null, ?string $offering_types = null, ?string $section_ids = null, ?string $last_modified = null, ?bool $show_time_for_current_date = null): MeetingCollection
    {
        assert($start_date !== null, new ArgumentException("Parameter `start_date` is required"));

        return new MeetingCollection($this->send("get", [], ["start_date" => $start_date,
        "end_date" => $end_date,
        "offering_types" => $offering_types,
        "section_ids" => $section_ids,
        "last_modified" => $last_modified,
        "show_time_for_current_date" => $show_time_for_current_date]));
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
     * @param int $student_id Format - int32.
     * @param string $start_date Format - date-time (as date-time in RFC3339).
     * @param ?string $end_date (Optional) Format - date-time (as date-time in
     *   RFC3339).
     *
     * @return \Blackbaud\SKY\School\Components\StudentScheduleCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function getByStudent(int $student_id, string $start_date, ?string $end_date = null): StudentScheduleCollection
    {
        assert($student_id !== null, new ArgumentException("Parameter `student_id` is required"));
        assert($start_date !== null, new ArgumentException("Parameter `start_date` is required"));

        return new StudentScheduleCollection($this->send("get", ["{student_id}" => $student_id], ["start_date" => $start_date,
        "end_date" => $end_date]));
    }
}
