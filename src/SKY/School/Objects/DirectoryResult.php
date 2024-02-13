<?php

namespace GrotonSchool\Blackbaud\SKY\School\Objects;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Directory Result Model
 *
 * @property int | null $user_id The Id of the user
 * @property string | null $first_name The first name of the user
 * @property string | null $last_name The last name of the user
 * @property string | null $email The email address of the user
 * @property string | null $address_line1 The first line of the user address
 * @property string | null $address_line2 The second line of the user address
 * @property string | null $address_line3 The third line of the user address
 * @property string | null $city The city the user lives in
 * @property string | null $state The state the user lives in
 * @property string | null $zip The zip code the user lives in
 * @property string | null $country The country the user lives in
 * @property string | null $home_phone The user's home phone number
 * @property string | null $cell_phone The user's cell phone number
 * @property string | null $office_phone The user's office phone number
 * @property string | null $home_phone2 The user's secondary home phone number
 * @property bool | null $has_relationships Returns true if the user has
 *   relationships
 * @property string | null $prefix The user's prefix
 * @property string | null $preferred_name The user's preferred name
 * @property string | null $profile_photo The user's profile photo
 * @property string | null $middlename The user's middle name
 * @property string | null $maiden_name The user's maiden name
 * @property string | null $suffix The user's suffix
 * @property string | null $grad_year The user's graduation year
 * @property string | null $grade The user's grade
 * @property string | null $grade_display Grade display
 * @property string | null $department The department the user belongs to
 * @property string | null $department_display How the user's department
 *   should be displayed
 * @property int | null $spouse_id The Id of the user's spouse
 * @property string | null $child_names The user's children
 * @property int | null $grade_numeric The numeric grade of the user
 * @property string | null $grade_numeric_display The way the numeric grade
 *   should be displayed
 * @property int | null $total_count The total count of records
 * @property bool | null $deceased Returns true if the user is deceased
 * @property bool | null $student Returns true if the user is a student
 * @property int | null $preferred_address_id The Id of the preferred address
 *   for the user
 * @property double | null $preferred_address_lat Preferred address latitude
 * @property double | null $preferred_address_lng Preferred address longitude
 * @property string | null $job_title The user's job title
 *
 * @api
 */
class DirectoryResult extends BaseObject
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","first_name","last_name","email","address_line1","address_line2","address_line3","city","state","zip","country","home_phone","cell_phone","office_phone","home_phone2","has_relationships","prefix","preferred_name","profile_photo","middlename","maiden_name","suffix","grad_year","grade","grade_display","department","department_display","spouse_id","child_names","grade_numeric","grade_numeric_display","total_count","deceased","student","preferred_address_id","preferred_address_lat","preferred_address_lng","job_title"];
}
