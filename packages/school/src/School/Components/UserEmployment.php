<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UserEmployment Model
 *
 * @property \Blackbaud\SKY\School\Components\EmployeeInfoModel $user Employee
 *   Roles Info Model
 * @property ?string $appointed_date The date the user started
 * @property ?string $withdraw_date The date the user was withdrawn
 * @property bool $is_account_disabled True if the user’s account is
 *   disabled
 * @property ?\Blackbaud\SKY\School\Components\EmployeeRolesInfoModel[] $roles
 *   An array of the user’s faculty roles
 * @property ?\Blackbaud\SKY\School\Components\IdDescriptorField[]
 *   $school_levels An array of the user’s school levels
 * @property ?\Blackbaud\SKY\School\Components\IdDescriptorField[]
 *   $departments An object with employee department information
 * @property ?\Blackbaud\SKY\School\Components\IdDescriptorField[]
 *   $grade_levels An array of the user’s grade levels
 * @property ?\Blackbaud\SKY\School\Components\IdDescriptorField[] $sports An
 *   array of the user’s employee sports by school level
 *
 * @api
 */
class UserEmployment extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user" => "\Blackbaud\SKY\School\Components\EmployeeInfoModel",
        "appointed_date" => "string",
        "withdraw_date" => "string",
        "is_account_disabled" => "bool",
        "roles" => "\Blackbaud\SKY\School\Components\EmployeeRolesInfoModel[]",
        "school_levels" => "\Blackbaud\SKY\School\Components\IdDescriptorField[]",
        "departments" => "\Blackbaud\SKY\School\Components\IdDescriptorField[]",
        "grade_levels" => "\Blackbaud\SKY\School\Components\IdDescriptorField[]",
        "sports" => "\Blackbaud\SKY\School\Components\IdDescriptorField[]",
    ];
}
