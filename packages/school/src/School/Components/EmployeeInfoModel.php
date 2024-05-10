<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Employee Roles Info Model
 *
 * @property int $id The ID of the user
 * @property ?string $first_name The first name of the user
 * @property ?string $last_name The last name of the user
 * @property ?string $preferred_name The preferred name of the user
 * @property ?string $email The email of the user
 *
 * @api
 */
class EmployeeInfoModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "preferred_name" => "string",
        "email" => "string",
    ];
}
