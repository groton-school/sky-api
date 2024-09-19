<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UserEmploymentUpdate Model
 *
 * @property ?string $date_appointed The tenure start date
 * @property ?string $date_departed The tenure end date. Note: this field will
 *   be overwritten by the withdrawal date if the effective withdrawal date is a
 *   future date.
 * @property ?string $employment_effective_date The date and time these
 *   updates will take effect. If this field is blank or if prior to the current
 *   date and time, the changes will take effect immediately. If the date is in
 *   the future, all changes will be marked Pending until the effective date
 *   passes.
 * @property ?string $withdraw_effective_date The date and time the
 *   employee’s withdrawal will take effect. If this field is prior to the
 *   current date and time, the withdrawal will take effect immediately. If the
 *   date is in the future, the withdrawal will be marked Pending until the
 *   effective date passes.
 * @property ?bool $disable_account Set to true to disable the account upon
 *   withdrawal
 * @property ?int[] $employee_roles An array of faculty role IDs. If this
 *   property is included, the existing employee roles will be overwritten with
 *   the included list. This includes removing ones not included.
 * @property ?int[] $school_levels An array of the school level IDs. If this
 *   property is included, the existing employee school levels will be
 *   overwritten with the included list. This includes removing ones not
 *   included.
 * @property ?\Blackbaud\SKY\School\Components\EmployeeDepartmentsEditModel[]
 *   $employee_departments An array of employee department objects. If this
 *   property is included, the existing employee departments will be overwritten
 *   with the included list. This includes removing ones not included.
 * @property ?int[] $grade_levels An array of grade level IDs. If this
 *   property is included, the existing employee grade levels will be
 *   overwritten with the included list. This includes removing ones not
 *   included.
 * @property ?int[] $employee_sports An array of sport IDs. If this property
 *   is included, the existing employee sports will be overwritten with the
 *   included list. This includes removing ones not included.
 *
 * @api
 */
class UserEmploymentUpdate extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "date_appointed" => "string",
        "date_departed" => "string",
        "employment_effective_date" => "string",
        "withdraw_effective_date" => "string",
        "disable_account" => "bool",
        "employee_roles" => "int[]",
        "school_levels" => "int[]",
        "employee_departments" => "\Blackbaud\SKY\School\Components\EmployeeDepartmentsEditModel[]",
        "grade_levels" => "int[]",
        "employee_sports" => "int[]",
    ];
}
