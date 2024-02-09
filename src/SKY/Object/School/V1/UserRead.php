<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * UserRead Model
 *
 * @property int $id
 * @property string|null $affiliation
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
 * @property string|null $display
 * @property string|null $email
 * @property bool $email_active
 * @property string|null $first_name
 * @property string|null $gender
 * @property string|null $gender_description
 * @property string|null $greeting
 * @property string|null $host_id
 * @property string|null $last_name
 * @property bool $lost
 * @property string|null $maiden_name
 * @property string|null $middle_name
 * @property string|null $nick_name
 * @property string|null $preferred_name
 * @property string|null $dob
 * @property string|null $prefix
 * @property string|null $suffix
 * @property ProfilePictureUrls $profile_pictures
 * @property HomeLanguageRead[]|null $home_languages
 * @api
 */
class UserRead extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["id","affiliation","custom_field_eight","custom_field_five","custom_field_four","custom_field_nine","custom_field_one","custom_field_seven","custom_field_six","custom_field_ten","custom_field_three","custom_field_two","deceased","display","email","email_active","first_name","gender","gender_description","greeting","host_id","last_name","lost","maiden_name","middle_name","nick_name","preferred_name","dob","prefix","suffix","profile_pictures","home_languages"];
}
