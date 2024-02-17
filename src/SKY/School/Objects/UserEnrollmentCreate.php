<?php

namespace Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * @property int $user_id ID of the individual to be enrolled
 * @property int $grade_level_id ID of the grade the individual is enrolling
 *   in
 * @property int $school_level_id ID of the school level
 * @property string $school_year_label School Year individual is enrolling in.
 *    Defaults to the current school year.
 * @property string $enroll_date Date of the enrollment
 * @property string $depart_date Date departed
 * @property bool $current_year Toggles current year
 * @property bool $has_grades Toggles has grades
 * @property bool $grade_repeated Toggles grade repeated
 * @property bool $graduated Toggles graduated
 * @property bool $allow_edit Toggles allow edit
 * @property bool $allow_delete Toggles allow delete
 * @property bool $future_enrollments Toggles future enrollments
 * @property int $duration_id The Id of the duration the user should be
 *   enrolled in. Optional for all Education Enrollments.
 * @property int $session_id The Id of the session the user should be enrolled
 *   in. Required for Higher Education Enrollments.
 * @property int[] $role_ids Collection of RoleIds the individual should be
 *   associated to
 *
 * @api
 */
class UserEnrollmentCreate extends BaseObject
{
    /**
     * @var string[] fields
     */
    protected static array $fields = [
        "user_id",
        "grade_level_id",
        "school_level_id",
        "school_year_label",
        "enroll_date",
        "depart_date",
        "current_year",
        "has_grades",
        "grade_repeated",
        "graduated",
        "allow_edit",
        "allow_delete",
        "future_enrollments",
        "duration_id",
        "session_id",
        "role_ids",
    ];
}
