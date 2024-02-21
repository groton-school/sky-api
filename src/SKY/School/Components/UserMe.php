<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $id User Id
 * @property ?string $preferred_name Preferred Name
 * @property bool $is_student Is Student
 * @property bool $is_parent Is Parent
 * @property bool $is_faculty Is faculty
 * @property ?string $first_name The first name of a user
 * @property ?string $last_name The last name of a user
 * @property ?string $suffix The suffix of a user
 * @property ?\Blackbaud\SKY\School\Components\Role[] $roles The current users
 *   list of roles
 *
 * @api
 */
class UserMe extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "preferred_name" => "string",
        "is_student" => "bool",
        "is_parent" => "bool",
        "is_faculty" => "bool",
        "first_name" => "string",
        "last_name" => "string",
        "suffix" => "string",
        "roles" => "\Blackbaud\SKY\School\Components\Role[]",
    ];
}
