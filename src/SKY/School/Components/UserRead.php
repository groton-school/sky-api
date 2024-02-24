<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * UserRead Model
 *
 * @property int $id The ID associated with a user
 * @property ?string $affiliation The affiliation of a user
 * @property ?string $custom_field_eight A custom field on the user profile
 *   (eight of ten)
 * @property ?string $custom_field_five A custom field on the user profile
 *   (five of ten)
 * @property ?string $custom_field_four A custom field on the user profile
 *   (four of ten)
 * @property ?string $custom_field_nine A custom field on the user profile
 *   (nine of ten)
 * @property ?string $custom_field_one A custom field on the user profile (one
 *   of ten)
 * @property ?string $custom_field_seven A custom field on the user profile
 *   (seven of ten)
 * @property ?string $custom_field_six A custom field on the user profile (six
 *   of ten)
 * @property ?string $custom_field_ten A custom field on the user profile (ten
 *   of ten)
 * @property ?string $custom_field_three A custom field on the user profile
 *   (three of ten)
 * @property ?string $custom_field_two A custom field on the user profile (two
 *   of ten)
 * @property bool $deceased Returns true if deceased is selected under
 *   sensitive information in a personal profile ex: {last\_name} {suffix\*},
 *   {first\_name} {(maidenname\*}) {grad\_year\*} \*If not populated fields
 *   will not appear (read only)
 * @property ?string $display Display name field generated from first name,
 *   last name, nickname, and grad year (read only)
 * @property ?string $email The email address of a user
 * @property bool $email_active Returns true if the users e-mail is ok to send
 *   to
 * @property ?string $first_name The first name of a user
 * @property ?string $gender The gender of a user
 * @property ?string $gender_description The gender of a user
 * @property ?string $greeting The greeting of a user
 * @property ?string $host_id The HostId of a user
 * @property ?string $last_name The last name of a user
 * @property bool $lost Returns true if lost is selected under sensitive
 *   information in a personal profile (read only)
 * @property ?string $maiden_name The maiden name of a user
 * @property ?string $middle_name The middle name of a user
 * @property ?string $nick_name The nickname of a user **This field will be
 *   deprecated after 90 days.**
 * @property ?string $preferred_name The preferred name of the user
 * @property ?string $dob Users date of birth
 * @property ?string $prefix The prefix of a user
 * @property ?string $suffix The suffix of a user
 * @property \Blackbaud\SKY\School\Components\ProfilePictureUrls
 *   $profile_pictures
 * @property ?\Blackbaud\SKY\School\Components\HomeLanguageRead[]
 *   $home_languages List of languages spoken at home by the user
 *
 * @api
 */
class UserRead extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "id" => "int",
        "affiliation" => "string",
        "custom_field_eight" => "string",
        "custom_field_five" => "string",
        "custom_field_four" => "string",
        "custom_field_nine" => "string",
        "custom_field_one" => "string",
        "custom_field_seven" => "string",
        "custom_field_six" => "string",
        "custom_field_ten" => "string",
        "custom_field_three" => "string",
        "custom_field_two" => "string",
        "deceased" => "bool",
        "display" => "string",
        "email" => "string",
        "email_active" => "bool",
        "first_name" => "string",
        "gender" => "string",
        "gender_description" => "string",
        "greeting" => "string",
        "host_id" => "string",
        "last_name" => "string",
        "lost" => "bool",
        "maiden_name" => "string",
        "middle_name" => "string",
        "nick_name" => "string",
        "preferred_name" => "string",
        "dob" => "string",
        "prefix" => "string",
        "suffix" => "string",
        "profile_pictures" => "\Blackbaud\SKY\School\Components\ProfilePictureUrls",
        "home_languages" => "\Blackbaud\SKY\School\Components\HomeLanguageRead[]",
    ];
}
