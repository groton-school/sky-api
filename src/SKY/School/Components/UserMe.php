<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

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
class UserMe extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id",
        "preferred_name",
        "is_student",
        "is_parent",
        "is_faculty",
        "first_name",
        "last_name",
        "suffix",
        "roles",
    ];
}
