<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * UserRead Model
 *
 * @property int $id The ID associated with a user
 * @property string | null $affiliation The affiliation of a user
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
 * @property bool $deceased Returns true if deceased is selected under
 *   sensitive information in a personal profile ex: {last_name} {suffix*},
 *   {first_name} {(maidenname*}) {grad_year*} *If not populated fields will
 *   not appear (read only)
 * @property string | null $display Display name field generated from first
 *   name, last name, nickname, and grad year (read only)
 * @property string | null $email The email address of a user
 * @property bool $email_active Returns true if the users e-mail is ok to send
 *   to
 * @property string | null $first_name The first name of a user
 * @property string | null $gender The gender of a user
 * @property string | null $gender_description The gender of a user
 * @property string | null $greeting The greeting of a user
 * @property string | null $host_id The HostId of a user
 * @property string | null $last_name The last name of a user
 * @property bool $lost Returns true if lost is selected under sensitive
 *   information in a personal profile (read only)
 * @property string | null $maiden_name The maiden name of a user
 * @property string | null $middle_name The middle name of a user
 * @property string | null $nick_name The nickname of a user
 *   <b>This field will be deprecated after 90 days.</b>
 * @property string | null $preferred_name The preferred name of the user
 * @property string | null $dob Users date of birth
 * @property string | null $prefix The prefix of a user
 * @property string | null $suffix The suffix of a user
 * @property \GrotonSchool\Blackbaud\SKY\School\Objects\ProfilePictureUrls
 *   $profile_pictures 
 * @property GrotonSchool\Blackbaud\SKY\School\Objects\HomeLanguageRead[] |
 *   null $home_languages List of languages spoken at home by the user
 *
 * @api
 */
class UserRead extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["id","affiliation","custom_field_eight","custom_field_five","custom_field_four","custom_field_nine","custom_field_one","custom_field_seven","custom_field_six","custom_field_ten","custom_field_three","custom_field_two","deceased","display","email","email_active","first_name","gender","gender_description","greeting","host_id","last_name","lost","maiden_name","middle_name","nick_name","preferred_name","dob","prefix","suffix","profile_pictures","home_languages"];
}
