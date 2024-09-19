<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Employee Roles Info Model
 *
 * @property int $id The ID of the role
 * @property ?string $description The description of the role
 * @property \Blackbaud\SKY\School\Components\IdDescriptorField $base_role
 *
 * @api
 */
class EmployeeRolesInfoModel extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "description" => "string",
        "base_role" => "\Blackbaud\SKY\School\Components\IdDescriptorField",
    ];
}
