<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property bool $is_chair True if user chairs of the department
 * @property int $id The ID of the role
 * @property ?string $description The description of the role
 *
 * @api
 */
class EmployeeDepartmentsInfoModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "is_chair" => "bool",
        "id" => "int",
        "description" => "string",
    ];
}
