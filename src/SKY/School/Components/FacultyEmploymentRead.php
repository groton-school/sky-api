<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * FacultyEmploymentRead model
 *
 * @property ?int $user_id The users Id
 * @property ?string $first_name The users first name
 * @property ?string $last_name The users last name
 * @property ?string $date_appointed The date user was appointed
 * @property ?string $date_departed Date the user departed (if they have
 *   departed)
 * @property ?string $school_levels A comma delimited list of schools this
 *   user is associated with.
 * @property ?string $employee_roles A comma delimited list of employee roles
 *   this user is associated with.
 * @property ?string $departments A comma delimited list of departments this
 *   user is associated with.
 * @property ?string $grade_levels A comma delimited list of grade levels this
 *   user is associated with.
 * @property ?string $main_sports A comma delimited list of sports this user
 *   is associated with.
 *
 * @api
 */
class FacultyEmploymentRead extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id",
        "first_name",
        "last_name",
        "date_appointed",
        "date_departed",
        "school_levels",
        "employee_roles",
        "departments",
        "grade_levels",
        "main_sports",
    ];
}
