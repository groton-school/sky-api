<?php

namespace GrotonSchool\Blackbaud\SKY\ObjectModel\School\V1;

use GrotonSchool\Blackbaud\SKY\ObjectModel\Base;

/**
* UserExtended Model
*
* @property int $id
* @property AddressExRead[]|null $addresses
* @property bool $abroad
* @property string|null $affiliation
* @property string|null $audit_date
* @property string|null $birth_date
* @property string|null $birth_place
* @property string|null $boarding_or_day
* @property bool $cc_email_active
* @property string|null $chat_service
* @property string|null $citizenship
* @property string|null $created_date
* @property string|null $custom_field_eight
* @property string|null $custom_field_five
* @property string|null $custom_field_four
* @property string|null $custom_field_nine
* @property string|null $custom_field_one
* @property string|null $custom_field_seven
* @property string|null $custom_field_six
* @property string|null $custom_field_ten
* @property string|null $custom_field_three
* @property string|null $custom_field_two
* @property bool $deceased
* @property string|null $deceased_date
* @property string|null $depart_date
* @property string|null $display
* @property EducationRead[]|null $education
* @property string|null $email
* @property string|null $cc_email
* @property bool $email_active
* @property string|null $enroll_date
* @property string|null $ethnicity
* @property string|null $first_name
* @property string|null $gender
* @property string|null $gender_description
* @property int|null $global_id
* @property string|null $greeting
* @property string|null $host_id
* @property HomeLanguageRead[]|null $home_languages
* @property bool $is_latino_hispanic
* @property bool $is_international
* @property bool $is_responsible_signer
* @property UserInState $in_state An object for in-state resident information
* @property string|null $international
* @property string|null $last_modified_date
* @property string|null $last_name
* @property string|null $last_sync_date
* @property string|null $latino_hispanic
* @property string|null $legacy_user_name
* @property string|null $living_arrangement
* @property bool $lost
* @property UserLocker $locker An object for locker information
* @property string|null $maiden_name
* @property UserMailbox $mailbox An object for mailbox information
* @property string|null $middle_name
* @property string|null $misc_bio
* @property string|null $nick_name
* @property OccupationRead[]|null $occupations
* @property UserPassport $passport An object for passport information
* @property string|null $personal_bio
* @property string|null $personal_website
* @property PhoneRead[]|null $phones
* @property string|null $prefix
* @property string|null $preferred_name
* @property string|null $primary_language
* @property UserProfilePhoto $profile_photo profile photo object
* @property string|null $profile_url
* @property string|null $pronouns
* @property string|null $public_bio
* @property RaceRead[]|null $races
* @property RelationshipRead[]|null $relationships
* @property string|null $religion
* @property string|null $retire_date
* @property Role[]|null $roles
* @property string|null $screen_name
* @property string|null $school_program
* @property string|null $state_id
* @property string|null $student_id
* @property StudentInfo $student_info StudentInfo Model
* @property string|null $suffix
* @property string|null $username
* @property UserVisa $visa An object for visa information
@api
*/
class UserExtended extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","addresses","abroad","affiliation","audit_date","birth_date","birth_place","boarding_or_day","cc_email_active","chat_service","citizenship","created_date","custom_field_eight","custom_field_five","custom_field_four","custom_field_nine","custom_field_one","custom_field_seven","custom_field_six","custom_field_ten","custom_field_three","custom_field_two","deceased","deceased_date","depart_date","display","education","email","cc_email","email_active","enroll_date","ethnicity","first_name","gender","gender_description","global_id","greeting","host_id","home_languages","is_latino_hispanic","is_international","is_responsible_signer","in_state","international","last_modified_date","last_name","last_sync_date","latino_hispanic","legacy_user_name","living_arrangement","lost","locker","maiden_name","mailbox","middle_name","misc_bio","nick_name","occupations","passport","personal_bio","personal_website","phones","prefix","preferred_name","primary_language","profile_photo","profile_url","pronouns","public_bio","races","relationships","religion","retire_date","roles","screen_name","school_program","state_id","student_id","student_info","suffix","username","visa"];
}
