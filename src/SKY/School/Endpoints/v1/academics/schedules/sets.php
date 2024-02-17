<?php

namespace Blackbaud\SKY\School\Endpoints\v1\academics\schedules;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\ScheduleSetCollection;
use Blackbaud\SKY\School\Objects\ScheduleSetDetails;

/**
 * @api
 */
class sets extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/academics/schedules/sets/{schedule_set_id}";

    /**
     * Returns a collection of Schedule Sets for the specified
     * ```level_num```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param array{level_num: int, school_year?: string, group_type?: int}
     *   $params An associative array - level_num: Format - int32. Level Number
     *   indicates which school you are working with. - school_year: (Optional)
     *   The school year to get Schedule Sets for. Corresponds to
     *   ```school_year_label``` in the [Year
     *   list](https://developer.sky.blackbaud.com/docs/services/school/operations/v1yearsget). Defaults to the current school year. - group_type: (Optional) Format - int32. The Group Type to filter the collection of Schedule Sets. Defaults to the 'Academics' (1).
     *
     * @return \Blackbaud\SKY\School\Objects\ScheduleSetCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new ScheduleSetCollection($this->send("get", [], ["level_num" => $params["level_num"],
        "school_year" => $params["school_year"],
        "group_type" => $params["group_type"]]));
    }

    /**
     * Returns details about the specified ```schedule_set_id```.
     *
     * Requires at least one of the following roles in the Education
     * Management system:
     *
     * - Academic Group Manager
     *
     * - Schedule Manager
     *
     * @param array{schedule_set_id: int} $params An associative array
     *     - schedule_set_id: Format - int32. ID of the Schedule Set you seek.
     *
     * @return \Blackbaud\SKY\School\Objects\ScheduleSetDetails
     *
     * @api
     */
    public function get(array $params)
    {
        return new ScheduleSetDetails($this->send("get", ["{schedule_set_id}" => $params["schedule_set_id"]], []));
    }
}
