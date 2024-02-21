<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * UserEdit Model
 *
 * @property ?string $affiliation The affiliation of a user
 * @property ?string $birth_place The birthplace of the user
 * @property ?string $boarding_or_day The boarding or day status. Accepted
 *   values: boarding, day, "B" and "D"
 * @property ?string $cc_email The cc email address of a user
 * @property ?string $citizenship The descriptor or ID of the citizenship.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property ?string $custom_field_one A custom field on the user profile (one
 *   of ten)
 * @property ?string $custom_field_two A custom field on the user profile (two
 *   of ten)
 * @property ?string $custom_field_three A custom field on the user profile
 *   (three of ten)
 * @property ?string $custom_field_four A custom field on the user profile
 *   (four of ten)
 * @property ?string $custom_field_five A custom field on the user profile
 *   (five of ten)
 * @property ?string $custom_field_six A custom field on the user profile (six
 *   of ten)
 * @property ?string $custom_field_seven A custom field on the user profile
 *   (seven of ten)
 * @property ?string $custom_field_eight A custom field on the user profile
 *   (eight of ten)
 * @property ?string $custom_field_nine A custom field on the user profile
 *   (nine of ten)
 * @property ?string $custom_field_ten A custom field on the user profile (ten
 *   of ten)
 * @property bool $deceased Set to true if the user is deceased. Allowed
 *   value: true, false. Defaults to false.
 * @property ?string $deceased_date The deceased date of the user. Use
 *   ISO-8601 date format: 2022-04-08.
 * @property string $dob The birthday of a user
 * @property ?string $email The email address of a user
 * @property bool $email_active Set to true if email is usable. Allowed value:
 *   true, false. Defaults to true.
 * @property ?string $ethnicity The descriptor or ID of the ethnicity.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property ?string $first_name The first name of a user
 * @property ?string $gender The gender of a user
 * @property ?string $greeting The greeting of a user
 * @property ?\Blackbaud\SKY\School\Components\HomeLanguageAdd[]
 *   $home_languages A list of languages. Each entry is the descriptor or ID of
 *   the language. Descriptors are not case sensitive, but otherwise must match
 *   the table value exactly. These values are returned by GET Types table
 *   values.
 * @property ?string $host_id The HostId of a user
 * @property int $id The ID associated with a user
 * @property ?string $international Whether the user is an international user.
 *   This will return: Yes, No, or No answer.
 * @property ?bool $is_abroad Set to true if user is currently abroad. Allowed
 *   value: true, false. Defaults to false.
 * @property bool $is_international Set to true if user is international (will
 *   be deprecated 02/15/2024)
 * @property ?bool $is_latino_hispanic Set to true if  user is latino or
 *   hispanic (will be deprecated 02/15/2024).
 * @property ?string $latino_hispanic Whether the user is Latino/Hispanic.
 *   Allowed values: Yes, No, or No answer.
 * @property bool $is_responsible_signer Set to true if user is a responsible
 *   signer. Allowed value: true, false. Defaults to false.
 * @property \Blackbaud\SKY\School\Components\UserInState $in_state An object
 *   for in-state resident information
 * @property ?string $last_name The last name of a user
 * @property ?string $living_status The living status of a user. Valid values
 *   are Single, Married, Separated, Divorced, Widowed, Partner.
 * @property \Blackbaud\SKY\School\Components\UserLocker $locker An object for
 *   locker information
 * @property bool $lost Set to true to mark user as being lost
 * @property ?string $maiden_name The maiden name of a user
 * @property \Blackbaud\SKY\School\Components\UserMailbox $mailbox An object
 *   for mailbox information
 * @property ?string $middle_name The middle name of a user
 * @property ?string $nick_name The nickname of a user **This field will be
 *   deprecated after 90 days.**
 * @property \Blackbaud\SKY\School\Components\UserPassport $passport An object
 *   for passport information
 * @property ?string $primary_language The descriptor or ID of the language.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property ?string $preferred_name The preferred name of the user
 * @property ?string $prefix The prefix of a user
 * @property ?string $pronouns The descriptor or ID of the pronouns.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property ?\Blackbaud\SKY\School\Components\UserAddRace[] $races A list of
 *   races. Each entry is the descriptor or ID of the race. Descriptors are not
 *   case sensitive, but otherwise must match the table value exactly. These
 *   values are returned by GET Types table values.
 * @property ?string $religion The descriptor or ID of the religion.
 *   Descriptors are not case sensitive, but otherwise must match the table
 *   value exactly. These values are returned by GET Types table values.
 * @property ?string $school_program The descriptor or ID of the school
 *   program. Descriptors are not case sensitive, but otherwise must match the
 *   table value exactly. These values are returned by GET Types table values.
 * @property ?string $state_id The state assigned ID of the user
 * @property ?string $student_id The school assigned ID of the user
 * @property ?string $suffix The suffix of a user
 * @property \Blackbaud\SKY\School\Components\UserVisaAdd $visa An object for
 *   visa information
 * @property ?string[] $fields_to_delete An array of strings representing
 *   field names.
 * Due to an inherent check against deleting data only accessible through the
 *   UI, this unusual step is necessary. To delete or clear data from a user
 *   field (such as middle_name or living_status), you must include the field in
 *   this array. If a field is included in this array, the data for that field
 *   will be deleted and this will override any other value set for the field in
 *   the request body. Only fields that can be cleared will be processed. Any
 *   required fields, Booleans or fields with no blank option will be ignored.
 * Allowed values: The field name as listed for the request body (e.g.
 *   "middle_name" or "living_status"). Fields within an object will include the
 *   object name and the field name separated by a period (e.g.
 *   "passport.number" or "locker.number").
 *
 * @api
 */
class UserEdit extends BaseObject
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "affiliation",
        "birth_place",
        "boarding_or_day",
        "cc_email",
        "citizenship",
        "custom_field_one",
        "custom_field_two",
        "custom_field_three",
        "custom_field_four",
        "custom_field_five",
        "custom_field_six",
        "custom_field_seven",
        "custom_field_eight",
        "custom_field_nine",
        "custom_field_ten",
        "deceased",
        "deceased_date",
        "dob",
        "email",
        "email_active",
        "ethnicity",
        "first_name",
        "gender",
        "greeting",
        "home_languages",
        "host_id",
        "id",
        "international",
        "is_abroad",
        "is_international",
        "is_latino_hispanic",
        "latino_hispanic",
        "is_responsible_signer",
        "in_state",
        "last_name",
        "living_status",
        "locker",
        "lost",
        "maiden_name",
        "mailbox",
        "middle_name",
        "nick_name",
        "passport",
        "primary_language",
        "preferred_name",
        "prefix",
        "pronouns",
        "races",
        "religion",
        "school_program",
        "state_id",
        "student_id",
        "suffix",
        "visa",
        "fields_to_delete",
    ];
}
