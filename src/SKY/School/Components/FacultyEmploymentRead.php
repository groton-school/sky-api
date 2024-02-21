<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
class FacultyEmploymentRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "date_appointed" => "string",
        "date_departed" => "string",
        "school_levels" => "string",
        "employee_roles" => "string",
        "departments" => "string",
        "grade_levels" => "string",
        "main_sports" => "string",
    ];
}
