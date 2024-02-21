<?php

namespace Blackbaud\SKY\School\Components;

use Battis\OpenAPI\Client\BaseComponent;

/**
 * @property ?int $building_id
 * @property ?string $display_name
 * @property ?bool $is_admin
 * @property ?bool $is_head
 * @property ?int $owner_type
 * @property ?string $resident_from_date
 * @property ?int $room_id
 * @property ?int $section_id
 * @property ?int $user_id
 * @property ?string $first_name
 * @property ?string $last_name
 * @property ?string $maiden_name
 * @property ?string $prefix
 * @property ?string $suffix
 * @property ?string $middle_name
 * @property ?string $display
 * @property ?string $date_of_birth
 *
 * @api
 */
class DormLeader extends BaseComponent
{
    /**
     * @var string[] $fields
     */
    protected static array $fields = [
        "building_id" => "int",
        "display_name" => "string",
        "is_admin" => "bool",
        "is_head" => "bool",
        "owner_type" => "int",
        "resident_from_date" => "string",
        "room_id" => "int",
        "section_id" => "int",
        "user_id" => "int",
        "first_name" => "string",
        "last_name" => "string",
        "maiden_name" => "string",
        "prefix" => "string",
        "suffix" => "string",
        "middle_name" => "string",
        "display" => "string",
        "date_of_birth" => "string",
    ];
}
