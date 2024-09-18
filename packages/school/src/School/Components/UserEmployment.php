<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UserEmployment Model
 *
 * @property \Blackbaud\SKY\School\Components\UserBaseRead $user UserBaseRead
 *   Model
 * @property ?string $date_appointed The tenure start date
 * @property ?string $date_departed The tenure end date
 * @property bool $disable_account True if the user’s account will be
 *   disabled upon withdrawal.
 * @property ?\Blackbaud\SKY\School\Components\EmployeeRolesInfoModel[] $roles
 *   An array of the user’s faculty roles
 * @property ?\Blackbaud\SKY\School\Components\IdDescriptorField[]
 *   $school_levels An array of the user’s school levels
 * @property ?\Blackbaud\SKY\School\Components\EmployeeDepartmentsInfoModel[]
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
        "user" => "\Blackbaud\SKY\School\Components\UserBaseRead",
        "date_appointed" => "string",
        "date_departed" => "string",
        "disable_account" => "bool",
        "roles" => "\Blackbaud\SKY\School\Components\EmployeeRolesInfoModel[]",
        "school_levels" => "\Blackbaud\SKY\School\Components\IdDescriptorField[]",
        "departments" => "\Blackbaud\SKY\School\Components\EmployeeDepartmentsInfoModel[]",
        "grade_levels" => "\Blackbaud\SKY\School\Components\IdDescriptorField[]",
        "sports" => "\Blackbaud\SKY\School\Components\IdDescriptorField[]",
    ];
}
