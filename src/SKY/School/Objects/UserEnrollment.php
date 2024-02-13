<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * User Enrollment
 *
 * @property int | null $user_id The id of the user
 * @property string | null $firstname The first name of the user
 * @property string | null $lastname The last name of the user
 * @property string | null $preferred_name The preferred name of the user
 * @property string | null $name The formatted name of the user
 * @property string | null $school_year The school year the user is enrolled
 *   in
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\Level $school_level
 *   Level Model
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\GradeLevel
 *   $grade_level GradeLevel Model
 * @property bool | null $repeated Returns true if the user repeated this
 *   enrollment
 * @property bool | null $graduated Returns true if the user graduated after
 *   completing this enrollment year
 * @property string | null $enroll_date The date the enrollment begins
 * @property string | null $depart_date The date the user departed the school
 *   year, ending the enrollment
 * @property string | null $depart_reason The reason the user departed the
 *   school
 * @property string | null $session The name of the session, if a session is
 *   attached to the enrollment
 *
 * @api
 */
class UserEnrollment extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","firstname","lastname","preferred_name","name","school_year","school_level","grade_level","repeated","graduated","enroll_date","depart_date","depart_reason","session"];
}
