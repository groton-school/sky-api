<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Emergency Contact Changes
 *
 * @property int | null $user_id UserId
 * @property string | null $call_dialer The string representation of the call
 *   dialer settings in Education Management
 * @property int | null $ec_user_id EcUserId
 * @property string | null $firstname First Name
 * @property string | null $lastname Last Name
 * @property string | null $phone_number Phone Number
 * @property string | null $phone_type Phone  Type
 * @property int | null $phone_call_type Phone Call Type
 * @property string | null $email Email
 * @property int | null $email_call_type Email Call Type
 * @property int | null $record_type Record Type
 * @property int | null $sort Sort
 * @property bool | null $inactive inactive
 * @property bool | null $active 
 * @property bool | null $delete_indicator Deleted Indicator
 * @property string | null $roles Roles
 * @property bool | null $student_indicator Student Indicator
 * @property bool | null $faculty_indicator Faculty Indicator
 * @property bool | null $staff_indicator Staff Indicator
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\EmergencyContactChangeEmail[] |
 *   null $emergency_contact_change_emails 
 * @property
 *   GrotonSchool\Blackbaud\SKY\School\Objects\EmergencyContactChangePhone[] |
 *   null $emergency_contact_change_phones 
 *
 * @api
 */
class EmergencyContactChange extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","call_dialer","ec_user_id","firstname","lastname","phone_number","phone_type","phone_call_type","email","email_call_type","record_type","sort","inactive","active","delete_indicator","roles","student_indicator","faculty_indicator","staff_indicator","emergency_contact_change_emails","emergency_contact_change_phones"];
}
