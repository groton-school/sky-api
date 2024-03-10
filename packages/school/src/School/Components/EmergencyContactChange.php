<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * Emergency Contact Changes
 *
 * @property ?int $user_id UserId
 * @property ?string $call_dialer The string representation of the call dialer
 *   settings in Education Management
 * @property ?int $ec_user_id EcUserId
 * @property ?string $firstname First Name
 * @property ?string $lastname Last Name
 * @property ?string $phone_number Phone Number
 * @property ?string $phone_type Phone Type
 * @property ?int $phone_call_type Phone Call Type
 * @property ?string $email Email
 * @property ?int $email_call_type Email Call Type
 * @property ?int $record_type Record Type
 * @property ?int $sort Sort
 * @property ?bool $inactive inactive
 * @property ?bool $active
 * @property ?bool $delete_indicator Deleted Indicator
 * @property ?string $roles Roles
 * @property ?bool $student_indicator Student Indicator
 * @property ?bool $faculty_indicator Faculty Indicator
 * @property ?bool $staff_indicator Staff Indicator
 * @property ?\Blackbaud\SKY\School\Components\EmergencyContactChangeEmail[]
 *   $emergency_contact_change_emails
 * @property ?\Blackbaud\SKY\School\Components\EmergencyContactChangePhone[]
 *   $emergency_contact_change_phones
 *
 * @api
 */
class EmergencyContactChange extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "call_dialer" => "string",
        "ec_user_id" => "int",
        "firstname" => "string",
        "lastname" => "string",
        "phone_number" => "string",
        "phone_type" => "string",
        "phone_call_type" => "int",
        "email" => "string",
        "email_call_type" => "int",
        "record_type" => "int",
        "sort" => "int",
        "inactive" => "bool",
        "active" => "bool",
        "delete_indicator" => "bool",
        "roles" => "string",
        "student_indicator" => "bool",
        "faculty_indicator" => "bool",
        "staff_indicator" => "bool",
        "emergency_contact_change_emails" => "\Blackbaud\SKY\School\Components\EmergencyContactChangeEmail[]",
        "emergency_contact_change_phones" => "\Blackbaud\SKY\School\Components\EmergencyContactChangePhone[]",
    ];
}
