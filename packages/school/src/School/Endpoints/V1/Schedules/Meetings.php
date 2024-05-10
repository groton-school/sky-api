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
    protected string $url = "https://api.sky.blackbaud.com/school/v1/schedules/{student_id}/meetings";

    /**
     * Returns a list of section meetings for a given date. When
     * ```end\_date``` is supplied a range of meetings between the given dates
     * is returned.
     *
     * ```offering\_types``` can take a single or multiple values as a comma
     * delimited ```string``` of integers, defaults to 1
     *
     * ```end\_date``` cannot be more than 30 days past the ```start\_date```.
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
     *  Requires at least one of the following roles in the Education
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
     * @param array{start_date: string, end_date: string, offering_types?:
     *   string, section_ids: string, last_modified: string,
     *   show_time_for_current_date?: bool} $params An associative array
     *     - start_date: Format - date-time (as date-time in RFC3339). Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-01.
     *     - end_date: Format - date-time (as date-time in RFC3339). Use
     *   [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-08.
     *     - offering_types: Comma delimited list of integer values above.
     *   Defaults to 1.
     *     - section_ids: Comma delimited list of integer values for the
     *   section identifiers to return. By default the route returns all
     *   sections.
     *     - last_modified: Format - date-time (as date-time in RFC3339).
     *   Filters meetings to sections that were modified on or after the date
     *   provided.
     *  Use [ISO-8601](https://en.wikipedia.org/wiki/ISO_8601) date format:
     *   2022-04-01.
     *     - show_time_for_current_date: Set to true to calculate the
     *   ```start\_time``` and ```end\_time``` or meetings based on the current
     *   day instead of the meeting day. Defaults to false.
     *
     * @return \Blackbaud\SKY\School\Components\MeetingCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function list_(array $params): MeetingCollection
    {
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));
        assert(isset($params['section_ids']), new ArgumentException("Parameter `section_ids` is required"));
        assert(isset($params['last_modified']), new ArgumentException("Parameter `last_modified` is required"));

        return new MeetingCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['start_date','end_date','offering_types','section_ids','last_modified','show_time_for_current_date']), ARRAY_FILTER_USE_KEY)));
    }

    /**
     * Returns a list of meetings for a given student for a specific date.
     * When ```end\_date``` is supplied a range of meetings between the given
     * dates is returned.
     *
     * ```end\_date``` cannot be more than 30 days past the ```start\_date```.
     * Default date range is 30 days.
     *
     *  Requires at least one of the following roles in the Education
     * Management system and group page access should be set for one of the
     * roles:
     *
     * - Student
     *
     * - Parent
     *
     * - Attendance Manager
     *
     * - Schedule Manager
     *
     * @param array{student_id: int, start_date: string, end_date: string}
     *   $params An associative array
     *     - student_id: Format - int32.
     *     - start_date: Format - date-time (as date-time in RFC3339).
     *     - end_date: Format - date-time (as date-time in RFC3339).
     *
     * @return \Blackbaud\SKY\School\Components\StudentScheduleCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function searchByStudentId(array $params): StudentScheduleCollection
    {
        assert(isset($params['student_id']), new ArgumentException("Parameter `student_id` is required"));
        assert(isset($params['start_date']), new ArgumentException("Parameter `start_date` is required"));
        assert(isset($params['end_date']), new ArgumentException("Parameter `end_date` is required"));

        return new StudentScheduleCollection($this->send("get", array_filter($params, fn($key) => in_array($key, ['student_id']), ARRAY_FILTER_USE_KEY), array_filter($params, fn($key) => in_array($key, ['start_date','end_date']), ARRAY_FILTER_USE_KEY)));
    }
}
