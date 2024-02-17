<?php

namespace Blackbaud\SKY\School\Endpoints\v1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Blackbaud\SKY\School\Objects\AttendanceGetCollection;

/**
 * @api
 */
class attendance extends BaseEndpoint
{
    /**
     * @var string url
     */
    protected static string $url = "https://api.sky.blackbaud.com/school/v1/attendance";

    /**
     * Returns a collection of student attendance records for the specified
     * day.
     *
     * Please use this [ Attendance Setup
     * Guide](https://webfiles-sc1.blackbaud.com/support/helpfiles/k12-kb/sis-tutorial-attendance-setup.html) to verify your attendance settings.
     *
     * Requires the following role in the Education Management system:
     *
     * - Attendance Manager
     *
     * @param array{level_id: int, day: string, offering_type: int,
     *   excuse_type?: int} $params An associative array
     *     - level_id: Format - int32. The ID of the school level to retrieve
     *   attendance records.
     *     - day: Format - date-time (as date-time in RFC3339). The date to
     *   return attendance for.
     *     - offering_type: Format - int32. The offering type to retrieve
     *   records for.
     *     - excuse_type: (Optional) Format - int32. Filters results to a
     *   specific excuse type.
     *
     * @return \Blackbaud\SKY\School\Objects\AttendanceGetCollection
     *
     * @api
     */
    public function filterBy(array $params)
    {
        return new AttendanceGetCollection($this->send("get", [], ["level_id" => $params["level_id"],
        "day" => $params["day"],
        "offering_type" => $params["offering_type"],
        "excuse_type" => $params["excuse_type"]]));
    }

    /**
     * Creates a new attendance record for the specified student.
     *
     * Please use this [ Attendance Setup
     * Guide](https://webfiles-sc1.blackbaud.com/support/helpfiles/k12-kb/sis-tutorial-attendance-setup.html) to verify your attendance settings.
     *
     * Requires the following role in the Education Management system:
     *
     * - Attendance Manager
     *
     * @return \void
     *
     * @api
     */
    public function post()
    {
        return $this->send("post", [], []);
    }
}
