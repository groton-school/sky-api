<?php

namespace Blackbaud\SKY\School\Endpoints\V1;

use Battis\OpenAPI\Client\BaseEndpoint;
use Battis\OpenAPI\Client\Exceptions\ArgumentException;
use Blackbaud\SKY\School\Components\AttendanceCreate;
use Blackbaud\SKY\School\Components\AttendanceGetCollection;

/**
 * @api
 */
class Attendance extends BaseEndpoint
{
    /**
     * @var string $url Endpoint URL pattern
     */
    protected string $url = "https://api.sky.blackbaud.com/school/v1/attendance";

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
     * @param int $level_id Format - int32. The ID of the school level to
     *   retrieve attendance records.
     * @param string $day Format - date-time (as date-time in RFC3339). The
     *   date to return attendance for.
     * @param int $offering_type Format - int32. The offering type to retrieve
     *   records for.
     * @param ?int $excuse_type (Optional) Format - int32. Filters results to
     *   a specific excuse type.
     *
     * @return \Blackbaud\SKY\School\Components\AttendanceGetCollection
     *   Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function filterBy(int $level_id, string $day, int $offering_type, ?int $excuse_type = null): AttendanceGetCollection
    {
        assert($level_id !== null, new ArgumentException("Parameter `level_id` is required"));
        assert($day !== null, new ArgumentException("Parameter `day` is required"));
        assert($offering_type !== null, new ArgumentException("Parameter `offering_type` is required"));

        return new AttendanceGetCollection($this->send("get", [], ["level_id" => $level_id,
        "day" => $day,
        "offering_type" => $offering_type,
        "excuse_type" => $excuse_type]));
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
     * @param \Blackbaud\SKY\School\Components\AttendanceCreate $requestBody
     *   Information about the attendance report
     *
     * @return void Success
     *
     * @throws \Battis\OpenAPI\Client\Exceptions\ArgumentException if required
     *   parameters are not defined
     *
     * @api
     */
    public function post(AttendanceCreate $requestBody): void
    {
        assert($requestBody !== null, new ArgumentException("Parameter `requestBody` is required"));

        return $this->send("post", [], [], $requestBody);
    }
}
