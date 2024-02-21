<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseObject;

/**
 * Directory Result Model
 *
 * @property ?int $user_id The Id of the user
 * @property ?string $first_name The first name of the user
 * @property ?string $last_name The last name of the user
 * @property ?string $email The email address of the user
 * @property ?string $address_line1 The first line of the user address
 * @property ?string $address_line2 The second line of the user address
 * @property ?string $address_line3 The third line of the user address
 * @property ?string $city The city the user lives in
 * @property ?string $state The state the user lives in
 * @property ?string $zip The zip code the user lives in
 * @property ?string $country The country the user lives in
 * @property ?string $home_phone The user's home phone number
 * @property ?string $cell_phone The user's cell phone number
 * @property ?string $office_phone The user's office phone number
 * @property ?string $home_phone2 The user's secondary home phone number
 * @property ?bool $has_relationships Returns true if the user has
 *   relationships
 * @property ?string $prefix The user's prefix
 * @property ?string $preferred_name The user's preferred name
 * @property ?string $profile_photo The user's profile photo
 * @property ?string $middlename The user's middle name
 * @property ?string $maiden_name The user's maiden name
 * @property ?string $suffix The user's suffix
 * @property ?string $grad_year The user's graduation year
 * @property ?string $grade The user's grade
 * @property ?string $grade_display Grade display
 * @property ?string $department The department the user belongs to
 * @property ?string $department_display How the user's department should be
 *   displayed
 * @property ?int $spouse_id The Id of the user's spouse
 * @property ?string $child_names The user's children
 * @property ?int $grade_numeric The numeric grade of the user
 * @property ?string $grade_numeric_display The way the numeric grade should
 *   be displayed
 * @property ?int $total_count The total count of records
 * @property ?bool $deceased Returns true if the user is deceased
 * @property ?bool $student Returns true if the user is a student
 * @property ?int $preferred_address_id The Id of the preferred address for
 *   the user
 * @property ?\double $preferred_address_lat Preferred address latitude
 * @property ?\double $preferred_address_lng Preferred address longitude
 * @property ?string $job_title The user's job title
 *
 * @api
 */
class DirectoryResult extends BaseObject
{
    /**
     * @var \string[] $fields
     */
    protected static array $fields = [
        "user_id",
        "first_name",
        "last_name",
        "email",
        "address_line1",
        "address_line2",
        "address_line3",
        "city",
        "state",
        "zip",
        "country",
        "home_phone",
        "cell_phone",
        "office_phone",
        "home_phone2",
        "has_relationships",
        "prefix",
        "preferred_name",
        "profile_photo",
        "middlename",
        "maiden_name",
        "suffix",
        "grad_year",
        "grade",
        "grade_display",
        "department",
        "department_display",
        "spouse_id",
        "child_names",
        "grade_numeric",
        "grade_numeric_display",
        "total_count",
        "deceased",
        "student",
        "preferred_address_id",
        "preferred_address_lat",
        "preferred_address_lng",
        "job_title",
    ];
}
