<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property int $department_id The ID of the department
 * @property ?bool $is_chair Set to true if the employee is the department
 *   chair. Sets value to false if not included.
 *
 * @api
 */
class EmployeeDepartmentsEditModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "department_id" => "int",
        "is_chair" => "bool",
    ];
}
