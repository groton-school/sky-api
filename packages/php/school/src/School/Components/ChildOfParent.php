<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UserRead Model
 *
 * @property ?int $id The ID associated with a user
 * @property ?bool $student_is_active Indicates if the user is an active
 *   student
 * @property ?string $current_grade The current grade of a user
 * @property ?string $grad_year The grad year of a user
 * @property ?string $email The email address of a user
 * @property ?string $first_name The first name of a user
 * @property ?string $last_name The last name of a user
 * @property ?string $middle_name The middle name of a user
 * @property ?string $nick_name The nickname of a user **This field will be
 *   deprecated after 90 days.**
 * @property ?string $preferred_name The preferred name of the user
 * @property ?string $prefix The prefix of a user
 * @property ?string $suffix The suffix of a user
 * @property ?string $preferred_last_name The preferred last name of the user
 *
 * @api
 */
class ChildOfParent extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "student_is_active" => "bool",
        "current_grade" => "string",
        "grad_year" => "string",
        "email" => "string",
        "first_name" => "string",
        "last_name" => "string",
        "middle_name" => "string",
        "nick_name" => "string",
        "preferred_name" => "string",
        "prefix" => "string",
        "suffix" => "string",
        "preferred_last_name" => "string",
    ];
}
