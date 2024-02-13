<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * UserExtended Model
 *
 * @property int $id The ID associated with a user
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\AddressExRead[] | null
 *   $addresses List of the user addresses
 * @property bool $abroad Returns true if the current user is abroad
 * @property string | null $affiliation The affiliation in the user profile
 * @property string | null $audit_date The audit date from a user profile;
 *   Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $birth_date The birth date in the user profile;
 *   Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $birth_place The birth place in the user profile
 * @property string | null $boarding_or_day The 'Boarding Or Day' status of
 *   the user. 'B' for boarding and 'D' for day, or will be a blank string if
 *   not set.
 * @property bool $cc_email_active Returns true if the users carbon copy email
 *   is active
 * @property string | null $chat_service The chat service in the user profile
 * @property string | null $citizenship The citizenship field in the user
 *   profile
 * @property string | null $created_date The created date in the user profile
 * @property string | null $custom_field_eight A custom field on the user
 *   profile (eight of ten)
 * @property string | null $custom_field_five A custom field on the user
 *   profile (five of ten)
 * @property string | null $custom_field_four A custom field on the user
 *   profile (four of ten)
 * @property string | null $custom_field_nine A custom field on the user
 *   profile (nine of ten)
 * @property string | null $custom_field_one A custom feild on the user
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
 * @property string | null $deceased_date The deceased date in the user
 *   profile; Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $depart_date The depart date from a user profile;
 *   Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $display Display name field generated from first
 *   name, last name, preferred name, and grad year (read only)
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\EducationRead[] | null
 *   $education List of the user educational institutions
 * @property string | null $email The email address of a user
 * @property string | null $cc_email The cc email address of a user
 * @property bool $email_active Returns true if the users e-mail is ok to send
 *   to
 * @property string | null $enroll_date The enroll date from a user profile.
 *   Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $ethnicity The ethnicity field from a user profile
 * @property string | null $first_name The first name of a user
 * @property string | null $gender The gender of the user
 * @property string | null $gender_description The gender description of the
 *   user
 * @property int | null $global_id Global id associated with user
 * @property string | null $greeting The greeting in the user profile
 * @property string | null $host_id The hostId in the user profile
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\HomeLanguageRead[] |
 *   null $home_languages List of user home languages
 * @property bool $is_latino_hispanic <b>Deprecated</b>: The islatinohispanic
 *   in the user profile
 * @property bool $is_international The isinternational in the user profile
 *   (will be deprecated 02/15/2024)
 * @property bool $is_responsible_signer The isresponsiblesigner in the user
 *   profile
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserInState $in_state
 *   An object for in-state resident information
 * @property string | null $international The value the user has selected for
 *   Is International. This will return: Yes, No, or No answer.
 * @property string | null $last_modified_date The last modified date in the
 *   user profile
 * @property string | null $last_name The last name of a user
 * @property string | null $last_sync_date The last sync date of a user
 *   profile; Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property string | null $latino_hispanic The value the user has selected
 *   for Is Latino Hispanic. This will return: Yes, No, or No answer.
 * @property string | null $legacy_user_name The last sync date of a user
 *   profile
 * @property string | null $living_arrangement The living arrangement in the
 *   user profile
 * @property bool $lost Returns true if lost is selected under sensitive
 *   information in a personal profile (read only)
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserLocker $locker An
 *   object for locker information
 * @property string | null $maiden_name The maiden name of a user
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserMailbox $mailbox
 *   An object for mailbox information
 * @property string | null $middle_name The middle name of a user
 * @property string | null $misc_bio The misc bio from the user profile
 * @property string | null $nick_name The nickname of a user
 *   <b>This field will be deprecated after 90 days.</b>
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\OccupationRead[] | null
 *   $occupations List of the users occupations
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserPassport $passport
 *   An object for passport information
 * @property string | null $personal_bio The personal bio from the user
 *   profile
 * @property string | null $personal_website The personal website in the user
 *   profile
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\PhoneRead[] | null
 *   $phones List of the user phone numbers
 * @property string | null $prefix The prefix of a user
 * @property string | null $preferred_name The preferred name of the user
 * @property string | null $primary_language The primary language for the user
 *   profile.
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserProfilePhoto
 *   $profile_photo profile photo object
 * @property string | null $profile_url The profile url for a user profile
 * @property string | null $pronouns The pronouns of the user.
 * @property string | null $public_bio The public bio of the user.
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\RaceRead[] | null
 *   $races List of the races object for the user profile.
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\RelationshipRead[] |
 *   null $relationships List of the user relationships
 * @property string | null $religion The religion field from a user profile
 * @property string | null $retire_date The retire date in the user profile;
 *   Uses <a href="https://tools.ietf.org/html/rfc3339"
 *   target="_blank">ISO-8601</a> (24H) format: 2003-04-21T10:29:43
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\Role[] | null $roles
 *   List of the user roles
 * @property string | null $screen_name The screen name in the user profile
 * @property string | null $school_program The school program of the user
 * @property string | null $state_id The state id of the user
 * @property string | null $student_id Student ID
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\StudentInfo
 *   $student_info StudentInfo Model
 * @property string | null $suffix The suffix of a user
 * @property string | null $username The username used to access the system
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\UserVisa $visa An
 *   object for visa information
 *
 * @api
 */
class UserExtended extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","addresses","abroad","affiliation","audit_date","birth_date","birth_place","boarding_or_day","cc_email_active","chat_service","citizenship","created_date","custom_field_eight","custom_field_five","custom_field_four","custom_field_nine","custom_field_one","custom_field_seven","custom_field_six","custom_field_ten","custom_field_three","custom_field_two","deceased","deceased_date","depart_date","display","education","email","cc_email","email_active","enroll_date","ethnicity","first_name","gender","gender_description","global_id","greeting","host_id","home_languages","is_latino_hispanic","is_international","is_responsible_signer","in_state","international","last_modified_date","last_name","last_sync_date","latino_hispanic","legacy_user_name","living_arrangement","lost","locker","maiden_name","mailbox","middle_name","misc_bio","nick_name","occupations","passport","personal_bio","personal_website","phones","prefix","preferred_name","primary_language","profile_photo","profile_url","pronouns","public_bio","races","relationships","religion","retire_date","roles","screen_name","school_program","state_id","student_id","student_info","suffix","username","visa"];
}
