<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $user_id The Id of the user for whom this data belongs
 * @property ?string $first_name
 * @property ?string $last_name
 * @property ?string $preferred_name
 * @property ?\Blackbaud\SKY\School\Components\DegreeOutputModel[]
 *   $student_degrees The list of degrees for the user
 *
 * @api
 */
class UserDegreeOutputModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "preferred_name" => "string",
        "student_degrees" => "\Blackbaud\SKY\School\Components\DegreeOutputModel[]",
    ];
}
