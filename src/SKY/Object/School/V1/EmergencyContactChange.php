<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Emergency Contact Changes
 *
 * @property int|null $user_id
 * @property string|null $call_dialer
 * @property int|null $ec_user_id
 * @property string|null $firstname
 * @property string|null $lastname
 * @property string|null $phone_number
 * @property string|null $phone_type
 * @property int|null $phone_call_type
 * @property string|null $email
 * @property int|null $email_call_type
 * @property int|null $record_type
 * @property int|null $sort
 * @property bool|null $inactive
 * @property bool|null $active
 * @property bool|null $delete_indicator
 * @property string|null $roles
 * @property bool|null $student_indicator
 * @property bool|null $faculty_indicator
 * @property bool|null $staff_indicator
 * @property EmergencyContactChangeEmail[]|null $emergency_contact_change_emails
 * @property EmergencyContactChangePhone[]|null $emergency_contact_change_phones
 * @api
 */
class EmergencyContactChange extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","call_dialer","ec_user_id","firstname","lastname","phone_number","phone_type","phone_call_type","email","email_call_type","record_type","sort","inactive","active","delete_indicator","roles","student_indicator","faculty_indicator","staff_indicator","emergency_contact_change_emails","emergency_contact_change_phones"];
}
