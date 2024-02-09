<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * @property int $user_id
 * @property int $grade_level_id
 * @property int $school_level_id
 * @property string|null $school_year_label
 * @property string $enroll_date
 * @property string|null $depart_date
 * @property bool $current_year
 * @property bool $has_grades
 * @property bool $grade_repeated
 * @property bool $graduated
 * @property bool $allow_edit
 * @property bool $allow_delete
 * @property bool $future_enrollments
 * @property int $duration_id
 * @property int $session_id
 * @property _int $role_ids
 * @api
 */
class UserEnrollmentCreate extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","grade_level_id","school_level_id","school_year_label","enroll_date","depart_date","current_year","has_grades","grade_repeated","graduated","allow_edit","allow_delete","future_enrollments","duration_id","session_id","role_ids"];
}
