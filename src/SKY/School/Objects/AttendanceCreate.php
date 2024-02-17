<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $student_user_id ID of the student
 * @property string $begin_date Start date of the Attendance report. The
 *   timestamp is required, but only the date portion is used. To specify a
 *   specific start time, use the start_time field.
 * @property string $end_date End date of the Attendance report. The timestamp
 *   is required, but only the date portion is used. To specific a specific end
 *   time, use the end_time field.
 * @property string $start_time Start time of the Attendance report. If blank,
 *   will default to the beginning of the day ("00:00:00").
 * @property string $end_time End time of the Attendance report. If blank,
 *   will default to the end of the day ("23:59:00").
 * @property int $excuse_type_id ID of the attendace execuse
 * @property string $excuse_comment Description of the attendance report
 *
 * @api
 */
class AttendanceCreate extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "student_user_id",
        "begin_date",
        "end_date",
        "start_time",
        "end_time",
        "excuse_type_id",
        "excuse_comment",
    ];
}
