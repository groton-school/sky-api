<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Emergency Contact Changes
 *
 * @property int $user_id UserId
 * @property string $call_dialer The string representation of the call dialer
 *   settings in Education Management
 * @property int $ec_user_id EcUserId
 * @property string $firstname First Name
 * @property string $lastname Last Name
 * @property string $phone_number Phone Number
 * @property string $phone_type Phone  Type
 * @property int $phone_call_type Phone Call Type
 * @property string $email Email
 * @property int $email_call_type Email Call Type
 * @property int $record_type Record Type
 * @property int $sort Sort
 * @property bool $inactive inactive
 * @property bool $active
 * @property bool $delete_indicator Deleted Indicator
 * @property string $roles Roles
 * @property bool $student_indicator Student Indicator
 * @property bool $faculty_indicator Faculty Indicator
 * @property bool $staff_indicator Staff Indicator
 * @property \Blackbaud\SKY\School\Components\EmergencyContactChangeEmail[]
 *   $emergency_contact_change_emails
 * @property \Blackbaud\SKY\School\Components\EmergencyContactChangePhone[]
 *   $emergency_contact_change_phones
 *
 * @api
 */
class EmergencyContactChange extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "user_id",
        "call_dialer",
        "ec_user_id",
        "firstname",
        "lastname",
        "phone_number",
        "phone_type",
        "phone_call_type",
        "email",
        "email_call_type",
        "record_type",
        "sort",
        "inactive",
        "active",
        "delete_indicator",
        "roles",
        "student_indicator",
        "faculty_indicator",
        "staff_indicator",
        "emergency_contact_change_emails",
        "emergency_contact_change_phones",
    ];
}
