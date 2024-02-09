<?php

namespace GrotonSchool\Blackbaud\SKY\Object\School\V1;

use GrotonSchool\Blackbaud\SKY\Object\Base;

/**
 * Directory Result Model
 *
 * @property int|null $user_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $address_line1
 * @property string|null $address_line2
 * @property string|null $address_line3
 * @property string|null $city
 * @property string|null $state
 * @property string|null $zip
 * @property string|null $country
 * @property string|null $home_phone
 * @property string|null $cell_phone
 * @property string|null $office_phone
 * @property string|null $home_phone2
 * @property bool|null $has_relationships
 * @property string|null $prefix
 * @property string|null $preferred_name
 * @property string|null $profile_photo
 * @property string|null $middlename
 * @property string|null $maiden_name
 * @property string|null $suffix
 * @property string|null $grad_year
 * @property string|null $grade
 * @property string|null $grade_display
 * @property string|null $department
 * @property string|null $department_display
 * @property int|null $spouse_id
 * @property string|null $child_names
 * @property int|null $grade_numeric
 * @property string|null $grade_numeric_display
 * @property int|null $total_count
 * @property bool|null $deceased
 * @property bool|null $student
 * @property int|null $preferred_address_id
 * @property double|null $preferred_address_lat
 * @property double|null $preferred_address_lng
 * @property string|null $job_title
 * @api
 */
class DirectoryResult extends Base
{
    /** @var string[] $fields */
    protected static array $fields = ["user_id","first_name","last_name","email","address_line1","address_line2","address_line3","city","state","zip","country","home_phone","cell_phone","office_phone","home_phone2","has_relationships","prefix","preferred_name","profile_photo","middlename","maiden_name","suffix","grad_year","grade","grade_display","department","department_display","spouse_id","child_names","grade_numeric","grade_numeric_display","total_count","deceased","student","preferred_address_id","preferred_address_lat","preferred_address_lng","job_title"];
}
