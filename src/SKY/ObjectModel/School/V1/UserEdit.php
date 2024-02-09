<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* UserEdit Model
*
* @property string|null $affiliation
* @property string|null $birth_place
* @property string|null $boarding_or_day
* @property string|null $cc_email
* @property string|null $citizenship
* @property string|null $custom_field_one
* @property string|null $custom_field_two
* @property string|null $custom_field_three
* @property string|null $custom_field_four
* @property string|null $custom_field_five
* @property string|null $custom_field_six
* @property string|null $custom_field_seven
* @property string|null $custom_field_eight
* @property string|null $custom_field_nine
* @property string|null $custom_field_ten
* @property bool $deceased
* @property string|null $deceased_date
* @property string $dob
* @property string|null $email
* @property bool $email_active
* @property string|null $ethnicity
* @property string|null $first_name
* @property string|null $gender
* @property string|null $greeting
* @property HomeLanguageAdd[]|null $home_languages
* @property string|null $host_id
* @property int $id
* @property string|null $international
* @property bool|null $is_abroad
* @property bool $is_international
* @property bool|null $is_latino_hispanic
* @property string|null $latino_hispanic
* @property bool $is_responsible_signer
* @property UserInState $in_state An object for in-state resident information
* @property string|null $last_name
* @property string|null $living_status
* @property UserLocker $locker An object for locker information
* @property bool $lost
* @property string|null $maiden_name
* @property UserMailbox $mailbox An object for mailbox information
* @property string|null $middle_name
* @property string|null $nick_name
* @property UserPassport $passport An object for passport information
* @property string|null $primary_language
* @property string|null $preferred_name
* @property string|null $prefix
* @property string|null $pronouns
* @property UserAddRace[]|null $races
* @property string|null $religion
* @property string|null $school_program
* @property string|null $state_id
* @property string|null $student_id
* @property string|null $suffix
* @property UserVisaAdd $visa An object for visa information
* @property string[]|null $fields_to_delete
@api
*/
class UserEdit extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["affiliation","birth_place","boarding_or_day","cc_email","citizenship","custom_field_one","custom_field_two","custom_field_three","custom_field_four","custom_field_five","custom_field_six","custom_field_seven","custom_field_eight","custom_field_nine","custom_field_ten","deceased","deceased_date","dob","email","email_active","ethnicity","first_name","gender","greeting","home_languages","host_id","id","international","is_abroad","is_international","is_latino_hispanic","latino_hispanic","is_responsible_signer","in_state","last_name","living_status","locker","lost","maiden_name","mailbox","middle_name","nick_name","passport","primary_language","preferred_name","prefix","pronouns","races","religion","school_program","state_id","student_id","suffix","visa","fields_to_delete"];
}
