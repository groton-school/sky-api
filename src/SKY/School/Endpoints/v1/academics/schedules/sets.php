<?php

namespace Blackbaud\SKY\School\Endpoints\V1\Academics\Schedules;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\ScheduleSetCollection;
use Blackbaud\SKY\School\Components\ScheduleSetDetails;

/**
 * @api
 */
class Sets extends BaseEndpoint
{
    /**
     * @var string $url
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/academics/schedules/sets/{schedule_set_id}";

    /**
     * Returns a collection of Schedule Sets for the specified
     * ```level_num```.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Academic Group Manager</li><li>Schedule Manager</li></ul>
     *
     * @param array{level_num: int, school_year: string, group_type: int}
     *   $params An associative array
     *     - level_num: Format - int32. Level Number indicates which school
     *   you are working with.
     *     - school_year: The school year to get Schedule Sets for.
     *   Corresponds to ```school\_year\_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Defaults to the current school year.
     *     - group_type: Format - int32. The Group Type to filter the
     *   collection of Schedule Sets. Defaults to the 'Academics' (1).
     *
     * @return \Blackbaud\SKY\School\Components\ScheduleSetCollection Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function filterBy(array $params): ScheduleSetCollection
    {
        assert(isset($params['level_num']), new ArgumentException("Parameter `level_num` is required"));
        assert(isset($params['school_year']), new ArgumentException("Parameter `school_year` is required"));
        assert(isset($params['group_type']), new ArgumentException("Parameter `group_type` is required"));

        return new ScheduleSetCollection($this->send("get", [], ["level_num" => $level_num,
        "school_year" => $school_year,
        "group_type" => $group_type]));
    }

    /**
     * Returns details about the specified ```schedule_set_id```.<br />
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * <ul><li>Academic Group Manager</li><li>Schedule Manager</li></ul>
     *
     * @param array{schedule_set_id: int} $params An associative array
     *     - schedule_set_id: Format - int32. ID of the Schedule Set you seek.
     *
     * @return \Blackbaud\SKY\School\Components\ScheduleSetDetails Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     */
    public function get(array $params): ScheduleSetDetails
    {
        assert(isset($params['schedule_set_id']), new ArgumentException("Parameter `schedule_set_id` is required"));

        return new ScheduleSetDetails($this->send("get", ["{schedule_set_id}" => $params['schedule_set_id']], []));
    }
}
