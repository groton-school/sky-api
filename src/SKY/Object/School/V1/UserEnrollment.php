<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * User Enrollment
 *
 * @property int|null $user_id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $preferred_name
 * @property string|null $name
 * @property string|null $school_year
 * @property Level $school_level Level Model
 * @property GradeLevel $grade_level GradeLevel Model
 * @property bool|null $repeated
 * @property bool|null $graduated
 * @property string|null $enroll_date
 * @property string|null $depart_date
 * @property string|null $depart_reason
 * @property string|null $session
 * @api
 */
class UserEnrollment extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","firstname","lastname","preferred_name","name","school_year","school_level","grade_level","repeated","graduated","enroll_date","depart_date","depart_reason","session"];
}
