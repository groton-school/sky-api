<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

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
 * @property ?float $preferred_address_lat Preferred address latitude
 * @property ?float $preferred_address_lng Preferred address longitude
 * @property ?string $job_title The user's job title
 *
 * @api
 */
class DirectoryResult extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "user_id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "email" => "string",
        "address_line1" => "string",
        "address_line2" => "string",
        "address_line3" => "string",
        "city" => "string",
        "state" => "string",
        "zip" => "string",
        "country" => "string",
        "home_phone" => "string",
        "cell_phone" => "string",
        "office_phone" => "string",
        "home_phone2" => "string",
        "has_relationships" => "bool",
        "prefix" => "string",
        "preferred_name" => "string",
        "profile_photo" => "string",
        "middlename" => "string",
        "maiden_name" => "string",
        "suffix" => "string",
        "grad_year" => "string",
        "grade" => "string",
        "grade_display" => "string",
        "department" => "string",
        "department_display" => "string",
        "spouse_id" => "int",
        "child_names" => "string",
        "grade_numeric" => "int",
        "grade_numeric_display" => "string",
        "total_count" => "int",
        "deceased" => "bool",
        "student" => "bool",
        "preferred_address_id" => "int",
        "preferred_address_lat" => "float",
        "preferred_address_lng" => "float",
        "job_title" => "string",
    ];
}
