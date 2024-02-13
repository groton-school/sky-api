<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * UserAdd Model
 *
 * @property string | null $affiliation The affiliation of a user
 * @property string | null $birth_place The birthplace of the user
 * @property string | null $boarding_or_day The boarding or day status.
 *   Accepted values: boarding, day, "B" and "D"
 * @property string | null $cc_email The cc email address of a user
 * @property string | null $citizenship The descriptor or ID of the
 *   citizenship. Descriptors are not case sensitive, but otherwise must match
 *   the table value exactly. These values are returned by GET Types table
 *   values.
 * @property string | null $custom_field_eight A custom field on the user
 *   profile (eight of ten)
 * @property string | null $custom_field_five A custom field on the user
 *   profile (five of ten)
 * @property string | null $custom_field_four A custom field on the user
 *   profile (four of ten)
 * @property string | null $custom_field_nine A custom field on the user
 *   profile (nine of ten)
 * @property string | null $custom_field_one A custom field on the user
 *   profile (one of ten)
 * @property string | null $custom_field_seven A custom field on the user
 *   profile (seven of ten)
 * @property string | null $custom_field_six A custom field on the user
 *   profile (six of ten)
 * @property string | null $custom_field_ten A custom field on the user
 *   profile (ten of ten)
 * @property string | null $custom_field_three A custom field on the user
 *   profile (three of ten)
 * @property string | null $custom_field_two A custom field on the user
 *   profile (two of ten)
 * @property bool $deceased Set to true if the user is deceased. Allowed
 *   value: true, false. Defaults to false.
 * @property string | null $deceased_date The deceased date of the user. Use
 *   ISO-8601 date format: 2022-04-08.
 * @property string $dob The birthday of a user
 * @property string | null $email The email address of a user
 * @property bool $email_active Set to true if email is usable. Allowed value:
 *   true, false. Defaults to true.
 * @property string | null $ethnicity The descriptor or ID of the ethnicity.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property string | null $first_name The first name of a user
 * @property string | null $gender The gender of a user
 * @property string | null $greeting The greeting of a user
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\HomeLanguageAdd[] |
 *   null $home_languages A list of languages the user speaks at home. Each
 *   entry is the description or ID of the language. Descriptors are not case
 *   sensitive, but otherwise must match the table value exactly. These values
 *   are returned by GET Types table values.
 * @property string | null $host_id The HostId of a user
 * @property string | null $international Whether the user is an international
 *   user. This will return: Yes, No, or No answer.
 * @property bool | null $is_abroad Set to true if user is currently abroad.
 *   Allowed value: true, false. Defaults to false.
 * @property bool | null $is_international Set to true if user is
 *   international (will be deprecated 02/15/2024)
 * @property bool | null $is_latino_hispanic Set to true if  user is latino or
 *   hispanic (will be deprecated 02/15/2024).
 * @property string | null $latino_hispanic Whether the user is
 *   Latino/Hispanic. Allowed values: Yes, No, or No answer.
 * @property bool $is_responsible_signer Set to true if user is a responsible
 *   signer. Allowed value: true, false. Defaults to false.
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserInState $in_state
 *   An object for in-state resident information
 * @property string | null $last_name The last name of a user
 * @property string | null $living_status The living status of a user. Valid
 *   values are Single, Married, Separated, Divorced, Widowed, Partner.
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserLocker $locker An
 *   object for locker information
 * @property bool $lost Set to true if user is set as lost
 * @property string | null $maiden_name The maiden name of a user
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserMailbox $mailbox
 *   An object for mailbox information
 * @property string | null $middle_name The middle name of a user
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserPassport $passport
 *   An object for passport information
 * @property string | null $primary_language The descriptor or ID of the
 *   language. Descriptors are not case sensitive, but otherwise must match
 *   the table value exactly. These values are returned by GET Types table
 *   values.
 * @property string | null $preferred_name The preferred name of the user
 * @property string | null $prefix The prefix of a user
 * @property string | null $pronouns The descriptor or ID of the pronouns.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\UserAddRace[] | null
 *   $races A list of races. Each entry is the description or ID of the race.
 *   Descriptions are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property string | null $religion The descriptor or ID of the religion.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property string | null $school_program The descriptor or ID of the school
 *   program. Descriptors are not case sensitive, but otherwise must match the
 *   table value exactly. These values are returned by GET Types table values.
 * @property string | null $state_id The state assigned ID of the user
 * @property string | null $student_id The school assigned ID of the user
 * @property string | null $suffix The suffix of a user
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserVisaAdd $visa An
 *   object for visa information
 *
 * @api
 */
class UserAdd extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["affiliation","birth_place","boarding_or_day","cc_email","citizenship","custom_field_eight","custom_field_five","custom_field_four","custom_field_nine","custom_field_one","custom_field_seven","custom_field_six","custom_field_ten","custom_field_three","custom_field_two","deceased","deceased_date","dob","email","email_active","ethnicity","first_name","gender","greeting","home_languages","host_id","international","is_abroad","is_international","is_latino_hispanic","latino_hispanic","is_responsible_signer","in_state","last_name","living_status","locker","lost","maiden_name","mailbox","middle_name","passport","primary_language","preferred_name","prefix","pronouns","races","religion","school_program","state_id","student_id","suffix","visa"];
}
