<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * FacultyEmploymentRead model
 *
 * @property int | null $user_id The users Id
 * @property string | null $first_name The users first name
 * @property string | null $last_name The users last name
 * @property string | null $date_appointed The date user was appointed
 * @property string | null $date_departed Date the user departed (if they have
 *   departed)
 * @property string | null $school_levels A comma delimited list of schools
 *   this user is associated with.
 * @property string | null $employee_roles A comma delimited list of employee
 *   roles this user is associated with.
 * @property string | null $departments A comma delimited list of departments
 *   this user is associated with.
 * @property string | null $grade_levels A comma delimited list of grade
 *   levels this user is associated with.
 * @property string | null $main_sports A comma delimited list of sports this
 *   user is associated with.
 *
 * @api
 */
class FacultyEmploymentRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","first_name","last_name","date_appointed","date_departed","school_levels","employee_roles","departments","grade_levels","main_sports"];
}
