<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Academic Teacher Model
 *
 * @property ?int $id The user ID for the teacher
 * @property ?bool $head The head teacher indicator
 * @property ?string $name The firstname and lastname of the teacher
 * @property ?string $firstname The first name of the teacher
 * @property ?string $lastname The last name of the teacher
 * @property ?string $preferred_name The teachers preferred name
 * @property ?string $formatted_name The formatted name of the teacher.  If
 *   the teacher has a preferred name, it is used in place of the first name.
 * @property ?string $email The teacher's email address
 * @property ?string $cell_phone The teacher's cellular phone
 *
 * @api
 */
class Teacher extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "head" => "bool",
        "name" => "string",
        "firstname" => "string",
        "lastname" => "string",
        "preferred_name" => "string",
        "formatted_name" => "string",
        "email" => "string",
        "cell_phone" => "string",
    ];
}
